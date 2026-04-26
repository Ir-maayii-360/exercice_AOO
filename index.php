<?php
 require_once('classe/personne.php');
 $personne= new personne();

 $personne->modifierNom("  mayimona ");
 $personne->modifierAnneeEnCours(2026);
 $personne->modifierAnneeDeNaissance(2004);

 echo"je suis".$personne-> recupererNom(). "<br>", "j'ai  ".$personne->calculerAge()."ans";
 

?>