<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Partie2Seance4View;

class Partie2Seance4Controller {

	public function affPartie2Seance4() {
		$p2 = new Partie2Seance4View();
		echo $p2->render();
	}

}