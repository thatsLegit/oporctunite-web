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
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            background: whitesmoke;
            margin: 0;
            padding: 0;
            color: grey
        }

        .header {
            background-color: #87C165;
            width: auto;
            height: auto;
        }

        #logo {
            font-family: Apple Chancery, cursive;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 10px;

        }

        li {
            font-family: cursive;
            background-color: white;
            margin: 5px;
            width: 200px;
            padding: 5px;
            text-align: center;
            border-radius: 5px;
        }

        #main {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-content: center;

        }

        .title {
            font-size: 1.7em;
            font-weight: 700 !important;
            opacity: 0.7;
        }

        .text {
            font-size: 1em;
            font-weight: 700 !important;
            opacity: 0.7;
        }

        h2 {
            padding: 25px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .zone_text {
            color: #87C165;
            padding: 13px;
            width: 700px;
            background-color: white;
            border-radius: 5px;
            font-size: 1em;
            font-weight: 700 !important;

        }

        .mybtn {
            border: none;
            border-radius: 50px;
            background-color: #87C165;
            width: 300px;
            padding: 10px;
            margin-top: 10px;
            margin-left: 20px;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        #title {
            font-size: 1.7em;
            font-weight: 700 !important;
            color: #818181;
        }
        .infosVeto {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
         .infos {
          margin-left: 30px;
        }
        
        .container {
            margin: 0;
            border: 1px solid;
            height: 150px;
            width: 150px;
            background: #fff;
        }
    </style>

</head>

<body>

    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-lightgreen">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="logo">
                <h3>O'porctunité</h3>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="accueil_veto.html">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="fiches_conseil_search.html">Consulter Fiches<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Consulter élevages<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contacts <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="#"></a>
        </nav>
    </div>




    <div id="main">
        <div class="menu">
            <h3 class="text-center">Profils de l'élevage</h3>
            <h2 class="text-center" id="title">$nomElevage</h2>

            <div class="infosVeto">
                <div class="container">
                    <h5 class="text-center">recup $nomPhoto</h5>
                </div>
                <div class="infos">
                    <div>
                        <label class="text">$departement :</label><br>
                    </div>
                    <div>
                        <label class="text">$adresse</label><br>
                    </div>
                    <div>
                        <label class="text">$tailleElevage</label><br>
                    </div>
                    <div>

                        <label class="text">$email</label><br>
                    </div>
                    <div>
                        <label class="text">$numtel</label><br>
                    </div>

                </div>
            </div>
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
                 <div class="text-center">
                <button type="submit" class=" btn btn-block mybtn1 btn-success">Retour aux recherches</button>
            </div>
            </div>

           

        </div>

    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>
