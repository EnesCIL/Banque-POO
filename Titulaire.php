<?php
class Titulaire{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    //ensemble compte bancaires
    private array $_comptes;

    public function __construct($nom, $prenom, $dateNaissance, $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance= new DateTime($dateNaissance);
        $this->_ville = $ville;
        $this->_comptes= [];
        
    }

    public function getNom(){
        return $this->_nom;
    }

    public function setNom(){
        $this->_nom = $nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function setPrenom(){
        $this->_prenom = $prenom;
    }

    public function getVille(){
        return $this->_ville;
    }

    public function setVille(){
        $this->_ville = $ville;
    }

    public function ajouterCompteBancaire(CompteBancaire $compte){
        array_push($this->_comptes, $compte);
    }

    public function __toString(){
        return $this->_nom.' '.$this->_prenom.' '.$this->_dateNaissance->format('d-m-Y').' '.$this->$ville;
    } 

    public function afficherComptes(){
        echo $this->_nom.' '.$this->_prenom.' '."<br>";
        $result="";
        foreach ($this->_comptes as $compte){
            $result .= $compte."<br>";
        }
            return $result;       
    }
}
?>