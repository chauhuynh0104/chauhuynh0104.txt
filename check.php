<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain");

// Ví dụ đơn giản: bật/tắt hệ thống
$allowed = true; // Đổi thành false nếu muốn chặn người dùng

if ($allowed) {
    echo "OK";
    exit;
} else {
    echo "BLOCKED";

}
?>
