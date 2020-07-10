<?php
namespace Models;
                              
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Compte{
    private $id_compte, $numagence, $numcompte;
    private $clerib, $id_client, $id;
  

    //function de constructeur
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

 //function hydrate
 public function hydrate(array $data){
    foreach ($data as $key => $value) {
       $method= 'set'.ucfirst($key);

       if(method_exists($this, $method)){
           $this->$method($value);
       }
    }
}
 // the getters ou accessur
 public function getIdCompte(){ return $this->id_compte;}
 public function getNumAgence(){ return $this->numagence;}
 public function getNumCompte(){ return $this->numcompte;}
 public function getCleRib(){ return $this->clerib;}
 public function getIdClient(){return $this->id_client;}
 public function getIdTypecompte(){return $this->id;}

 


// the setters ou mutateur
public function setIdCompte($id_compte){ $this->id_compte=$id_compte;}
public function setNumAgence($numagence){$this->numagence=$numagence;}
public function setNumCompte($numcompte){$this->numcompte=$numcompte;}
public function setCleRib($clerib){$this->clerib=$clerib;}
public function setIdClient($id_client){$this->id_client=$id_client;}
public function setIdTypecompte($idtypecompte){$this->id=$id;}
}