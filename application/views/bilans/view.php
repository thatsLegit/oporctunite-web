<!-- mettre des hovers sur les datasets labels et graphique historique -->
<!-- augmenter police labels -->

<head>	
	<!-- css graphique historique -->
	<link crossorigin="anonymous" media="all" integrity="sha512-FG+rXqMOivrAjdEQE7tO4BwM1poGmg70hJFTlNSxjX87grtrZ6UnPR8NkzwUHlQEGviu9XuRYeO8zH9YwvZhdg==" rel="stylesheet" href="https://github.githubassets.com/assets/frameworks-146fab5ea30e8afac08dd11013bb4ee0.css" />
	<link crossorigin="anonymous" media="all" integrity="sha512-vMKRtbQ9h8VmzccMNdmnlBnTLM9zZar8f9BKU3A5UNRZgr3o2+zXRScLx7V1nd9HupewEuevhEx2D3yuqNpkXw==" rel="stylesheet" href="https://github.githubassets.com/assets/github-bcc291b5b43d87c566cdc70c35d9a794.css" />
	<!-- scripts graphiques résultats -->
	<script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}

		body {
			background: whitesmoke;
			color: #818181;
			margin: 0;
			padding: 0;
			font-family: "Montserrat",Arial, Helvetica, sans-serif;
		}

		p {
			color: #818181;
		}

		table, th, td {
			border: 1px solid black;
			color: black;
		}

		#canvas{
			margin: 20px;
		}

		#canvas2{
			margin: 20px;
		}


	/*fiches*/

	#container-fiche{
		margin-top: 50px;
		margin-bottom: 60px;
	}

	#fiche{
		margin: 20px;
        width: 180px;
        height: 200px;
		background-color: white;
		color: black;
		text-align: center;
		border-radius: 5px;
		border: solid black 1.5px;
	}

	#fiche h5{
        padding:auto;
    }

    #fiche p{
        padding:auto;
    }

	#fiche button {
		width: 80px;
		height: 40px;
		font-size: .75rem;
		border-radius: 5px;
    }

	#fiche button:hover {
        background-color:#86cd23;
        transition: 0.5s;
    }

	#main{
		margin-top:120px;
        padding: 10px;
	}

	</style>
</head>

