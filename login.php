<?php // login.php

$host = 'localhost'; // adresse du serveur distant(My SQL) ou comme ici serveur local
$data = 'LaRucheDesProducteurs'; // nom de la Base De Donnée
$user = 'root'; // par defaut root dans phpmyadmin
$pass = 'root'; // vide par defaut dans phpmyadmin
$chrs = 'utf8mb4'; // utf8 ok pour mb4 a creuser savoir a quoi ca corespond

$attr = "mysql:host=$host;dbname=$data;charset=$chrs";

// require_once 'login.php'; pour se connecter et l'utiliser dans un fichier
// le _once permet de lire une seule fois le fichier (perfomances)

// pour les options ci dessous a chercher. PDO = interface d'acces BDD
$opts =
[
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,               
    PDO::ATTR_DEFAULT_FETCH_MODE    =>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      => false,
];
?> 