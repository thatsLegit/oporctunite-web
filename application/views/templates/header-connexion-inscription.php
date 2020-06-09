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
	<!-- GoogleFonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900&display=swap" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	 <style>
		body{
			margin: 0;
			padding: 0;
			background-image: url("<?php echo base_url(); ?>assets/img/pig.png");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			font-family: "Montserrat", Arial, Helvetica, sans-serif;
		}

		#mainNav {
			background-color: #212529;
		}

		#mainNav .navbar-toggler {
		font-size: 12px;
		right: 0;
		padding: 13px;
		text-transform: uppercase;
		color: white;
		border: 0;
		background-color: #fed136;
		font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
		}

		#mainNav .navbar-brand {
		color: #fed136;
		font-family: 'Kaushan Script', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
		}

		#mainNav .navbar-brand.active, #mainNav .navbar-brand:active, #mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
		color: #fec503;
		}

		#mainNav .navbar-nav .nav-item .nav-link {
		font-size: 90%;
		font-weight: 400;
		padding: 0.75em 0;
		letter-spacing: 1px;
		color: white;
		font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
		}

		#mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
		color: #fed136;
		}

		@media (min-width: 992px) {
			#mainNav {
				padding-top: 25px;
				padding-bottom: 25px;
				transition: padding-top 0.3s, padding-bottom 0.3s;
				border: none;
				background-color: transparent;
			}
			#mainNav .navbar-brand {
				font-size: 1.75em;
				transition: all 0.3s;
			}
			#mainNav .navbar-nav .nav-item .nav-link {
				padding: 1.1em 1em !important;
			}
			#mainNav.navbar-shrink {
				padding-top: 0;
				padding-bottom: 0;
				background-color: #212529;
			}
			#mainNav.navbar-shrink .navbar-brand {
				font-size: 1.25em;
				padding: 12px 0;
			}
		}
	</style>

</head>

<body>
	<!-- navbar logo retour page d'accueil -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>accueil" style="color:green;"><img src="<?php echo base_url(); ?>assets/accueil/img/logo.png">Porctunité</a>
		</div>
	</nav>

	<div class="container rounded text-white">
	<!-- Flash messages -->
    <?php if($this->session->flashdata('elevage_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('elevage_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('veterinaire_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('veterinaire_created').'</p>'; ?>
      <?php endif; ?>

	  <?php if($this->session->flashdata('user_loggedOut')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedOut').'</p>'; ?>
      <?php endif; ?>

