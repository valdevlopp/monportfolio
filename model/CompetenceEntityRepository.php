<?php
/**
 * * Le model gère les données du site, il fait le lien avec la bdd, il récupére les informations « brutes » dans la bdd,
 * les organise et les assemble pour qu'elles puissent être traitées par le contrôleur.
 * On y trouve entre autres les requêtes SQL. (on l'appelle entityRepository mais on peut l'appeler comme on veut)
 * 
 * Récupère les données de la bdd et les transmet au controller qui les transmet à la vue.
 */

//Ici on definie le nom d'espace(namespace) : model
namespace model;

//ceci est mon fichier CompetenceEntityRepository :
class CompetenceEntityRepository{
    /**
     * La visibilité privée permet d'indiquer que la propriété ou la méthode ne sera accessible
     * qu'à l'intérieur de la classe.
     * */
    private $db;

    private $table;

    // Ici on crée un constructeur pour les classes
    public function __construct(){}
    /**
    * fonction pour la connexion a la bdd
    */
    public function getDb(){
        /**
        * Verifie que la bdd n'existe pas
        */
        if( !$this->db ){
            /**
            * Essai de charger le fichier xml de configuration
            */
            try{
                // simplexml_load_file permet d'intèrpréter un fichier xml dans un objet
                $xml = simplexml_load_file('app/config/CompetenceConfig.xml');
                // On stock la valeur de la colonne table(fichier xml) dans la variable privé table
                $this->table = $xml->table;
                // Essai de créé la bdd via les colonnes du fichier xml de configuration
                try{
                    // On stock dans la variable $db une nouvelle connexion PDO via les infos du fichier de configuration xml
                    $this->db = new \PDO("mysql:dbname=". $xml->db . ";host=". $xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION) );
                } catch(\PDOException $e){
                    // Renvoi une erreur si l'essai de création échoue
                    die("Problème de connexion bdd : " . $e->getMessage() );
                }
            } catch(Exception $e){
                // Renvoi une erreur si l'essai de connexion échoue
                die("Problème de fichier de configuration xml !");
            }
        }
        // Retourne la bdd
        return $this->db;
    }

    //---------------------------------------------------------------------------------//
  
    public function selectAll(){
        // On stock dans la variable $q l'execution de la requête
        $q = $this->getDb()->query('SELECT * FROM '.$this->table);
        // On stock dans la variable $r le résultat du tableau $q, parce que la méthode fetchAll retourne un tableau
        $r = $q->fetchAll(\PDO::FETCH_OBJ);
        // Vérifie si vide
        if(!$r){
            // Retourne false(faux)
            return false;
        } else{
            // Retourne le tableau
            return $r;
        }
    }
}