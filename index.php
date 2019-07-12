<?php
 require_once( 'Autoload.php');

 $controller = new controller\CompetenceController();
 $controller->handleRequest();

 $controller = new controller\ExperienceController();
 $controller->handleRequest();

 $controller = new controller\FormationController();
 $controller->handleRequest();

 //permet de mettre en lien les fichiers controller pour permettre l'affichage 

 