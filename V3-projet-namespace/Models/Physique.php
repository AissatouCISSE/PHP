<?php
namespace Models;
                              
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Physique{
    private $id_physique, $prenom, $nom;
    private $adresse, $email, $numero,  $cni;
  

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
 public function getIdPhysique(){ return $this->id_physique;}
 public function getNom(){ return $this->nom;}
 public function getPrenom(){ return $this->prenom;}
 public function getAdresse(){ return $this->adresse;}
 public function getEmail(){ return $this->email;}
 public function getNumero(){ return $this->numero;}
 public function getCni(){ return $this->cni;}


// the setters ou mutateur
public function setIdPhysique($idPhysique){ $this->idPhysique=$id_physique;}
public function setPrenom($prenom){$this->prenom=$prenom;}
public function setNom($nom){$this->nom=$nom;}
public function setAdresse($adresse){$this->adresse=$adresse;}
public function setEmail($email){$this->email=$email;}
public function setNumero($numero){$this->numero=$numero;}
public function setCni($cni){$this->cni=$cni;}
}