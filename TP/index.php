<?php
try { 
    $bdd = new PDO('mysql:host=localhost;dbname=users_info;charset=utf8', 'root' , 'root');
}catch(Exception $e){
    die('Erreur: '.$e->getMessage());
}

echo'<table>
    <tr>
     <th>Prénom</th>
     <th>Nom</th>
     <th>Profession</th>';


$requete = $bdd->query('SELECT*FROM users');

while ($donnees = $requete->fetch()){
//echo $donnees['id']. '' .$donnees['nom']. '' . $donnees['prenom']. '' .$donnees['profession']. '<br>';
// Créer un tableau pour mieux répertorier les données
    echo'<tr>
            <td>'.$donnees['prenom'].'</td>
            <td>'.$donnees['nom'].'</td>
            <td>'.$donnees['profession'].'</td>
        </tr>';
}
echo'</tr>
            </table>';
?>