<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Seance1View;

class Seance1Controller {

	public function affSeance1() {
		$afs1 = new Seance1View();
		echo $afs1->render();
	}

}