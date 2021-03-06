<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\DatabaseManager as DB2;
use gamepedia\gp\controllers\AccueilController;
use gamepedia\gp\controllers\AffJeuxDevParSonyController;
use gamepedia\gp\controllers\AffJeuxMario3PersoController;
use gamepedia\gp\controllers\AffJeuxMarioCompIncRating3AvisController;
use gamepedia\gp\controllers\AffJeuxMarioCompIncRating3Controller;
use gamepedia\gp\controllers\AffJeuxMarioRating3Controller;
use gamepedia\gp\controllers\AffPersoJeu12342Controller;
use gamepedia\gp\controllers\AffPersoJeuxMarioController;
use gamepedia\gp\controllers\AffRatingJeuxMarioController;
use gamepedia\gp\controllers\ChiLi1Controller;
use gamepedia\gp\controllers\ChiLi2Controller;
use gamepedia\gp\controllers\JaponController;
use gamepedia\gp\controllers\Liste442JeuxController;
use gamepedia\gp\controllers\ListeJeuxController;
use gamepedia\gp\controllers\MarioController;
use gamepedia\gp\controllers\NouvGenreController;
use gamepedia\gp\controllers\Partie1Controller;
use gamepedia\gp\controllers\Partie2Controller;
use gamepedia\gp\controllers\PlatformSupController;
use gamepedia\gp\controllers\Req1Controller;
use gamepedia\gp\controllers\Req2Controller;
use gamepedia\gp\controllers\Req3Controller;
use gamepedia\gp\controllers\Req4Controller;
use gamepedia\gp\controllers\Req5Controller;
use gamepedia\gp\controllers\Seance1Controller;
use gamepedia\gp\controllers\Seance2Controller;
use gamepedia\gp\controllers\Seance3Controller;
use gamepedia\gp\controllers\NouvController;
use gamepedia\gp\controllers\Seance4Controller;
use gamepedia\gp\controllers\Partie2Seance4Controller;
use gamepedia\gp\controllers\GenerationController;
use gamepedia\gp\controllers\Seance5Controller;
use gamepedia\gp\controllers\Acceder1JeuController;
use gamepedia\gp\controllers\CollectionController;
use gamepedia\gp\controllers\PagCollectionController;
use gamepedia\gp\controllers\CommentaireController;
use gamepedia\gp\controllers\CharacterController;
use gamepedia\gp\controllers\CommentairePostController;

$tab = parse_ini_file('src/TravailSeance5/gp/conf/conf.ini');
$db = new DB(); 
$db->addConnection($tab);
$db->setAsGlobal();
$db->bootEloquent();
$db->connection()->enableQueryLog();

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
	$ac2 = new Seance2Controller();
	$ac2->affSeance2();
})->name('Seance2');

$app->get('/Seance3', function(){
	$ac3 = new Seance3Controller();
	$ac3->affSeance3();
})->name('Seance3');

$app->get('/Seance4', function(){
	$ac4 = new Seance4Controller();
	$ac4->affSeance4();
})->name('Seance4');

