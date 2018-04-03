<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class Partie2View {

	public function render() {
		$app = \Slim\Slim::getInstance();
		$r1 = $app->urlFor('R1');
		$r2 = $app->urlFor('R2');
		$r3 = $app->urlFor('R3');
		$r4 = $app->urlFor('R4');
		$r5 = $app->urlFor('R5');
		$c1 = $app->urlFor('C1');
		$c2 = $app->urlFor('C2');
		$ach = GlobaleView::header("Liste des requêtes");
		$html = '';
		$html = $html.<<<END
		<div id = "bouton">
			<div class = "b"><a href="$r1">Requête 1</a></div>
			<div class = "b"><a href="$r2">Requête 2</a></div>
			<div class = "b"><a href="$r3">Requête 3</a></div>
			<div class = "b"><a href="$r4">Requête 4</a></div>
			<div class = "b"><a href="$r5">Requête 5</a></div>
			<div class = "b"><a href="$c1">Chargement lié 1</a></div>
			<div class = "b"><a href="$c2">Chargement lié 2</a></div>
		</div>
END;
		$acf = GlobaleView::footer();
		return $ach.$html.$acf;
	}

}