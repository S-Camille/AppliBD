<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\AffPersoJeuxMarioView;
use gamepedia\gp\models\Game;
use gamepedia\gp\models\Game2Character;
use gamepedia\gp\models\Character;

class AffPersoJeuxMarioController {

	private $g;
	private $c;
	private $gc;
	private $m = 'Mario%';

	public function __construct() {
		$this->g = Game::select('id')->where('name', 'like', $this->m)->get();
		$this->gc = Game2Character::whereIn('game_id', $this->g)->distinct()->get();
		$this->c = Character::whereIn('id', $this->gc)->get();
	}

	public function listerPersoJeuxMario() {
		$av = new AffPersoJeuxMarioView();
		echo $av->renderAll($this->c);
	}

}