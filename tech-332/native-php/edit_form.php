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

<form action="edit.php?id=<?= $_GET['id'] ?>" method="POST">
    Nama: <br>
    <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" required><br>

    Kota: <br>
    <input type="text" name="city" class="form-control" value="<?php echo $row['city'] ?>" required><br>

    Email: <br>
    <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>" required><br><br>
    <button type="submit" class="btn btn-primary">Update data</button>
    <button type="reset" class="btn btn-secondary">Reset data</button>
</form>