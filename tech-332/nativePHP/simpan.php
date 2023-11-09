<?php

require('config.php');

echo("<pre>");
print_r($_POST);
echo("</pre>");

try{
$query = "insert into profil (name, city, email) values
(
    '". $_POST['name'] . "',
    '". $_POST['city'] . "',
    '". $_POST['email'] . "'
)";
echo $query;
$result = $connection->query($query);

header('location:index.php');

} catch(PDOException $e){
    echo("Simpan data gagal: " . $e);
}

?>