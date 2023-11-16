<?php
require("config.php");
try {
    $query = "update profil set name='" . $_POST['name'] . "',
    city='" . $_POST['city'] . "',
    email='" . $_POST['email'] . "'
    where id =" . $_GET['id'];
    echo ($query);
    $result = $connection->query($query);
    header('location:index.php');
} catch (PDOException $e) {
    echo ("Simpan data gagal :" . $e->getMessage());
}
