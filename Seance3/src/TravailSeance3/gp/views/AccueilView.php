<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class AccueilView {

	public function render() {
		$app = \Slim\Slim::getInstance();
		$s1 = $app->urlFor('Seance1');
		$s2 = $app->urlFor('Seance2');
		$s3 = $app->urlFor('Seance3');
		$s4 = $app->urlFor('Seance4');
		$s5 = $app->urlFor('Seance5');
		$s6 = $app->urlFor('Seance6');
		$ach = GlobaleView::header("Accueil");
		$html = '';
		$html = $html.<<<END
		<div id = "bouton">
			<div class = "b"><a href="$s1">Séance 1</a></div>
			<div class = "b"><a href="$s2">Séance 2</a></div>
			<div class = "b"><a href="$s3">Séance 3</a></div>
			<div class = "b"><a href="$s4">Séance 4</a></div>
			<div class = "b"><a href="$s5">Séance 5</a></div>
			<div class = "b"><a href="$s6">Séance 6</a></div>
		</div>
END;
		$acf = GlobaleView::footer();
		return $ach.$html.$acf;
	}

}