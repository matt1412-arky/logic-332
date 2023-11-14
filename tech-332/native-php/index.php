<?php

// $dbhost = "localhost";
// $dbport = "5432";
// $dbname = "pos332";
// $dbuser = "postgres";
// $dbpass = "123";

// // $conn = pg_connect(
// //     "host = localhost 
// //     port = 5432 
// //     dbname = pos332 
// //     user = postgres
// //     password = 123"
// // );

// $conn = pg_connect(
//     "host = $dbhost 
//     port = $dbport 
//     dbname = $dbname 
//     user = $dbuser
//     password = $dbpass"
// );

// if (!$conn) {
//     die("Koneksi ke database gagal" . pg_last_error() . "<br>");
// }

// echo "Koneksi ke database sukses" . "<br>";

// $query = "SELECT * FROM profil";
// $result = pg_query($conn, $query);

// if (!$result) {
//     die("Query gagal: " . pg_last_error());
// }

// $rows = pg_fetch_all($result);
// echo "<pre>";
// print_r($rows);
// echo "</pre>";

// // Mengambil hasil query
// while ($row = pg_fetch_assoc($result)) {
//     echo "Name: " . $row['name'] . "<br>";
//     echo "City: " . $row['city'] . "<br>";
//     echo "Email: " . $row['email'] . "<br>";
//     // tambahkan kolom lainnya sesuai kebutuhan
// }

require('config.php');

$query = "SELECT * FROM profil order by id";
$result = $conn->query($query);

// pg_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div style="width: 100%; padding:20px;">
        <p align="right">
            <button class=" btn btn-success" onclick="javascript:window.open('form.php', '_self')">Tambah Data</button>
            <button class=" btn btn-secondary" onclick="addForm()">Tambah Data</button>
        </p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> # </th>
                    <th> Name </th>
                    <th> City </th>
                    <th> Email </th>
                    <th colspan="2">Action</th>
            </thead>
            <tbody>
                <?php
                $no = 1;

                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    // echo "Name: " . $row['name'] . "<br>";
                    // echo "City: " . $row['city'] . "<br>";
                    // echo "Email: " . $row['email'] . "<br>";
                    echo "<tr>
                            <td>" . $no . "</td>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['city'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td><button class='btn btn-primary' onclick='editForm(" . $row['id'] . ")'>Edit</button></td>
                            <td><button class='btn btn-danger' onclick='deleteForm(" . $row['id'] . ")'>Delete</button></td>
                         </tr>";
                    $no++;
                    // tambahkan kolom lainnya sesuai kebutuhan
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="modal" tabindex="-1" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>

<script>
    function addForm() {
        $.ajax({
            url: 'http://localhost:9000/form.php',
            type: 'GET',
            contentType: 'html',
            success: function(data) {
                $('#mymodal').modal('show');
                $('.modal-title').html('Tambah data profil');
                $('.modal-body').html(data);
            }
        });
    }

    function editForm(id) {
        $.ajax({
            url: 'http://localhost:9000/edit_form.php?id=' + id,
            type: 'GET',
            contentType: 'html',
            success: function(data) {
                $('#mymodal').modal('show');
                $('.modal-title').html('Edit data profil');
                $('.modal-body').html(data);
            }
        });
    }

    function deleteForm(id) {
        $.ajax({
            url: 'http://localhost:9000/delete_form.php?id=' + id,
            type: 'GET',
            contentType: 'html',
            success: function(data) {
                $('#mymodal').modal('show');
                $('.modal-title').html('Delete data profil');
                $('.modal-body').html(data);
            }
        });
    }

    function cancel() {
        $('#mymodal').modal('hide');
    }
</script>