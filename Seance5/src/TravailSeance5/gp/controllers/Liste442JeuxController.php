<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Game;
use gamepedia\gp\views\Liste442JeuxView;

class Liste442JeuxController {

	private $game;
	private $jeuSup = '21 173';

	public function __construct() {
		$this->game = Game::skip(21172)->take(442)->get();
	}

	public function listerJeuxAPartirDu21173() {
		$ljv = new Liste442JeuxView();
		echo $ljv->renderAll($this->game);
	}

}