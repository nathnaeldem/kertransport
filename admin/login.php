<?php
require_once __DIR__ . '/auth.php';

if (admin_logged_in()) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['username'] ?? '');
    $pass = $_POST['password'] ?? '';
    if ($user !== '' && $pass !== '' && attempt_login($user, $pass)) {
        header('Location: index.php');
        exit;
    }
    $error = 'Invalid username or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | Ker Transport</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600;700&family=Outfit:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="admin.css" rel="stylesheet">
</head>
<body class="login-body">
  <form class="login-card" method="post" autocomplete="username">
    <img src="../assets/img/logo.png" alt="Ker Transport" class="login-logo">
    <h1>Content Admin</h1>
    <p class="login-sub">Edit texts &amp; images for Ker Transport</p>
    <?php if ($error): ?><div class="flash error"><?php echo htmlspecialchars($error); ?></div><?php endif; ?>
    <label>Username
      <input type="text" name="username" required autofocus>
    </label>
    <label>Password
      <input type="password" name="password" required>
    </label>
    <button type="submit" class="btn-admin">Sign in</button>
  </form>
</body>
</html>
