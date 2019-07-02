<?php

namespace controller; // je rentre dans le dossier controller

class FormationController{ //ceci est mon fichier Experience controller
    
    public $db;
    public function __construct(){

        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\FormationEntityRepository;
    }
    //---------------------------------------------------------------------------------//
    public function redirect($location){

        header('Location : '.$location);
    }
    //---------------------------------------------------------------------------------//
    public function handleRequest(){ // recupère toutes les requetes ci-dessous

        $op = isset($_GET['form']) ? $_GET['form'] : Null; // si il exite $_get op alors il est null donc $op est égal à null

        try{

            if( !$op || $op == 'list'){ // recupere la liste de la bdd
                $this->listFormation();
            }
            elseif( $op == 'show'){ // affiche les élements entrés

                $this->showFormation();
            }
            else{

                $this->showError( "Page not found", 'Page for operation'. $op .'was not found.'); // sinon tu affiches page not found
            }
        }
        catch(Exception $e){ // Gestion des erreurs avec PHP5 - "Ou bien tu affiches que l'application est une erreur

            $this->showError("Application error", $e->getMessage() );
        }
    }
    //---------------------------------------------------------------------------------//
    public function listFormation(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $formations = $this->db->selectAll($orderby);

        include 'view/formation/formations.php';
    }
    //---------------------------------------------------------------------------------//
    public function showFormation(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        
        if(!$id){

            throw new Exception('Internal error.');
        }
        $formation = $this->db->select($id);

		include 'view/formation/formation.php';
    }
}