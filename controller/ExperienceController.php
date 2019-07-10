<?php
// On defini le nom d'espace(namespace) controller
namespace controller; // je rentre dans le dossier controller
//ceci est mon fichier expérience controller
class ExperienceController{ //ceci est mon fichier Experience controller
     // Variable global
    public $db;
     // On créé un constructeur pour les classes
    public function __construct(){

        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\ExperienceEntityRepository;
    }
    //---------------------------------------------------------------------------------//
    public function redirect($location){
 // Redirige vers la location
        header('Location : '.$location);
    }
    //---------------------------------------------------------------------------------//
    // recupère toutes les requetes ci-dessous
    public function handleRequest(){ 
// Equivaut à $_GET'op'] si défini ou NULL si non défini
        $op = isset($_GET['exp']) ? $_GET['exp'] : Null; // si il exite $_get op alors il est null donc $op est égal à null

        try{
  // si paramètre op
            if( !$op || $op == 'list'){ // recupere la liste de la bdd
                $this->listExperience();
            }
            else{

                $this->showError( "Page not found", 'Page for operation'. $op .'was not found.'); // sinon tu affiches page not found
            }
        }
        // Gestion des erreurs avec PHP5 - "Ou bien tu affiches que l'application est une erreur
        catch(Exception $e){ 

            $this->showError("Application error", $e->getMessage() );
        }
    }
    //---------------------------------------------------------------------------------//
    public function listExperience(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $experiences = $this->db->selectAll($orderby);

        include 'view/experience/experiences.php';
    }
}