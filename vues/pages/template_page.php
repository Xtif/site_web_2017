<?php

$folder_name = $_GET['page'];
$projet = Projet_dao::findProjetByFolderName($folder_name);

$images_path = glob("vues/images/" . $projet->get_folder_name() . "/Image_*.jpg");

?>

<!--Titre-->
<hr class="hr-separation hr-page">
	<h1 class="titre-rubrique text-center"><strong>- <?php echo $projet->get_nom_projet(); ?> -</strong></h1>
<hr>

<!--Decription-->
	
<div class="col-lg-8 p-0 m-auto">
	<div class="row description-projet m-auto">
		<div class="col-lg-8 p-0 m-auto">
			<div class="row mt-3 mb-3">

				<div class="col-lg-6 text-right border border-dark border-top-0 border-bottom-0 border-left-0">
					<h4>DESCRIPTION</h4>
					<p class="m-0"><?php echo $projet->get_description(); ?></p>
				</div>

				<div class="col-lg-6">
					<div class="col-lg-12 p-0">
							<h4>CLIENT</h4>
							<p><?php echo $projet->get_client(); ?></p>
					</div>

					<div class="col-lg-12 p-0">
							<h4>MON RÔLE</h4>
							<p><?php echo $projet->get_mon_travail(); ?></p>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>	



<!--Film (si existant)-->
<?php if (file_exists("vues/images/" . $projet->get_folder_name() . "/" . $projet->get_folder_name() . ".mp4")) : ?>
	<div class="col-lg-6 m-auto">
		<video width="100%" controls loop poster=<?php echo "vues/images/" . $projet->get_folder_name() . "/Poster_video.jpg"; ?>>
		  <source src=<?php echo "vues/images/" . $projet->get_folder_name() . "/" . $projet->get_folder_name() . ".mp4"; ?> type="video/mp4">
		  Your browser does not support HTML5 video.
		</video>
	</div>
<?php endif; ?>





<!--Images-->
<div class="col-lg-8 p-0 m-auto">
	<div class="row m-auto d-flex justify-content-between">
		<!--GIF si existant-->
		<?php if (file_exists("vues/images/" . $projet->get_folder_name() . "/" . $projet->get_folder_name() . ".gif")) : ?>
			<div class="conteneur-image-projet">
				<img class="gif" src=<?php echo "vues/images/" . $projet->get_folder_name() . "/" . $projet->get_folder_name() . ".gif" ?> alt="gif">
			</div>
			<?php endif; ?>
		<!--Images-->
		<?php foreach ($images_path as $image_path) : ?>
				<div class="conteneur-image-projet">
					<img class="img-projet" src=<?php echo $image_path; ?> alt=<?php echo $image_path; ?>>
				</div>




<!--Fenetre modal-->
				<div class="modal fade" id="modal" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">
				          <span>&times;</span>
				        </button>
				      </div>

				      <div class="modal-body">
				        <img class="img-projet-modal" src="" alt="">
				      </div>

				    </div>
				  </div>
				</div>
<!--End Fenetre modal-->




		<?php endforeach; ?>
	</div>
</div>




















