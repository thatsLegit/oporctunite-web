<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>O'porctunité</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- bootswatch theme -->
	<link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css"/>
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Font Awesome CSS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900&display=swap" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<style>
		#mainNav{
			padding-top:20px;
			padding-bottom:20px;
		}	
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<!-- Accueil/profil -->
			<?php if($this->session->userdata('connecte')) : ?>
				<a class="navbar-brand" href="<?php echo base_url(); ?>accueil">O'porctunite</a>
			<?php endif; ?>

			<ul class="navbar-nav mr-auto">		
				<!-- Zone membre -->		
				<?php if($this->session->userdata('connecte') && $this->session->userdata('statut') != 'admin') : ?>
					<!-- Zone all membre -->
					<li><a class="nav-link" href="<?php echo base_url(); ?>Utilisateurs/profil">Mon profil</a></li>
					<li><a class="nav-link" href="<?php echo base_url(); ?>fiches">Fiches conseils</a></li>
					<li><a class="nav-link" href="<?php echo base_url(); ?>fiches_favoris">Fiches favoris</a></li>
						<!-- Zone elevage -->
						<?php if($this->session->userdata('statut') == 'elevage') : ?>
						<li><a  class="nav-link" href="<?php echo base_url(); ?>suivre">Trouver un vétérinaire</a></li>
						<li><a  class="nav-link" href="<?php echo base_url(); ?>bilan">Mon bilan</a></li>
						<?php endif; ?>
						<!-- Zone Veto -->
						<?php if($this->session->userdata('statut') == 'veterinaire') : ?>
						<li><a  class="nav-link" href="<?php echo base_url(); ?>suivis">Mes eleveurs</a></li>
						<?php endif; ?>
					<!-- Zone all membre -->
					<li><a class="nav-link" href="<?php echo base_url(); ?>contact">Contacts</a></li>
				<?php endif; ?>
				<!-- Zone Admin -->
				<?php if($this->session->userdata('connecte') && $this->session->userdata('statut') == 'admin') : ?>
					<li><a class="nav-link" href="<?php echo base_url(); ?>admin/utilisateurs">Utilisateurs</a></li>
					<li><a class="nav-link" href="<?php echo base_url(); ?>admin/fiches">Fiches</a></li>
					<li><a class="nav-link" href="<?php echo base_url(); ?>admin/commentaires">Commentaires</a></li>
					<li><a class="nav-link" href="<?php echo base_url(); ?>fiches">Recherche de fiches</a></li>
					<li><a class="nav-link" href="<?php echo base_url(); ?>fiches_favoris">Fiches favoris</a></li>
				<?php endif; ?>
			</ul>

			<ul class="nav navbar-nav navbar-right">	
				<!-- Bouton deco zone membre -->
				<?php if($this->session->userdata('connecte') && $this->session->userdata('statut') != 'admin' && (base_url(uri_string())=='https://oporctunite.envt.fr/Utilisateurs/profil' || base_url(uri_string())=='https://oporctunite.envt.fr/utilisateurs/profil' || base_url(uri_string())=='https://oporctunite.envt.fr' || base_url(uri_string())=='https://oporctunite.envt.fr/')) : ?>
				<li>
					<a href="<?php echo base_url(); ?>utilisateurs/logout">
						<button type="button" class="btn btn-outline-light">
							<span class="btntext glyphicon-class">Se deconnecter</span>
						</button>
					</a>
				</li>	
				<?php endif; ?>	
				<!-- Bouton deco zone admin -->
				<?php if($this->session->userdata('connecte') && $this->session->userdata('statut') == 'admin') : ?>
				<li>
					<a href="<?php echo base_url(); ?>utilisateurs/logout">
						<button type="button" class="btn btn-outline-light">
							<span class="btntext glyphicon-class">Se deconnecter</span>
						</button>
					</a>
				</li>	
				<?php endif; ?>	
			</ul>
		</div>
	</nav>



