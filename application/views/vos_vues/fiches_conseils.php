
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


    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <script src="<?php echo base_url(); ?>/public/js/starrr.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/starrr.css">

    <link href="<?php echo base_url(); ?>/public/css/style.css" rel="stylesheet">

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
        
        label {
            margin: 40px;
        }
        
        .mybtn1 {
            border: none;
            border-radius: 50px;
            background-color: #ffffff;
            color: #87C165;
            width: 300px;
            padding: 10px;
            margin-top: 20px;
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .mybtnIMP {
            border: none;
            border-radius: 50px;
            background-color: #ffffff;
            color: grey;
            width: 300px;
            padding: 10px;
            margin-top: 20px;
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .btnsearch {
            margin: 0;
            width: 50px;
            height: 70px;
            text-align: center;
            background-color: white;
            border: none;
            border-radius: 6px;
        }
        
        .zone_text {
            color: ;
            width: 700px;
            height: 400px;
            text-align: center;
            background-color: white;
            border: 1px solid;
            border-radius: 6px;
        }
        
        .container1 {
            padding: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        
        .container2 {
            padding: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 50px;
        }
        
        select {
            width: 300px;
            border-radius: 5px;
            height: 50px;
        }
        
        #vfiches {
            margin-top: 50px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        
        .notation {
            padding: 20px;
        }
        
        img.ribbon {
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            border: 0;
            cursor: pointer;
        }
        
        .container {
            margin-top: 60px;
            text-align: center;
            max-width: 450px;
        }
        
        input {
            width: 30px;
            margin: 10px 0;
        }
    </style>

</head>

<body>

    





    <div id="main">
        <div class="container-fluid">
            <h4 class="text-center">Titres Fiches conseils</h4>
            <div id="vfiches" class="text-center">

                <input type="" class="zone_text" />
                <div class="notation">
                    <div class="note">
                        <h5>Note globale :</h5>


                        <div class='starrr' id='star1'></div>
                        <div>&nbsp;
                            <span class='your-choice-was1' style='display: none;'>
        Votre note est de <span class='choice1'></span>.
                            </span>
                        </div>
                    </div><br>
                    <div class="note">
                        <h5>Votre note :</h5>
                        <div class='starrr' id='star2'></div>
                        <div>&nbsp;
                            <span class='your-choice-was2' style='display: none;'>
        Votre note est de <span class='choice2'></span>.
                            </span>
                        </div>
                    </div>






                    <script>
                        $('#star1').starrr({
                            change: function(e, value) {
                                if (value) {
                                    $('.your-choice-was1').show();
                                    $('.choice1').text(value);
                                } else {
                                    $('.your-choice-was1').hide();
                                }
                            }
                        });
                        $('#star2').starrr({
                            change: function(e, value) {
                                if (value) {
                                    $('.your-choice-was2').show();
                                    $('.choice2').text(value);
                                } else {
                                    $('.your-choice-was2').hide();
                                }
                            }
                        });
                    </script>
                    <script type="text/javascript">
                        (function(i, s, o, g, r, a, m) {
                            i['GoogleAnalyticsObject'] = r;
                            i[r] = i[r] || function() {
                                (i[r].q = i[r].q || []).push(arguments)
                            }, i[r].l = 1 * new Date();
                            a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                            a.async = 1;
                            a.src = g;
                            m.parentNode.insertBefore(a, m)
                        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                        ga('create', 'UA-39205841-5', 'dobtco.github.io');
                        ga('send', 'pageview');
                    </script>

                    <div>
                        <form action="" method="POST">
                            <button type="submit" class=" btn btn-block mybtn1 btn-success">Plus de details</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="container2">
                    <div>
                        <form action="http://localhost/codeigniter/index.php/elevage/affiche_home_elevage.html" method="POST">
                            <button type="submit" class=" btn btn-block mybtn1 btn-success">Précedent</button>
                        </form>
                    </div>
                    <div>
                        
                            <button type="submit" class=" btn btn-block mybtnIMP btn-success" onclick="window.print()">Imprimer </button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>


