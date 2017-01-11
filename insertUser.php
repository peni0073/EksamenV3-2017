<?php
    session_start();
    $dbUsername = $_GET['dbUsername'];
    $dbLocation = $_GET['dbLocation'];
    $dbPassword = $_GET['dbPassword'];

    require_once "connect.php";
    $statement = $DBH->prepare("INSERT INTO users (dbUsername, dbPassword, dbLocation) values(?, ?, ?)");
    $statement->bindParam(1, $dbUsername);
    $statement->bindParam(2, $dbLocation);
    $statement->bindParam(3, $dbPassword);
    $statement->execute();
    header("location: index.php");
    /*echo "Succes!" */   
?>
