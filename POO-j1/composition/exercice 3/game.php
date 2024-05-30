<?php

require_once 'Character.php';

// Instanciation d'un personnage avec le nom Ragnar
$personnage = new Character("Ragnar");

// Création d'une arme avec le nom Sword et des dégâts de 10
$weapon = new Weapon("sword", 10);
/*$personnage->getWeapon->setName("Sword");
$personnage->getWeapon->setDamages(10);*/

// Affectation de l'arme au personnage
$personnage->setWeapon($weapon);


echo "My name is {$personnage->getName()}, I deal {$personne->getWeapon()->getDamages()} damages with my {$personne->getWeapon()->getName()}<br>";

echo $personnage->fight();
