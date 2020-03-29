
<!doctype html>
<html>

<head>
	<title>Radar Chart</title>
	
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
	</style>
	<div style="width:65%">
		<canvas id="canvas"></canvas>
	</div>
	<!-- <button id="randomizeData">Randomize Data</button>
	<button id="addDataset">Add Dataset</button>
	<button id="removeDataset">Remove Dataset</button> -->
	<button id="addData">Add Data</button>
	<button id="removeData">Remove Data</button>
	<script>
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 5);
		};

		var color = Chart.helpers.color;
		var config = {
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
						randomScalingFactor(),
						randomScalingFactor()
					]
				}]
			},
			options: {
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Mes résultats de test'
				},
				scale: {
					ticks: {
						beginAtZero: true
					}
				}
			}
		};

		window.onload = function() {
			window.myRadar = new Chart(document.getElementById('canvas'), config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myRadar.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[config.data.datasets.length % colorNames.length];
			var newColor = window.chartColors[colorName];

			var newDataset = {
				label: 'Dataset ' + config.data.datasets.length,
				borderColor: newColor,
				backgroundColor: color(newColor).alpha(0.2).rgbString(),
				pointBackgroundColor: newColor,
				data: [],
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			config.data.datasets.push(newDataset);
			window.myRadar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (config.data.datasets.length > 0) {
				config.data.labels.push('dataset #' + config.data.labels.length);

				config.data.datasets.forEach(function(dataset) {
					dataset.data.push(randomScalingFactor());
				});

				window.myRadar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myRadar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			config.data.labels.pop(); // remove the label first

			config.data.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myRadar.update();
		});
	</script>
