<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class ListeJeuxView {

	public function render($id, $name, $deck) {
		$html = $id.". <label>".$name." ".$deck."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste de tous les jeux de la base de données GamePedia");
		$html = '';
		foreach ($donnees as $jeu) {
			$html = $html.$this->render($jeu->id, $jeu->name, $jeu->deck);
		}
		$l =<<<END
		<table>
			<tr>
				<th>Liste de tous les jeux de la base de données GamePedia</th>
			</tr>
			<tr>
				<td>$html</td>
			</tr>
		</table>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$l."<br>".$acf;
	}

}