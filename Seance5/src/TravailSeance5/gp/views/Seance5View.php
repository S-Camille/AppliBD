<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class Seance5View {

	public function render() {
		$app = \Slim\Slim::getInstance();
		$q1 = $app->urlFor('P16');
		$q2 = $app->urlFor('P2');
		$q5 = $app->urlFor('P5');
		$q7 = $app->urlFor('P7');
		$q8 = $app->urlFor('P8');
		$ach = GlobaleView::header("Liste des parties");
		$html = '';
		$html = $html.<<<END
		<div id = "bouton">
			<div class = "b"><a href="$q1">Parties 1 et 6</a></div>
			<div class = "b"><a href="$q2">Parties 2, 3 et 4</a></div>
			<div class = "b"><a href="$q5">Partie 5</a></div>
			<div class = "b"><a href="$q7">Partie 7</a></div>
			<div class = "b"><a href="$q8">Partie 8</a></div>
		</div>
END;
		$acf = GlobaleView::footer();
		return $ach.$html.$acf;
	}

}