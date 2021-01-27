<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
echo $now = date("d\m\y")."<br><br>";

## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
echo $here = date("Y-m-d H:i:s")."<br><br>";

## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
echo date('l jS \of F Y h:i:s A')."<br><br>";

## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.
$date = new DateTime();

echo $date->getTimestamp()."<br><br>";
$date2 = date_create(2-12-2016-15-00);
echo date_timestamp_get($date2)."<br>";

##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
$today = date("d\m\y");
$date3 = "16/05/2016";
if (isset($today->diff)) {
    $interval = $today ->diff.$today($date3);
    echo "nombre de mois: " .$interval->m ."<br>";
    echo "nombres de jours: " .$interval->d ."<br>";
    echo "nombres d'années: " .$interval->y ."<br>";

}

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.
$februari = mktime(0, 0, 0, date("m")+1, date("d"),   date("Y")-5);
echo $februari . "<br><br>";

##Exercice 7 Afficher la date du jour + 20 jours.
$afterDate = mktime(0, 0, 0, date("m"), date("d")+20,   date("Y"));
echo "<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours
$lastmonth = mktime(0, 0, 0, date("m"), date("d")-22,   date("Y"));
echo "<br><br>";


## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )


