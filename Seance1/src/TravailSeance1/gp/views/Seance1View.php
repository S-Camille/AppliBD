<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class Seance1View {

	public function render() {
		$app = \Slim\Slim::getInstance();
		$q1 = $app->urlFor('Q1');
		$q2 = $app->urlFor('Q2');
		$q3 = $app->urlFor('Q3');
		$q4 = $app->urlFor('Q4');
		$q5 = $app->urlFor('Q5');
		$ach = GlobaleView::header("Liste des questions");
		$html = '';
		$html = $html.<<<END
		<div id = "bouton">
			<div class = "b"><a href="$q1">Question 1</a></div>
			<div class = "b"><a href="$q2">Question 2</a></div>
			<div class = "b"><a href="$q3">Question 3</a></div>
			<div class = "b"><a href="$q4">Question 4</a></div>
			<div class = "b"><a href="$q5">Question 5</a></div>
		</div>
END;
		$acf = GlobaleView::footer();
		return $ach.$html.$acf;
	}

}