<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class AffJeuxDevParSonyView {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des jeux développés par une compagnie dont le nom contient 'Sony'");
		$html = '';
		foreach ($donnees as $jeu) {
			$html = $html.$this->render($jeu->name);
		}
		$j =<<<END
		<table>
			<tr>
				<th>Liste des jeux développés par une compagnie dont le nom contient 'Sony'</th>
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