<div class="container" id="main">
	
	<h3 style="color:black;">Résultats des tests</h3>
	
	<div class="row justify-content-md-center">
		<div class="col-md-auto">
			<canvas id="canvas"></canvas>
		</div>
	</div>

	<div class="row justify-content-md-center">
		<div class="col-md-auto">
			<canvas id="canvas2"></canvas>
		</div>
	</div>

	<div class="row" style="margin-top:25px;">
		<div>
			<p> 
				Les notes sont obtenues avec vos données de tests. 
				<a href="#" data-toggle="modal" data-target="#CatModal">
					Consultez ici les les détails de la notation et les catégories de test.
				</a>
			</p>
		</div>

		<!-- The Modal -->
		<div class="modal" id="CatModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title" style="color:black">Notre système de notation</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body" style="padding: 5px; color:black">
						<div class="table-responsive">
							<table class="table">
								<tr>
									<th colspan="2" class="text-center">Bonne santé</th>
								</tr>
									<tr>
										<td rowspan="5">Absence de blessures</td>
										<tr><td>Boiteries</td></tr>
										<tr><td>Blessures sur le corps</td></tr>
										<tr><td>Lésions de la vulve</td></tr>
										<tr><td>Mammite</td></tr>
									</tr>
									<tr>
										<td rowspan="13">Absence de maladies</td>
										<tr><td>Mortalité</td></tr>
										<tr><td>Eternuement</td></tr>
										<tr><td>Toux</td></tr>
										<tr><td>Pompage</td></tr>
										<tr><td>Prolapsus rectal</td></tr>
										<tr><td>Diarrhée</td></tr>
										<tr><td>Constipation</td></tr>
										<tr><td>Métrite</td></tr>
										<tr><td>Condition de la peau</td></tr>
										<tr><td>Ruptures et hernies</td></tr>
										<tr><td>Infections locales</td></tr>
										<tr><td>Prolapsus utérin</td></tr>
									</tr>
									<tr>
										<td>Absence de douleur due aux interventions de convenance</td>
										<td>Pose d'anneaux nasaux et coupe de queue</td>
									</tr>
								</tr>
							</table>
						</div>
						<div class="table-responsive">
							<table class="table">
								<tr>
									<th colspan="2" class="text-center">Comportement approprié</th>
								<tr>
									<tr>
										<td>Expression sociale du comportement</td>
										<td>Comportement social (positif ou négatif)</td>
									</tr>
									<tr>
										<td rowspan="3">Expression des autres comportements</td>
										<tr><td>Stereotypies</td></tr>
										<tr><td>Exploration individuelle</td></tr>
									</tr>
									<tr>
										<td>Bonne relation homme-animal</td>
										<td>La peur des hommes</td>
									</tr>
									<tr>
										<td>Evaluation qualitative du comportement</td>
										<td>Emotions positives</td>
									</tr>
								</tr>
							</table>
						</div>
						<div class="table-responsive">
							<table class="table">
								<tr>
									<th colspan="2" class="text-center">Hébergement approprié</th>
								<tr>
									<tr>
										<td rowspan="4">Confort au repos</td>
										<tr><td>Bursite</td></tr>
										<tr><td>Plaie à l'épaule</td></tr>
										<tr><td>Lisier sur le corps</td></tr>
									</tr>
									<tr>
										<td rowspan="3">Confort thermal</td>
										<tr><td>Halètement</td></tr>
										<tr><td>Blotissement</td></tr>
									</tr>
									<tr>
										<td rowspan="3">Facilité de mouvement</td>
										<tr><td>Espace alloué</td></tr>
										<tr><td>Les cases de mise-bas</td></tr>
									</tr>
								</tr>
							</table>
						</div>
						<div class="table-responsive">
							<table class="table">
								<tr>
									<th colspan="2" class="text-center">Nourriture convenable</th>
								<tr>
									<tr>
										<td>Expression sociale du comportement</td>
										<td>Comportement social (positif ou négatif)</td>
									</tr>
									<tr>
										<td rowspan="3">Expression des autres comportements</td>
										<tr><td>Stereotypies</td></tr>
										<tr><td>Exploration individuelle</td></tr>
									</tr>
									<tr>
										<td>Bonne relation homme-animal</td>
										<td>La peur des hommes</td>
									</tr>
									<tr>
										<td>Evaluation qualitative du comportement</td>
										<td>Emotions positives</td>
									</tr>
								</tr>
							</table>
						</div>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<center style="color:black;margin-top:40px;"><h3>Nos recommandations</h3></center>
		<div class="container" id="container-fiche">
			<div class="row" id="recommandations">
			</div>
		</div>


	<!-- Graphique historique-->
	<h2 class="f4 text-normal mb-2">
      144 tests réalisés
        au cours de la dernière année
    </h2>
	<div class="row">
		<div class="col">	
			<svg width="828" height="128" class="js-calendar-graph-svg">
				<g transform="translate(10, 20)">
					<g transform="translate(0, 0)">
						<rect class="day" width="12" height="12" x="16" y="0" fill="#ebedf0" data-count="0" data-date="2019-04-07"/>
						<rect class="day" width="12" height="12" x="16" y="15" fill="#ebedf0" data-count="0" data-date="2019-04-08"/>
						<rect class="day" width="12" height="12" x="16" y="30" fill="#ebedf0" data-count="0" data-date="2019-04-09"/>
						<rect class="day" width="12" height="12" x="16" y="45" fill="#ebedf0" data-count="0" data-date="2019-04-10"/>
						<rect class="day" width="12" height="12" x="16" y="60" fill="#ebedf0" data-count="0" data-date="2019-04-11"/>
						<rect class="day" width="12" height="12" x="16" y="75" fill="#ebedf0" data-count="0" data-date="2019-04-12"/>
						<rect class="day" width="12" height="12" x="16" y="90" fill="#ebedf0" data-count="0" data-date="2019-04-13"/>
					</g>
					<g transform="translate(16, 0)">
						<rect class="day" width="12" height="12" x="15" y="0" fill="#ebedf0" data-count="0" data-date="2019-04-14"/>
						<rect class="day" width="12" height="12" x="15" y="15" fill="#ebedf0" data-count="0" data-date="2019-04-15"/>
						<rect class="day" width="12" height="12" x="15" y="30" fill="#ebedf0" data-count="0" data-date="2019-04-16"/>
						<rect class="day" width="12" height="12" x="15" y="45" fill="#ebedf0" data-count="0" data-date="2019-04-17"/>
						<rect class="day" width="12" height="12" x="15" y="60" fill="#ebedf0" data-count="0" data-date="2019-04-18"/>
						<rect class="day" width="12" height="12" x="15" y="75" fill="#ebedf0" data-count="0" data-date="2019-04-19"/>
						<rect class="day" width="12" height="12" x="15" y="90" fill="#ebedf0" data-count="0" data-date="2019-04-20"/>
					</g>
					<g transform="translate(32, 0)">
						<rect class="day" width="12" height="12" x="14" y="0" fill="#ebedf0" data-count="0" data-date="2019-04-21"/>
						<rect class="day" width="12" height="12" x="14" y="15" fill="#ebedf0" data-count="0" data-date="2019-04-22"/>
						<rect class="day" width="12" height="12" x="14" y="30" fill="#ebedf0" data-count="0" data-date="2019-04-23"/>
						<rect class="day" width="12" height="12" x="14" y="45" fill="#ebedf0" data-count="0" data-date="2019-04-24"/>
						<rect class="day" width="12" height="12" x="14" y="60" fill="#ebedf0" data-count="0" data-date="2019-04-25"/>
						<rect class="day" width="12" height="12" x="14" y="75" fill="#ebedf0" data-count="0" data-date="2019-04-26"/>
						<rect class="day" width="12" height="12" x="14" y="90" fill="#ebedf0" data-count="0" data-date="2019-04-27"/>
					</g>
					<g transform="translate(48, 0)">
						<rect class="day" width="12" height="12" x="13" y="0" fill="#ebedf0" data-count="0" data-date="2019-04-28"/>
						<rect class="day" width="12" height="12" x="13" y="15" fill="#ebedf0" data-count="0" data-date="2019-04-29"/>
						<rect class="day" width="12" height="12" x="13" y="30" fill="#ebedf0" data-count="0" data-date="2019-04-30"/>
						<rect class="day" width="12" height="12" x="13" y="45" fill="#ebedf0" data-count="0" data-date="2019-05-01"/>
						<rect class="day" width="12" height="12" x="13" y="60" fill="#ebedf0" data-count="0" data-date="2019-05-02"/>
						<rect class="day" width="12" height="12" x="13" y="75" fill="#ebedf0" data-count="0" data-date="2019-05-03"/>
						<rect class="day" width="12" height="12" x="13" y="90" fill="#ebedf0" data-count="0" data-date="2019-05-04"/>
					</g>
					<g transform="translate(64, 0)">
						<rect class="day" width="12" height="12" x="12" y="0" fill="#ebedf0" data-count="0" data-date="2019-05-05"/>
						<rect class="day" width="12" height="12" x="12" y="15" fill="#ebedf0" data-count="0" data-date="2019-05-06"/>
						<rect class="day" width="12" height="12" x="12" y="30" fill="#ebedf0" data-count="0" data-date="2019-05-07"/>
						<rect class="day" width="12" height="12" x="12" y="45" fill="#ebedf0" data-count="0" data-date="2019-05-08"/>
						<rect class="day" width="12" height="12" x="12" y="60" fill="#ebedf0" data-count="0" data-date="2019-05-09"/>
						<rect class="day" width="12" height="12" x="12" y="75" fill="#ebedf0" data-count="0" data-date="2019-05-10"/>
						<rect class="day" width="12" height="12" x="12" y="90" fill="#ebedf0" data-count="0" data-date="2019-05-11"/>
					</g>
					<g transform="translate(80, 0)">
						<rect class="day" width="12" height="12" x="11" y="0" fill="#ebedf0" data-count="0" data-date="2019-05-12"/>
						<rect class="day" width="12" height="12" x="11" y="15" fill="#ebedf0" data-count="0" data-date="2019-05-13"/>
						<rect class="day" width="12" height="12" x="11" y="30" fill="#ebedf0" data-count="0" data-date="2019-05-14"/>
						<rect class="day" width="12" height="12" x="11" y="45" fill="#ebedf0" data-count="0" data-date="2019-05-15"/>
						<rect class="day" width="12" height="12" x="11" y="60" fill="#ebedf0" data-count="0" data-date="2019-05-16"/>
						<rect class="day" width="12" height="12" x="11" y="75" fill="#ebedf0" data-count="0" data-date="2019-05-17"/>
						<rect class="day" width="12" height="12" x="11" y="90" fill="#ebedf0" data-count="0" data-date="2019-05-18"/>
					</g>
					<g transform="translate(96, 0)">
						<rect class="day" width="12" height="12" x="10" y="0" fill="#ebedf0" data-count="0" data-date="2019-05-19"/>
						<rect class="day" width="12" height="12" x="10" y="15" fill="#ebedf0" data-count="0" data-date="2019-05-20"/>
						<rect class="day" width="12" height="12" x="10" y="30" fill="#ebedf0" data-count="0" data-date="2019-05-21"/>
						<rect class="day" width="12" height="12" x="10" y="45" fill="#ebedf0" data-count="0" data-date="2019-05-22"/>
						<rect class="day" width="12" height="12" x="10" y="60" fill="#ebedf0" data-count="0" data-date="2019-05-23"/>
						<rect class="day" width="12" height="12" x="10" y="75" fill="#ebedf0" data-count="0" data-date="2019-05-24"/>
						<rect class="day" width="12" height="12" x="10" y="90" fill="#ebedf0" data-count="0" data-date="2019-05-25"/>
					</g>
					<g transform="translate(112, 0)">
						<rect class="day" width="12" height="12" x="9" y="0" fill="#ebedf0" data-count="0" data-date="2019-05-26"/>
						<rect class="day" width="12" height="12" x="9" y="15" fill="#ebedf0" data-count="0" data-date="2019-05-27"/>
						<rect class="day" width="12" height="12" x="9" y="30" fill="#ebedf0" data-count="0" data-date="2019-05-28"/>
						<rect class="day" width="12" height="12" x="9" y="45" fill="#ebedf0" data-count="0" data-date="2019-05-29"/>
						<rect class="day" width="12" height="12" x="9" y="60" fill="#ebedf0" data-count="0" data-date="2019-05-30"/>
						<rect class="day" width="12" height="12" x="9" y="75" fill="#ebedf0" data-count="0" data-date="2019-05-31"/>
						<rect class="day" width="12" height="12" x="9" y="90" fill="#ebedf0" data-count="0" data-date="2019-06-01"/>
					</g>
					<g transform="translate(128, 0)">
						<rect class="day" width="12" height="12" x="8" y="0" fill="#ebedf0" data-count="0" data-date="2019-06-02"/>
						<rect class="day" width="12" height="12" x="8" y="15" fill="#ebedf0" data-count="0" data-date="2019-06-03"/>
						<rect class="day" width="12" height="12" x="8" y="30" fill="#ebedf0" data-count="0" data-date="2019-06-04"/>
						<rect class="day" width="12" height="12" x="8" y="45" fill="#ebedf0" data-count="0" data-date="2019-06-05"/>
						<rect class="day" width="12" height="12" x="8" y="60" fill="#ebedf0" data-count="0" data-date="2019-06-06"/>
						<rect class="day" width="12" height="12" x="8" y="75" fill="#ebedf0" data-count="0" data-date="2019-06-07"/>
						<rect class="day" width="12" height="12" x="8" y="90" fill="#ebedf0" data-count="0" data-date="2019-06-08"/>
					</g>
					<g transform="translate(144, 0)">
						<rect class="day" width="12" height="12" x="7" y="0" fill="#ebedf0" data-count="0" data-date="2019-06-09"/>
						<rect class="day" width="12" height="12" x="7" y="15" fill="#ebedf0" data-count="0" data-date="2019-06-10"/>
						<rect class="day" width="12" height="12" x="7" y="30" fill="#ebedf0" data-count="0" data-date="2019-06-11"/>
						<rect class="day" width="12" height="12" x="7" y="45" fill="#ebedf0" data-count="0" data-date="2019-06-12"/>
						<rect class="day" width="12" height="12" x="7" y="60" fill="#ebedf0" data-count="0" data-date="2019-06-13"/>
						<rect class="day" width="12" height="12" x="7" y="75" fill="#ebedf0" data-count="0" data-date="2019-06-14"/>
						<rect class="day" width="12" height="12" x="7" y="90" fill="#ebedf0" data-count="0" data-date="2019-06-15"/>
					</g>
					<g transform="translate(160, 0)">
						<rect class="day" width="12" height="12" x="6" y="0" fill="#ebedf0" data-count="0" data-date="2019-06-16"/>
						<rect class="day" width="12" height="12" x="6" y="15" fill="#ebedf0" data-count="0" data-date="2019-06-17"/>
						<rect class="day" width="12" height="12" x="6" y="30" fill="#ebedf0" data-count="0" data-date="2019-06-18"/>
						<rect class="day" width="12" height="12" x="6" y="45" fill="#ebedf0" data-count="0" data-date="2019-06-19"/>
						<rect class="day" width="12" height="12" x="6" y="60" fill="#ebedf0" data-count="0" data-date="2019-06-20"/>
						<rect class="day" width="12" height="12" x="6" y="75" fill="#ebedf0" data-count="0" data-date="2019-06-21"/>
						<rect class="day" width="12" height="12" x="6" y="90" fill="#ebedf0" data-count="0" data-date="2019-06-22"/>
					</g>
					<g transform="translate(176, 0)">
						<rect class="day" width="12" height="12" x="5" y="0" fill="#ebedf0" data-count="0" data-date="2019-06-23"/>
						<rect class="day" width="12" height="12" x="5" y="15" fill="#ebedf0" data-count="0" data-date="2019-06-24"/>
						<rect class="day" width="12" height="12" x="5" y="30" fill="#ebedf0" data-count="0" data-date="2019-06-25"/>
						<rect class="day" width="12" height="12" x="5" y="45" fill="#ebedf0" data-count="0" data-date="2019-06-26"/>
						<rect class="day" width="12" height="12" x="5" y="60" fill="#ebedf0" data-count="0" data-date="2019-06-27"/>
						<rect class="day" width="12" height="12" x="5" y="75" fill="#ebedf0" data-count="0" data-date="2019-06-28"/>
						<rect class="day" width="12" height="12" x="5" y="90" fill="#ebedf0" data-count="0" data-date="2019-06-29"/>
					</g>
					<g transform="translate(192, 0)">
						<rect class="day" width="12" height="12" x="4" y="0" fill="#ebedf0" data-count="0" data-date="2019-06-30"/>
						<rect class="day" width="12" height="12" x="4" y="15" fill="#ebedf0" data-count="0" data-date="2019-07-01"/>
						<rect class="day" width="12" height="12" x="4" y="30" fill="#ebedf0" data-count="0" data-date="2019-07-02"/>
						<rect class="day" width="12" height="12" x="4" y="45" fill="#ebedf0" data-count="0" data-date="2019-07-03"/>
						<rect class="day" width="12" height="12" x="4" y="60" fill="#ebedf0" data-count="0" data-date="2019-07-04"/>
						<rect class="day" width="12" height="12" x="4" y="75" fill="#ebedf0" data-count="0" data-date="2019-07-05"/>
						<rect class="day" width="12" height="12" x="4" y="90" fill="#ebedf0" data-count="0" data-date="2019-07-06"/>
					</g>
					<g transform="translate(208, 0)">
						<rect class="day" width="12" height="12" x="3" y="0" fill="#ebedf0" data-count="0" data-date="2019-07-07"/>
						<rect class="day" width="12" height="12" x="3" y="15" fill="#ebedf0" data-count="0" data-date="2019-07-08"/>
						<rect class="day" width="12" height="12" x="3" y="30" fill="#ebedf0" data-count="0" data-date="2019-07-09"/>
						<rect class="day" width="12" height="12" x="3" y="45" fill="#ebedf0" data-count="0" data-date="2019-07-10"/>
						<rect class="day" width="12" height="12" x="3" y="60" fill="#ebedf0" data-count="0" data-date="2019-07-11"/>
						<rect class="day" width="12" height="12" x="3" y="75" fill="#ebedf0" data-count="0" data-date="2019-07-12"/>
						<rect class="day" width="12" height="12" x="3" y="90" fill="#ebedf0" data-count="0" data-date="2019-07-13"/>
					</g>
					<g transform="translate(224, 0)">
						<rect class="day" width="12" height="12" x="2" y="0" fill="#ebedf0" data-count="0" data-date="2019-07-14"/>
						<rect class="day" width="12" height="12" x="2" y="15" fill="#ebedf0" data-count="0" data-date="2019-07-15"/>
						<rect class="day" width="12" height="12" x="2" y="30" fill="#ebedf0" data-count="0" data-date="2019-07-16"/>
						<rect class="day" width="12" height="12" x="2" y="45" fill="#ebedf0" data-count="0" data-date="2019-07-17"/>
						<rect class="day" width="12" height="12" x="2" y="60" fill="#ebedf0" data-count="0" data-date="2019-07-18"/>
						<rect class="day" width="12" height="12" x="2" y="75" fill="#ebedf0" data-count="0" data-date="2019-07-19"/>
						<rect class="day" width="12" height="12" x="2" y="90" fill="#ebedf0" data-count="0" data-date="2019-07-20"/>
					</g>
					<g transform="translate(240, 0)">
						<rect class="day" width="12" height="12" x="1" y="0" fill="#ebedf0" data-count="0" data-date="2019-07-21"/>
						<rect class="day" width="12" height="12" x="1" y="15" fill="#ebedf0" data-count="0" data-date="2019-07-22"/>
						<rect class="day" width="12" height="12" x="1" y="30" fill="#ebedf0" data-count="0" data-date="2019-07-23"/>
						<rect class="day" width="12" height="12" x="1" y="45" fill="#ebedf0" data-count="0" data-date="2019-07-24"/>
						<rect class="day" width="12" height="12" x="1" y="60" fill="#ebedf0" data-count="0" data-date="2019-07-25"/>
						<rect class="day" width="12" height="12" x="1" y="75" fill="#ebedf0" data-count="0" data-date="2019-07-26"/>
						<rect class="day" width="12" height="12" x="1" y="90" fill="#ebedf0" data-count="0" data-date="2019-07-27"/>
					</g>
					<g transform="translate(256, 0)">
						<rect class="day" width="12" height="12" x="0" y="0" fill="#ebedf0" data-count="0" data-date="2019-07-28"/>
						<rect class="day" width="12" height="12" x="0" y="15" fill="#ebedf0" data-count="0" data-date="2019-07-29"/>
						<rect class="day" width="12" height="12" x="0" y="30" fill="#ebedf0" data-count="0" data-date="2019-07-30"/>
						<rect class="day" width="12" height="12" x="0" y="45" fill="#ebedf0" data-count="0" data-date="2019-07-31"/>
						<rect class="day" width="12" height="12" x="0" y="60" fill="#ebedf0" data-count="0" data-date="2019-08-01"/>
						<rect class="day" width="12" height="12" x="0" y="75" fill="#ebedf0" data-count="0" data-date="2019-08-02"/>
						<rect class="day" width="12" height="12" x="0" y="90" fill="#ebedf0" data-count="0" data-date="2019-08-03"/>
					</g>
					<g transform="translate(272, 0)">
						<rect class="day" width="12" height="12" x="-1" y="0" fill="#ebedf0" data-count="0" data-date="2019-08-04"/>
						<rect class="day" width="12" height="12" x="-1" y="15" fill="#ebedf0" data-count="0" data-date="2019-08-05"/>
						<rect class="day" width="12" height="12" x="-1" y="30" fill="#ebedf0" data-count="0" data-date="2019-08-06"/>
						<rect class="day" width="12" height="12" x="-1" y="45" fill="#ebedf0" data-count="0" data-date="2019-08-07"/>
						<rect class="day" width="12" height="12" x="-1" y="60" fill="#ebedf0" data-count="0" data-date="2019-08-08"/>
						<rect class="day" width="12" height="12" x="-1" y="75" fill="#ebedf0" data-count="0" data-date="2019-08-09"/>
						<rect class="day" width="12" height="12" x="-1" y="90" fill="#ebedf0" data-count="0" data-date="2019-08-10"/>
					</g>
					<g transform="translate(288, 0)">
						<rect class="day" width="12" height="12" x="-2" y="0" fill="#ebedf0" data-count="0" data-date="2019-08-11"/>
						<rect class="day" width="12" height="12" x="-2" y="15" fill="#ebedf0" data-count="0" data-date="2019-08-12"/>
						<rect class="day" width="12" height="12" x="-2" y="30" fill="#ebedf0" data-count="0" data-date="2019-08-13"/>
						<rect class="day" width="12" height="12" x="-2" y="45" fill="#ebedf0" data-count="0" data-date="2019-08-14"/>
						<rect class="day" width="12" height="12" x="-2" y="60" fill="#ebedf0" data-count="0" data-date="2019-08-15"/>
						<rect class="day" width="12" height="12" x="-2" y="75" fill="#ebedf0" data-count="0" data-date="2019-08-16"/>
						<rect class="day" width="12" height="12" x="-2" y="90" fill="#ebedf0" data-count="0" data-date="2019-08-17"/>
					</g>
					<g transform="translate(304, 0)">
						<rect class="day" width="12" height="12" x="-3" y="0" fill="#ebedf0" data-count="0" data-date="2019-08-18"/>
						<rect class="day" width="12" height="12" x="-3" y="15" fill="#c6e48b" data-count="1" data-date="2019-08-19"/>
						<rect class="day" width="12" height="12" x="-3" y="30" fill="#ebedf0" data-count="0" data-date="2019-08-20"/>
						<rect class="day" width="12" height="12" x="-3" y="45" fill="#ebedf0" data-count="0" data-date="2019-08-21"/>
						<rect class="day" width="12" height="12" x="-3" y="60" fill="#ebedf0" data-count="0" data-date="2019-08-22"/>
						<rect class="day" width="12" height="12" x="-3" y="75" fill="#ebedf0" data-count="0" data-date="2019-08-23"/>
						<rect class="day" width="12" height="12" x="-3" y="90" fill="#ebedf0" data-count="0" data-date="2019-08-24"/>
					</g>
					<g transform="translate(320, 0)">
						<rect class="day" width="12" height="12" x="-4" y="0" fill="#c6e48b" data-count="1" data-date="2019-08-25"/>
						<rect class="day" width="12" height="12" x="-4" y="15" fill="#ebedf0" data-count="0" data-date="2019-08-26"/>
						<rect class="day" width="12" height="12" x="-4" y="30" fill="#ebedf0" data-count="0" data-date="2019-08-27"/>
						<rect class="day" width="12" height="12" x="-4" y="45" fill="#ebedf0" data-count="0" data-date="2019-08-28"/>
						<rect class="day" width="12" height="12" x="-4" y="60" fill="#ebedf0" data-count="0" data-date="2019-08-29"/>
						<rect class="day" width="12" height="12" x="-4" y="75" fill="#ebedf0" data-count="0" data-date="2019-08-30"/>
						<rect class="day" width="12" height="12" x="-4" y="90" fill="#ebedf0" data-count="0" data-date="2019-08-31"/>
					</g>
					<g transform="translate(336, 0)">
						<rect class="day" width="12" height="12" x="-5" y="0" fill="#ebedf0" data-count="0" data-date="2019-09-01"/>
						<rect class="day" width="12" height="12" x="-5" y="15" fill="#ebedf0" data-count="0" data-date="2019-09-02"/>
						<rect class="day" width="12" height="12" x="-5" y="30" fill="#ebedf0" data-count="0" data-date="2019-09-03"/>
						<rect class="day" width="12" height="12" x="-5" y="45" fill="#ebedf0" data-count="0" data-date="2019-09-04"/>
						<rect class="day" width="12" height="12" x="-5" y="60" fill="#ebedf0" data-count="0" data-date="2019-09-05"/>
						<rect class="day" width="12" height="12" x="-5" y="75" fill="#196127" data-count="10" data-date="2019-09-06"/>
						<rect class="day" width="12" height="12" x="-5" y="90" fill="#c6e48b" data-count="1" data-date="2019-09-07"/>
					</g>
					<g transform="translate(352, 0)">
						<rect class="day" width="12" height="12" x="-6" y="0" fill="#ebedf0" data-count="0" data-date="2019-09-08"/>
						<rect class="day" width="12" height="12" x="-6" y="15" fill="#7bc96f" data-count="5" data-date="2019-09-09"/>
						<rect class="day" width="12" height="12" x="-6" y="30" fill="#7bc96f" data-count="5" data-date="2019-09-10"/>
						<rect class="day" width="12" height="12" x="-6" y="45" fill="#7bc96f" data-count="5" data-date="2019-09-11"/>
						<rect class="day" width="12" height="12" x="-6" y="60" fill="#ebedf0" data-count="0" data-date="2019-09-12"/>
						<rect class="day" width="12" height="12" x="-6" y="75" fill="#ebedf0" data-count="0" data-date="2019-09-13"/>
						<rect class="day" width="12" height="12" x="-6" y="90" fill="#ebedf0" data-count="0" data-date="2019-09-14"/>
					</g>
					<g transform="translate(368, 0)">
						<rect class="day" width="12" height="12" x="-7" y="0" fill="#c6e48b" data-count="1" data-date="2019-09-15"/>
						<rect class="day" width="12" height="12" x="-7" y="15" fill="#c6e48b" data-count="1" data-date="2019-09-16"/>
						<rect class="day" width="12" height="12" x="-7" y="30" fill="#239a3b" data-count="7" data-date="2019-09-17"/>
						<rect class="day" width="12" height="12" x="-7" y="45" fill="#c6e48b" data-count="3" data-date="2019-09-18"/>
						<rect class="day" width="12" height="12" x="-7" y="60" fill="#c6e48b" data-count="2" data-date="2019-09-19"/>
						<rect class="day" width="12" height="12" x="-7" y="75" fill="#c6e48b" data-count="2" data-date="2019-09-20"/>
						<rect class="day" width="12" height="12" x="-7" y="90" fill="#ebedf0" data-count="0" data-date="2019-09-21"/>
					</g>
					<g transform="translate(384, 0)">
						<rect class="day" width="12" height="12" x="-8" y="0" fill="#c6e48b" data-count="3" data-date="2019-09-22"/>
						<rect class="day" width="12" height="12" x="-8" y="15" fill="#ebedf0" data-count="0" data-date="2019-09-23"/>
						<rect class="day" width="12" height="12" x="-8" y="30" fill="#ebedf0" data-count="0" data-date="2019-09-24"/>
						<rect class="day" width="12" height="12" x="-8" y="45" fill="#ebedf0" data-count="0" data-date="2019-09-25"/>
						<rect class="day" width="12" height="12" x="-8" y="60" fill="#c6e48b" data-count="3" data-date="2019-09-26"/>
						<rect class="day" width="12" height="12" x="-8" y="75" fill="#c6e48b" data-count="1" data-date="2019-09-27"/>
						<rect class="day" width="12" height="12" x="-8" y="90" fill="#ebedf0" data-count="0" data-date="2019-09-28"/>
					</g>
					<g transform="translate(400, 0)">
						<rect class="day" width="12" height="12" x="-9" y="0" fill="#c6e48b" data-count="2" data-date="2019-09-29"/>
						<rect class="day" width="12" height="12" x="-9" y="15" fill="#c6e48b" data-count="3" data-date="2019-09-30"/>
						<rect class="day" width="12" height="12" x="-9" y="30" fill="#c6e48b" data-count="2" data-date="2019-10-01"/>
						<rect class="day" width="12" height="12" x="-9" y="45" fill="#c6e48b" data-count="3" data-date="2019-10-02"/>
						<rect class="day" width="12" height="12" x="-9" y="60" fill="#c6e48b" data-count="1" data-date="2019-10-03"/>
						<rect class="day" width="12" height="12" x="-9" y="75" fill="#7bc96f" data-count="4" data-date="2019-10-04"/>
						<rect class="day" width="12" height="12" x="-9" y="90" fill="#ebedf0" data-count="0" data-date="2019-10-05"/>
					</g>
					<g transform="translate(416, 0)">
						<rect class="day" width="12" height="12" x="-10" y="0" fill="#ebedf0" data-count="0" data-date="2019-10-06"/>
						<rect class="day" width="12" height="12" x="-10" y="15" fill="#ebedf0" data-count="0" data-date="2019-10-07"/>
						<rect class="day" width="12" height="12" x="-10" y="30" fill="#ebedf0" data-count="0" data-date="2019-10-08"/>
						<rect class="day" width="12" height="12" x="-10" y="45" fill="#ebedf0" data-count="0" data-date="2019-10-09"/>
						<rect class="day" width="12" height="12" x="-10" y="60" fill="#ebedf0" data-count="0" data-date="2019-10-10"/>
						<rect class="day" width="12" height="12" x="-10" y="75" fill="#ebedf0" data-count="0" data-date="2019-10-11"/>
						<rect class="day" width="12" height="12" x="-10" y="90" fill="#ebedf0" data-count="0" data-date="2019-10-12"/>
					</g>
					<g transform="translate(432, 0)">
						<rect class="day" width="12" height="12" x="-11" y="0" fill="#c6e48b" data-count="2" data-date="2019-10-13"/>
						<rect class="day" width="12" height="12" x="-11" y="15" fill="#ebedf0" data-count="0" data-date="2019-10-14"/>
						<rect class="day" width="12" height="12" x="-11" y="30" fill="#ebedf0" data-count="0" data-date="2019-10-15"/>
						<rect class="day" width="12" height="12" x="-11" y="45" fill="#ebedf0" data-count="0" data-date="2019-10-16"/>
						<rect class="day" width="12" height="12" x="-11" y="60" fill="#ebedf0" data-count="0" data-date="2019-10-17"/>
						<rect class="day" width="12" height="12" x="-11" y="75" fill="#c6e48b" data-count="1" data-date="2019-10-18"/>
						<rect class="day" width="12" height="12" x="-11" y="90" fill="#ebedf0" data-count="0" data-date="2019-10-19"/>
					</g>
					<g transform="translate(448, 0)">
						<rect class="day" width="12" height="12" x="-12" y="0" fill="#c6e48b" data-count="1" data-date="2019-10-20"/>
						<rect class="day" width="12" height="12" x="-12" y="15" fill="#c6e48b" data-count="2" data-date="2019-10-21"/>
						<rect class="day" width="12" height="12" x="-12" y="30" fill="#7bc96f" data-count="4" data-date="2019-10-22"/>
						<rect class="day" width="12" height="12" x="-12" y="45" fill="#c6e48b" data-count="1" data-date="2019-10-23"/>
						<rect class="day" width="12" height="12" x="-12" y="60" fill="#ebedf0" data-count="0" data-date="2019-10-24"/>
						<rect class="day" width="12" height="12" x="-12" y="75" fill="#c6e48b" data-count="2" data-date="2019-10-25"/>
						<rect class="day" width="12" height="12" x="-12" y="90" fill="#ebedf0" data-count="0" data-date="2019-10-26"/>
					</g>
					<g transform="translate(464, 0)">
						<rect class="day" width="12" height="12" x="-13" y="0" fill="#c6e48b" data-count="1" data-date="2019-10-27"/>
						<rect class="day" width="12" height="12" x="-13" y="15" fill="#c6e48b" data-count="2" data-date="2019-10-28"/>
						<rect class="day" width="12" height="12" x="-13" y="30" fill="#ebedf0" data-count="0" data-date="2019-10-29"/>
						<rect class="day" width="12" height="12" x="-13" y="45" fill="#ebedf0" data-count="0" data-date="2019-10-30"/>
						<rect class="day" width="12" height="12" x="-13" y="60" fill="#ebedf0" data-count="0" data-date="2019-10-31"/>
						<rect class="day" width="12" height="12" x="-13" y="75" fill="#ebedf0" data-count="0" data-date="2019-11-01"/>
						<rect class="day" width="12" height="12" x="-13" y="90" fill="#c6e48b" data-count="1" data-date="2019-11-02"/>
					</g>
					<g transform="translate(480, 0)">
						<rect class="day" width="12" height="12" x="-14" y="0" fill="#ebedf0" data-count="0" data-date="2019-11-03"/>
						<rect class="day" width="12" height="12" x="-14" y="15" fill="#ebedf0" data-count="0" data-date="2019-11-04"/>
						<rect class="day" width="12" height="12" x="-14" y="30" fill="#ebedf0" data-count="0" data-date="2019-11-05"/>
						<rect class="day" width="12" height="12" x="-14" y="45" fill="#ebedf0" data-count="0" data-date="2019-11-06"/>
						<rect class="day" width="12" height="12" x="-14" y="60" fill="#ebedf0" data-count="0" data-date="2019-11-07"/>
						<rect class="day" width="12" height="12" x="-14" y="75" fill="#ebedf0" data-count="0" data-date="2019-11-08"/>
						<rect class="day" width="12" height="12" x="-14" y="90" fill="#ebedf0" data-count="0" data-date="2019-11-09"/>
					</g>
					<g transform="translate(496, 0)">
						<rect class="day" width="12" height="12" x="-15" y="0" fill="#ebedf0" data-count="0" data-date="2019-11-10"/>
						<rect class="day" width="12" height="12" x="-15" y="15" fill="#ebedf0" data-count="0" data-date="2019-11-11"/>
						<rect class="day" width="12" height="12" x="-15" y="30" fill="#ebedf0" data-count="0" data-date="2019-11-12"/>
						<rect class="day" width="12" height="12" x="-15" y="45" fill="#ebedf0" data-count="0" data-date="2019-11-13"/>
						<rect class="day" width="12" height="12" x="-15" y="60" fill="#c6e48b" data-count="3" data-date="2019-11-14"/>
						<rect class="day" width="12" height="12" x="-15" y="75" fill="#ebedf0" data-count="0" data-date="2019-11-15"/>
						<rect class="day" width="12" height="12" x="-15" y="90" fill="#ebedf0" data-count="0" data-date="2019-11-16"/>
					</g>
					<g transform="translate(512, 0)">
						<rect class="day" width="12" height="12" x="-16" y="0" fill="#ebedf0" data-count="0" data-date="2019-11-17"/>
						<rect class="day" width="12" height="12" x="-16" y="15" fill="#ebedf0" data-count="0" data-date="2019-11-18"/>
						<rect class="day" width="12" height="12" x="-16" y="30" fill="#ebedf0" data-count="0" data-date="2019-11-19"/>
						<rect class="day" width="12" height="12" x="-16" y="45" fill="#ebedf0" data-count="0" data-date="2019-11-20"/>
						<rect class="day" width="12" height="12" x="-16" y="60" fill="#c6e48b" data-count="3" data-date="2019-11-21"/>
						<rect class="day" width="12" height="12" x="-16" y="75" fill="#c6e48b" data-count="1" data-date="2019-11-22"/>
						<rect class="day" width="12" height="12" x="-16" y="90" fill="#ebedf0" data-count="0" data-date="2019-11-23"/>
					</g>
					<g transform="translate(528, 0)">
						<rect class="day" width="12" height="12" x="-17" y="0" fill="#ebedf0" data-count="0" data-date="2019-11-24"/>
						<rect class="day" width="12" height="12" x="-17" y="15" fill="#ebedf0" data-count="0" data-date="2019-11-25"/>
						<rect class="day" width="12" height="12" x="-17" y="30" fill="#ebedf0" data-count="0" data-date="2019-11-26"/>
						<rect class="day" width="12" height="12" x="-17" y="45" fill="#ebedf0" data-count="0" data-date="2019-11-27"/>
						<rect class="day" width="12" height="12" x="-17" y="60" fill="#ebedf0" data-count="0" data-date="2019-11-28"/>
						<rect class="day" width="12" height="12" x="-17" y="75" fill="#ebedf0" data-count="0" data-date="2019-11-29"/>
						<rect class="day" width="12" height="12" x="-17" y="90" fill="#ebedf0" data-count="0" data-date="2019-11-30"/>
					</g>
					<g transform="translate(544, 0)">
						<rect class="day" width="12" height="12" x="-18" y="0" fill="#ebedf0" data-count="0" data-date="2019-12-01"/>
						<rect class="day" width="12" height="12" x="-18" y="15" fill="#7bc96f" data-count="4" data-date="2019-12-02"/>
						<rect class="day" width="12" height="12" x="-18" y="30" fill="#196127" data-count="12" data-date="2019-12-03"/>
						<rect class="day" width="12" height="12" x="-18" y="45" fill="#ebedf0" data-count="0" data-date="2019-12-04"/>
						<rect class="day" width="12" height="12" x="-18" y="60" fill="#ebedf0" data-count="0" data-date="2019-12-05"/>
						<rect class="day" width="12" height="12" x="-18" y="75" fill="#ebedf0" data-count="0" data-date="2019-12-06"/>
						<rect class="day" width="12" height="12" x="-18" y="90" fill="#ebedf0" data-count="0" data-date="2019-12-07"/>
					</g>
					<g transform="translate(560, 0)">
						<rect class="day" width="12" height="12" x="-19" y="0" fill="#ebedf0" data-count="0" data-date="2019-12-08"/>
						<rect class="day" width="12" height="12" x="-19" y="15" fill="#ebedf0" data-count="0" data-date="2019-12-09"/>
						<rect class="day" width="12" height="12" x="-19" y="30" fill="#ebedf0" data-count="0" data-date="2019-12-10"/>
						<rect class="day" width="12" height="12" x="-19" y="45" fill="#ebedf0" data-count="0" data-date="2019-12-11"/>
						<rect class="day" width="12" height="12" x="-19" y="60" fill="#ebedf0" data-count="0" data-date="2019-12-12"/>
						<rect class="day" width="12" height="12" x="-19" y="75" fill="#ebedf0" data-count="0" data-date="2019-12-13"/>
						<rect class="day" width="12" height="12" x="-19" y="90" fill="#ebedf0" data-count="0" data-date="2019-12-14"/>
					</g>
					<g transform="translate(576, 0)">
						<rect class="day" width="12" height="12" x="-20" y="0" fill="#ebedf0" data-count="0" data-date="2019-12-15"/>
						<rect class="day" width="12" height="12" x="-20" y="15" fill="#ebedf0" data-count="0" data-date="2019-12-16"/>
						<rect class="day" width="12" height="12" x="-20" y="30" fill="#ebedf0" data-count="0" data-date="2019-12-17"/>
						<rect class="day" width="12" height="12" x="-20" y="45" fill="#ebedf0" data-count="0" data-date="2019-12-18"/>
						<rect class="day" width="12" height="12" x="-20" y="60" fill="#ebedf0" data-count="0" data-date="2019-12-19"/>
						<rect class="day" width="12" height="12" x="-20" y="75" fill="#ebedf0" data-count="0" data-date="2019-12-20"/>
						<rect class="day" width="12" height="12" x="-20" y="90" fill="#ebedf0" data-count="0" data-date="2019-12-21"/>
					</g>
					<g transform="translate(592, 0)">
						<rect class="day" width="12" height="12" x="-21" y="0" fill="#ebedf0" data-count="0" data-date="2019-12-22"/>
						<rect class="day" width="12" height="12" x="-21" y="15" fill="#ebedf0" data-count="0" data-date="2019-12-23"/>
						<rect class="day" width="12" height="12" x="-21" y="30" fill="#ebedf0" data-count="0" data-date="2019-12-24"/>
						<rect class="day" width="12" height="12" x="-21" y="45" fill="#c6e48b" data-count="2" data-date="2019-12-25"/>
						<rect class="day" width="12" height="12" x="-21" y="60" fill="#c6e48b" data-count="3" data-date="2019-12-26"/>
						<rect class="day" width="12" height="12" x="-21" y="75" fill="#ebedf0" data-count="0" data-date="2019-12-27"/>
						<rect class="day" width="12" height="12" x="-21" y="90" fill="#ebedf0" data-count="0" data-date="2019-12-28"/>
					</g>
					<g transform="translate(608, 0)">
						<rect class="day" width="12" height="12" x="-22" y="0" fill="#ebedf0" data-count="0" data-date="2019-12-29"/>
						<rect class="day" width="12" height="12" x="-22" y="15" fill="#ebedf0" data-count="0" data-date="2019-12-30"/>
						<rect class="day" width="12" height="12" x="-22" y="30" fill="#ebedf0" data-count="0" data-date="2019-12-31"/>
						<rect class="day" width="12" height="12" x="-22" y="45" fill="#c6e48b" data-count="3" data-date="2020-01-01"/>
						<rect class="day" width="12" height="12" x="-22" y="60" fill="#ebedf0" data-count="0" data-date="2020-01-02"/>
						<rect class="day" width="12" height="12" x="-22" y="75" fill="#ebedf0" data-count="0" data-date="2020-01-03"/>
						<rect class="day" width="12" height="12" x="-22" y="90" fill="#ebedf0" data-count="0" data-date="2020-01-04"/>
					</g>
					<g transform="translate(624, 0)">
						<rect class="day" width="12" height="12" x="-23" y="0" fill="#ebedf0" data-count="0" data-date="2020-01-05"/>
						<rect class="day" width="12" height="12" x="-23" y="15" fill="#ebedf0" data-count="0" data-date="2020-01-06"/>
						<rect class="day" width="12" height="12" x="-23" y="30" fill="#ebedf0" data-count="0" data-date="2020-01-07"/>
						<rect class="day" width="12" height="12" x="-23" y="45" fill="#ebedf0" data-count="0" data-date="2020-01-08"/>
						<rect class="day" width="12" height="12" x="-23" y="60" fill="#ebedf0" data-count="0" data-date="2020-01-09"/>
						<rect class="day" width="12" height="12" x="-23" y="75" fill="#ebedf0" data-count="0" data-date="2020-01-10"/>
						<rect class="day" width="12" height="12" x="-23" y="90" fill="#ebedf0" data-count="0" data-date="2020-01-11"/>
					</g>
					<g transform="translate(640, 0)">
						<rect class="day" width="12" height="12" x="-24" y="0" fill="#ebedf0" data-count="0" data-date="2020-01-12"/>
						<rect class="day" width="12" height="12" x="-24" y="15" fill="#ebedf0" data-count="0" data-date="2020-01-13"/>
						<rect class="day" width="12" height="12" x="-24" y="30" fill="#ebedf0" data-count="0" data-date="2020-01-14"/>
						<rect class="day" width="12" height="12" x="-24" y="45" fill="#ebedf0" data-count="0" data-date="2020-01-15"/>
						<rect class="day" width="12" height="12" x="-24" y="60" fill="#ebedf0" data-count="0" data-date="2020-01-16"/>
						<rect class="day" width="12" height="12" x="-24" y="75" fill="#ebedf0" data-count="0" data-date="2020-01-17"/>
						<rect class="day" width="12" height="12" x="-24" y="90" fill="#ebedf0" data-count="0" data-date="2020-01-18"/>
					</g>
					<g transform="translate(656, 0)">
						<rect class="day" width="12" height="12" x="-25" y="0" fill="#ebedf0" data-count="0" data-date="2020-01-19"/>
						<rect class="day" width="12" height="12" x="-25" y="15" fill="#c6e48b" data-count="2" data-date="2020-01-20"/>
						<rect class="day" width="12" height="12" x="-25" y="30" fill="#ebedf0" data-count="0" data-date="2020-01-21"/>
						<rect class="day" width="12" height="12" x="-25" y="45" fill="#ebedf0" data-count="0" data-date="2020-01-22"/>
						<rect class="day" width="12" height="12" x="-25" y="60" fill="#ebedf0" data-count="0" data-date="2020-01-23"/>
						<rect class="day" width="12" height="12" x="-25" y="75" fill="#ebedf0" data-count="0" data-date="2020-01-24"/>
						<rect class="day" width="12" height="12" x="-25" y="90" fill="#ebedf0" data-count="0" data-date="2020-01-25"/>
					</g>
					<g transform="translate(672, 0)">
						<rect class="day" width="12" height="12" x="-26" y="0" fill="#ebedf0" data-count="0" data-date="2020-01-26"/>
						<rect class="day" width="12" height="12" x="-26" y="15" fill="#ebedf0" data-count="0" data-date="2020-01-27"/>
						<rect class="day" width="12" height="12" x="-26" y="30" fill="#ebedf0" data-count="0" data-date="2020-01-28"/>
						<rect class="day" width="12" height="12" x="-26" y="45" fill="#ebedf0" data-count="0" data-date="2020-01-29"/>
						<rect class="day" width="12" height="12" x="-26" y="60" fill="#ebedf0" data-count="0" data-date="2020-01-30"/>
						<rect class="day" width="12" height="12" x="-26" y="75" fill="#ebedf0" data-count="0" data-date="2020-01-31"/>
						<rect class="day" width="12" height="12" x="-26" y="90" fill="#ebedf0" data-count="0" data-date="2020-02-01"/>
					</g>
					<g transform="translate(688, 0)">
						<rect class="day" width="12" height="12" x="-27" y="0" fill="#ebedf0" data-count="0" data-date="2020-02-02"/>
						<rect class="day" width="12" height="12" x="-27" y="15" fill="#ebedf0" data-count="0" data-date="2020-02-03"/>
						<rect class="day" width="12" height="12" x="-27" y="30" fill="#ebedf0" data-count="0" data-date="2020-02-04"/>
						<rect class="day" width="12" height="12" x="-27" y="45" fill="#7bc96f" data-count="4" data-date="2020-02-05"/>
						<rect class="day" width="12" height="12" x="-27" y="60" fill="#ebedf0" data-count="0" data-date="2020-02-06"/>
						<rect class="day" width="12" height="12" x="-27" y="75" fill="#239a3b" data-count="7" data-date="2020-02-07"/>
						<rect class="day" width="12" height="12" x="-27" y="90" fill="#ebedf0" data-count="0" data-date="2020-02-08"/>
					</g>
					<g transform="translate(704, 0)">
						<rect class="day" width="12" height="12" x="-28" y="0" fill="#ebedf0" data-count="0" data-date="2020-02-09"/>
						<rect class="day" width="12" height="12" x="-28" y="15" fill="#ebedf0" data-count="0" data-date="2020-02-10"/>
						<rect class="day" width="12" height="12" x="-28" y="30" fill="#ebedf0" data-count="0" data-date="2020-02-11"/>
						<rect class="day" width="12" height="12" x="-28" y="45" fill="#ebedf0" data-count="0" data-date="2020-02-12"/>
						<rect class="day" width="12" height="12" x="-28" y="60" fill="#ebedf0" data-count="0" data-date="2020-02-13"/>
						<rect class="day" width="12" height="12" x="-28" y="75" fill="#ebedf0" data-count="0" data-date="2020-02-14"/>
						<rect class="day" width="12" height="12" x="-28" y="90" fill="#ebedf0" data-count="0" data-date="2020-02-15"/>
					</g>
					<g transform="translate(720, 0)">
						<rect class="day" width="12" height="12" x="-29" y="0" fill="#ebedf0" data-count="0" data-date="2020-02-16"/>
						<rect class="day" width="12" height="12" x="-29" y="15" fill="#ebedf0" data-count="0" data-date="2020-02-17"/>
						<rect class="day" width="12" height="12" x="-29" y="30" fill="#c6e48b" data-count="2" data-date="2020-02-18"/>
						<rect class="day" width="12" height="12" x="-29" y="45" fill="#ebedf0" data-count="0" data-date="2020-02-19"/>
						<rect class="day" width="12" height="12" x="-29" y="60" fill="#ebedf0" data-count="0" data-date="2020-02-20"/>
						<rect class="day" width="12" height="12" x="-29" y="75" fill="#ebedf0" data-count="0" data-date="2020-02-21"/>
						<rect class="day" width="12" height="12" x="-29" y="90" fill="#ebedf0" data-count="0" data-date="2020-02-22"/>
					</g>
					<g transform="translate(736, 0)">
						<rect class="day" width="12" height="12" x="-30" y="0" fill="#ebedf0" data-count="0" data-date="2020-02-23"/>
						<rect class="day" width="12" height="12" x="-30" y="15" fill="#c6e48b" data-count="1" data-date="2020-02-24"/>
						<rect class="day" width="12" height="12" x="-30" y="30" fill="#c6e48b" data-count="1" data-date="2020-02-25"/>
						<rect class="day" width="12" height="12" x="-30" y="45" fill="#ebedf0" data-count="0" data-date="2020-02-26"/>
						<rect class="day" width="12" height="12" x="-30" y="60" fill="#ebedf0" data-count="0" data-date="2020-02-27"/>
						<rect class="day" width="12" height="12" x="-30" y="75" fill="#239a3b" data-count="9" data-date="2020-02-28"/>
						<rect class="day" width="12" height="12" x="-30" y="90" fill="#c6e48b" data-count="1" data-date="2020-02-29"/>
					</g>
					<g transform="translate(752, 0)">
						<rect class="day" width="12" height="12" x="-31" y="0" fill="#ebedf0" data-count="0" data-date="2020-03-01"/>
						<rect class="day" width="12" height="12" x="-31" y="15" fill="#ebedf0" data-count="0" data-date="2020-03-02"/>
						<rect class="day" width="12" height="12" x="-31" y="30" fill="#ebedf0" data-count="0" data-date="2020-03-03"/>
						<rect class="day" width="12" height="12" x="-31" y="45" fill="#ebedf0" data-count="0" data-date="2020-03-04"/>
						<rect class="day" width="12" height="12" x="-31" y="60" fill="#ebedf0" data-count="0" data-date="2020-03-05"/>
						<rect class="day" width="12" height="12" x="-31" y="75" fill="#ebedf0" data-count="0" data-date="2020-03-06"/>
						<rect class="day" width="12" height="12" x="-31" y="90" fill="#ebedf0" data-count="0" data-date="2020-03-07"/>
					</g>
					<g transform="translate(768, 0)">
						<rect class="day" width="12" height="12" x="-32" y="0" fill="#ebedf0" data-count="0" data-date="2020-03-08"/>
						<rect class="day" width="12" height="12" x="-32" y="15" fill="#c6e48b" data-count="1" data-date="2020-03-09"/>
						<rect class="day" width="12" height="12" x="-32" y="30" fill="#ebedf0" data-count="0" data-date="2020-03-10"/>
						<rect class="day" width="12" height="12" x="-32" y="45" fill="#ebedf0" data-count="0" data-date="2020-03-11"/>
						<rect class="day" width="12" height="12" x="-32" y="60" fill="#ebedf0" data-count="0" data-date="2020-03-12"/>
						<rect class="day" width="12" height="12" x="-32" y="75" fill="#ebedf0" data-count="0" data-date="2020-03-13"/>
						<rect class="day" width="12" height="12" x="-32" y="90" fill="#ebedf0" data-count="0" data-date="2020-03-14"/>
					</g>
					<g transform="translate(784, 0)">
						<rect class="day" width="12" height="12" x="-33" y="0" fill="#ebedf0" data-count="0" data-date="2020-03-15"/>
						<rect class="day" width="12" height="12" x="-33" y="15" fill="#ebedf0" data-count="0" data-date="2020-03-16"/>
						<rect class="day" width="12" height="12" x="-33" y="30" fill="#ebedf0" data-count="0" data-date="2020-03-17"/>
						<rect class="day" width="12" height="12" x="-33" y="45" fill="#ebedf0" data-count="0" data-date="2020-03-18"/>
						<rect class="day" width="12" height="12" x="-33" y="60" fill="#ebedf0" data-count="0" data-date="2020-03-19"/>
						<rect class="day" width="12" height="12" x="-33" y="75" fill="#ebedf0" data-count="0" data-date="2020-03-20"/>
						<rect class="day" width="12" height="12" x="-33" y="90" fill="#ebedf0" data-count="0" data-date="2020-03-21"/>
					</g>
					<g transform="translate(800, 0)">
						<rect class="day" width="12" height="12" x="-34" y="0" fill="#ebedf0" data-count="0" data-date="2020-03-22"/>
						<rect class="day" width="12" height="12" x="-34" y="15" fill="#ebedf0" data-count="0" data-date="2020-03-23"/>
						<rect class="day" width="12" height="12" x="-34" y="30" fill="#ebedf0" data-count="0" data-date="2020-03-24"/>
						<rect class="day" width="12" height="12" x="-34" y="45" fill="#ebedf0" data-count="0" data-date="2020-03-25"/>
						<rect class="day" width="12" height="12" x="-34" y="60" fill="#ebedf0" data-count="0" data-date="2020-03-26"/>
						<rect class="day" width="12" height="12" x="-34" y="75" fill="#ebedf0" data-count="0" data-date="2020-03-27"/>
						<rect class="day" width="12" height="12" x="-34" y="90" fill="#ebedf0" data-count="0" data-date="2020-03-28"/>
					</g>
					<g transform="translate(816, 0)">
						<rect class="day" width="12" height="12" x="-35" y="0" fill="#ebedf0" data-count="0" data-date="2020-03-29"/>
						<rect class="day" width="12" height="12" x="-35" y="15" fill="#ebedf0" data-count="0" data-date="2020-03-30"/>
						<rect class="day" width="12" height="12" x="-35" y="30" fill="#ebedf0" data-count="0" data-date="2020-03-31"/>
						<rect class="day" width="12" height="12" x="-35" y="45" fill="#ebedf0" data-count="0" data-date="2020-04-01"/>
						<rect class="day" width="12" height="12" x="-35" y="60" fill="#c6e48b" data-count="2" data-date="2020-04-02"/>
						<rect class="day" width="12" height="12" x="-35" y="75" fill="#ebedf0" data-count="0" data-date="2020-04-03"/>
						<rect class="day" width="12" height="12" x="-35" y="90" fill="#ebedf0" data-count="0" data-date="2020-04-04"/>
					</g>
					<g transform="translate(832, 0)">
						<rect class="day" width="12" height="12" x="-36" y="0" fill="#ebedf0" data-count="0" data-date="2020-04-05"/>
						<rect class="day" width="12" height="12" x="-36" y="15" fill="#ebedf0" data-count="0" data-date="2020-04-06"/>
						<rect class="day" width="12" height="12" x="-36" y="30" fill="#ebedf0" data-count="0" data-date="2020-04-07"/>
						<rect class="day" width="12" height="12" x="-36" y="45" fill="#ebedf0" data-count="0" data-date="2020-04-08"/>
						<rect class="day" width="12" height="12" x="-36" y="60" fill="#ebedf0" data-count="0" data-date="2020-04-09"/>
						<rect class="day" width="12" height="12" x="-36" y="75" fill="#ebedf0" data-count="0" data-date="2020-04-10"/>
						<rect class="day" width="12" height="12" x="-36" y="90" fill="#ebedf0" data-count="0" data-date="2020-04-11"/>
					</g>
					<text x="16" y="-9" class="month">Avr</text>
					<text x="76" y="-9" class="month">Mai</text>
					<text x="136" y="-9" class="month">Juin</text>
					<text x="211" y="-9" class="month">Juil</text>
					<text x="271" y="-9" class="month">Aout</text>
					<text x="331" y="-9" class="month">Sep</text>
					<text x="406" y="-9" class="month">Oct</text>
					<text x="466" y="-9" class="month">Nov</text>
					<text x="526" y="-9" class="month">Dec</text>
					<text x="601" y="-9" class="month">Jan</text>
					<text x="661" y="-9" class="month">Fevr</text>
					<text x="721" y="-9" class="month">Mars</text>
					<text text-anchor="start" class="wday" dx="-10" dy="8" style="display: none;">Dim</text>
					<text text-anchor="start" class="wday" dx="-10" dy="25">Lun</text>
					<text text-anchor="start" class="wday" dx="-10" dy="32" style="display: none;">Mar</text>
					<text text-anchor="start" class="wday" dx="-10" dy="56">Mer</text>
					<text text-anchor="start" class="wday" dx="-10" dy="57" style="display: none;">Jeu</text>
					<text text-anchor="start" class="wday" dx="-10" dy="85">Ven</text>
					<text text-anchor="start" class="wday" dx="-10" dy="81" style="display: none;">Sam</text>
				</g>
			</svg>

			</div>
      <div class="contrib-footer clearfix mt-1 mx-3 px-3 pb-1">
        <div class="float-left text-gray">
          <a href="#" data-toggle="modal" data-target="#modalHistorique">Comprendre mon historique des tests</a>.
        </div>
        <div class="contrib-legend text-gray">
          Moins
          <ul class="legend">
            <li style="background-color: #ebedf0"></li>
              <li style="background-color: #c6e48b"></li>
              <li style="background-color: #7bc96f"></li>
              <li style="background-color: #239a3b"></li>
              <li style="background-color: #196127"></li>
          </ul>
          Plus
        </div>
      </div>

    </div>
		</div>
	</div>

	<!-- The Modal -->
	<div class="modal" id="modalHistorique">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="color:black">Comptabilisation des tests</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body" style="padding: 5px; color:black">
					<div class="table-responsive">
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	
</div>


