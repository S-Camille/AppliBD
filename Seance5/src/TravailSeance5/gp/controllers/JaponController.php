<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Company;
use gamepedia\gp\views\JaponView;

class JaponController {

	private $comp;
	private $p = 'Japan';

	public function __construct() {
		$this->comp = Company::where('location_country', '=', $this->p)->get();
	}

	public function listerCompagnieJapon() {
		$jv = new JaponView();
		echo $jv->renderAll($this->comp);
	}

}