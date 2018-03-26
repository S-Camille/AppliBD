<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class Liste442JeuxView {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste de 442 jeux à partir du 21 173ème");
		$html = '';
		foreach ($donnees as $jeu) {
			$html = $html.$this->render($jeu->name);
		}
		$lj =<<<END
		<table>
			<tr>
				<th>Liste de 442 jeux à partir du 21 173ème</th>
			</tr>
			<tr>
				<td>$html</td>
			</tr>
		</table>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$lj."<br>".$acf;
	}

}