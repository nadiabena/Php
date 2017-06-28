<?php
//Exercice 1
//Créer une variable nom et l'initialiser avec la valeur de votre choix.
//Afficher son contenu.
$nom="Nadia";
echo "<u>Nom</u>: ",$nom;

echo "<hr/>";
//Exercice 2
//Créer trois variables nom, prenom et age et les initialiser avec les valeurs de votre choix.
//Attention age est de type entier.
//Afficher leur contenu.
$nom = "Ben Azouz";
$prenom = "Nadia";
$age = 18;

echo '<u>Nom</u>: ', $nom, '  <u>Prénom</u> : ', $prenom, '  <u>Age</u>: ', $age;
echo "<hr/>";

//Exercice 3
//Créer une variable km. L'initialiser à 1. Afficher son contenu.
//Changer sa valeur par 3. Afficher son contenu.
//Changer sa valeur par 125. Afficher son contenu.
$km=1;
echo '<strong>KM</strong>: ',$km,'<br/>';
$km=3;
echo '<strong>KM</strong>: ',$km,'<br/>';
$km=125;
echo '<strong>KM</strong>: ',$km,'<br/>';
echo "<hr/>";


//Exercice 4
//Créer une variable de type string, une variable de type int, une variable de type float, une variable 
//de type booléan et les initialiser avec une valeur de votre choix. Les affiche
$chaine = "chaîne de caractére";
$nombre = 5;
$virgule = 1.2;
$ok = true;

echo 'Chaîne: ', $chaine, ' Nombre: ',$nombre, ' Virgule:',$virgule, '  Boolean:',$ok;
echo "<hr/>";


//Exercice 5
//Créer une variable de type int.
//L'initialiser avec rien.
//Afficher sa valeur.
//Donner une valeur à cette variable et l'afficher.
$num;
echo 'Nombre sans init: ', $nombre;

$num=25;
echo 'Nombre avec init: ', $nombre;
echo "<hr/>";


//Exercice 6
//Créer une variable nom et l'initialiser avec la valeur de votre choix.
//Afficher : "Bonjour" + nom + ", comment vas tu ?".
$nom ="Nadia"; 
echo 'Bonjour ', $nom,' ,comment vas tu?';
echo "<hr/>";


//Exercice 7
//Créer trois variables nom, prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
//Afficher : "Bonjour" + nom + prenom + ", tu as" + age + "ans".
$nom = "Nadia";
$prenom = "Ben Azouz";
$age = 20;

echo "Bonjour ", $nom, ' ',$prenom, ' ,tu as ', $age, " ans";
echo "<hr/>";


//Exercice 8
//Créer 3 variables.
//Dans la première mettre le résultat de l'opération 3 + 4.
//Dans la deuxième mettre le résultat de l'opération 5 * 20.
//Dans la troisième mettre le résultat de l'opération 45 / 5.
//Afficher le contenu des variables.
$res1 = 3+4;
$res2 = 5*20;
$res3 = 45/5;

echo "Res1: ",$res1, " Res2: ",$res2, " Res3: ", $res3;

?>




