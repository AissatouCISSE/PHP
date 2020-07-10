<?php
namespace Models;

error_reporting(E_ALL);
ini_set('display_errors', 1);
// require 'Manager.php';
// require 'Config.php';

class ManagerCompte extends Manager{
//function d'ajout d'un nouvvel client moral
 public function AddCompte(Compte $compte){
        $req=self::InsertUpdate("INSERT INTO comptes(numagence,numcompte,clerib,id,id_client) VALUES( ?, ?, ?, ?, ?)",
       array(
        // $compte->getIdCompte(),
        $compte->getNumAgence(),
        $compte->getNumCompte(),
        $compte->getCleRib(),
        $compte->getIdTypecompte(),
        $compte->getIdClient(),
        
        ));

        if($req){
             echo '<div class="alert alert-success">Compte enregistré avec succés </div>';
        }else{
             echo '<div class="alert alert-danger">Erreur enregistrement du nouveau compte</div>';
        }
    }
    public function ListeTypecompte(){
          // $typeC = $pdo->prepare('SELECT * FROM typeCompte');
          // $typeC->execute();
          // $typecompte=$typeC->fetchALL();
          // $req=self::FindAll("SELECT * FROM typeCompte");
          // return $req;
          $prin = new Manager();
		$pdo = $prin->getConnexion();
		$typeC = $pdo->prepare('SELECT * FROM typeCompte');
		$typeC->execute();
		$typecompte=$typeC->fetchALL();
    }


//     function de liste de tabeau des clients physiques
// public function ListePhysique(){
//     $req=self::FindAll("SELECT * FROM physique");
//     return $req;
// }
}
?>