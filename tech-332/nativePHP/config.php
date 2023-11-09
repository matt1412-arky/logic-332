<?php

try{
    $connection = new PDO("pgsql:host=localhost;dbname=pos_332;user=postgres;password=1234");
} catch(PDOException $e) {
    echo("Connection Failed! : " . $e->getMessage());
};

?>