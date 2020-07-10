<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// require_once '../models/ManagerPhysique.php';
// require_once '../models/Physique.php';
require "../config/autoload.php";
use  Models\ManagerPhysique;
use  Models\Manager;
use  Models\Physique;
$manager = new ManagerPhysique();


if(isset($_POST['envoyer'])) {

   $physique= new Physique(array(
        'nom'=>trim($_POST['nom'], ' '),
       'prenom'=>trim($_POST['prenom'], ' '),
       'adresse'=> trim($_POST['adresse'], ' '),
       'email'=>trim($_POST['email'], ' '),
       'numero'=>trim($_POST['numero'], ' '),
       'cni'=> trim($_POST['cni'], ' '),
      
   ));

      $manager->AddPhysique($physique); 
 }
