<?php
session_start();
require_once dirname(__DIR__) . '/includes/db.php';

function admin_logged_in(): bool
{
    return !empty($_SESSION['ker_admin_id']);
}

function require_admin(): void
{
    if (!admin_logged_in()) {
        header('Location: login.php');
        exit;
    }
}

function attempt_login(string $username, string $password): bool
{
    $stmt = db()->prepare('SELECT id, password_hash FROM admins WHERE username = ? LIMIT 1');
    $stmt->execute([$username]);
    $row = $stmt->fetch();
    if (!$row || !password_verify($password, $row['password_hash'])) {
        return false;
    }
    $_SESSION['ker_admin_id'] = (int) $row['id'];
    $_SESSION['ker_admin_user'] = $username;
    return true;
}
