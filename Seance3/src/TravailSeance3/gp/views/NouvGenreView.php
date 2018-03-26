<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class NouvGenreView {

	public function render($jeu) {
		$html = "<label>".$jeu->name." : ";
		foreach($jeu->genre as $genre) {
			$html .= $genre->name.", ";
		}
		$html = substr($html,0,strlen($html)-2)."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Affichage du nom des jeux 12, 56, 345 et de leurs genres");
		$html = '';
		foreach($donnees as $jeu){
			$html = $html.$this->render($jeu);
		}
		$j =<<<END
		<table>
			<tr>
				<th>Affichage du nom des jeux 12, 56, 345 et de leurs genres</th>
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