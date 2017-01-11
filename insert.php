<?php
    session_start();
    $heading = $_GET['heading'];
    $imgSrc = $_GET['imgSrc'];
    $imgAlt = $_GET['imgAlt'];
    $articleText = $_GET['articleText'];
    $time = time();
    $username = $_SESSION['username'];

    require_once "connect.php";
    $statement = $DBH->prepare("INSERT INTO articles (imgSrc, imgAlt, heading, time, articleText, username) values(?, ?, ?, ?, ?, ?)");
    $statement->bindParam(1, $imgSrc);
    $statement->bindParam(2, $imgAlt);
    $statement->bindParam(3, $heading);
    $statement->bindParam(4, $time);
    $statement->bindParam(5, $articleText);
    $statement->bindParam(6, $username);
    $statement->execute();
    header("location: index.php");
    /*echo "Succes!" */   
?>
