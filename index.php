<?php 
include('data/db.php');
session_start();
include('inc/sessin.php');
include('inc/fonctions.php');


// si l'admin est log : 
if(!empty($_SESSION) && $_SESSION['admin']){
	include('inc/admin-header.php');
	// sinon : 
}else{
	include('inc/header.php');
}


	foreach ($movies as $array) {	
 ?>			
<!-- 	on sort les images et titres des films :  -->			 
		<div id=vignette class=vignette>
			<a href="details.php?id=<?php echo $array["id"] ?>">
				<img id=miniImg src="http://www.weblitzer.fr/formation/posters/<?php echo $array["id"] ?>.jpg" alt='<?php echo $array["title"] ?>'/>
			</a>
			<h4><?php echo $array["title"] ?></h4>
		</div>
<?php		
	};
 include('inc/footer.php');
 ?>