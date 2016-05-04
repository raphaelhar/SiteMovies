<?php 

function listefilm(){
	global $pdo;
	$sql = "SELECT id FROM movies_full";	
    $stmt = $pdo->prepare($sql);
    $stmt-> bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $stmt -> execute();
    $compPseudo = $stmt -> fetch();


}


 ?>