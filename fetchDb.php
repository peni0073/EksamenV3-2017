<?php 
    require_once "connect.php";
    
    // Vælg alt fra articles tabellen //

    /* Vi erklærer først en ny variabel og kalder den $statement. */
    /* I $DBH fra vores connect.php bruger vi en metode, som hedder prepare, hvori vi har en Sql, som
    hjælper os med, at arbejde med databasen. I denne bruger vi "SELECT * FROM articles", som vælger
    alt fra articles.  */
    /* Vi afslutter og beder $statement om, at udføre det ved at skrive execute. */

    $statement = $DBH->prepare("SELECT * FROM articles");
    $statement->execute();
   
    //Så længe der er poster så hent dem //

    /* En while er en loop i php, som udfører en handling, så længe indholdet i parenteserne er TRUE. */
    /* Hvis det er sandt, så afvikler den koden i while loopet indtil den ikke længere er sand. */
    /* $statement indeholder de rækker fra vores tabel i databasen. */
    /* fetch hiver hver række ud én efter en, for hver gang loopet kører og udskriver det til siden. */
    /* ASSOC betyder at den udskriver en beskrivlse og en værdi. */
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>        
        <article>
            <h3><?php echo $row['heading'] ?></h3>
            <h4><?php echo $row['username'] ?>,
            <?php echo $row['location'] ?> -
            <?php echo $row['time'] ?></h4>
            <img src="img/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>">  
            <p><?php echo $row['articleText'] ?></p>
            <hr>
        </article>
    <?php
    }
    $DBH = null;    
?>