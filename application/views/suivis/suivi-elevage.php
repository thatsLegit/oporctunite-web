<head>
    <style>
        body {
            background: whitesmoke;
            color: #818181;
            margin: 0;
            padding: 0;
            font-family: "Montserrat",Arial, Helvetica, sans-serif;
        }
        h2, h5 {
            color: #818181;
        }
        #menu-accueil {
            background-color: whitesmoke;
            margin: auto;
            display: block;
            margin-top: 10vh;
            margin-bottom: 10vh;
        }
        #main {
            margin-top:120px;
            padding: 10px;
        }
    </style>
    <style>
        input[type=text] {
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
            border-radius: 20px;
        }
        input:focus, textarea:focus, select:focus {
            outline: none;
        }
        .barre-de-recherche {
            margin: 10px 0px 50px 0px,
        }
        #barre-de-recherche {
            min-height: 650px;
        }
    </style>
</head>

<div class="container" id='main'>

    <div class="row">
        <div class="col-12">
            <h4 style="margin:10px 0px 40px 0px;">Mon suivi vétérinaire</h4>   
        </div>
    </div> 
    <?php if(empty($suivi_veterinaire)){
        echo '
            <div class="row">
                <div class="col-12">
                    <p style="margin-bottom:30px">
                        Votre élevage n\'est pour l\'instant pas suivi.<br><br>
                        Trouvez facilement votre vétérinaire porcin sur O\'porctunité dans notre outil de recherche!
                    </p> 
                    <a href="#barre-de-recherche"><button class="btn btn-info" type="button">Lancer une recherche</button></a>
                </div>
            </div>
            ';
    } else {
        echo '
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Cabinet</th>
                                    <th>Code Postal</th>
                                    <th> &nbsp </th>
                                </tr>
                            </thead>
                            <tbody>';
                                foreach($suivi_veterinaire as $suivi){
                                    echo '
                                        <tr>
                                            <td>'.$suivi['nomCabinet'].'</td>
                                            <td>'.$suivi['codePostal'].'</td>
                                            <td>
                                                <button class="btn btn-info" type="submit" class="btn btn-success">Plus d\informations</button>
                                            </td>
                                        </tr>
                                        ';
                                }
                            echo '</tbody>
                        </table>
                    </div>
                </div>
            </div>
            ';
    }?>

    <div class="row">
        <div class="col-12">
            <h4 style="margin:60px 0px 30px 0px;">Mes demandes de suivi</h4>   
        </div>
    </div>
    <?php if(empty($demandes_suivi)){
        echo '
            <div class="row">
                <div class="col-12">
                    <p>
                        Aucune demande de suivi en cours.
                    </p> 
                </div>
            </div>
            ';
    } else {
        echo '
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Cabinet</th>
                                    <th>Code Postal</th>
                                    <th>Etat de la demande</th>
                                    <th> &nbsp </th>
                                </tr>
                            </thead>
                            <tbody>';
                                foreach($demandes_suivi as $demande){
                                    echo validation_errors();
                                    echo form_open('suivis/annuler_supprimer_suivi');
                                        echo '
                                            <tr>
                                                <td>'.$demande['nomCabinet'].'</td>
                                                <td>'.$demande['codePostal'].'</td>
                                                <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$demande['numVeterinaire'].'" hidden>
                                                <td>
                                                    <button type="submit" class="btn btn-warning">Annuler demande</button>
                                                </td>
                                            </tr>
                                    </form>';
                                };
                            echo '</tbody>
                        </table>
                    </div>
                </div>
            </div>
            ';
    }?>

    <section id="barre-de-recherche">
        <div class="row">
            <div class="col d-flex justify-content-center text-center">
                <label for="search_data" style="color:black;margin-top:50px">Recherchez un vétérinaire !</label>
            </div>
        </div>
        <div class="form-group row justify-content-center barre-de-recherche">
            <div class="col-6 d-flex justify-content-center text-center">
                <button onclick="refreshing()" type="button" class="btn btn-light btn-sm" data-toggle="tooltip" data-placement="left" title="Réinitialiser">
                    <svg class="bi bi-arrow-clockwise" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.17 6.706a5 5 0 017.103-3.16.5.5 0 10.454-.892A6 6 0 1013.455 5.5a.5.5 0 00-.91.417 5 5 0 11-9.375.789z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M8.147.146a.5.5 0 01.707 0l2.5 2.5a.5.5 0 010 .708l-2.5 2.5a.5.5 0 11-.707-.708L10.293 3 8.147.854a.5.5 0 010-.708z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <input style="margin-left:5px" class="form-control" name="search_data" id="search_data" type="text" onkeyup="ajaxKeyWord()" placeholder=" Nom du cabinet">   
            </div>
        </div>
        <div id="default"></div>
        <div id="search_results"></div>
    </section>

</div>


<script>
    const tooltips = () => {
        $('[data-toggle="tooltip"]').tooltip()
    };

    const ajaxDemande = (numVeterinaire) => {
        var post_data = {
            'search_data': numVeterinaire,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
            
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>suivis/demander_suivi",
            data: post_data,
            success: (() => location.reload())
        });
    }

    function refreshing(){
        var text = $('#search_data').val();
        if(text.length != 0){
            $('#search_data').val('');
            $('#search_results').hide();
            $('#default').show();
        }
    }

    function ajaxKeyWord(){
        var input_data = $('#search_data').val();

        if (input_data.length === 0) {
            $('#search_results').hide();
            $('#default').show();
        } else {
            var post_data = {
                'search_data': input_data,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>suivis/EleveurRechercheVeterinaire",
                data: post_data,
                success: (data => {
                    $('#default').hide();
                    $('#search_results').html(data);
                    $('#search_results').show();                                
                })
            });
        }
    }
</script>