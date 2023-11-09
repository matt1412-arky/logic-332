<?php

    // $connection = pg_connect("
    //     host=localhost 
    //     port=5432 
    //     dbname=pos_332 
    //     user=postgres
    //     password=1234
    // ");

    // if(!$connection){
    //     echo("Connection Failed!");
    // }
    // echo "Ready<br>";

    // $result = pg_query($connection, "select * from profil");
    // if(!$result){
    //     echo("Error : ");
    // }

    // // while($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
    // //     echo("<pre>");
    // //     print_r($row);
    // //     echo("</pre>");
    // // }

    // $rows = pg_fetch_all($result);
    // echo("<pre>");
    // print_r($rows);
    // echo("</pre>");

    // // $rows = pg_fetch_array($result);
    // // echo("<pre>");
    // // print_r($rows);
    // // echo("</pre>");

    // for($i = 0; $i < count($rows); $i++){
    //     // foreach($rows[$i] as $string){
    //     //     echo $string . "<br>";
    //     // }
    //     // echo "break <br>";
    //     foreach($rows[$i] as $paramName => $value){
    //          echo "$paramName = $value<br>";
    //     }
    // }

    // pg_close($connection);  
require('config.php');

    $query = "select * from profil order by name";
    $result = $connection->query($query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>profil</title>
        <link rel="stylesheet" href="/css/myStyle.css">
        <link rel="stylesheet" href="/css/bootstrap.min.5.3.css">

        <script src="/js/jquery-3.7.1.min.js"></script>
        <script src="/js/bootstrap.bundle.min.5.3.js"></script>
    </head>

    <body data-bs-theme="dark">
    <div class="modal" tabindex="-1" id="myModal">
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
                  <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
              </div>
            </div>
          </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>

    <div width="100%">
        <br>
        <p align="right">
            <button class="btn btn-success" onclick="javascript:window.open('form.php', '_self')">Tambah Data</button>
            <button class="btn btn-primary" onclick="addForm()">Tambah Data Modal</button>
        </p>
    </div>
    <table class="table table-dark table-striped w.auto" style="width:98%" align="center">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>City</th>
                <th>Email</th>
                <th colspan='2'>Action</th>
            </tr>
        </thead>
        <tbody class='table-group-divider'>

    <?php
        $no = 1;
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo("
            <tr>
                <td>".$no."</td>
                <td>".$row['name']."</td>
                <td>".$row['city']."</td>
                <td>".$row['email']."</td>
                <td><button class='btn btn-warning' style='display: block; width: 100%' onclick='editForm(".$row['id'].")'>Edit</button></td>
                <td><button class='btn btn-danger' style='display: block; width: 100%' onclick='deleteForm(".$row['id'].")'>Delete</button></td>
            </tr>");
            $no++;
        }
        echo("</tbody>");
        echo("</table>");

    ?>
    </body>
</html>

<script>
    function addForm(){
        $.ajax({
            url:'http://localhost:1111/form.php',
            type:'GET',
            contentType:'html',
            success:function(page){
                $('#myModal').modal('show');
                $('.modal-title').html("Profil Form");
                $('.modal-body').html(page);
            }
        })
    }

    function editForm(id){
        $.ajax({
            url:'http://localhost:1111/editForm.php?id='+id,
            type:'GET',
            contentType:'html',
            success:function(editForm){
                $('#myModal').modal('show');
                $('.modal-title').html("Edit Profil");
                $('.modal-body').html(editForm);
            }
        })
    }

    function deleteForm(id){
        $.ajax({
            url:'http://localhost:1111/deleteForm.php?id='+id,
            type:'GET',
            contentType:'html',
            success:function(delete_form){
                $('#myModal').modal('show');
                $('.modal-title').html("Delete Profil");
                $('.modal-body').html(delete_form);
            }
        })
    }
</script>