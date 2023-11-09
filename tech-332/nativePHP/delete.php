<?php

require('config.php');

echo("<pre>");
print_r($_POST);
echo("</pre>");

try{
$query = "delete from profil where id=".$_GET['id'];
echo $query;
$result = $connection->query($query);

header('location:index.php');

} catch(PDOException $e){
    echo("Simpan data gagal: " . $e);
}

?>