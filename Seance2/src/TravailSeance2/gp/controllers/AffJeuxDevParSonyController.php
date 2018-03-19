<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\AffJeuxDevParSonyView;
use gamepedia\gp\models\Game;
use gamepedia\gp\models\Game_Developers;
use gamepedia\gp\models\Company;

class AffJeuxDevParSonyController {

	private $c;
	private $gd;
	private $g;
	private $n = '%Sony%';

	public function __construct() {
		$this->c = Company::where('name', 'like', $this->n)->get();
		$this->gd = Game_Developers::whereIn('comp_id', $this->c)->get();
		$this->g = Game::whereIn('id', $this->gd)->get();
	}

	public function listerJeuxSony() {
		$av = new AffJeuxDevParSonyView();
		echo $av->renderAll($this->g);
	}

}