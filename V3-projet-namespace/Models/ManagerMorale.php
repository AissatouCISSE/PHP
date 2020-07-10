<?php
namespace Models;

error_reporting(E_ALL);
ini_set('display_errors', 1);
// require 'Manager.php';
// require 'Config.php';

// use  Models\Config;
// use  Models\Manager;

class ManagerMorale extends Manager{


//function d'ajout d'un nouvvel client moral
 public function AddMoral(Moral $moral){
        $req=self::InsertUpdate("INSERT INTO client_moral VALUES(?, ?, ? , ?, ?)",
       array(
        $moral->getIdEmployeur(),
        $moral->getRaisonSociale(),
        $moral->getNomEmployeur(),
        $moral->getRc(),
        $moral->getNinea(),
        ));

        if($req){
             echo '<div class="alert alert-success">Client enregistré avec succés </div>';
        }else{
             echo '<div class="alert alert-danger">Erreur enregistrement du nouvel Client</div>';
        }
    }


//     function de liste de tabeau des clients physiques
// public function ListePhysique(){
//     $req=self::FindAll("SELECT * FROM physique");
//     return $req;
// }
}
?>