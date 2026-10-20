<?php
require_once __DIR__ . '/auth.php';
require_admin();
require_once dirname(__DIR__) . '/includes/content.php';

$pages = [
    'home' => 'Home',
    'services' => 'Services',
    'trade-shows' => 'Trade Shows',
    'about' => 'About',
    'contact' => 'Contact',
    'settings' => 'Site settings',
];

$page = $_GET['page'] ?? 'home';
if (!isset($pages[$page])) {
    $page = 'home';
}

$flash = '';
$flashType = 'ok';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? 'save';
    if ($action === 'save') {
        $keys = $_POST['block'] ?? [];
        $upd = db()->prepare('UPDATE content_blocks SET value = ? WHERE block_key = ? AND page_key = ?');
        foreach ($keys as $key => $value) {
            $upd->execute([trim((string) $value), $key, $page]);
        }

        if (!empty($_FILES['image'])) {
            $uploadDir = dirname(__DIR__) . '/assets/uploads';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            foreach ($_FILES['image']['name'] as $key => $name) {
                if (!is_string($name) || $name === '' || ($_FILES['image']['error'][$key] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) {
                    continue;
                }
                $tmp = $_FILES['image']['tmp_name'][$key];
                $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
                if (!in_array($ext, $allowed, true)) {
                    continue;
                }
                $safe = preg_replace('/[^a-z0-9_\-]/i', '-', $key) . '-' . time() . '.' . $ext;
                $dest = $uploadDir . '/' . $safe;
                if (move_uploaded_file($tmp, $dest)) {
                    $upd->execute(['assets/uploads/' . $safe, $key, $page]);
                }
            }
        }

        $flash = 'Content saved.';
    }
}

$stmt = db()->prepare('SELECT * FROM content_blocks WHERE page_key = ? ORDER BY sort_order ASC, id ASC');
$stmt->execute([$page]);
$blocks = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit <?php echo htmlspecialchars($pages[$page]); ?> | Ker Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600;700&family=Outfit:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="admin.css" rel="stylesheet">
</head>
<body>
  <div class="admin-shell">
    <aside class="admin-side">
      <div class="brand">
        <img src="../assets/img/logo.png" alt="">
        <div>
          <strong>KER</strong>
          <span>ADMIN</span>
        </div>
      </div>
      <nav class="admin-nav">
        <?php foreach ($pages as $key => $label): ?>
          <a href="?page=<?php echo urlencode($key); ?>" class="<?php echo $page === $key ? 'active' : ''; ?>"><?php echo htmlspecialchars($label); ?></a>
        <?php endforeach; ?>
        <a href="../index.php" target="_blank" rel="noopener">View website</a>
        <a href="logout.php">Log out</a>
      </nav>
    </aside>
    <main class="admin-main">
      <div class="admin-top">
        <h1>Edit: <?php echo htmlspecialchars($pages[$page]); ?></h1>
        <a class="btn-ghost" href="../<?php echo $page === 'home' ? 'index' : ($page === 'settings' ? 'index' : $page); ?>.php" target="_blank">Preview</a>
      </div>

      <div class="page-tabs">
        <?php foreach ($pages as $key => $label): ?>
          <a href="?page=<?php echo urlencode($key); ?>" class="<?php echo $page === $key ? 'active' : ''; ?>"><?php echo htmlspecialchars($label); ?></a>
        <?php endforeach; ?>
      </div>

      <?php if ($flash): ?><div class="flash <?php echo $flashType; ?>"><?php echo htmlspecialchars($flash); ?></div><?php endif; ?>

      <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="save">
        <?php foreach ($blocks as $block): ?>
          <div class="block-card">
            <h3><?php echo htmlspecialchars($block['label']); ?></h3>
            <?php if ($block['content_type'] === 'textarea'): ?>
              <textarea name="block[<?php echo htmlspecialchars($block['block_key']); ?>]"><?php echo htmlspecialchars((string) $block['value']); ?></textarea>
            <?php elseif ($block['content_type'] === 'image'): ?>
              <?php
                $src = (string) $block['value'];
                if ($src !== '' && !preg_match('#^https?://#i', $src) && !str_starts_with($src, 'assets/') && !str_starts_with($src, '/')) {
                    $src = '../assets/uploads/' . ltrim($src, '/');
                } elseif (str_starts_with($src, 'assets/')) {
                    $src = '../' . $src;
                }
              ?>
              <?php if ($src !== ''): ?>
                <img class="img-preview" src="<?php echo htmlspecialchars($src); ?>" alt="">
              <?php endif; ?>
              <label>Image URL or path
                <input type="text" name="block[<?php echo htmlspecialchars($block['block_key']); ?>]" value="<?php echo htmlspecialchars((string) $block['value']); ?>">
              </label>
              <label style="margin-top:.75rem">Or upload a new image
                <input type="file" name="image[<?php echo htmlspecialchars($block['block_key']); ?>]" accept="image/*">
              </label>
            <?php else: ?>
              <input type="text" name="block[<?php echo htmlspecialchars($block['block_key']); ?>]" value="<?php echo htmlspecialchars((string) $block['value']); ?>">
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
        <button type="submit" class="btn-admin">Save changes</button>
      </form>
    </main>
  </div>
</body>
</html>
