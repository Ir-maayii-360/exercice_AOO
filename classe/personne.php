<?php

class  personne{

    private string  $nom;
    private int  $age;
    private int  $AnneeDeNaissance;
    private int $AnneeEnCours;
    
    public function modifierNom($nom){
        $this->nom=$nom;
    }
    public function recupererNom(){
        return $this->nom;

    }
    public function modifierAge($age){
        $this->age=$age;
    }
    public function recupererAge(){
        return $this->age;

    }
     
    public function modifierAnneeDeNaissance($AnneeDeNaissance){
        $this->AnneeDeNaissance=$AnneeDeNaissance;
    }
    public function recupererAnneeDeNaissance(){
         return $this->AnneeDeNaissance;

    }
    public function  modifierAnneeEnCours($AnneeEnCours) {
        $this->AnneeEnCours=$AnneeEnCours;
    
    }
    public function recupererAnneeEnCours(){
        return $this->AnneeEnCours;
    }
    public function calculerAge(){
        return $this->recupererAnneeEnCours()- $this->recupererAnneeDeNaissance();

    }
  
}

?>