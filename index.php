<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/personnage.php";
require "classes/dragon.php";
require "classes/princesse.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();

$humain->setNom("Amandine");

Echo $humain->getNom();

Echo "<br><br>";

Echo $humain->getVie();

Echo "<br><br>";

// Creation d'une instance de la classe dragon
$dragon = new dragon();

Echo $dragon->getVie();

Echo "<br><br>";

$dragon->setNom("");

$princesse = new princesse();

Echo $princesse->getSaved();

Echo "<br><br>";

Echo $princesse->x;

Echo "<br><br>";

Echo $princesse->y;



