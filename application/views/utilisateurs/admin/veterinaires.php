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
</head>


<div id="main" class="container">
    <div class="container" style="margin-top:30px;">
        <h4>Vétérinaires possédant un compte O'porctunité :</h4>
        <br>          
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Cabinet</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($veterinaire as $v){
                        echo '<tr>
                            <td>'.$v['nomCabinet'].'</td>
                            <td>'.$v['adresse'].'</td>
                            <td>'.$v['codePostal'].'</td>
                            <td>'.$v['email'].'</td>
                            <td>'.$v['telephone'].'</td>
                            <td>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                                    <button onclick="startTimer(\''.$v['nomCabinet'].'\', \'veterinaire\')" class="btn btn-danger">Bannir vétérinaire</button>
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

    //Form submission
    const submitForm = () => {
        document.getElementById("bannir-form").submit();
    }
</script>