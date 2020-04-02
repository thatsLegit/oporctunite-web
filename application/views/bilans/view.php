<!-- mettre des hovers sur les datasets labels et graphique historique -->
<!-- augmenter police labels -->

<head>	
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

	.header {
		background-color: #87C165;
		width: auto;
		height: auto;
	}

	h2, h5, p{
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

	/* graphique historique */

	:root {
  --square-size: 15px;
  --square-gap: 5px;
  --week-width: calc(var(--square-size) + var(--square-gap));
}

.months { grid-area: months; }
.days { grid-area: days; }
.squares { grid-area: squares; }

.graph {
  display: inline-grid;
  grid-template-areas: "empty months"
                       "days squares";
  grid-template-columns: auto 1fr;
  grid-gap: 10px;
}


.months {
  display: grid;
  grid-template-columns: calc(var(--week-width) * 4) /* Jan */
                         calc(var(--week-width) * 4) /* Fev */
                         calc(var(--week-width) * 4) /* Mar */
                         calc(var(--week-width) * 5) /* Avr */
                         calc(var(--week-width) * 4) /* Mai */
                         calc(var(--week-width) * 4) /* Jun */
                         calc(var(--week-width) * 5) /* Jul */
                         calc(var(--week-width) * 4) /* Aout */
                         calc(var(--week-width) * 4) /* Sep */
                         calc(var(--week-width) * 5) /* Oct */
                         calc(var(--week-width) * 4) /* Nov */
                         calc(var(--week-width) * 5) /* Dec */;
}

.days,
.squares {
  display: grid;
  grid-gap: var(--square-gap);
  grid-template-rows: repeat(7, var(--square-size));
}

.squares {
  grid-auto-flow: column;
  grid-auto-columns: var(--square-size);
}


/* Other styling */

.graph {
  border: 1px #e1e4e8 solid;
  margin-top: 20px;
}

.days li:nth-child(odd) {
  visibility: hidden;
}

ul {
    list-style-type: none;
}

.squares li {
  background-color: #ebedf0;
}

.squares li[data-level="1"] {
  background-color: #c6e48b;
}

.squares li[data-level="2"] {
  background-color: #7bc96f;
}

.squares li[data-level="3"] {
  background-color: #196127;
}

/*fiches*/

#container-fiche{
            margin-top: 50px;
        }

        #fiche{
            margin: 20px;
            width: 20vw;
            height: 20vh;
            background-color: white;
            color: black;
            text-align: center;
            border-radius: 5px;
            border: solid black 1.5px;
        }

        #fiche h5{
            padding-top: 15px;
        }

        #fiche p{
            font-size: .85rem;
        }

        #fiche button{
            width: 6vw;
            height: 3vh;
            font-size: .75rem;
            border-radius: 5px;
        }

</style>
</head>

<div class="row" style="color:black;margin:25px;"><p class="h3">Mes résultats aux tests</p></div>
<div style="margin:25px;" class="container">
	<div class="row">
			<div class="col-md">
				<canvas id="canvas"></canvas>
			</div>
			<div class="col-md">
				<canvas id="canvas2"></canvas>
			</div>
		</div>
	</div>

	<div class="row">
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

	<center style="color:black;margin:25px;"><h4>Nos recommandations</h4></center>
		<div class="container" id="container-fiche">
			<div class="row" id="recommandations">
			</div>
		</div>

	<center style="color:black;margin-top:75px;"><h4>Historique des tests</h4></center>
	<div class="row">
		<div class="graph">
			<ul class="months">
			<li><p>Jan</p></li>
			<li><p>Fev</p></li>
			<li><p>Mar</p></li>
			<li><p>Avr</p></li>
			<li><p>Mai</p></li>
			<li><p>Jun</p></li>
			<li><p>Jul</p></li>
			<li><p>Aout</p></li>
			<li><p>Sep</p></li>
			<li><p>Oct</p></li>
			<li><p>Nov</p></li>
			<li><p>Dec</p></li>
			</ul>
			<ul class="days">
			<li><p>Dim</p></li>
			<li><p>Lun</p></li>
			<li><p>Mar</p></li>
			<li><p>Mer</p></li>
			<li><p>Jeu</p></li>
			<li><p>Ven</p></li>
			<li><p>Sam</p></li>
			</ul>
			<ul class="squares">
			<!-- added via javascript -->
			</ul>
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


	//graphique historique tests
	// Add squares
    const squares = document.querySelector('.squares');
    for (var i = 1; i < 365; i++) {
    const level = Math.floor(Math.random() * 4);  
    squares.insertAdjacentHTML('beforeend', `<li data-level="${level}"></li>`);
    }

	(function(){
		var tailleData = configPCat.data.datasets[0].data.length;
		var labels = new Array();
		for (var i=0;i<tailleData;i++){
			if (configGCat.data.datasets[0].data[i] < configGCat.data.datasets[1].data[i]){
				labels.push(configGCat.data.labels[i]);
			}
		}
		if(labels.length==0){
			$('#recommandations').html("<p>Il semblerait que nous n'ayons pas de fiches à vous recommander, votre elevage est dejà au top. Vos animaux ont de la chance !</p>");
		}
		labels.forEach(label => rechercheFiches(label));

		function rechercheFiches(label){
			var post_data = {
                'label': label,
            };
			$.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>Fiches/ajaxReco/',
				data: post_data,
				success: function (data) {
					// return success
					if (data.length > 0) {                         
						$('#recommandations').append(data);
					}
				}
			});
		}
	})();
	
</script>

