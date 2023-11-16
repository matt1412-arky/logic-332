<?php

    // $connection = pg_connect("
    //     host=localhost
    //     port=5433
    //     dbname=pos332
    //     user=postgres
    //     password=admin");
    
    // if (!$connection) {
    //     echo("Connection failed!<br>");
    // }
    // echo("Ready<br>");

    // $result = pg_query($connection, "select * from profil");
    // if(!$result) {
    //     echo("Error : ");
    // }

    // $row = pg_fetch_all($result);
    // echo ("<pre>");
    // print_r($row);
    // echo ("</pre>");

    // // while($row = pg_fetch_array($result)) {
    // //     echo ("Name : ". $row['name']. "<br>");
    // // }

    // pg_close($connection);

    require('config.php');

    $query = "select * from profil order by id";
    $result = $connection->query($query);

    
?>

<!Doctype html>
<html>
    <head>
        <title>Profil</title>
    </head>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <body>
    <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  modal gue nihh broo
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
              </div>
            </div>
          </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <li><hr class="dropdown-divider"></li>
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
                        <button class="btn btn-success" onclick="javascrip:window.open('form.php','_self')"> + Tambah data</button>
                        <button class="btn btn-primary" onclick="addForm()"> + Tambah data</button>
                    </p>

                <table class="table table-stiped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            // echo($row['name']."<br>");   
                            echo("<tr>
                                    <td>".$no."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['city']."</td>
                                    <td>".$row['email']."</td>
                                    <td><button class='btn btn-warning' onclick='editForm(".$row['id'].")'>Update</button></td>
                                    <td><button class='btn btn-danger' onclick='hapusForm(".$row['id'].")'>Delete</button></td>
                                </tr>");
                                $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </body>
</html>

<script>
    function addForm() {
        $.ajax({
            url:'http://localhost:9000/form.php',
            type:'GET',
            contentType:'html',
            success:function(form) {
                $('#mymodal').modal('show');
                $('.modal-title').html('Tambah Data Profil');
                $('.modal-body').html(form);
            }
        })
       
    }

    function editForm(id) {
        $.ajax({
            url:'http://localhost:9000/edit-form.php?id='+id,
            type:'GET',
            contentType:'html',
            success:function(editform) {
                $('#mymodal').modal('show');
                $('.modal-title').html('Edit Data Profil');
                $('.modal-body').html(editform);
            }
        })
       
    }

    function hapusForm(id) {
        $.ajax({
            url:'http://localhost:9000/hapus-form.php?id='+id,
            type:'GET',
            contentType:'html',
            success:function(hapusform) {
                $('#mymodal').modal('show');
                $('.modal-title').html('Hapus Data Profil');
                $('.modal-body').html(hapusform);
            }
        })
       
    }

    function cancel() {
        $('#mymodal').modal('hide');
    }
    
</script>