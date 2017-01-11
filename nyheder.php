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
    <title>Islændere i DK</title>

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
            
            <!--Tjek om bruger er logget ind, hvis ja, så skriv "Hej <bruger>" samt Log ud knap -->
            <div class="container">
                <div class="row register">              
                    <div class="col-xs-12">
                         <?php 
                if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ ?>    
                    <h5>Velkommen <?php echo $_SESSION['username']; ?>
                    <a href="logout.php?logout=true" class="btn btn-default">Log ud</a></h5>
                      <?php  
                    } else{
                    ?>
                    </div>
                </div>
            </div>
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
                        <a href="register.php">Registrér dig her...</a>
                    </div>
                </div>
            </div>
            <?php 
            }
            ?>  
            <!-- REGISTER LINK END -->            
        </header>  
        <!-- HEADER END -->
        
        <!-- MAIN START -->
        <main>
            <div class="container">
                <div class="row row-main">
                    <div class="col-xs-12 col-sm-8">
                             
                            <!--Tjek om bruger er logget ind, hvis ja, så skriv "Hej <bruger>" samt Log ud knap -->      
                            <?php 
                            if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ ?>         <!-- FORMULAR til ARTICLES START -->       
                            <article class="col-xs-12 article-form">
                                <form action="insert.php" method="get" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="heading" class="control-label col-sm-4">
                                            Artiklens overskrift her:
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" id="heading" type="text" name="heading" placeholder="Overskrift her...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="imgSrc" class="control-label col-sm-4">
                                            Billednavn:
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" id="imgSrc" type="text" name="imgSrc" placeholder="Billednavn">
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="imgAlt" class="control-label col-sm-4">
                                            Alt tekst til billede:
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" id="imgAlt" type="text" name="imgAlt" placeholder="Alt tekst til billede">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="articleText" class="control-label col-sm-4">
                                            Artiklens tekst:
                                        </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="articleText" type="text" name="articleText" placeholder="Tekst her..." rows="5"></textarea>
                                        </div>
                                    </div> 
                                    <button type="submit" class="btn btn-default">Indsæt artikel</button>
                                </form>                                
                            </article>  
                            <?php  
                        } else{
                        ?>
                        <?php 
                        }
                        ?>                      
                        <!-- FORMULAR til ARTICLES SLUT -->
                       
                        <!-- ARTICLES START -->
                           <?php include "fetchDb.php"; ?>           
                        <!-- ARTICLES SLUT -->
                    </div>
                    
                    <aside>
                        <div class="col-xs-0 col-sm-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="sponserBox">
                                            <p>Vores sponsorer</p>
                                        </div>
                                        <p>
                                            <img src="img/sponsor1.jpg">
                                        </p>
                                        <p>
                                            <img src="img/sponsor2.jpg">
                                        </p>
                                        <p>
                                            <img src="img/sponsor3.jpg">
                                        </p>
                                        <p>
                                            <img src="img/sponsor4.jpg">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
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

