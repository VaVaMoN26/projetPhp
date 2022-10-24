<?php
try { 
    $bdd = new PDO('mysql:host=localhost;dbname=users_info;charset=utf8', 'root' , 'root');
}catch(Exception $e){
    die('Erreur: '.$e->getMessage());
}

$requete = $bdd->query('SELECT*FROM users');

echo'<table>
    <tr>
     <th>Prénom</th>
     <th>Nom</th>
     <th>Profession</th>';

     
     
     while ($donnees = $requete->fetch()){
         
         
         echo'<tr>
         <td>'.$donnees['prenom'].'</td>
         <td>'.$donnees['nom'].'</td>
         <td>'.$donnees['profession'].'</td>
         </tr>';
        }
        echo'</tr>
        </table>';

         //$requete = $bdd->exec('INSERT INTO users(nom, prenom, profession)VALUES("Zuckerberg", "Mark", "PDG-Facebook")');

         //$requete = $bdd->exec('UPDATE users SET profession = "Directeur" WHERE prenom = "Mark"');

         $requete = $bdd->exec('DELETE FROM users WHERE prenom = "Mark"')

        ?>