<?php
    require('config.php');
?>

<form action="simpan.php" method="post">

Nama:<br>
<input type="text" name="name" class="form-control" required><br>
City:<br>
<input type="text" name="city" class="form-control" required><br>
Email:<br>
<input type="email" name="email" class="form-control" required><br>

<button type="submit" class="btn btn-primary">Simpan</button>
<button type="reset" class="btn btn-warning">Reset Form</button>

</form>
