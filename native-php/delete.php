<?php
require("config.php");
try {
    $query = "delete from profil where id =" . $_GET['id'];
    $result = $connection->query($query);
    header('location:index.php');
} catch (PDOException $e) {
    echo ("Simpan data gagal :" . $e->getMessage());
}
