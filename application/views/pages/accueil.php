<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <title>O'porctunité</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Recaptcha -->
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>

  <!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url(); ?>assets/accueil/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/accueil/css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color:green;"><img src="<?php echo base_url(); ?>assets/accueil/img/logo.png">Porctunité</a>
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a style="color: green !important;" class="nav-link js-scroll-trigger" href="#portfolio">Le site</a>
          </li>
          <li class="nav-item">
            <a style="color: green !important;" class="nav-link js-scroll-trigger" href="#about">Le projet</a>
          </li>
          <li class="nav-item">
            <a style="color: green !important;" class="nav-link js-scroll-trigger" href="#team">L'équipe</a>
          </li>
          <li class="nav-item">
            <a style="color: green !important;" class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <?php if(!$this->session->userdata('connecte')): ?>
          <li class="nav-item">
            <a style="color: green !important; margin:5px;" class="btn btn-outline-success" href="<?php echo base_url(); ?>inscription">Inscription</a>
          </li>
          <li class="nav-item">
            <a style="color: green !important; margin:5px;" class="btn btn-outline-success" href="<?php echo base_url(); ?>login">Connexion</a>
          </li>
          <?php else : ?>
            <li class="nav-item">
            <a style="color: green !important; margin:5px;" class="btn btn-outline-success" href="<?php echo base_url(); ?>">Mon espace O'porctunité</a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Bienvenue sur O'porctunité</div>
        <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="#portfolio">En savoir plus</a>
      </div>
    </div>
    <div class="cookie-banner" style="display: none">
      <p>Nous utilisons des cookies sur notre site web. Vous pouvez prendre connaissance de leurs usages avec notre <a onclick="openPoliqueCookies()">politique de cookies.</a></p>
      <button class="close">&times;</button>
    </div>
    <div id="poliqueCookies" class="overlay">
      <a href="javascript:void(0)" class="closePoliqueCookies" onclick="closePoliqueCookies()">&times;</a>
      <div class="overlay-content">
        <iframe src="<?php echo base_url(); ?>assets/pdf/confidentialite.pdf" width="600" height="780" style="border: none;"></iframe>
      </div>
    </div>
  </header>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading-portfolio">O’porctunité, une application pour aider les éleveurs(ses) à garantir le respect du bien-être des truies</h2>
          <p class="section-subheading-portfolio">O’porctunité vous permettra de réaliser des <strong style="font-size:23px;">auto-évaluations</strong> de bien-être sur vos truies. Une <strong style="font-size:23px;">analyse des données</strong> sera faite vous fournissant des graphiques radars dans l’objectif de vous <strong style="font-size:23px;">améliorer</strong>. Pour vous <strong style="font-size:23px;">accompagner</strong> dans votre suivi, nous vous recommanderons certaines fiches à lire, succinctes pour vous faire <strong style="font-size:23px;">gagner du temps</strong> en vous résumant l’essentiel pour vous garantir la <strong style="font-size:23px;">réussite</strong> de votre élevage.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
          <img class="img-fluid" src="<?php echo base_url(); ?>assets/accueil/img/portfolio/image1_modified.png" alt="">
          <div class="portfolio-caption" style="max-width: 220px;">
            <h5>Pour l’éleveur(se)</h5>
            <p>Un accompagnement pour un gain de productivité et respect des obligations légales</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
          <img class="img-fluid" src="<?php echo base_url(); ?>assets/accueil/img/portfolio/image2_modified.png" alt="">
          <div class="portfolio-caption" style="max-width: 200px;">
            <h5>Pour le vétérinaire</h5>
            <p>Une meilleure valorisation et une facilité de suivi de ses élevages</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
          <img class="img-fluid" src="<?php echo base_url(); ?>assets/accueil/img/portfolio/image3.png" alt="">
          <div class="portfolio-caption" style="max-width: 260px;">
            <h5>Pour l’élevage</h5>
            <p>Des conditions de bien-être qui vont favoriser la réussite de l’élevage</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">A propos</h2>
          <h3 class="section-subheading text-muted">O'porctunité est le fruit d'une collaboration entre étudiants de tous horizons !</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/accueil/img/about/1-small.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Novembre 2019</h4>
                  <h4 class="subheading">Les débuts...</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Laura Jégou présente son projet à Disrupt'Campus, un dispositif inter-universitaire permettant de regrouper des étudiants de formations très diverses dans le but de travailler sur un projet commun !</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/accueil/img/about/2-small.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Janvier 2020</h4>
                  <h4 class="subheading">L'équipe s'agrandit</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Les étudiants de la formation RTAI de l'UT1 rejoignent le projet, porté par la détermination de Laura, le projet se concrètise.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/accueil/img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Février 2020</h4>
                  <h4 class="subheading">Le développement commence</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Le choix est fait de scinder les équipes en développement mobile et développement web, le site d'O'porctunité voit alors le jour.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/accueil/img/about/4-small.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Avril 2020</h4>
                  <h4 class="subheading">Le projet prend forme</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Les premiers prototypes du site web et de l'application mobile sont testées. Le site est hébergé à l'ENVT avec les conseils d'Enrique Dumas, responsable du réseau informatique de l'école !</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>A votre tour<br>
                    de rejoindre<br>
                    le projet !</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">L'équipe O'porctunité</h2>
          <h3 class="section-subheading text-muted">L'équipe est constitué de développeurs, juristes et de vétérinaires bien sûr !</h3>
        </div>
      </div>
      <div class="row"> 
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/lauraJegou.jpg" alt="">
            <h4>Laura Jégou</h4>
            <p class="text-muted">Responsable du projet, vétérinaire</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="metier"></div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/ilyaStepanov.jpg" alt="">
            <h4>Ilya Stepanov</h4>
            <p class="text-muted">Développeur web et mobile</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/ilia.stpnv">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://linkedin.com/in/ilya-stepanov-116201125">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/davidChartelain.png" alt="">
            <h4>David Chartelain</h4>
            <p class="text-muted">Développeur web</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/defaultImage.jpg" alt="">
            <h4>Dylan Heyraud</h4>
            <p class="text-muted">Développeur web</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/defaultImage.jpg" alt="">
            <h4>Morad Ichchou</h4>
            <p class="text-muted">Développeur mobile</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/defaultImage.jpg" alt="">
            <h4>Maxime Schellenberger</h4>
            <p class="text-muted">Développeur mobile</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/defaultImage.jpg" alt="">
            <h4>Aymeric Delabarre</h4>
            <p class="text-muted">Développeur mobile</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="metier"></div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/marineAdreit.jpg" alt="">
            <h4>Marine Adreit</h4>
            <p class="text-muted">Juriste</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/melineDallalba.jpg" alt="">
            <h4>Méline Dall'Alba</h4>
            <p class="text-muted">Juriste</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/accueil/img/team/defaultImage.jpg" alt="">
            <h4>Blandine Bonnard</h4>
            <p class="text-muted">Juriste</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contactez nous</h2>
          <h3 class="section-subheading text-muted">Notre équipe répondra dans les plus brefs délais.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Votre nom *" required="required" data-validation-required-message="Nom requis.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Votre email *" required="required" data-validation-required-message="Email requis.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Votre telephone *" required="required" data-validation-required-message="Téléphone requis.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Votre question ou message" required="required" data-validation-required-message="Question ou message requis."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <span id="alertCaptcha" class="d-none" style="font-size:1em;">Veuillez valider le Captcha.</span><br>
              <div class="col-lg-12 text-center">
              <div class="g-recaptcha" data-sitekey="6LfkHOkUAAAAAE4GVIhhHfrawB97CGB9fWT4NgAh"></div>
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; O'porctunité 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <a href="#modalCGU" data-toggle="modal">Conditions d'utilisation</a>
        </div>
      </div>
    </div>
  </footer>


  <!-- The Modal -->
  <div class="modal" id="modalCGU">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">Conditions d'utilisation</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="padding: 5px; color:black">
            <div class="modal-body" style="padding: 5px; color:black">
                <p>Nous vous souhaitons la bienvenue sur ce site destiné aux éleveurs porcins qui souhaiteraient comparer le bien-être animal de leurs élevages, accéder à des fiches conseils spécialisées, effectuer des statistiques etc. Le site est disponible à l’adresse suivante : https://oporctunite.envt.fr. 
                Nous vous invitons à lire attentivement les présentes Conditions d’Utilisation qui régissent la navigation sur ce Site. En utilisant le Site vous accepterez sans réserve les présentes Conditions d’Utilisation.
                Le Site a été développé et édité par les étudiants de UT1, au 2 Rue du Doyen-Gabriel-Marty, 31042 Toulouse. Le site est hébergé par l’ENVT au 23 Chemin des Capelles, 31300 Toulouse.</p><br>
                <h5>1. ACCES AU SITE</h5>
                <p>Pour accéder et utiliser ce Site vous devez être un éleveur porcin et disposer d’une adresse de courrier électronique valide. Il est aussi possible d’y accéder si vous êtes vétérinaire. 
                Lorsque vous créez un compte, vous pourrez être amené à remplir des champs obligatoires dans un formulaire, signalés comme tels par un astérisque. Dans ce cas, il est nécessaire que vous complétiez ces champs préalablement à votre inscription sur le Site. Toute inscription inexacte ou incomplète ne sera pas prise en compte.
                Vous reconnaissez que les données que vous nous communiquez et qui sont stockées dans nos systèmes d’information sont exactes et valent preuve de votre identité. Nous vous remercions de bien vouloir nous faire part de toute éventuelle modification de ces données.
                L’accès à son compte personnel nécessite l’utilisation de codes d’accès personnels. Dans ce cas, il vous appartient de prendre les mesures propres à assurer le secret de ces codes. Vous pourrez bien entendu les modifier à tout moment. Toutefois, le nombre de tentatives d’accès au Site et/ou à certaines de ses Rubriques pourra être limité afin de prévenir un usage frauduleux desdits codes. Nous vous invitons à nous informer de toute utilisation frauduleuse dont vous pourriez éventuellement avoir connaissance à l’adresse mail adresseDeLaura@outlook.com.
                En cas de non-respect des règles décrites dans les présentes Conditions d’Utilisation, nous nous réservons le droit de suspendre votre accès au Site. Dans ce cas, nous vous en informerons dans les meilleurs délais.
                Bien que nous nous efforcions de maintenir le Site accessible à tout moment, nous ne pouvons pas vous garantir cet accès en toute circonstance. En effet, et notamment pour des raisons de maintenance, de mise à jour, ou pour toute autre raison que nous ne maîtriserions pas, l’accès au Site pourra être interrompu.</p><br>
                <h5>2. PROPRIETE INTELLECTUELLE</h5>
                <p>Le Site et chacun des éléments qui le composent (tels que marques, images, textes, vidéos, etc.) sont protégés au titre de la propriété intellectuelle. Le développement de ce Site a impliqué des investissements importants et un travail commun de la part de notre équipe. 
                Pour cette raison, et sauf stipulation expresse incluse dans les présentes conditions, nous vous offrons la possibilité de consulter le Site pour votre usage strictement personnel et privé et d’imprimer les seules fiches conseils destinés aux utilisateurs disposant d’un compte personnel. Toute autre utilisation, reproduction ou représentation du Site (en tout ou partie) ou des éléments qui le composent, sur quelque support que ce soit, à d’autres fins, et notamment commerciales, n’est pas autorisée.</p><br>
                <h5>3. UTILISATION DU SITE</h5>
                <p>Nous vous rappelons qu’Internet ne permettant pas de garantir la sécurité, la disponibilité et l’intégrité des transmissions de données, nous ne pourrons pas être tenus responsables en cas d’erreurs, omissions, suppressions, retards, défaillances (notamment du fait de virus), des lignes de communication, du matériel informatique et des logiciels sur lesquels nous n’avons aucun contrôle ou encore en cas d’utilisation non autorisée ou de dégradation des éventuels contenus que vous pourriez publier sur ce Site.</p><br>
                <h6>a. Obligations générales de l’Utilisateur</h6>
                <p>Nous défendons des valeurs de tolérance et de respect d’autrui. Pour cette raison, ce Site ne peut être utilisé afin de véhiculer des propos racistes, violents, xénophobes, malveillants, obscènes ou encore illicites. 
                En utilisant ce Site, vous vous interdisez de :
                •	Diffuser un contenu préjudiciable, diffamatoire, non autorisé, malveillant, portant atteinte à la vie privée ou aux droits à l’image, incitant à la violence, à la haine raciale ou ethnique ;
                •	Utiliser le Site pour faire de la politique, de la propagande ou du prosélytisme ;
                •	Publier des contenus publicitaires ou promotionnels ;
                •	Diffuser des informations ou contenus susceptibles de heurter la sensibilité des plus jeunes ;
                •	Mener des activités illégales, notamment portant atteinte aux titulaires de droits sur des logiciels, marques, photographies, images, textes, vidéos etc.
                Nous vous rappelons que vous devez détenir tous les droits et/ou autorisations sur les éventuels contenus que vous souhaiteriez publier sur ce Site. A ce titre, nous vous recommandons de ne pas publier de contenus (notamment des photographies) faisant apparaître des éléments d’architecture récents, des créations publicitaires ou encore des créations vestimentaires dont la marque pourrait apparaître (sigles, logos, etc.)..</p>
                <h6>b. Stipulations particulières à certaines Rubriques</h6>
                <p>Différentes Rubriques peuvent être mises à votre disposition sur ce Site : Contenus Téléchargeables, Espace visant à améliorer les fiches conseils, etc. (les « Rubrique(s) »).</p><br>
                <h6>(i) Contenus Téléchargeables</h6>
                <p>Nous pouvons être amenés à mettre à votre disposition sur ce Site des contenus que vous êtes autorisés à télécharger (les « Contenus Téléchargeables »). Il s’agit de fiches conseils mises à votre disposition. En téléchargeant ou en utilisant ces Contenus Téléchargeables, vous vous engagez à les utiliser conformément aux présentes Conditions d’Utilisation.
                Nous vous concédons, pour vos seuls besoins personnels et privés, à titre gracieux et pour la durée légale de protection du droit d’auteur, un droit non exclusif et non transférable d’utilisation du Contenu Téléchargeable. En plus du droit concédé de reproduction à des fins privées et personnelles, il est possible de reproduire et afficher les fiches conseils uniquement dans un cadre pédagogique.</p><br>
                <h6>(ii) Espace visant à l’amélioration des fiches conseils</h6>
                <p>Nous pouvons être amenés à mettre à disposition sur ce Site un espace vous permettant de communiquer avec les administrateurs pour permettre des corrections ou améliorations des fiches conseils. (l’« Espace d’amélioration des fiches conseils»).
                L’Espace d’amélioration des fiches conseils devra être utilisé conformément à la législation en vigueur, aux bonnes mœurs, aux principes énoncés aux présentes et dans le respect des droits d’autrui.</p><br>
                <h5>4. INFORMATIONS CONTENUES SUR LE SITE</h5>
                <h6>a. Dispositions générales</h6>
                <p>Nous nous efforçons de vous délivrer des informations exactes et mises à jour. Toutefois, les transmissions de données et d’informations sur Internet ne bénéficiant que d’une fiabilité technique relative, nous ne pouvons vous garantir l’exactitude de l’ensemble des informations qui figurent sur ce Site.
                Par ailleurs, nous vous rappelons que des inexactitudes ou omissions peuvent apparaître dans les informations disponibles sur ce Site notamment du fait d’intrusion de tiers. Nous vous invitons à nous signaler toute inexactitude ou omission à l’adresse suivante : adresseDeLaura@outlook.com</p><br>

                <h5>5. DONNEES A CARACTERE PERSONNEL</h5>
                <p>Nous pouvons être amenés à collecter des données personnelles vous concernant, notamment lorsque vous (i) vous vous inscrivez sur le Site, (ii) téléchargez un Contenu Téléchargeable, (iii) répondez à un sondage ou à une étude.
                Ces données à caractère personnel feront l’objet d’un traitement informatique destiné exclusivement à QUELLE SOCIETE ? et pourront être utilisées de la manière suivante :
                •	Études statistiques : nous compilons et étudions vos données afin de définir votre profil et de mieux adapter nos services à vos attentes. Ces études statistiques sont strictement confidentielles ;
                •	Suivi de la relation client : si vous nous faites parvenir un message, les données sont conservées et utilisées afin d’apporter une réponse à votre demande et d’en assurer le suivi ;
                •	Fourniture de services : l’accès à certains espaces tels que l’espace d’amélioration des fiches conseils, etc.
                Conformément à la Loi « Informatique et Libertés du 6 janvier 1978 modifiée en 2004, vous bénéficiez d’un droit d’accès, d’opposition, de rectification et de suppression des données qui vous concernent. Vous pouvez exercer ce droit à tout moment en adressant un courrier électronique, accompagné d’une photocopie de votre pièce d’identité ou de votre passeport, à l’adresse suivante : ADRESSE LAURA
                Pour plus d’informations sur le traitement de vos données à caractère personnel, nous vous invitons à consulter notre Politique Données Personnelles accessible ici.</p><br>
                  
                <h5>6. MODIFICATION DU SITE ET DES CONDITIONS D’UTILISATION</h5>
                <p>Nous pouvons être amenés à modifier les contenus et informations inclus dans ce Site ainsi que les présentes Conditions d’Utilisation, notamment afin de respecter toute nouvelle législation et/ou réglementation applicable et/ou afin d’améliorer le Site. Toute modification sera intégrée dans les présentes Conditions d’Utilisation.</p><br>
                <h5>7. HEBERGEMENT</h5>
                <p>L’hébergement de ce site est réalisé par l’École Nationale des Vétérinaires de Toulouse, située au 23 Chemin des Capelles, 31300 Toulouse.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/accueil/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/accueil/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>assets/accueil/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url(); ?>assets/accueil/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>assets/accueil/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>assets/accueil/js/agency.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/accueil/js/cookies_banner.js"></script>

  <!-- captcha ajax script -->
  <script>
    sendMessageButton.addEventListener('click', function(e) {  
        
        var response = grecaptcha.getResponse();
        if (!response) {
          document.getElementById('alertCaptcha').className = 'd-inline-block bg-danger';
          e.preventDefault();
          return; 
        }
    
        var ajax = new XMLHttpRequest();

        ajax.onreadystatechange = function() {
            if (this.status === 200 && this.readyState === 4) {
                var reponse = this.responseText;
                if (reponse!='ok'){
                  document.getElementById('alertCaptcha').className = 'd-inline-block bg-danger';
                  e.preventDefault();
                  return; 
                }
            }
        }
        ajax.open('POST', 'https://oporctunite.envt.fr/Utilisateurs/Vrecaptcha', true);
        ajax.send('recaptcha='+response);

      }, false);
  </script>

</body>

</html>
