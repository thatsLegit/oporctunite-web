<head>
    <style>
       body{
            margin: 0;
            padding: 0;
            background-image: url("<?php echo base_url(); ?>assets/img/pigtheme.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Montserrat", Arial, Helvetica, sans-serif;
        }

        #main {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-content: center;    
        }
        
        .menu{
            background-color: rgba(255,255,255,0.8);
            padding: 20px;
            width: 550px;
            border-radius: 15px;
        }
        .title{
            font-size: 1.7em;
            font-weight: 700 !important;
            color: #818181;
        }

        h2{
            padding: 25px;
            margin-top: 25px;
            margin-bottom: 50px;
        }

        label{
            color: #818181;
            margin-top: 5
        }
        
        .zone_text{
            color: #87C165;
            padding: 13px;
            width: 200px;
            border-radius: 5px;
             font-size: 1em;
            font-weight: 700 !important;
        }

        #container-profil{
            margin-top: 4vh;
        }

        #imageProfil{
            height: 125px;
            width: auto;
            margin-top: -3vh;
        }
    </style>
</head>

<body>
    <div id="main" class="text-center">
        <div class="menu" id="menu-accueil">
            <h2 class="title">Bienvenue !</h2>
            <div id="container-profil">
                <img name="imageProfil" id="imageProfil" src="<?php echo '../assets/img/photos/'.$this->session->userdata['utilisateurPhoto']?>" alt="Image de Profil">
            </div>
            <div id="container-profil">
                <label class="">Nom :</label><br>
                <label class="zone_text">
                    <?php 
                        if($this->session->userdata('connecte')) :
                            echo $this->session->userdata('nom');
                        endif
                    ?>
                </label>
            </div>
            <div id="container-profil">
                <label class="">Adresse du cabinet :</label><br>
                <label class="zone_text">
                    <?php 
                        echo $this->session->userdata['adresse'];
                        echo '<br>';
                        echo $this->session->userdata['codePostal'];
                        echo '<br>';
                        echo $this->session->userdata['ville'];
                    ?>
                </label>
            </div>
             <div id="container-profil">
                <label class="">Nombre d'elevage suivis :</label><br>
                <label class="zone_text">
                  
                </label>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>