<?php
    $formUsername = $_POST['formUsername'];
    $formPassword = $_POST['formPassword'];
    
    require_once "connect.php";
    $statement = $DBH->prepare("SELECT * FROM users WHERE dbUsername=?");
    $statement->bindParam(1, $formUsername);
    $statement->execute();

    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    if(empty($rows)){
        echo "Kan ikke finde bruger!";
        header( "Refresh:3; url=index.php");
    } else{
        //Der findes brugere med det brugernavn, nu skal PW testes...
        //Kør et loop der tester hver række om dbPassword matcher formPassword
        foreach($rows as $rows){
            if($rows['dbPassword'] == $formPassword){
            //Sørg for at brugeren er logget ind og har "tilladelser"
                session_start();
                $_SESSION['username'] = $formUsername;
                header("location: index.php");
            }
        }
        echo "Ikke korrekt password!";
        header( "Refresh:3; url=index.php");
    }
    $DBH = null;
?>
