<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Utilisateur;
use gamepedia\gp\models\Commentaire;
use gamepedia\gp\models\Game;
use gamepedia\gp\views\GenerationView;
use gamepedia\gp\views\ListeComUtiView;
use gamepedia\gp\views\ListeUti5ComView;
use faker\Factory;

class GenerationController {

	private $j = '';

	public function __construct() {
		$this->j = '';
	}

	public function genUti() {
		/*$faker = Factory::create('fr_FR');
		$i;
		for ($i = 0; $i < 25000; $i++) {
			$u = new Utilisateur();
			$u->email = $faker->unique->email;
			$u->nom = $faker->lastName;
			$u->prenom = $faker->firstName;
			$u->adresse = $faker->streetAddress." ".$faker->postcode." ".$faker->city;
			$u->telephone = $faker->phoneNumber;
			$u->datenaiss = $faker->date($format = 'Y-m-d', $max = 'now');
			$u->save();
		}*/
		$gv = new GenerationView();
		echo $gv->renderUti();
	}

	public function genCom() {
		$faker = Factory::create('fr_FR');
		$i;
		$users = Utilisateur::all()->pluck('email');
		$games = Game::all()->pluck('id');
		for ($i = 0; $i < 250000; $i++) {
			$c = new Commentaire();
			$c->titre = $faker->sentence();
			$c->contenu = $faker->text(80);
			$c->datecrea = $faker->date($format = 'Y-m-d', $max = 'now');
			$c->email_uti = $faker->randomElement($users->toArray());
			$c->id_game = $faker->randomElement($games->toArray());
			$c->save();
		}
		$gv = new GenerationView();
		echo $gv->renderCom();
	}

	public function listerComUti($email) {
		$c = Commentaire::select('titre', 'datecrea')->where('email_uti', '=', $email)->orderBy('datecrea', 'desc')->get();
		$nv = new ListeComUtiView();
		echo $nv->renderAll($email, $c);
	}

	public function listerUti5Com() {
		$users = Utilisateur::get();
		foreach ($users as $u) {
        	$res = Commentaire::where('email_uti', 'like', $u->email)->get();
        	$r = 0;
        	foreach ($res as $p) {
            	$r ++;
        	}
        	if($r > 5) {
            	$this->j = $this->j.$u->prenom." ".$u->nom."<br>";
        	}
    	}
    	$n2v = new ListeUti5ComView();
    	echo $n2v->renderAll($this->j);
	}

}