<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Seance4View;

class Seance4Controller {

	public function affSeance4() {
		$afs4 = new Seance4View();
		echo $afs4->render();
	}

}