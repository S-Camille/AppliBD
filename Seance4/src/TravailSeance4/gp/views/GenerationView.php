<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class GenerationView {

	public function renderUti() {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Génération de 25000 utilisateurs");
		$j =<<<END
		<p>Les 25000 utilisateurs ont été ajoutés !!!</p>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$j."<br>".$acf;
	}

	public function renderCom() {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Génération de 250000 commentaires");
		$j =<<<END
		<p>Les 250000 commentaires ont été ajoutés !!!</p>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$j."<br>".$acf;
	}

}