<?php

    //Henter værdier fra login.php
    $brugernavn =$_POST['bruger'];
    $password = $_POST['pass'];

    //Sørger for at mysql ikke blander sig
    $brugernavn = stripcslashes($brugernavn);
    $password = stripcslashes($password);
    $brugernavn = mysql_real_escape_string($brugernavn);
    $password = mysql_real_escape_string($password);
    
    //Forbindelse til server og valg af database (login)
     $con=mysql_connect('localhost','root','') or die ("Fejl: " . mysql_error($con)); //Hvordan forbinder vi den til en database på github?
     mysql_select_db('login',$con) or die( mysql_error());
    
    //Spørg databasen for bruger
    $result = mysql_query("select * from Brugere where brugernavn = '$brugernavn' and password = '$password'")
                or die("Failed to connect: ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['brugernavn'] == $brugernavn && $row['password'] == $password){
        echo "Login succesfuldt!";
        header("location: /Filer/Zurf/sites/admin.html");
        exit();
    }
    else {
        echo "Login failed";
        header("location: /Filer/Zurf/sites/failed.html");
    }
    exit();
?>
