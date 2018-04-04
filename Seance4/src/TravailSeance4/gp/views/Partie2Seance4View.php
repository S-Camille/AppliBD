<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class Partie2Seance4View {

	public function render() {
		$app = \Slim\Slim::getInstance();
		$r1 = $app->urlFor('G1');
		$r2 = $app->urlFor('G2');
		$r3 = $app->urlFor('R1S4');
		$r4 = $app->urlFor('R2S4');
		$ach = GlobaleView::header("Liste des requêtes");
		$html = '';
		$html = $html.<<<END
		<div id = "bouton">
			<div class = "b"><a href="$r1">Génération Utilisateurs</a></div>
			<div class = "b"><a href="$r2">Génération Commentaires</a></div>
			<div class = "b"><a href="$r3">Requête 1</a></div>
			<div class = "b"><a href="$r4">Requête 2</a></div>
		</div>
END;
		$acf = GlobaleView::footer();
		return $ach.$html.$acf;
	}

}