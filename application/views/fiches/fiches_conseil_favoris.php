<head>
    <style> 
        ::selection{ background-color: #E13300; color: white; }
        ::moz-selection{ background-color: #E13300; color: white; }
        ::webkit-selection{ background-color: #E13300; color: white; }
        body {
            margin: 0;
            padding: 0;
            background-image: url("<?php echo base_url(); ?>assets/img/pigtheme.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Montserrat", Arial, Helvetica, sans-serif;
        }
        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }
        /* start (custom style) */
        input[type=text] {
            width: 350px;
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
            border-radius: 20px;
        }
        label {
            margin: 40px;
        }
        h4 {
            color: grey;
            margin-top: 20px;
            margin-bottom: 50px;
        }
        h6 {
            color: black;
        }
        .mybtn {
            border: none;
            border-radius: 50px;
            width: 200px;
            padding: 10px;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .zone_text {
            color: #87C165;
            width: 300px;
            height: 70px;
            text-align: center;
            background-color: white;
            border: none;
            border-radius: 6px;

        }
        #container1 {
            padding: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        select {
            width: 300px;
            border-radius: 5px;
            height: 50px;
            margin-bottom: 50px;
        }
        #main {
            margin-top:90px;
            padding: 10px; 
        }
        #container-fiche {
            margin-top: 50px;
        }
        #fiche {
            margin: 20px;
            width: 180px;
            height: 200px;
            background-color: white;
            color: black;
            text-align: center;
            border-radius: 5px;
            border: solid black 1.5px;
        }
        #fiche h5 {
            padding:auto;
        }
        #fiche p {
            padding:auto;
        }
        #fiche button {
            width: 80px;
            height: 40px;
            font-size: .75rem;
            border-radius: 5px;
        }
        #fiche button:hover {
            background-color:#86cd23;
            transition: 0.5s;
        } 
    </style>
</head>

<div class="container" id="main">
    <div class="row">
            <div class="col">
                <div class="text-center">

                    <h6>Selectionnez une categorie :</h6>

                    <button onclick="refreshing()" type="button" class="btn btn-light btn-sm" data-toggle="tooltip" data-placement="left" title="Rafraichir">
                        <svg class="bi bi-arrow-clockwise" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3.17 6.706a5 5 0 017.103-3.16.5.5 0 10.454-.892A6 6 0 1013.455 5.5a.5.5 0 00-.91.417 5 5 0 11-9.375.789z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M8.147.146a.5.5 0 01.707 0l2.5 2.5a.5.5 0 010 .708l-2.5 2.5a.5.5 0 11-.707-.708L10.293 3 8.147.854a.5.5 0 010-.708z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <select class="select" name="categ" id="categ" onchange="ajaxCateg()">
                        <option value="1" hidden class="statut">Catégories</option>
                        <?php
                            foreach($categoriesG as $c){
                                echo '<option value = "'.$c['nomCategorieG'].'">'.$c['nomCategorieG'].'</option>';
                            }
                        ?>
                    </select>   
                </div>
            </div>
        </div>

    <div class="container" id="container-fiche">  
        
        <div class="row"  id="defaultList">
                <?php
                    foreach($fiches as $fiche) :
                        echo '  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" id="fiche">
                                    <div style="padding:auto;margin:auto;">
                                        <form action="'; echo base_url() . "fiches/read";   echo '" method="post">
                                            <input name="titre_fiche" type="text" value="'.$fiche['titreFiche'].'" hidden>
                                            <h5 class="text-center">'.$fiche['titreFiche'].'</h5>
                                            <p class="text-center">'.$fiche['nomCategorieG'].'</p>
                                            <button type="submit" id="fiche-button" value="'.$fiche['titreFiche'].'"><b style="padding:1px;">En savoir plus</b></button>
                                        </form>
                                    </div>
                                </div>';
                    endforeach;
                ?>
            </div> 

        <div class="row" id="ficheParCateg"></div>
    </div>
</div>

<script type="text/javascript">

    (() => {
        $('[data-toggle="tooltip"]').tooltip()
    })();

    function refreshing(){
        var selected = document.getElementById('categ').options[document.getElementById('categ').selectedIndex];
        $('#categ').val('1');
        $('#ficheParCateg').empty();
        $('#ficheParCateg').hide();
        $('#defaultList').show();
    }

    function ajaxCateg(){
        var cat = document.getElementById('categ').options[document.getElementById('categ').selectedIndex].value;
        var post_data = {
                'cat': cat,
            };
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>Fiches/ajaxCatFavoris/',
            data: post_data,
            success: (data => {
                $('#defaultList').hide();
                $('#ficheParCateg').show();                                
                $('#ficheParCateg').html(data);
            })
        });
    }

</script>
