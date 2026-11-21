<?php
declare(strict_types=1);
session_start();
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'watcheserror');
define('DB_USER', 'root');
define('DB_PASS', '');
define('BASE_URL', '/WatchesError');
$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4', DB_USER, DB_PASS, [
 PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
 PDO::ATTR_EMULATE_PREPARES=>false
]);
if (empty($_SESSION['csrf'])) $_SESSION['csrf']=bin2hex(random_bytes(32));
function e($v): string { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function csrf_field(): string { return '<input type="hidden" name="csrf" value="'.e($_SESSION['csrf']).'">'; }
function verify_csrf(): void { if (!hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf'] ?? '')) { http_response_code(419); exit('Invalid request token. Refresh and try again.'); } }
function money($n): string { return 'Rs. '.number_format((float)$n,0); }
function go(string $path): never { header('Location: '.BASE_URL.'/'.$path); exit; }
function admin_required(): void { if (empty($_SESSION['admin_id'])) go('admin/login.php'); }
