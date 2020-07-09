<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../models/ManagerCompte.php';
require_once '../models/Compte.php';
$manager = new ManagerCompte();


if(isset($_POST['envoyer'])) {

   $compte= new Compte(array(
       'numagence'=>trim($_POST['numagence'], ' '),
       'numcompte'=>trim($_POST['numcompte'], ' '),
       'clerib'=> trim($_POST['clerib'], ' '),
       // 'idtypecompte'=>trim($_POST['id'], ' '),
       // 'id_client'=>trim($_POST['client'], ' '),
      
   ));

      $manager->AddCompte($compte); 
 }