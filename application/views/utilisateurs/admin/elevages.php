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
        .pagination-links{
            margin:30px 0;
        }
        .pagination-links strong{
            padding: 8px 13px;
            margin:5px;
            background: #f4f4f4;
            border: 1px #ccc solid;
        }
        /*the one your on is not a link*/
        a.pagination-link{
            padding: 8px 13px;
            margin:5px;
            background: #f4f4f4;
            border: 1px #ccc solid;
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
            margin: 10px 0px 50px 0px
        }
    </style>
</head>

<div id="main" class="container">
    <div class="row">
        <div class="col d-flex justify-content-center text-center">
            <label for="search_data" style="color:black;">Recherchez un élevage !</label>
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
            <input style="margin-left:5px" class="form-control" name="search_data" id="search_data" type="text" onkeyup="ajaxKeyWord()" placeholder=" Nom de l'élevage">   
        </div>
    </div>
    <div id="default">
        <div class="row">
            <div class="col">
                <h4>Élevages possédant un compte O'porctunité :</h4><br>          
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Elevage</th>
                            <th>Numéro eleveur</th>
                            <th>Taille</th>
                            <th>Adresse</th>
                            <th>Code Postal</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($elevage as $e){
                                echo '<tr>
                                        <td>'.$e['nomElevage'].'</td>
                                        <td>'.$e['numEleveur'].'</td>
                                        <td>'.$e['tailleElevage'].'</td>
                                        <td>'.$e['adresse'].'</td>
                                        <td>'.$e['codePostal'].'</td>
                                        <td>'.$e['email'].'</td>
                                        <td>'.$e['telephone'].'</td>
                                        <td>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                                                <button onclick="startTimer(\''.$e['nomElevage'].'\', \'elevage\')" class="btn btn-danger">Bannir élevage</button>
                                            </a>
                                        </td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>
                <div class="pagination-links">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div> 
    </div>
    <div id="search_results"></div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color:red;font-weight:bold">Avertissement</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body" style="padding: 15px; color:black">
                    <p id="modal-body-text"></p>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <form id="bannir-form" action="<?php echo base_url(); ?>utilisateurs/bannir" method="post">
                        <input id="nom" name="nom" type="text" hidden>
                        <input id="type" name="type" type="text" hidden>
                        <button id="bannir" onclick="submitForm();buttonDisabler()" class="btn btn-danger" type="submit" disabled>Bannir</button>
                    </form>
                    <button type="button" onclick="timerCleaner();countDownCleaner();buttonDisabler()" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const startTimer = (nom, type) => {
        window.utilisateur = nom;
        window.type_utilisateur = type;
        document.getElementById("modal-body-text").innerHTML = "Etes-vous sûr de vouloir bannir définitivement l\'utilisateur <br><strong>" + utilisateur + "</strong>?";
        document.getElementById("nom").value = utilisateur;
        document.getElementById("type").value = type_utilisateur;

        document.getElementById("bannir").innerHTML = 'Bannir (3)';

        window.counter = 1;
        window.timer = setInterval(() => {
            if(counter == 1 || counter == 2){
                document.getElementById("bannir").innerHTML = 'Bannir ('+ parseInt(3 - counter) +')';
            } else {
                document.getElementById("bannir").innerHTML = 'Bannir';
                timerCleaner();
            } 
            counter++;     
        }, 1000);

        window.countDown = setTimeout(() => {
            document.getElementById("bannir").removeAttribute("disabled");
        }, 3000);
    }

    const buttonDisabler = () => {
        document.getElementById("bannir").disabled = true;
    }

    const timerCleaner = () => {
        clearInterval(timer);
        counter = 1;
    }

    const countDownCleaner = () => {
        clearTimeout(countDown);
    }
</script>

<script>

    const tooltips = () => {
        $('[data-toggle="tooltip"]').tooltip()
    };

    const submitForm = () => {
        document.getElementById("bannir-form").submit();
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
                url: "<?php echo base_url(); ?>utilisateurs/adminRechercheElevage",
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