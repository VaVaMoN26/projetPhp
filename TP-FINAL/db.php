
   <?php

    $con=mysqli_connect('127.0.0.7','root','root','tpfinal');
    if(!$con){
        die('erreur de connexion a la base de donnée');
    }else{
        }


    $pdo= new PDO('mysql:dbname=tpfinal;host=localhost','root','root');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>