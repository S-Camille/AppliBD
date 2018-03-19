<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class Seance2View {

	public function render() {
		$app = \Slim\Slim::getInstance();
		$q1 = $app->urlFor('Q12');
		$q2 = $app->urlFor('Q22');
		$q3 = $app->urlFor('Q32');
		$q4 = $app->urlFor('Q42');
		$q5 = $app->urlFor('Q52');
		$q6 = $app->urlFor('Q62');
		$q7 = $app->urlFor('Q72');
		$q8 = $app->urlFor('Q82');
		$q9 = $app->urlFor('Q92');
		$ach = GlobaleView::header("Liste des questions");
		$html = '';
		$html = $html.<<<END
		<div id = "bouton">
			<div class = "b"><a href="$q1">Question 1</a></div>
			<div class = "b"><a href="$q2">Question 2</a></div>
			<div class = "b"><a href="$q3">Question 3</a></div>
			<div class = "b"><a href="$q4">Question 4</a></div>
			<div class = "b"><a href="$q5">Question 5</a></div>
			<div class = "b"><a href="$q6">Question 6</a></div>
			<div class = "b"><a href="$q7">Question 7</a></div>
			<div class = "b"><a href="$q8">Question 8</a></div>
			<div class = "b"><a href="$q9">Question 9</a></div>
		</div>
END;
		$acf = GlobaleView::footer();
		return $ach.$html.$acf;
	}

}