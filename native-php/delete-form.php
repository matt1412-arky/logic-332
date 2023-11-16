<?php
require('config.php');
try {
    $query = "select * from profil where id=" . $_GET['id'];
    $result = $connection->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo ("edit data gagal :" . $e->getMessage());
}

?>
<form action="delete.php?id=<?= $_GET['id'] ?>" method="POST">
    name:
    <span><?= $row['name'] ?></span><br>
    kota:
    <span><?= $row['city'] ?></span><br>
    email:
    <span><?= $row['email'] ?></span><br>
    <button type="submit" class="btn btn-danger">Hapus</button>
    <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">cancel</button>
</form>