<?php

require_once 'Character.php';

// Instanciation d'un personnage avec l'id 1
$character = new Character(1);

// Affichage du nom complet du personnage
echo $character->getFullName(). "<br>";

// Modification du prénom et du nom du personnage
$character->setFirstName("Sarah");
$character->setLastName("Connor");

// Affichage du nouveau nom complet du personnage
echo $character->getFullName(). "<br>";