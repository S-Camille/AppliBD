<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;

use gamepedia\gp\controllers\AccueilController;
use gamepedia\gp\controllers\JaponController;
use gamepedia\gp\controllers\Liste442JeuxController;
use gamepedia\gp\controllers\ListeJeuxController;
use gamepedia\gp\controllers\MarioController;
use gamepedia\gp\controllers\PlatformSupController;
use gamepedia\gp\controllers\Seance1Controller;

$tab = parse_ini_file('src/TravailSeance1/gp/conf/conf.ini');
$db = new DB(); 
$db->addConnection($tab);
$db->setAsGlobal();
$db->bootEloquent();

$app = new \Slim\Slim();

$app->get("/", function(){
	$ac = new AccueilController();
	$ac->affAcc();
})->name('Accueil');

$app->get('/Seance1', function(){
	$ac = new Seance1Controller();
	$ac->affSeance1();
})->name('Seance1');

$app->get('/Seance2', function(){
	echo "À faire";
})->name('Seance2');

$app->get('/Seance3', function(){
	echo "À faire";
})->name('Seance3');

$app->get('/Seance4', function(){
	echo "À faire";
})->name('Seance4');

$app->get('/Seance5', function(){
	echo "À faire";
})->name('Seance5');

$app->get('/Seance6', function(){
	echo "À faire";
})->name('Seance6');

$app->get('/Mario', function(){
	$mc = new MarioController();
	$mc->listerJeuMario();
})->name('Q1');

$app->get('/Japon', function(){
	$jc = new JaponController();
	$jc->listerCompagnieJapon();
})->name('Q2');

$app->get('/PlatformeSup', function(){
	$ps = new PlatformSupController();
	$ps->listerPlatformSupA();
})->name('Q3');

$app->get('/Liste442Jeux', function(){
	$l4jc = new Liste442JeuxController();
	$l4jc->listerJeuxAPartirDu21173();
})->name('Q4');

$app->get('/GameList/:page', function($page){
	$ljc = new ListeJeuxController($page);
	$ljc->listerJeux();
})->name('Q5');

$app->run();