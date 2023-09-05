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

echo "<h1>Test titre</h1>";

// Tableau simple
$fruits = ["Banane", "Fraise", "Kiwi"];

var_dump($fruits);

foreach ($fruits as $key => $value) { ?>
    <h2 class="fruit"><?php echo $value ?></h2>
<?php }

//Tableau associatif
$utilisateur = ["nom" => "Dupond", "prenom" => "Jean", "age" => 15];
//echo $utilisateur["nom"] . " " . $utilisateur["prenom"]; / Dupond Jean

//Tableau multidimensionnel
$utilisateurs = [
    ["nom" => "Dupond", "prenom" => "Jean", "age" => 26],
    ["nom" => "Martin", "prenom" => "Rose", "age" => 35],
    ["nom" => "Doe", "prenom" => "Jane", "age" => 31]
];

echo $utilisateurs[1]["nom"]; // Martin

foreach ($utilisateurs as $key => $utilisateur) { ?>
    <p><?php echo $utilisateur["nom"] . " " . $utilisateur["prenom"]; ?></p>
<?php };

?>

<section id="utilisateurs">
    <?php
    foreach ($utilisateurs as $key => $utilisateur) { ?>
        <article class="utilisateur">
            <h2><?= $utilisateur["nom"] . " " . $utilisateur["prenom"] ?></h2>
            <p>Age : <?= $utilisateur["age"] ?> ans</p>
        </article>
    <?php } ?>
</section>