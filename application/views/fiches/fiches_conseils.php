<div id="main">
    <div class="container-fluid">
        <h4 class="text-center">
            <?php
                foreach($fiche as $f){
                    echo $f['titreFiche'];
                }
            ?>
        </h4>
        <div id="vfiches" class="text-center">

            <?php

                foreach($fiche as $f){
                    echo '<embed class="zone_text" src="'.base_url().''.$f['urlImage'].'" type="application/pdf"/>';
                }
            
            ?>

            <div class="notation">
                <div class="note">
                    <h5>Note globale :</h5> 
                        <?php

                            foreach($moyenne as $m){

                                $com = $m['commentaireAvis'];
                            }

                            if($com == ""){
                                echo "La fiche n'a pas encore de note";
                            }
                            else{
                                foreach($moyenne as $m){
                                    $note = round($m['noteAvis'], 2.2);
                                    echo $note;

                                    echo(makeRating($note));
                                }
                            }


                            function makeRating($rate, $bestvalue = 5) {
                                // extraction de la partie entière de la note (qu'elle soit décimale ou non)
                                $intrate=intval($rate);				
                                // calcul de la partie décimale éventuelle en %
                                $decrate=(floatval($rate) - $intrate) * 100;
                                //  insertion des microformats et microdatas
                                $ratingBox  = '						<!-- item AggregateRating -->' . PHP_EOL;
                                $ratingBox .= '				<p class="ratingBox" itemprop="aggregateRating" itemscope itemtype="http://schema.xyz/AggregateRating">' . PHP_EOL;
                                $ratingBox .= '				<span title="'. $rate .' / '. $bestvalue .'">' . PHP_EOL;
                                // génération du nombre d'étoiles correspondant au maximum possible
                                for($i=0; $i<$bestvalue; ++$i) {
                                $ratingBox .= '				<svg height="16" width="16">' . PHP_EOL;
                                    // étoile(s) totalement jaune(s) calculée(s) sur la valeur entière de la note
                                    if($i<$intrate) {
                                    $ratingBox .= '				  <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="Yellow" stroke="DarkKhaki" stroke-width=".5" />' . PHP_EOL;
                                    }
                                    elseif($i==$intrate && $decrate>0 ) {
                                    // étoile partiellement jaune basée sur la valeur décimale de la note
                                    $ratingBox .= '				  <defs>' . PHP_EOL;
                                    $ratingBox .= '				     <linearGradient id="starGradient">' . PHP_EOL;
                                    $ratingBox .= '				       <stop offset="'. $decrate .'%" stop-color="Yellow"/>' . PHP_EOL;
                                    $ratingBox .= '				       <stop offset="'. $decrate .'%" stop-color="LightGrey"/>' . PHP_EOL;
                                    $ratingBox .= '				     </linearGradient>' . PHP_EOL;
                                    $ratingBox .= '				  </defs>' . PHP_EOL;
                                    $ratingBox .= '				  <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="url(#starGradient)" stroke="DarkKhaki" stroke-width=".5" />' . PHP_EOL;
                                    }
                                    else {
                                    // étoile(s) grise(s) pour la fin
                                    $ratingBox .= '				  <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5"  fill="LightGrey" stroke="DimGray" stroke-width=".5" />' . PHP_EOL;
                                    }
                                    $ratingBox .= '				</svg>' . PHP_EOL;
                                }
                                $ratingBox .= '				</span>' . PHP_EOL;
                                //  insertion de la note en texte clair mais masqué, avec microformat et microdata - supprimer style="display:none;" pour l'afficher
                                $ratingBox .= '				<span style="display:none;"><span itemprop="ratingValue" class="rating" title="'. $rate .'">'. $rate .'</span>';
                                $ratingBox .= '<span > / </span><span itemprop="bestRating">'. $bestvalue .'</span></span>' . PHP_EOL;
                                $ratingBox .= '				</p>' . PHP_EOL;
                                $ratingBox .= '						<!-- end of item -->' . PHP_EOL;
                                return $ratingBox;
                                }
                            
                        ?>

                        

                    <div class='starrr' id='star1'></div>
                    <div>&nbsp;
                        <span class='your-choice-was1' style='display: none;'>
                            Votre note est de
                            <span class='choice1'>
                                
                            </span>.
                        </span>
                    </div>
                </div>
                <br>
                <div class="note">
                    <h5>Votre note :</h5>

                    <?php

                            if(empty($maNote)){
                                echo "Vous n'avez pas encore attribué de note";
                            }
                            else{
                                foreach($maNote as $m){
                                    $note = round($m['noteAvis'], 2.2);
                                    echo $note;

                                    echo(makeRating($note));
                                }
                            }
                            
                        ?>

                    <div class='starrr' id='star2'></div>
                    <div>&nbsp;
                        <span class='your-choice-was2' style='display: none;'>
    Votre note est de <span class='choice2'></span>.
                        </span>
                    </div>
                </div>


                <div>
                    <?php
                    if(empty($maNote)){
                        echo '<button type="button" class="btn btn-block mybtn1 btn-success" data-toggle="modal" data-target="#myModal">Noter la fiche</button>';
                    }
                    else{
                        echo '<button type="submit" class=" btn btn-block mybtn1 btn-success">Plus de details</button>';
                    }
                    ?>
                        

                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="container2">
                <div>
                    <form action="fiches/fiches" method="POST">
                        <button type="submit" class=" btn btn-block mybtn1 btn-success">Précedent</button>
                    </form>
                </div>
                <div>
                        <?php
                            foreach($fiche as $f){
                                echo validation_errors();
        
                                echo form_open('fiches/favoris');

                                echo '<input name="titre_fiche" id="titre_fiche" type="text" value="'.$f['titreFiche'].'" hidden>
                                <button type="submit" class=" btn btn-block mybtnIMP btn-success">Ajouter aux Favoris </button>
                                </form>';
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <?php
            echo validation_errors();
        
            echo form_open('fiches/noter');
        ?>

            <div class="modal-content" id="modal-body">
                <div class="modal-header">
                    
                    <h4 class="text-center">
                        <?php
                            foreach($fiche as $f){
                                echo $f['titreFiche'];
                                echo '<input name="titre_fiche" id="titre_fiche" type="text" value="'.$f['titreFiche'].'" hidden>';
                            }
                        ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Noter la fiche conseil ( /5 )</p>
                    <input pattern="[0-5]{1}" min="0" max="5" id="ajouterNote" name="ajouterNote" class="form-control" type="number" required>
                    <br>
                    <p>Commentaire</p>
                    <input id="commentaire" name="commentaire" class="form-control" type="text" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Noter</button>
                </div>
            </div>

        </form>

    </div>
</div>


