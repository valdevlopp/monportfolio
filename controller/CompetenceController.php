<?php
/**
 * * 
 * Le controlleur reçoit la requête du visiteur qui demande la page, le controlleur demande les données au 
 * modèle qui traduit cette demande en une requête SQL, qu'il transmet au controlleur qui lui même
 * les transmets à la vue qui se chargera de retourner la vue "page html" demandée au visiteur.
 * controlleur -> model -> controlleur -> vue
 */

//Ici on definie le nom d'espace(namespace) : controller
namespace controller;

//ceci est mon fichier competence controller :
class CompetenceController {
    /** 
     * La visibilité public permet d'indiquer que la propriété ou la méthode sera accessible à l'intérieur mais aussi à l'extérieur de la classe.
     * Variable global
     */
    public $db;
    // Ici on crée un constructeur pour les classes
    public function __construct(){
    // La gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur
        $e = new Error; 
        $this->db = new \model\CompetenceEntityRepository;
    }
    //---------------------------------------------------------------------------------//
    public function redirect($location){
        /**
         * En-tête "location" renvoie un en-tête au client et un statut REDIRECT (302) au navigateur, il redirige le navigateur 
        */ 
        header('Location : '.$location);
    }
    //---------------------------------------------------------------------------------//
    // Ici on recupère toutes les requetes ci-dessous :
    public function handleRequest(){
        // Equivaut à $_GET['op'] si défini ou NULL si non défini
        $op = isset($_GET['op']) ? $_GET['op'] : NULL;

        try{ //essayer
            // si paramètre op
            if( !$op || $op == 'list'){
                $this->listCompetence();
            }
            else{

                $this->showError( "Page not found", 'Page for operation'. $op .'was not found.'); // sinon tu affiches page not found
            }
        }
        // Renvoi une erreur si l'essai l'affichage de la liste des compétences échoue
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