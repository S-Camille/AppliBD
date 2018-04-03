<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class AffPersoJeuxMarioView {

	public function render($perso) {
		$html = "<label>";
			$html .= $perso;
		
		$html .= "</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des personnages des jeux dont le nom du jeu débute par 'Mario'");
		$html = '';
		foreach ($donnees as $perso) {
			$html .= $this->render($perso->name);
		}
		$j =<<<END
		<table>
			<tr>
				<th>Liste des personnages des jeux dont le nom du jeu débute par 'Mario'</th>
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