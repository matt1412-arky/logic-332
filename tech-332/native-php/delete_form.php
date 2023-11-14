<?php

require('config.php');

try {
    $query = "SELECT * FROM profil WHERE id = " . $_GET['id'];
    // echo $query;
    $result = $conn->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    // echo "Data berhasil diambil!";
} catch (PDOException $e) {
    echo "Data gagal diambil!" . $e->getMessage();
}
?>

<form action="delete.php?id=<?= $_GET['id'] ?>" method="POST">
    Nama:
    <span><?php echo $row['name'] ?></span><br>

    Kota:
    <span><?php echo $row['city'] ?></span><br>

    Email:
    <span><?php echo $row['email'] ?></span><br>
    <button type="submit" class="btn btn-danger">Delete data</button>
    <button type="button" class="btn btn-primary" onclick="cancel()">Cancel</button>
</form>