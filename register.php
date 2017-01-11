<?php session_start();
?>
<!DOCTYPE html>
<html>
  <!-- HEADER START -->
    <head>
    <!-- meta links, beskrivelse m.m. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Islændere i DK - Islandske heste i Danmark">

    <!-- Sidens Titel -->
    <title>Register</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">  
    <script src="https://use.fontawesome.com/fbd328aa63.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myScript.js"></script>
    </head>
    <!-- HEADER END -->
    
    <!-- BODY START -->
    <body>
       
        <!-- HEADER START -->
        <header>
            <!-- HEADER TITEL AND IMAGE START -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-9 col-sm-10 col-md-11">
                        <h1>Islændere i DK</h1>
                    </div>
                    <div class="col-xs-3 col-sm-2 col-md-1">
                        <img src="img/medlem-emblem.png">
                    </div>
                </div>
            </div>
            <!-- HEADER TITEL AND IMAGE END -->
            
            <!-- NAV AND SEARCH START -->
            <div class="container">
                <div class="row">
                    <!-- NAV START -->
                    <div class="col-xs-9 col-sm-9">
                        <nav class="navbar">
                            <div class="container-fluid">    
                                    <ul class="nav navbar-nav">                                    
                                        <li><a href="index.php">Forside</a></li>
                                        <li><a href="nyheder.php">Nyheder</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Print</a></li>
                                        <li><a href="#">Kontakt</a></li>    
                                    </ul> 
                            </div>
                        </nav>
                    </div>
                    <!-- NAV END -->
                    
                    <!-- SEARCH START -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="input-group input-group-sm">                            
                            <input type="text" class="form-control" placeholder="Søg" aria-describedby="sizing-addon3">
                            <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <!-- SEARCH END-->
                    
                </div>
            </div>
            <!-- NAV AND SEARCH END -->
            
            
            <!--Hvis bruger ikke er logget ind vises nedenstående-->
            
            <!-- LOGIN BOX START -->
            <div class="container">                
                <div class="row">
                    <form class="navbar-form navbar-right" action="checkUser.php" method="post" class="form-horizontal">
                        <!-- BRUGERNAVN START -->
                        <div class="form-group">
                            <input class="inputLogin" id="user" type="text" name="formUsername" placeholder="Brugernavn">
                        </div>
                        <!-- BRUGERNAVN END -->
                        
                        <!-- PASSWORD START -->
                        <div class="form-group">
                            <input class="inputLogin" id="pass" type="password" name="formPassword" placeholder="Password">
                        </div>
                        <!-- PASSWORD END -->
                        
                        <!-- LOGIN BUTTON START -->
                        <button type="submit" class="btn btn-default">Log ind</button>
                        <!-- LOGIN BUTTON END -->
                    </form>
                </div>                  
            </div>
                  
            <!-- LOGIN BOX END -->
            
            <!-- REGISTER LINK START -->
            <div class="container">
                <div class="row register">              
                    <div class="col-xs-12">
                    <!--    <a href="#">Registrér dig her...</a>-->
                    </div>
                </div>
            </div>
             
            <!-- REGISTER LINK END -->            
        </header>  
        <!-- HEADER END -->
        
        <!-- MAIN START -->
        <main>
            <div class="container">
                <div class="row row-main">                             
                    <article class="col-xs-12 article-form">
                            
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="form-group">
                                    <label for="username" class="control-label col-sm-4">
                                        Brugernavn:
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="username" type="text" name="username" placeholder="Indtast ønskede brugernavn">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="location" class="control-label col-sm-4">
                                        Lokation:
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="location" type="text" name="location" placeholder="Indtast din lokation">
                                    </div>                                        
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label col-sm-4">
                                        Password:
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="password" type="password" name="password" placeholder="Indtast ønskede password">
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="control-label col-sm-4">
                                        Indtast password igen:
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" id="password2" type="password" name="password2" placeholder="Indtast password igen">
                                    </div>
                                </div> 
                                <button type="submit" class="btn btn-default">Opret bruger</button>
                            </form> 
                            
                            <?php
                            // Tjek om der er blevet indtastet noget, hvis ikke, så gør intet - vis ingen php 
                            if(isset($_POST['username'])){
                                $formUsername = $_POST['username'];
                                $formLocation = $_POST['location'];
                                $formPassword = $_POST['password'];
                                $formPassword2 = $_POST['password2'];
                                
                            // Hvis de to indtastninger af password ikke matcher
                                if($formPassword != $formPassword2){
                                    echo "Dine passwords matchede ikke, prøv igen";
                                    
                            // Hvis de matcher, forsætter vi
                                } else {
                                    require_once "connect.php";
                                    
                            //  Vælg alt fra users tabellen hvor indtastet brugernavn matcher DB
                                    $statement = $DBH->prepare("SELECT * FROM users where dbUsername=?");
                                    $statement->bindParam(1, $formUsername);
                                    $statement->execute();
                                    
                            // Hvis der ikke allerede findes en bruger med det indtastede brugernavn, opret ny bruger
                                    if(empty($row=$statement->fetch())){
                                        $statement = $DBH->prepare("INSERT INTO users (dbUsername, dbLocation, dbPassword) values (?, ?, ?)");
                                        $statement->bindParam(1, $formUsername);                                        
                                        $statement->bindParam(2, $formPassword);
                                        $statement->bindParam(3, $formLocation);
                                        $statement->execute();
                                        echo "Succes!";
                                        header( "Refresh:3; url=index.php");
                                    } else{
                                        echo "Der findes allerede en bruger med dit brugernavn, prøv lige igen.";
                                    }                                    
                                }
                            } 
                        ?>
                                                                                                                         
                        </article>   
                </div>
            </div>           
        </main> 
        <!-- MAIN END -->       
        
        <!-- FOOTER START -->
        <footer>
            <div class="container">
                <div class="row row-footer">
                    <div class="col-xs-12 col-md-4 col-center">
                        <p>
                            Islændere i DK<br>
                            Tågehornvej 32<br>
                            9300 Ølstykke<br>
                            islandere@live.com<br>
                            <i class="fa fa-phone-square" aria-hidden="true"></i>1234 5678<br>
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-4 col-center">
                        <p>
                            Mandag-fredag:<br>
                            08:00-13:00<br>
                            Lørdag:<br>
                            09:00-11:00
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-4">                        
                        <p>
                            <img src="img/guy.jpg"> Thomas Karse                        
                        </p>   
                        <p>
                            <img src="img/guy2.jpg"> Bjarne Arm                        
                        </p>
                        <p>
                            <img src="img/guy3.jpg"> Lisbeth Grøn 
                        </p>                                     
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->        
    </body>
    <!-- BODY END -->    
</html>

