<?php
// Le controlleur gère l'envoi et la réception des infos entre la base de données
//On defini le nom d'espace(namespace) controller
namespace controller;
//ceci est mon fichier competence controller
class CompetenceController {
    // Variable global
    public $db;
    // On créé un constructeur pour les classes
    public function __construct(){
    // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur
        $e = new Error; 
        $this->db = new \model\CompetenceEntityRepository;
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
        $op = isset($_GET['op']) ? $_GET['op'] : NULL;

        try{
            // si paramètre op
            if( !$op || $op == 'list'){
                $this->listCompetence();
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
    public function listCompetence(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $competences = $this->db->selectAll($orderby);

        include 'view/competence/competences.php';
    }
}