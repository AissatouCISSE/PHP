<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../models/ManagerPhysique.php';
require_once '../models/Physique.php';
$manager = new ManagerPhysique();


if(isset($_POST['envoyer'])) {

   $physique= new Physique(array(
       'prenom'=>trim($_POST['prenom'], ' '),
       'nom'=>trim($_POST['nom'], ' '),
       'adresse'=> trim($_POST['adresse'], ' '),
       'email'=>trim($_POST['email'], ' '),
       'numero'=>trim($_POST['numero'], ' '),
       'cni'=> trim($_POST['cni'], ' '),
      
   ));

      $manager->AddPhysique($physique); 


 }
