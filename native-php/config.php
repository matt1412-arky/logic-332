<?php
try {
    $connection = new PDO("pgsql:host=localhost;dbname=post332;user=postgres;password=endro123");
} catch (PDOException $e) {
    echo ("connection failed!" . $e->getMessage());
}

$query = "select * from profil";
$result = $connection->query($query);
?>