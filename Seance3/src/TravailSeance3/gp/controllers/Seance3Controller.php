<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\Seance3View;

class Seance3Controller {

	public function affSeance3() {
		$afs3 = new Seance3View();
		echo $afs3->render();
	}

}