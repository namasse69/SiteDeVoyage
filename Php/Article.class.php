<?php
include ("log.php");


class Article
{
$_id = "2";
$_titre;
$_contenu;

$req = $q->prepare ('SELECT * FROM artice WHERE id =:id');
$req->execute(
			array(
					'id' => $id
				)
			);
		$response = $req->fetch();
		var_dump($response);
}