<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>O'porctunité Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="<?php echo base_url(); ?>/public/css/style.css" rel="stylesheet">
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
    <style>
        body {
            background: whitesmoke;
            margin: 0;
            padding: 0;
            color: grey;
        }

        h4 {
            margin-top: 20px;
            margin-bottom: 20px;
        }


        .mybtn {
            border: none;
            border-radius: 50px;
            background-color: #87C165;
            width: 300px;
            padding: 10px;
            margin-top: 20px;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .mybtn1 {
            border: none;
            border-radius: 50px;
            background-color: #ffffff;
            color: #87C165;
            width: 200px;
            padding: 10px;
            margin-top: 20px;
            font-size: 20px;
            margin-bottom: 10px;
        }

        #title {
            font-size: 1.7em;
            font-weight: 700 !important;
            opacity: 0.7;
        }

        .zone_text {
            width: 1000px;
            ;
            height: auto;
            text-align: center;
            background-color: white;
            border-radius: 5px;
        }
    </style>

</head>

<body>




    <div id="main">
        <div class="container-fluid">
            <h4 id="title" class="text-center">Bilan de l'ensemble des tests</h4>
            <h4>Graphique :</h4>
            <h5></h5>

            <div class="text-center">
                <label class="zone_text">
                    <div style="width:100%">
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
                                    'Absence de blessures causées par certaines pratiques d\'elevage', 'Expression du comportement social',
                                    'Expression d\'autres comportements', 'Bonne relation homme-animal', 'Emotions positives'
                                ],
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
                </label>

            </div>

            <div>

                <button type="submit" class=" btn btn-block mybtn1 btn-success" onclick="window.print()">Imprimer </button>

            </div>
            <div>

                <button type="submit" class=" btn btn-block mybtn btn-success">Accueil </button>

            </div>


        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>


