

// ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS

   <?php

    try { 
        $bdd = new PDO('mysql:host=localhost;dbname=tpfinal;charset=utf8', 'root' , 'root');
    }catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }

    $con=mysqli_connect('127.0.0.7','root','','projet_php');
    if(!$con){
        die('erreur de connexion a la base de donnée');
    }else{
        }


    $pdo= new PDO('mysql:dbname=projet_php;host=localhost','root','');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>