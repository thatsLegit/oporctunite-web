<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>O'porc'tunité</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
		<!-- Accueil/profil -->
		<?php if($this->session->userdata('connecte')) : ?>
		<a class="navbar-brand" href="<?php echo base_url(); ?>Utilisateurs/profil">O'porctunite</a>
		<?php endif; ?>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
				
					<!-- Zones all membre -->
					<?php if($this->session->userdata('connecte')) : ?>
						<li><a class="nav-link" href="<?php echo base_url(); ?>Utilisateurs/profil">Mon profil</a></li>
						<li><a class="nav-link" href="<?php echo base_url(); ?>fiches">Fiches conseils</a></li>
						<li><a class="nav-link" href="<?php echo base_url(); ?>fiches_favoris">Fiches favoris</a></li>
						<!-- Zones elevage -->
						<?php if($this->session->userdata('statut')=='elevage') : ?>
						<li><a  class="nav-link" href="<?php echo base_url(); ?>suivre">Trouver un vétérinaire</a></li>
						<li><a  class="nav-link" href="<?php echo base_url(); ?>bilan">Mon bilan</a></li>
						<?php endif; ?>
						<!-- Zones Veto -->
						<?php if($this->session->userdata('statut')=='veterinaire') : ?>
						<li><a  class="nav-link" href="<?php echo base_url(); ?>suivis">Mes eleveurs</a></li>
						<?php endif; ?>
						<?php if($this->session->userdata('statut')=='admin') : ?>
						<li><a  class="nav-link" href="<?php echo base_url(); ?>suivi_administrateur">Les utilisateurs</a></li>
						<li><a  class="nav-link" href="<?php echo base_url(); ?>ajout_fiche">Ajouter Fiches</a></li>
						<?php endif; ?>
					<?php endif; ?>
				<li><a class="nav-link" href="<?php echo base_url(); ?>contact">Contacts</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">	
				<?php if(!$this->session->userdata('connecte')) : ?>
				<li>
					<a href="<?php echo base_url(); ?>inscription">
						<button type="button" class="btn btn-default btn-custom">
							<span class="btntext glyphicon-class">S'inscrire</span>
						</button>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>login">
						<button type="button" class="btn btn-default btn-custom">
							<span class="btntext glyphicon-class">Se connecter</span>
						</button>
					</a>
				</li>
				<?php endif; ?>
				<?php if($this->session->userdata('connecte')) : ?>
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

	<div class="container rounded text-white">


