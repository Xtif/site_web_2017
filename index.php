<?php include("vues/include/meta.php"); ?>

<div class="container-fluid">
	<div class="bandeau-header">
		<?php include("vues/include/header.php"); ?>


		<?php 
			if (empty($_GET['page'])) {
				include("vues/include/navigation_accueil.php");
			} else {
				include("vues/include/navigation.php");
			} ?>
	</div>

<body>

<?php
//Si une page est appelée en GET et qu'elle existe
if (!empty($_GET['page'])) { 
	//Inclusion de la page
	include("vues/pages/template_page.php");
} else { // Si aucune page n'est renseignée, on affiche la page d'accueil
	include("vues/pages/accueil.php");
}
?>

</body>

<?php include("vues/include/footer.php"); ?>