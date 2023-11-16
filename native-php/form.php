<?php
require('config.php');
?>
<form action="simpan.php" method="POST">
    name:<br>
    <input type="text" name="name" class="form-control" required><br>
    kota:<br>
    <input type="text" name="city" class="form-control" required><br>
    email:<br>
    <input type="email" name="email" class="form-control" required><br>
    <button type="submit" class="btn btn-primary">simpan</button>
    <button type="reset" class="btn btn-danger">reset</button>
</form>