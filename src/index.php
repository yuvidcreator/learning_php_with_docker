<?php
// phpinfo();

$env = parse_ini_file(__DIR__ . '/.env');
echo $env['APP_NAME'] ?? 'Default App';

echo "Hello, PHP is working!\n";
file_put_contents('/var/www/logs/php_errors.log', "[".date("Y-m-d H:i:s")."] Hello from PHP\n", FILE_APPEND);

?>