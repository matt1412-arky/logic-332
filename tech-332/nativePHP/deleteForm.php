<?php

require('config.php');

try{
    $query = "select * from profil where id=".$_GET['id'];
    echo($query);
    $result = $connection->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
} catch(PDOException $e){
    echo("Ambil data gagal: " . $e->getMessage());
}
?>

<form action="delete.php?id=<?=$_GET['id']?>" method="post">
Nama:<br>
<span><?=$row['name']?></span><br>
City:<br>
<span><?=$row['city']?></span><br>
Email:<br>
<span><?=$row['email']?></span><br><br>

<button type="submit" class="btn btn-danger">HAPUS</button>
<button class="btn btn-warning" onclick="window.location='/index.php';return false">CANCEL</button>
</form>