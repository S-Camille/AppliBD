<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\AffJeuxMario3PersoView;
use gamepedia\gp\models\Game;
use gamepedia\gp\models\Game2Character;

class AffJeuxMario3PersoController {

	private $g;
	private $j;
	private $gc;
	private $m = 'Mario%';

	public function __construct() {
		$this->g = Game::select('id')->where('name', 'like', $this->m)->get();
		$this->gc = Game2Character::select('game_id')->whereIn('game_id', $this->g)->groupBy('game_id')->havingRaw("count(*) > 3")->get();
		$this->j = Game::whereIn('id', $this->gc)->get();
	}

	public function listerJeuxMario3Perso() {
		$av = new AffJeuxMario3PersoView();
		echo $av->renderAll($this->j);
	}

}