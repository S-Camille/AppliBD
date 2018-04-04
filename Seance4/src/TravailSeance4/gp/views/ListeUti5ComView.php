<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class ListeUti5ComView {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		$html = substr($html,0,strlen($html)-2)."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des utilisateurs ayant posté plus de 5 commentaires");
		$html = '';
		$html = $html.$this->render($donnees);
		$j =<<<END
		<table>
			<tr>
				<th>Liste des utilisateurs ayant posté plus de 5 commentaires</th>
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