<?php 
require_once "../services/dao/ClientDao.php";
require_once "../services/dto/Client.php";

echo $_POST["nom"]."<br>";
echo $_POST["prenom"]."<br>";
echo $_POST["date_naissance"]."<br>";
echo $_POST["telephone"]."<br>";
echo $_POST["email"]."<br>";
echo $_POST["adresse"]."<br>";

/*if(!isset($_GET["id_client"])){
   echo "<div> Erreur </div>";
}else{

$idClient = intval($_GET["id_client"]); 
$clientDao = new ClientDao();
$client = $clientDao->getById($idClient);*/
?>
