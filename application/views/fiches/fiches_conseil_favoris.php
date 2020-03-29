<div id="recherche" class="text-center">
    <div class="something">
        <input placeholder="recherche" name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();">      
    </div>
</div>

<?php
echo validation_errors();
echo form_open('fiches/search');
?>
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
