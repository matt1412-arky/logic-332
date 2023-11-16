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
<form action="edit.php?id=<?= $_GET['id'] ?>" method="POST">
    name:<br>
    <input type="text" name="name" class="form-control" required value="<?= $row['name'] ?>"><br>
    kota:<br>
    <input type="text" name="city" class="form-control" required value="<?= $row['city'] ?>"><br>
    email:<br>
    <input type="email" name="email" class="form-control" required value="<?= $row['email'] ?>"><br>
    <button type="submit" class="btn btn-primary">simpan</button>
    <button type="reset" class="btn btn-danger">reset</button>
</form>