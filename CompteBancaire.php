<?php
class CompteBancaire{
    private string $_libelle;
    private int $_soldeInitial;
    private string $_devise;
    //un Titulaire unique
    private Titulaire $_titulaire;

    public function __construct($libelle, $soldeInitial, $devise, Titulaire $titulaire){
        $this->_libelle = $libelle;
        $this->_soldeInitial = $soldeInitial;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->ajouterCompteBancaire($this);
    }

    public function getLibelle(){
        return $this->_libelle;
    }

    public function setLibelle(){
        $this->_libelle = $libelle;
    }

    public function getSoldeInitial(){
        return $this->_soldeInitial;
    }

    public function setSoldeInitial(){
        $this->_soldeInitial = $soldeInitial;
    }

    public function getDevise(){
        return $this->_devise;
    }

    public function setDevise(){
        $this->_devise = $devise;
    }

    public function getTitulaire(){
        return $this->_titulaire;
    }

    public function setTitulaire(){
        $this->_titulaire = $titulaire;
    }

    public function __toString(){
        return $this->_libelle.' '.$this->_soldeInitial.' '.$this->_devise;
    }

    public function compteCrediter($montant){
        $this->_soldeInitial += $montant;
    }

    public function compteDebiter($montant) {
        if ($montant > $this->_soldeInitial) {
            return ;
        } else {
            $this->_soldeInitial -= $montant;
            return ;
        }
    }

    public function compteVirement($montant, $compteDestinataire) {
        compteDebiter($montant);
        $compteDestinataire->compteCrediter($montant);
        return ;
  
}
?>