<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\AffPersoJeu12342View;
use gamepedia\gp\models\Game;

class AffPersoJeu12342Controller {

	private $g;
	private $jeu = 12342;

	public function __construct() {
		$this->g = Game::where('id','=',$this->jeu)->first()->character;
	}

	public function listerPersoJeu12342() {
		$av = new AffPersoJeu12342View();
		echo $av->renderAll($this->g);
	}

}