<?php
require('config.php');
$query = "select * from profil order by id";
$result = $connection->query($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="modal" id="myModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div style="width: 100%; padding:20px;">
        <p align="right"><button class="btn btn-primary" onclick="javascript:window.open('form.php','_self')"> Tambahkan data</button></p>
        <p align="right"><button class="btn btn-danger" onclick="addForm()"> POP</button></p>

        <table class=" table table-striped container">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>city</th>
                    <th>email</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //     echo ("<tr>
                // <td>" . "#" . "<td>
                // <td>" . "name" . "<td>
                // <td>" . "city" . "<td>
                // <td>" . "email" . "<td>
                // </tr>");
                $no = 1;
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo ("<tr>
                <td>" . $no . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['city'] . "</td>
                <td>" . $row['email'] . "</td>
                <td> <button class ='btn btn-success' onclick='editForm(" . $row['id'] . ")'>Edit</button>"  . "</td>
                <td> <button class ='btn btn-danger' onclick='deleteForm(" . $row['id'] . ")'>Delete</button>"  . "</td>
                </tr>");
                    $no++;
                }
                ?>
            </tbody>
        </table>

</body>
<script>
    function addForm() {
        $.ajax({
            url: 'http://localhost:9000/form.php',
            type: 'GET',
            contentType: 'html',
            success: function(form) {
                $('#myModal').modal('show');
                $('.modal-title').html("Menampilkan Data Profil");
                $('.modal-body').html(form);
            }
        })

    }

    function editForm(id) {
        $.ajax({
            url: 'http://localhost:9000/edit-form.php?id=' + id,
            type: 'GET',
            contentType: 'html',
            success: function(editForm) {
                $('#myModal').modal('show');
                $('.modal-title').html("Edit Data");
                $('.modal-body').html(editForm);
            }
        })

    }

    function deleteForm(id) {
        $.ajax({
            url: 'http://localhost:9000/delete-form.php?id=' + id,
            type: 'GET',
            contentType: 'html',
            success: function(deleteForm) {
                $('#myModal').modal('show');
                $('.modal-title').html("Delete Data");
                $('.modal-body').html(deleteForm);
            }
        })
    }
</script>

</html>