<head>	
	<script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
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

	.button1 {
		display: inline;
		padding: 10px;
	}

	.button2 {
		display: inline;
		padding: 10px;
	}

	.button-box {
		width:100%;
		text-align:center;
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

</style>
</head>

<center style="color:black;margin:25px;"><h3>Mes résultats aux tests</h3></center>
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
	
	<center style="color:black;margin:25px;"><h4>Comment interpreter ces résultats ?</h4></center>
	<div class="row">
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
</div>

 

<script>
	var randomScalingFactor = function() {
		return Math.round(Math.random() * 5);
	};

	var color = Chart.helpers.color;
	var configGCat = {
		type: 'radar',
		data: {
			labels: ['Bonne santé', 'Comportement approprié', 'Hébergement approprié', 'Nourriture convenable'],
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
</script>
