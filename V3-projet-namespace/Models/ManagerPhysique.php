<?php
namespace Models;
error_reporting(E_ALL);
ini_set('display_errors', 1);
// require 'Manager.php';
// require 'Config.php';

class ManagerPhysique extends Manager{


//function d'ajout d'un nouvvel client physique
 public function AddPhysique(Physique $physique){
        $req=self::InsertUpdate("INSERT INTO physique VALUES(?, ?, ? , ?, ?, ?,?)",
       array(
        $physique->getIdPhysique(),
        $physique->getNom(),
        $physique->getPrenom(),
        $physique->getAdresse (),
        $physique->getEmail(),
        $physique->getNumero (),
        $physique->getCni(),
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