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

        h6 {
            color: black;
        }

        h4 {
            color: grey;
            margin-top: 20px;
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

        #fiche h5{
            padding:auto;
        }

        #fiche p{
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
        
        #main {
            margin-top:90px;
            padding: 10px;   
        }

    </style>
</head>

<div class="container" id="main">
    <div class="row">
        <div class="col-sm">
            <label for="search_data" style="color:black;">Rechercher par intitulé :</label>
            <div>
                <input placeholder="Entrer le nom d'une fiche" name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();">       
            </div>
        </div>

        <div class="col-sm">
            <div>
                <p style="color:black;"> OU </p>     
            </div>
        </div>

        <?php
        echo validation_errors();
        echo form_open('fiches/search');
        ?>
            <div class="col-sm">
                <label for="categ" style="color:black;">Rechercher par categorie :</label>
                <select class="select" name="categ" id="categ">
                    <option value="1" hidden class="statut">Catégories</option>

                    <?php
                    if($search == "true"){
                        foreach($fiches as $f){
                            $lacateg = $f['nomCategorieG'];
                        }

                        foreach($categoriesG as $c){
                            if(empty($fiches)){
                                echo '<option value = "'.$c['nomCategorieG'].'">'.$c['nomCategorieG'].'</option>';
                            } else {
                                if($c['nomCategorieG'] == $lacateg){
                                    echo '<option value = "'.$c['nomCategorieG'].'" selected>'.$c['nomCategorieG'].'</option>';
                                } else { 
                                    echo '<option value = "'.$c['nomCategorieG'].'">'.$c['nomCategorieG'].'</option>';
                                }   
                            }
                        }
                    }
                    else{
                        foreach($categoriesG as $c){
                            echo '<option value = "'.$c['nomCategorieG'].'">'.$c['nomCategorieG'].'</option>';
                        }
                    }
                        
                    ?>

                </select>
            </div>

            <div class="col-md-12 text-center" id="search-button">
                <button type="submit" class=" btn mybtn btn-success">Rechercher</button>
            </div>

        </form>
    </div>

    <div class="container" id="container-fiche">

        <div class="row"  id="autoSuggestionsList">
        </div>            
            
        <div class="row" id="ficheParCateg">
            <?php
                $i =0;

                if(sizeof($fiches)==0){
                    echo '<div class="col" id="fiche">
                            <h5> <em> Aucune fiche a été trouvé </em></h5>
                            </div>';
                } else {
                    foreach($fiches as $f){
                        echo validation_errors();
                        echo form_open('fiches/read');
                            
                        echo '  <div class="col" id="fiche">
                                    <div style="padding:auto;margin:auto;">
                                        <input name="titre_fiche" id="titre_fiche" type="text" value="'.$f['titreFiche'].'" hidden>
                                        <h5 class="text-center">'.$f['titreFiche'].'</h5>
                                        <p class="text-center">'.$f['nomCategorieG'].'</p>
                                        <button type="submit" id="fiche-button" value="'.$f['titreFiche'].'"><b style="padding:1px;">En savoir plus</b></button>
                                    </div>
                                </div>';
            
                        echo '</form>';
                    }
                }            
            ?>
        </div>
    </div>
</div>

<script type="text/javascript">

    function ajaxSearch(){
        var input_data = $('#search_data').val();

        if (input_data.length === 0)
        {
            $('#ficheParCateg').show();
            $('#autoSuggestionsList').hide();
        }
        else
        {
            var post_data = {
                'search_data': input_data,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Fiches/autocomplete/",
                data: post_data,
                success: function (data) {
                    // return success
                    if (data.length > 0) {
                        $('#ficheParCateg').hide();
                        $('#autoSuggestionsList').show();                                
                        $('#autoSuggestionsList').html(data);
                    }
                }
            });

        }
    }
    
</script>
