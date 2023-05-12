<?php
//-----------------------Voiture-----------------------


class Voiture {

    public $marque;
    public $modele;
    public $couleur;
    public $prix;
    public $chevaux;


    function __construct($marque,$modele,$couleur,$prix,$chevaux){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->prix = $prix;
        $this->chevaux = $chevaux;
        
    }

    function seDeplacer($distance){
        echo "<p>Je me déplace de $distance km</p>";  
    }
    function klaxonner(){
        echo "<p>Klaxon: Ahhhu Ahhhu</p>";  
    }

    function getPicture($url){
        echo "<p><img width='350px' height='250px'src='$url' alt='$this->marque $this->modele'></p>";  
    }



    function infosDEV(){
    
        echo "<p>Class Name: <strong>".get_class($this) ."</strong></p>";

        // la taille du tableau des Propriétés et celui des Méthodes
        echo "<p><strong>".count(get_object_vars($this)) ." Propriétés | ".count(get_class_methods (get_class($this))) ."  Méthodes</strong></p>";

        // je veux le nom de la propriété et sa valeur  de cette objet/ key et la value
        foreach(get_object_vars($this) as $item => $i   ){
            
            echo "<p>Propriété: <strong> $item </strong> | Valeur:<strong> ".$i . " </strong>  </p>";
        }
        // nom des méthodes de cette classe le key c'est 0 1 2 3 on s'en fou
        foreach(get_class_methods (get_class($this)) as $methode ){
            echo "<p> Méthode:<strong> $methode </strong></p>";
        }  
    }

}// END CLASS


//---------Création de l'entrepot des données-----------
$pagani= new Voiture("Pagani","Huayra","noir",340000,765);
$buggati= new Voiture("Bugatti","Chrion","Bleu Nuit",2340506,1500);
$ferrari= new Voiture("Ferrari","SF90","Rouge",340000,1000);


//---------Actions de notre application / Controle sur les ojets-----------

//-----Pagani 
$pagani->infosDEV();
$pagani->getPicture("./img/pagani.jpg");
$pagani->seDeplacer(240);
$pagani->klaxonner();

//-----Bugatti 
$buggati->infosDEV();
$buggati->seDeplacer(2050);

//-----Ferrari 
$buggati->infosDEV();
$ferrari->getPicture("./img/ferrari.jpg");
$ferrari->klaxonner();
