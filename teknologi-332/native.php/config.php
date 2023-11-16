<?php
    try {
        $connection = new PDO("pgsql:host=localhost;port=5433;dbname=pos332;user=postgres;password=admin;");
    } catch(PDOException $e) {
        echo("Connection failed! : " .$e->getMessage());
    }
?>