<script type="text/javascript">
	var randomScalingFactor = function() {
		return Math.round(Math.random() * 5);
	};

	var color = Chart.helpers.color;
	var configGCat = {
		type: 'radar',
		data: {
			labels: ['Bonne santé', 'Comportement approprié', 'Hébergement approprié', 'Nourriture convenable'],
			datasets: [{
				label: 'Mes données',
				backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
				borderColor: window.chartColors.red,
				pointBackgroundColor: window.chartColors.red,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}, {
				label: 'La moyenne des eleveurs de l\'application',
				backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
				borderColor: window.chartColors.blue,
				pointBackgroundColor: window.chartColors.blue,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}]
		},
		options: {
			legend: {
				position: 'top'
			},
			title: {
				display: true,
				text: 'Résultats par catégories principales'
			},
			scale: {
				ticks: {
					beginAtZero: true
				}
			}
		}
	};

	var configPCat = {
		type: 'radar',
		data: {
			labels: ['Absence de faim prolongée', 'Absence de soif prolongée', 'Confort au repos', 
			'Confort de temperature', 'Facilité de mouvement', 'Absence de blessures', 'Absence de maladies', 
			'Absence de blessures causées par certaines pratiques d\'elevage','Expression du comportement social',
			'Expression d\'autres comportements', 'Bonne relation homme-animal', 'Emotions positives'],
			datasets: [{
				label: 'Mes données',
				backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
				borderColor: window.chartColors.red,
				pointBackgroundColor: window.chartColors.red,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}, {
				label: 'La moyenne des eleveurs de l\'application',
				backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
				borderColor: window.chartColors.blue,
				pointBackgroundColor: window.chartColors.blue,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}]
		},
		options: {
			legend: {
				position: 'top'
			},
			title: {
				display: true,
				text: 'Résulats par sous-catégories'
			},
			scale: {
				ticks: {
					beginAtZero: true
				}
			}
		}
	};

	window.onload = function() {
		window.GCatRadar = new Chart(document.getElementById('canvas'), configGCat);
		window.PCatRadar = new Chart(document.getElementById('canvas2'), configPCat);
	};

	var colorNames = Object.keys(window.chartColors);


	//ajax fiches
	(function(){
		var tailleData = configPCat.data.datasets[0].data.length;
		var categories = new Array();
		for (var i=0;i<tailleData;i++){
			if (configGCat.data.datasets[0].data[i] < configGCat.data.datasets[1].data[i]){
				categories.push(configGCat.data.labels[i]);
			}
		}
		if(categories.length==0){
			$('#recommandations').html("<p>Il semblerait que nous n'ayons pas de fiches à vous recommander, votre elevage est dejà au top. Vos animaux ont de la chance !</p>");
		} else {
			categories.forEach(category => rechercheFiches(category));
		}
		
		function rechercheFiches(category){
			var post_data = {
                'category': category,
            };
			$.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>Fiches/ajaxReco/',
				data: post_data,
				success: function (data) {
					// return success                       
					$('#recommandations').append(data);
				}
			});
		}
	})();
	
</script>

