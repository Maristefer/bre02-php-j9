<?php

require_once 'User.php';

// Instanciation de deux utilisateurs
$admin = new User(1, 'admin', 'admin');
$user = new User(2, 'user', 'user');

// Affichage des informations des utilisateurs

echo "Je suis sur le user {$admin->getUsername()}, j'ai l'id {$admin->getId()} et mon password est {$admin->getPassword()}<br>";
echo "Je suis sur le user  {$user->getUsername()}, j'ai l'id {$user->getId()}  {$user->getPassword()}<br>";
