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

    public function getPrenomTitulaire() {
        return $this->getTitulaire()->getPrenom();
    }
    public function getNomTitulaire() {
        return $this->getTitulaire()->getNom();
    }

    public function setTitulaire(){
        $this->_titulaire = $titulaire;
    }

    public function __toString(){
        return $this->_libelle.' '.$this->_soldeInitial.' '.$this->_devise.' '.$this->getPrenomTitulaire().' '.$this->getNomTitulaire() ;
    }

    public function compteCrediter($montant){
        $this->_soldeInitial += $montant;
        return "$montant {$this->_devise} est bien ajouter au  {$this->_libelle}";
    }

    public function compteDebiter($montant) {
        if ($montant > $this->_soldeInitial) {
            return "le solde est insuffisant sur {$this->_libelle}.";
        } else {
            $this->_soldeInitial -= $montant;
            return "compte débiter de $montant , nouveau solde {$this->_soldeInitial} {$this->_devise}.";
        }
    }

    public function compteVirement($montant, $compteDestinataire) {
        if ($montant > $this->_soldeInitial) {
            return "le solde est insuffisant sur {$this->_libelle}.";
        } else {
        $this->compteDebiter($montant);
        $compteDestinataire->compteCrediter($montant);
        return "Virement de $montant {$this->_devise} effectué du {$this->_libelle} de {$this->getPrenomTitulaire()} {$this->getNomTitulaire()} vers $compteDestinataire. Nouveau solde : {$this->_soldeInitial} {$this->_devise}.";
  
        }
    }

    
}
?>