<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// require_once '../models/ManagerMorale.php';
// require_once '../models/Moral.php';
require_once "../config/autoload.php";
use  Models\ManagerMorale;
use  Models\Manager;
use  Models\Moral;

$manager = new ManagerMorale();


if(isset($_POST['envoyer'])) {

   $moral= new Moral(array(
       'nomemployeur'=>trim($_POST['nomemployeur'], ' '),
       'raisonsociale'=>trim($_POST['raisonsociale'], ' '),
       'rc'=> trim($_POST['rc'], ' '),
       'ninea'=>trim($_POST['ninea'], ' '),
       
      
   ));

      $manager->AddMoral($moral); 
 }
