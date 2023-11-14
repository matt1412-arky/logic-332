<?php

require('config.php');

try {
    $query = "DELETE FROM profil WHERE id = " . $_GET['id'];
    // echo $query;
    $result = $conn->query($query);
    echo "Data berhasil dihapus!";

    header('location:index.php');
} catch (PDOException $e) {
    echo "Data gagal dihapus!" . $e->getMessage();
}
