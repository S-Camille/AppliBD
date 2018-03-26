<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Partie2View;

class Partie2Controller {

	public function affPartie2() {
		$p2 = new Partie2View();
		echo $p2->render();
	}

}