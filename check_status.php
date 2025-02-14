<?php
// Cek status server dengan mencoba menghubungi server atau port tertentu
$server_ip = '195.88.211.130'; // Ganti dengan IP atau domain server
$port = 80; // Ganti dengan port yang digunakan (80 untuk HTTP)

$connection = @fsockopen($server_ip, $port, $errno, $errstr, 2); // Timeout 2 detik
if (is_resource($connection)) {
    fclose($connection);
    echo "up"; // Server is UP
} else {
    echo "down"; // Server is DOWN
}
?>
