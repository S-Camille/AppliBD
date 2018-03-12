<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\views\AccueilView;

class AccueilController {

	public function affAcc() {
		$av = new AccueilView();
		echo $av->render();
	}

}