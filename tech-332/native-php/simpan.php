<?php

require('config.php');
echo "<pre>";
print_r($_POST);

try {
    $query = "INSERT INTO profil (name, city, email) values (
    '" . $_POST['name'] . "',
    '" . $_POST['city'] . "',
    '" . $_POST['email'] . "'
    )";
    // echo $query;
    $result = $conn->query($query);
    echo "Data berhasil disimpan!";

    header('location:index.php');
} catch (PDOException $e) {
    echo "Data gagal disimpan!" . $e->getMessage();
}
