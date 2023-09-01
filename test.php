<?php

$nom = "John";
$age = 17;
$prix = 15.5;

echo 'Ceci est le ' . $nom . ' de l\'utilisateur';

var_dump($prix);

if ($age >= 18) {
    echo "Adulte !";
} else if ($age >= 13) {
    echo "Ado !";
} else {
    echo "Enfant !";
}
