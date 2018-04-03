<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class Seance3View {

	public function render() {
		$app = \Slim\Slim::getInstance();
		$q1 = $app->urlFor('Q112');
		$q2 = $app->urlFor('Q212');
		$ach = GlobaleView::header("Liste des parties");
		$html = '';
		$html = $html.<<<END
		<div id = "bouton">
			<div class = "b"><a href="$q1">Partie 1</a></div>
			<div class = "b"><a href="$q2">Partie 2</a></div>
		</div>
END;
		$acf = GlobaleView::footer();
		return $ach.$html.$acf;
	}

}