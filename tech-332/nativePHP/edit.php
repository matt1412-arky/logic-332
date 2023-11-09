<?php

require('config.php');

echo("<pre>");
print_r($_POST);
echo("</pre>");

try{
$query = "update profil set
    name='". $_POST['name'] ."',
    city='". $_POST['city'] ."',
    email='". $_POST['email'] ."'
    where id=".$_GET['id'];
echo $query;
$result = $connection->query($query);

header('location:index.php');

} catch(PDOException $e){
    echo("Simpan data gagal: " . $e);
}

?>