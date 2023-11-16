<?php
    require('config.php');

    try{
        $query ='Select * from profil where id='.$_GET['id'];
    //    echo($query);
       $result = $connection->query($query);
       $row = $row =$result->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo('Ambil Data Gagal! : '.$e->getMessage());
    }
?>

<form action="edit.php?id=<?=$_GET['id']?>" method="POST">
    Nama:<br>
    <input type="text" name="name" class="form-control" required value="<?=$row['name']?>"><br>
    Kota:<br>
    <input type="text" name="city" class="form-control" required value="<?=$row['city']?>"><br>
    Email:<br>
    <input type="email" name="email" class="form-control" required value="<?=$row['email']?>"><br><br>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-warning">Reset Form</button>
</form>