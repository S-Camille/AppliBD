<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Game;
use gamepedia\gp\views\ListeJeuxView;

class ListeJeuxController {

	private $game;

	public function __construct($page) {
		$this->game = Game::select('id', 'name', 'deck')->skip(500*($page-1))->take(500)->get();
	}

	public function listerJeux() {
		$ljv = new ListeJeuxView();
		echo $ljv->renderAll($this->game);
	}

}