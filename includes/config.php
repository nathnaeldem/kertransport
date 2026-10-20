<?php
require_once __DIR__ . '/content.php';

$site_name    = 'Ker Transport';
$site_tagline = c('site_tagline', 'Tradeshow Specialist');
$site_phone   = c('site_phone', '725-377-4143');
$site_phone_href = preg_replace('/\D+/', '', $site_phone);
$site_email   = c('site_email', 'ops@kertransport.com');
$site_city    = c('site_city', 'Las Vegas, NV');
$site_desc    = 'Ker Transport — specialty freight & tradeshow logistics. Over-the-road freight with one team that owns it from quote to delivery.';

$current_page = basename($_SERVER['PHP_SELF'], '.php');
