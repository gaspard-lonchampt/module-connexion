<?php 


try {

$connexion = new PDO("mysql:host=localhost;dbname=moduleconnexion", 'root', 'root');
$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete_admin = $connexion->prepare("SELECT * FROM utilisateurs");
$requete_admin->execute();
$result = $requete_admin->fetchall(PDO::FETCH_ASSOC);

// print_r($result);



}
    
catch (PDOException $e) {
    echo 'Echec de la connexion : ' . $e->getMessage();
}

?>

<div class="container p-3">
<div class="agileits-top">
<table class="table table-striped table-hover table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Login</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Mot de passe </th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($result as $key => $value) {
    echo "<tr>";
    echo "<td scope='row'>".$value['id']."</td>";
    echo "<td>".$value['login']."</td>";
    echo "<td>".$value['prenom']."</td>";
    echo "<td>".$value['nom']."</td>";
    echo "<td>".$value['password']."</td>";
    echo "</tr>";
     }   ?>
        </tbody>
    </table>
</div>
</div>