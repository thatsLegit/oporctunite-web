<head>
</script>
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
            height: 40px;
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
        input:focus, textarea:focus, select:focus{
            outline: none;
        }
    </style>
</head>

<div class="container" id="main">
    <div class="row">
        <div class="col my-auto">
            <button onclick="refreshing1()" type="button" class="btn btn-light btn-sm" data-toggle="tooltip" data-placement="left" title="Rafraichir">
                <svg class="bi bi-arrow-clockwise" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.17 6.706a5 5 0 017.103-3.16.5.5 0 10.454-.892A6 6 0 1013.455 5.5a.5.5 0 00-.91.417 5 5 0 11-9.375.789z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M8.147.146a.5.5 0 01.707 0l2.5 2.5a.5.5 0 010 .708l-2.5 2.5a.5.5 0 11-.707-.708L10.293 3 8.147.854a.5.5 0 010-.708z" clip-rule="evenodd"/>
                </svg>
            </button>

            <label for="search_data" style="color:black;">Recherche par mot-clé :</label>
            <input style="margin-top:5px" class="form-control" name="search_data" id="search_data" type="text" onkeyup="ajaxKeyWord()" placeholder="Nom de la fiche">       
        </div>

        <div class="col-lg-2 col-md-12 col-sm-6 col-xs-3 my-auto">
            <svg class="bi bi-arrow-left-right" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.146 7.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 11l-2.647-2.646a.5.5 0 010-.708z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M2 11a.5.5 0 01.5-.5H13a.5.5 0 010 1H2.5A.5.5 0 012 11zm3.854-9.354a.5.5 0 010 .708L3.207 5l2.647 2.646a.5.5 0 11-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M2.5 5a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
            </svg>
        </div>

        <div class="col my-auto">
            <button onclick="refreshing2()" type="button" class="btn btn-light btn-sm" data-toggle="tooltip" data-placement="left" title="Rafraichir">
                <svg class="bi bi-arrow-clockwise" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.17 6.706a5 5 0 017.103-3.16.5.5 0 10.454-.892A6 6 0 1013.455 5.5a.5.5 0 00-.91.417 5 5 0 11-9.375.789z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M8.147.146a.5.5 0 01.707 0l2.5 2.5a.5.5 0 010 .708l-2.5 2.5a.5.5 0 11-.707-.708L10.293 3 8.147.854a.5.5 0 010-.708z" clip-rule="evenodd"/>
                </svg>
            </button>

            <label class="col-md-12 col-lg-auto col-xl-auto" for="categ" style="color:black;">Recherche par categorie :</label>
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

    <div class="container" id="container-fiche"> 
        <div class="row"  id="defaultList">
            <?php      
                foreach($fiches as $fiche) :
                    echo '  
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" id="fiche">
                            <div style="padding:auto;margin:auto;">
                                <form action="'; echo base_url() . "fiches/read"; echo '" method="post">
                                    <input name="titre_fiche" type="text" value="'.$fiche['titreFiche'].'" hidden>
                                    <h5 class="text-center">'.$fiche['titreFiche'].'</h5>
                                    <p class="text-center">'.$fiche['nomCategorieG'].'</p>
                                    <button type="submit" id="fiche-button" value="'.$fiche['titreFiche'].'"><b style="padding:1px;">En savoir plus</b></button>
                                </form>
                            </div>
                        </div>
                        ';
                endforeach;
            ?> 
        </div>  

        <div class="row"  id="autoSuggestionsList">
        </div>            
            
        <div class="row" id="ficheParCateg">
        </div>
    </div>
</div>

<script type="text/javascript">

    const tooltips = () => {
        $('[data-toggle="tooltip"]').tooltip()
    };

    function refreshing1(){
        var text = $('#search_data').val();
        if(text.length != 0){
            $('#search_data').val('')
            $('#autoSuggestionsList').hide();
            $('#defaultList').show();
        }
    }

    function refreshing2(){
        var selected = document.getElementById('categ').options[document.getElementById('categ').selectedIndex];
        $('#categ').val('1');
        $('#ficheParCateg').empty();
        $('#ficheParCateg').hide();
        $('#defaultList').show();
    }

    function ajaxKeyWord(){
        var input_data = $('#search_data').val();

        if (input_data.length === 0) {
            $('#ficheParCateg').hide();
            $('#autoSuggestionsList').hide();
            $('#defaultList').show();
        } else {
            var post_data = {
                'search_data': input_data,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Fiches/autocomplete/",
                data: post_data,
                success: (data => {
                    $('#ficheParCateg').hide();
                    $('#defaultList').hide();
                    $('#autoSuggestionsList').show();                                
                    $('#autoSuggestionsList').html(data);
                })
            });
        }
    }

    function ajaxCateg(){
        var cat = document.getElementById('categ').options[document.getElementById('categ').selectedIndex].value;
        var post_data = {
                'cat': cat,
            };
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>Fiches/ajaxCatFiches/',
            data: post_data,
            success: (data => {
                $('#defaultList').hide();
                $('#autoSuggestionsList').hide();
                $('#ficheParCateg').show();                                
                $('#ficheParCateg').html(data);
            })
        });
    }
    
</script>
