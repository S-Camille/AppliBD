<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class JaponView {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des compagnies installées au Japon");
		$html = '';
		foreach ($donnees as $jeu) {
			$html = $html.$this->render($jeu->name);
		}
		$j =<<<END
		<table>
			<tr>
				<th>Liste des compagnies installées au Japon</th>
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