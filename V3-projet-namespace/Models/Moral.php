<?php
namespace Models;
                              
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Moral{
    private $id_employeur, $raisonsociale, $nomemployeur;
    private $rc, $ninea;
  

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
 public function getIdEmployeur(){ return $this->id_employeur;}
 public function getRaisonSociale(){ return $this->raisonsociale;}
 public function getNomEmployeur(){ return $this->nomemployeur;}
 public function getRc(){ return $this->rc;}
 public function getNinea(){ return $this->ninea;}


// the setters ou mutateur
public function setIdEmployeur($idEmployeur){ $this->idEmployeur=$id_employeur;}
public function setRaisonSociale($raisonsociale){$this->raisonsociale=$raisonsociale;}
public function setNomEmployeur($nomemployeur){$this->nomemployeur=$nomemployeur;}
public function setRc($rc){$this->rc=$rc;}
public function setNinea($ninea){$this->ninea=$ninea;}
}