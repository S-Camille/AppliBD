<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Seance5View;

class Seance5Controller {

	public function affSeance5() {
		$afs5 = new Seance5View();
		echo $afs5->render();
	}

}