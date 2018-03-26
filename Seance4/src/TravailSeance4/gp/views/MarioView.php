<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class MarioView {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des jeux dont le nom contient 'Mario'");
		$html = '';
		foreach ($donnees as $jeu) {
			$html = $html.$this->render($jeu->name);
		}
		$m =<<<END
		<table>
			<tr>
				<th>Liste des jeux dont le nom contient 'Mario'</th>
			</tr>
			<tr>
				<td>$html</td>
			</tr>
		</table>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$m."<br>".$acf;
	}

}