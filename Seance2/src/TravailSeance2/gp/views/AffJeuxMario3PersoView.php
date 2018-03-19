<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class AffJeuxMario3PersoView {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des jeux dont le nom débute par 'Mario' et qui ont plus de 3 personnages");
		$html = '';
		foreach ($donnees as $jeu) {
			$html = $html.$this->render($jeu->name);
		}
		$j =<<<END
		<table>
			<tr>
				<th>Liste des jeux dont le nom débute par 'Mario' et qui ont plus de 3 personnages</th>
			</tr>
			<tr>
				<td>$html</td>
			</tr>
		</table>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$j."<br>".$acf;
	}

}