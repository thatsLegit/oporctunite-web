<head>
    <style>
        body {
            background-image: url("<?php echo base_url(); ?>assets/img/pigtheme.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Montserrat", Arial, Helvetica, sans-serif;
        }
        #main {
            margin-top:90px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-content: center;    
        }
        .menu {
            background-color: rgba(255,255,255,0.9);
            padding: 20px;
            width: 550px;
            border-radius: 15px;
        }     
        h2 {
            padding: 25px;
            margin-top: 25px;
            margin-bottom: 50px;
        }
        label {
            color: #818181;
            margin-top: 5
        }    
        .zone_text {
            color: #87C165;
            padding: 13px;
            width: 200px;
            border-radius: 5px;
            font-size: 1em;
            font-weight: 700 !important;
        }
        #container-profil {
            margin-top: 4vh;
        }
        #imageProfil {
            height: 200px;
            width: 200px;
            margin-top: -3vh;
        }
    </style>
</head>

<div id="main" class="text-center">
    <div class="menu" id="menu-accueil">
        <div id="container-profil">
            <img name="imageProfil" id="imageProfil" src="<?php echo base_url().'/assets/img/photos/'.$this->session->userdata['utilisateurPhoto']?>" alt="Image de Profil">
        </div>
        <div id="container-profil">
            <label class="">Nom d'élevage :</label><br>
            <label class="zone_text">
                <?php 
                    if($this->session->userdata('connecte')) :
                        echo $this->session->userdata('nom');
                    endif
                ?>
            </label>
        </div>
        <div id="container-profil">
            <label>Emplacement de l'elevage :</label><br>
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
            <label class="">Taille de l'élevage :</label><br>
            <label class="zone_text"> 
                <?php 
                    foreach ($tailleElevage as $taille) : 
                        echo $taille['tailleElevage'];
                    endforeach;
                ?>
            </label>
        </div>
    </div>
</div>
