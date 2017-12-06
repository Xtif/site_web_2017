<?php
if (isset($_POST['nom'])) {
	$nom = $_POST['nom'];
	$nom = htmlspecialchars($nom);
	$email = $_POST['email'];
	$email = htmlspecialchars($email);
	$message = $_POST['message'];
	$message = htmlspecialchars($message);
	$message = wordwrap($message, 70, "\r\n");
	$email_header = 	'From:' . $email . "\r\n" . 'Reply-To:' . $email . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n" . 'Content-Transfert-Encoding: 8bit' . "\r\n";
	mail("thibault.fiacre@gmail.com", "Contact via www.thibaultfiacre.com", $message, $email_header);
}

?>

<!--ANCRE RETOUR SHOWREEL-->
<hr id="showreel">

<!--SHOWREEL-->
<hr class="hr-showreel">
	<h1 class="titre-rubrique text-center"><strong>- SHOWREEL -</strong></h1>
<hr>

<!--FILM-->
<div class="col-lg-6 m-auto">
	<video width="100%" controls loop poster=<?php echo "vues/images/showreel_2017.jpg"; ?>>
	  <source src=<?php echo "vues/images/showreel_2017.mp4"; ?> type="video/mp4">
	  Your browser does not support HTML5 video.
	</video>
</div>


<!--ANCRE RETOUR PORTFOLIO-->
<hr id="portfolio">

<!--PORTFOLIO-->
<hr class="hr-separation">
	<div class="titre-rubrique pb-1">
		<h1 class="text-center"><strong>- PORTFOLIO -</strong></h1>
		<p class="text-center mb-0">Attention, certains travaux apparaissant dans la showreel ne sont pas présentés dans le portfolio du fait de leur confidentialité.</p>
	</div>
<hr>



<!--PHOTO DES PROJETS-->
<div class="col-lg-12 p-0">
	<div class="row m-auto d-flex justify-content-between">
		<?php $allProjets = Projet_dao::findAllByOrder();
			foreach ($allProjets as $projet) : ?>
				<a href=<?php echo "index.php?page=" . $projet->get_folder_name(); ?> class="superpose">
					<div class="zone-survol hidden">
						<div class="box-white"></div>
						<div class="text-survol hidden text-center">
							<h2><?php echo $projet->get_nom_projet(); ?></h2>
							<p><?php echo substr($projet->get_description(), 0, 50) . "...<mark>en savoir plus</mark>"; ?></p>
						</div>
					</div>
					<img class="img-accueil" src=<?php echo "vues/images/" . $projet->get_folder_name() . "/Projet.jpg"; ?> alt=<?php echo $projet->get_folder_name(); ?>>
				</a>
		<?php endforeach; ?>
	</div>
</div>

	


<?php include("vues/pages/competences.php"); ?>



<?php include("vues/pages/parcours.php"); ?>






<!--CONTACT-->
<hr id="contact">
	
<hr class="hr-separation">
	<h1 class="text-center titre-rubrique"><strong>- CONTACT -</strong></h1>
<hr>

<div class="formulaire col-lg-8 m-auto">
	<form class="p-5">
		<h3 class="text-center"><strong>Thibault FIACRE</strong></h3>
		<p class="text-center">
			28 avenue Victor Hugo<br/>
			26 000 Valence<br/>
			thibault.fiacre@gmail.com<br/>
			06.84.86.83.94
		</p>
 		<div class="form-group">
 		  <label for="name">Votre nom</label>
 		  <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required>
 		</div>
 		<div class="form-group">
 		  <label for="email">Votre email</label>
 		  <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
 		</div>
 		<div class="form-group">
 		  <label for="message">Votre message</label>
 		  <textarea rows="4" type="textarea" class="form-control" id="message" placeholder="Entrez votre message" required></textarea>
 		</div>
 		<button type="submit" class="btn btn-info">Envoyer</button>
	</form>
</div>


