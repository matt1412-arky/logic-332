<?php

require('config.php');
echo "<pre>";
print_r($_POST);

try {
    $query = "UPDATE profil SET 
    name = '" . $_POST['name'] . "',
    city = '" . $_POST['city'] . "',
    email = '" . $_POST['email'] . "'
    WHERE id = " . $_GET['id'];
    // echo $query;
    $result = $conn->query($query);
    echo "Data berhasil disimpan!";

    header('location:index.php');
} catch (PDOException $e) {
    echo "Data gagal diupdate!" . $e->getMessage();
}
