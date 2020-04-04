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
  <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css" />


    <style>
        
            ::selection{ background-color: #E13300; color: white; }
            ::moz-selection{ background-color: #E13300; color: white; }
            ::webkit-selection{ background-color: #E13300; color: white; }

          body{
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

        .mybtn {
            border: none;
            border-radius: 50px;
            width: 300px;
            padding: 10px;
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
h4{
    color: grey;
    margin-top: 20px;
    margin-bottom: 50px;
}
 h6{
            color: black;
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
        
        select{
            width: 300px;
            border-radius: 5px;
            height: 50px;
            margin-bottom: 50px;
        }

        #main{
            margin-top: 75px;
        }

        #container-fiche{
            margin-top: 50px;
        }

        #fiche{
            margin: 20px;
            width: 20vw;
            height: 25vh;
            background-color: white;
            color: black;
            text-align: center;
            border-radius: 5px;
            border: solid black 1.5px;
        }

        #fiche h5{
            padding-top: 15px;
        }

        #fiche p{
            font-size: .85rem;
        }

        #fiche button{
            width: 8vw;
            height: 5vh;
            font-size: .75rem;
            border-radius: 5px;
        }

        #recherche{
            margin-top: 5vh;
            margin-bottom: 5vh;
        }


        
    </style>

</head>

<body>
 <h4 class="text-center">Mes Favoris
            </h4>

    <?php
    echo validation_errors();

    echo form_open('fiches/search_favoris');
    ?>
<div class="text-center"><h6>Recherche par categorie :</h6></div>
        <div class="text-center" id="container1">
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
                        }
                        else{
                            if($c['nomCategorieG'] == $lacateg){
                                echo '<option value = "'.$c['nomCategorieG'].'" selected>'.$c['nomCategorieG'].'</option>';
                            }
                            else{
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
            <button type="submit" class=" btn btn-block mybtn btn-success">Chercher</button>
        </div>

    </form>

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
                }
                else{
                    foreach($fiches as $f){
                        echo validation_errors();
            
                        echo form_open('fiches/read');
                              
                        echo '<div class="col" id="fiche">
                                <input name="titre_fiche" id="titre_fiche" type="text" value="'.$f['titreFiche'].'" hidden>
                                <h5>'.$f['titreFiche'].'</h5>
                                <p>'.$f['nomCategorieG'].'</p>
                                <button type="submit" id="fiche-button" value="'.$f['titreFiche'].'">En savoir plus</button>
                            </div>';
            
                        echo '</form>';
            
                    }
                }            
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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

</body>
</html>
