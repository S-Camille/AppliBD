<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class NouvView {

	public function render($jeu) {
		$html = "<label>";
		foreach($jeu->users as $uti) {
			$html .= $uti->nom." ".$uti->prenom;
			foreach ($uti->comm as $co) {
				$html .= $co->contenu;
			}
		}
		$html = substr($html,0,strlen($html)-2)."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Affichage des utilisateurs et de leurs commentaires pour le jeu 12342");
		$html = '';
		$html = $html.$this->render($donnees);
		$j =<<<END
		<table>
			<tr>
				<th>Affichage des utilisateurs et de leurs commentaires pour le jeu 12342</th>
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