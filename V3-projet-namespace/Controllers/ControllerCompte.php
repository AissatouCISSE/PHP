<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// require_once '../models/ManagerCompte.php';
// require_once '../models/Compte.php';
require "../config/autoload.php";
use  Models\ManagerCompte;
use  Models\Manager;
use  Models\Compte;

$manager = new ManagerCompte();

//  $id =$_GET['typecompte'];
//  $id_client =$_GET['client'];
if(isset($_POST['envoyer'])) {

   $compte= new Compte(array(
       'numagence'=>trim($_POST['numagence'], ' '),
       'numcompte'=>trim($_POST['numcompte'], ' '),
       'clerib'=> trim($_POST['clerib'], ' '),
       'id'=>trim($_POST['typecompte'],' '),
       'id_client'=>trim($_POST['client'],' '),
      
   ));

      $manager->AddCompte($compte); 
 }

//  if(isset($_GET['typecompte'])){
//     $typecompte = isset($_GET['typecompte'])?$_GET['typecompte']:NULL;
//      $manager->ListeTypecompte($typecompte);
    
//  }


 

   