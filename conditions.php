<?php
//Exercice 1
//Créer une variable age et l'initialiser avec une valeur
//Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur
$variable=3;

if($variable>18){
	echo 'Vous êtes majeur';
}else{
	echo 'Vous êtes mineur';	
}
echo '<hr/>';

//Exercice 2
//Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.
//Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
//Bonus : L'écrire de deux manières différentes.
$IsEasy = true;

if($IsEasy){
	echo 'C\'est facile!!';
}else{
	echo 'C\'est difficile!!!';
}
echo '<hr/>';

//Exercice 3
//Créer deux variables age et genre. La variable genre peut prendre comme valeur :
//Homme
//Femme
//En fonction de l'âge et du genre, afficher la phrase correspondante :
//Vous êtes un homme et vous êtes majeur
//Vous êtes un homme et vous êtes mineur
//Vous êtes une femme et vous êtes majeur
//Vous êtes une femme et vous êtes mineur
//Gérer tous les cas.
$age = 23;
$genre = "Femme";
if($genre == "Homme" && $age>18){
	echo 'Vous êtes un homme et vous êtes majeur';
}elseif($genre == "Homme" && $age<18){
	echo 'Vous êtes un homme et vous êtes mineur';
}elseif($genre == "Femme" && $age>18){
	echo 'Vous êtes une femme et vous êtes majeur';
}else{
	echo 'Vous êtes une femme et vous êtes mineur';
}
echo '<hr/>';

//Exercice 4
//L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de 
//terre. Cette échelle va de 1 à 9.
//Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.
$magnitude = 7;

switch ($magnitude){
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des 
        		bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
}
echo '<hr/>';

//Exercice 5
//Traduire ce code avec des if et des else :
//<?php
//  echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
//

if($maVariable != 'Homme'){
	echo 'C\'est une développeuse !!!';	
}else{
	echo "C'est un développeur";
}
echo '<hr/>';


//Exercice 6
//Traduire ce code avec des if et des else :
//<?php
//  echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';



?>