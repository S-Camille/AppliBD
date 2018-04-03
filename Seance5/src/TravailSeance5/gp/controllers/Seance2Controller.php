<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Seance2View;

class Seance2Controller {

	public function affSeance2() {
		$afs2 = new Seance2View();
		echo $afs2->render();
	}

}