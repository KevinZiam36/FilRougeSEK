<?php
class CreerCompte
{
    public $nom;
    public $prenom;
    public $adressePostale;
    public $adresseEmail;
    public $motDePasse;
    public $dateNaissance;
    public $identifiant;
    public function __construct($pNom, $pPrenom, $pAdressePostale, $pAdresseEmail, $pMotDePasse, $pDateNaissance, $pIdentifiant)
    {
        $this->nom = $pNom;
        $this->prenom = $pPrenom;
        $this->adressePostale = $pAdressePostale;
        $this->adresseEmail = $pAdresseEmail;
        $this->motDePasse = $pMotDePasse;
        $this->dateNaissance = $pDateNaissance;
        $this->identifiant = $pIdentifiant;
    }
    public function __toString()
    {
        return json_encode($this);
    }

}
?>