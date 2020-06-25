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
        img { 
            max-width: 200px;
            max-height: 200px;
            margin-bottom: 30px;
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
            <div id="infoSuiviTermine"></div>
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
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#profilVeto" data-backdrop="static" data-keyboard="false">
                                                    <button 
                                                        type="button" 
                                                        onclick="vetoSelection(\''.$suivi['numVeterinaire'].'\', \''.$suivi['nomCabinet'].'\', \''.$suivi['adresse'].'\', \''.$suivi['utilisateurPhoto'].'\', \''.$suivi['ville'].'\', \''.$suivi['telephone'].'\', \''.$suivi['email'].'\')" 
                                                        class="btn btn-info">
                                                        Gérer le suivi
                                                    </button>
                                                </a>
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
            <div style="margin:60px 0px 30px 0px;" id="infoDemandeReussie"></div>
            <h4 style="margin:20px 0px 30px 0px;">Mes demandes de suivi</h4>   
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
                                                    <button onclick="(() => sessionStorage.demandeAnnulee = true)()" type="submit" class="btn btn-warning">Annuler demande</button>
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


    <!-- The Modal -->
    <div class="modal fade" id="profilVeto">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 id="nomCabinet" class="modal-title w-100 text-center" style="color:rgb(0,195,119)"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body w-100 text-center" style="padding: 15px; color:black">
                    <img id="utilisateurPhoto" alt="Image de Profil" />
                    <p id="ville"></p>
                    <p id="adresse"></p><br>
                    <p id="email"></p>
                    <p id="telephone"></p>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer justify-content-center">
                    <form id="nePlusSuivre-form" action="<?php echo base_url(); ?>suivis/annuler_supprimer_suivi" method="post">
                        <input id="numVeto" name="numVeterinaire" type="text" hidden>
                        <button onclick="submitForm();(() => sessionStorage.suiviAnnule = true)()" class="btn btn-danger" type="submit">Ne plus suivre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    const tooltips = () => {
        $('[data-toggle="tooltip"]').tooltip()
    };

    const submitForm = () => {
        document.getElementById("nePlusSuivre-form").submit();
    }

    const ajaxDemande = (numVeterinaire) => {
        var post_data = {
            'search_data': numVeterinaire,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
            
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>suivis/demander_suivi",
            data: post_data,
            success: (() => {
                sessionStorage.demandeReussie = true;
                location.reload();
            })
        });
    }
    
    $( function () {
            if (sessionStorage.demandeReussie) {
                document.getElementById('infoDemandeReussie').innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Demande enregistrée!</strong> <button type="button" onclick="storageCleaner()" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>'
                sessionStorage.demandeReussie = false;
            }
            if (sessionStorage.demandeAnnulee) {
                document.getElementById('infoDemandeReussie').innerHTML = '<div class="alert alert-info alert-dismissible fade show" role="alert"> <strong>Demande annulée!</strong> <button type="button" onclick="storageCleaner()" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>'
                sessionStorage.demandeReussie = false;
            }
            if (sessionStorage.suiviAnnule) {
                document.getElementById('infoSuiviTermine').innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Suivi terminé!</strong> <button type="button" onclick="storageCleaner()" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>'
                sessionStorage.demandeReussie = false;
            }
        } 
    );

    const storageCleaner = () => {
        sessionStorage.clear();
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

        if (input_data.length < 3) {
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

    const vetoSelection = (numVeterinaire, nomCabinet, adresse, utilisateurPhoto, ville, telephone, email) => {
        window.numVeterinaire = numVeterinaire;
        window.nomCabinet = nomCabinet;
        window.adresse = adresse;
        window.utilisateurPhoto = utilisateurPhoto;
        window.ville = ville;
        window.telephone = telephone;
        window.email = email;
        document.getElementById("numVeto").value = window.numVeterinaire;
        document.getElementById("nomCabinet").innerHTML = "<strong>" + window.nomCabinet + "</strong>";
        document.getElementById("ville").innerHTML = "<strong>" + window.ville + "</strong>";
        document.getElementById("adresse").innerHTML = "<strong>" + window.adresse + "</strong>";
        document.getElementById("email").innerHTML = "<strong>" + window.telephone + "</strong>";
        document.getElementById("telephone").innerHTML = "<strong>" + window.email + "</strong>";
        document.getElementById("utilisateurPhoto").src = "<?php echo base_url().'assets/img/photos/'?>" + window.utilisateurPhoto;
    }
</script>