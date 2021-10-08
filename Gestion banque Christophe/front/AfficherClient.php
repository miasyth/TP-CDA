<?php 
require_once "../services/dao/ClientDao.php";
require_once "../services/dto/Client.php";

if(!isset($_GET["id_client"])){
   echo "<div> Erreur </div>";
}else{

$idClient = intval($_GET["id_client"]); 
$clientDao = new ClientDao();
$client = $clientDao->getById($idClient);
?>
<div>
    <h2>Liste Clients : </h2>
    <ul>
        <li> id : <?php echo $client->getId();?></li>
        <li> Nom : <?php echo  $client->getNom();?></li>
        <li> Prenom : <?php echo  $client->getPrenom();?></li>
        <li> Date de naissance : <?php echo  $client->getDateNaissance()->format("d-m-Y");?></li>
        <li> Telephone : <?php echo  $client->getTelephone();?></li>
        <li> Email : <?php echo $client->getEmail();?></li>
        <li> Adresse : <?php echo $client->getAdresse();?></li>
    </ul>
</div>
<?php }?>