$app->get('/Seance5', function(){
	$ac5 = new Seance5Controller();
	$ac5->affSeance5();
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

$app->get('/PersoJeu12342', function(){
	$apc = new AffPersoJeu12342Controller();
	$apc->listerPersoJeu12342();
})->name('Q12');

$app->get('/PersoJeuxMario', function(){
	$apjmc = new AffPersoJeuxMarioController();
	$apjmc->listerPersoJeuxMario();
})->name('Q22');

$app->get('/JeuxDevParSony', function(){
	$jdsc = new AffJeuxDevParSonyController();
	$jdsc->listerJeuxSony();
})->name('Q32');

$app->get('/RatingJeuxMario', function(){
	$rjmc = new AffRatingJeuxMarioController();
	$rjmc->listerRatingJeuxMario();
})->name('Q42');

$app->get('/JeuxMario3Perso', function(){
	$jm3pc = new AffJeuxMario3PersoController();
	$jm3pc->listerJeuxMario3Perso();
})->name('Q52');

$app->get('/JeuxMarioRating3', function(){
	$mr3c = new AffJeuxMarioRating3Controller();
	$mr3c->listerJeuxMarioRating3();
})->name('Q62');

$app->get('/JeuxMarioCompIncRating3', function(){
	$c = new AffJeuxMarioCompIncRating3Controller();
	$c->listerJeuxMarioCompIncRating3();
})->name('Q72');

$app->get('/JeuxMarioCompIncRating3Avis', function(){
	$c = new AffJeuxMarioCompIncRating3AvisController();
	$c->listerJeuxMarioCompIncRating3Avis();
})->name('Q82');

$app->get('/NouvGenre', function(){
	$tc = new NouvGenreController();
	$tc->ajoutGenre();
})->name('Q92');

$app->get('/Partie1', function(){
	$p1c = new Partie1Controller();
})->name('Q112');

$app->get('/Partie2', function(){
	$p2c = new Partie2Controller();
	$p2c->affPartie2();
})->name('Q212');

$app->get('/Req1', function(){
	$r1c = new Req1Controller();
	$r1c->affReq1();
})->name('R1');

$app->get('/Req2', function(){
	$r2c = new Req2Controller();
	$r2c->affReq2();
})->name('R2');

$app->get('/Req3', function(){
	$r3c = new Req3Controller();
	$r3c->affReq3();
})->name('R3');

$app->get('/Req4', function(){
	$r4c = new Req4Controller();
	$r4c->affReq4();
})->name('R4');

$app->get('/Req5', function(){
	$r5c = new Req5Controller();
	$r5c->affReq5();
})->name('R5');

$app->get('/Ch1', function(){
	$c1c = new ChiLi1Controller();
	$c1c->affCh1();
})->name('C1');

$app->get('/Ch2', function(){
	$c2c = new ChiLi2Controller();
	$c2c->affCh2();
})->name('C2');

$app->get('/Seance4Partie1', function(){
	$nc4 = new NouvController();
	$nc4->ajout();
})->name('Q1112');

$app->get('/Seance4Partie2', function(){
	$p2cs4 = new Partie2Seance4Controller();
	$p2cs4->affPartie2Seance4();
})->name('Q2112');

$app->get('/GenUti', function(){
	$g1 = new GenerationController();
	$g1->genUti();
})->name('G1');

$app->get('/GenCom', function(){
	$g2 = new GenerationController();
	$g2->genCom();
})->name('G2');

$app->get('/ListeComsUti', function(){
	/*$g3 = new GenerationController();
	$g3->listerComUti();*/
	echo "caca";
})->name('R1S4');

$app->get('/ListeUti5Com', function(){
	/*$g4 = new GenerationController();
	$g4->listerUti5Com();*/
	echo "caca";
})->name('R2S4');

$app->get('/api/games/:id', function($id){
	$p1 = new Acceder1JeuController();
	$p1->acces($id);
})->name('P16');

$app->get('/api/games', function(){
	if(isset($_GET['page'])) {
		$p3 = new PagCollectionController();
		$p3->accesCollPag($_GET['page']);
	}
	else {
		$p2 = new CollectionController();
		$p2->accesColl();
	}
})->name('P2');

$app->get('/api/games/:id/comments', function($id){
	$p5 = new CommentaireController();
	$p5->accesCom($id);
})->name('P5');

$app->get('/api/games/:id/characters', function($id){
	$p7 = new CharacterController();
	$p7->accesChar($id);
})->name('P7');

$app->post('/api/games/:id/comments', function($id){
	$p8 = new CommentairePostController();
	$data = json_decode(file_get_contents('php://input'), true);
	$p8->postCom($id, $data['email'], $data['titre'], $data['contenu']);
})->name('P8');

$app->run();