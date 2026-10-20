<?php
require_once __DIR__ . '/db.php';

function content_all(): array
{
    static $cache = null;
    if ($cache !== null) {
        return $cache;
    }

    try {
        $rows = db()->query('SELECT block_key, value FROM content_blocks')->fetchAll();
        $cache = [];
        foreach ($rows as $row) {
            $cache[$row['block_key']] = $row['value'];
        }
        return $cache;
    } catch (Throwable $e) {
        return [];
    }
}

function c(string $key, string $default = ''): string
{
    $all = content_all();
    return array_key_exists($key, $all) && $all[$key] !== '' ? (string) $all[$key] : $default;
}

function c_e(string $key, string $default = ''): string
{
    return htmlspecialchars(c($key, $default), ENT_QUOTES, 'UTF-8');
}

function img_url(string $key, string $default = ''): string
{
    $val = c($key, $default);
    if ($val === '') {
        return $default;
    }
    if (preg_match('#^https?://#i', $val) || str_starts_with($val, 'assets/') || str_starts_with($val, '/')) {
        return $val;
    }
    return 'assets/uploads/' . ltrim($val, '/');
}

function img_e(string $key, string $default = ''): string
{
    return htmlspecialchars(img_url($key, $default), ENT_QUOTES, 'UTF-8');
}
