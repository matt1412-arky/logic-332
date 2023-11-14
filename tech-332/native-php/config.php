<?php
try {
    $conn = new PDO("pgsql:host = localhost; dbname = pos332; user = postgres; password = 123");
} catch (PDOException $e) {
    echo "Koneksi ke database gagal" . $e->getMessage();
}
