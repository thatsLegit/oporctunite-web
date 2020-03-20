<body onload="cacher()">

<div class="container">
    <div class="col-md-5 mx-auto">
        <div class="form mt-5">
            <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Qui êtes-vous ? </label></strong>
            <select onchange="changer();" id="selectchange" class="custom-select mb-2">
                <option value="1">Elevage</option>
                <option value="2">Veterinaire</option>
            </select>
        </div>
    </div>
</div>

<div class="container" id="elevage">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="form mt-5">
                <?php echo validation_errors(); ?>
                <?php $data = array('id' => "formulaire"); ?>
                <?php echo form_open_multipart('utilisateurs/inscription', $data); ?>

                <input type="hidden" name="type_utilisateur" value="elevage">

                <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Votre elevage : </label></strong>
                <div class="form-group">
                    <input type="text" name="numEleveur" id="numEleveur" class="form-control" aria-describedby="emailHelp" placeholder="identifiant eleveur">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">L'identifiant professional doit comporter 7 caractères.</span>
                </div>
                
                <div class="form-group">
                    <input type="text" name="nomElevage" id="nomElevage" class="form-control" aria-describedby="emailHelp" placeholder="Nom de l'elevage">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le nom doit comporter au moins 2 caractères.</span>
                </div>

                <div class="form-group">
                    <input type="text" name="tailleElevage" id="tailleElevage" class="form-control" aria-describedby="emailHelp" placeholder="Taille de votre elevage">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer une taille d'élevage valide.</span>
                </div>

                <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Vos coordonnées : </label></strong>
                <div class="form-group">
                    <input type="text" name="adresse" id="adresse" class="form-control"aria-describedby="emailHelp" placeholder="Adresse">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez renseigner votre adresse.</span>
                </div>

                <div class="form-group">
                    <input type="text" name="codePostal" id="codePostal" class="form-control"aria-describedby="emailHelp" placeholder="Code postal">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un code postal valide.</span>
                </div>

                <div class="form-group">
                    <input type="tel" name="telephone" id="telephone" class="form-control" aria-describedby="emailHelp" placeholder="Telephone">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un numéro de téléphone valide.</span>
                </div>

                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control"ria-describedby="emailHelp" placeholder="email">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer une email valide.</span>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le mot de passe doit comporter au moins 8 caractères.</span>
                </div>

                <div class="form-group">
                    <input type="password" name="password2" id="password2" class="form-control" aria-describedby="emailHelp" placeholder="Confirmez le mot de passe">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le mots de passe ne correspondent pas.</span>
                </div>

                <div class="form-group">
                    <strong><label style="color:rgb(0,177,77);font-size:1.5em">Choisissez une photo de profil</label> (optionnel)</strong>
                    <input type="file" onchange="handleFiles(files,preview);getoutput(this)" name="userfile" id="photo" size="20">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Attention : formats acceptés : png, jpg, gif.</span>
                    <div><label for="photo"><div id="preview" style="width:200px;"></div></label></div>
                </div>

                <div class="form-group">
                <div class="custom-control custom-checkbox" style="color:black">
                    <input type="checkbox" class="custom-control-input" id="cgu">
                    <label class="custom-control-label text-secondary mt-2" for="cgu">J'accepte les <a href="#" data-toggle="modal" data-target="#myModal">conditions générales d'Oporctunité</a></label>
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez accepter les CGU.</span>
                </div>
                <div class="custom-control custom-checkbox" style="color:black">
                    <input type="checkbox" class="custom-control-input" id="partage">
                    <label class="custom-control-label text-secondary mt-2" for="partage">Je reconnais que mes données seront utilisées conformément à <a href="#" data-toggle="modal" data-target="#myModal">la politique de confidentialité</a> et la politique en <a href="#" data-toggle="modal" data-target="#myModal">matière de cookies</a></label>
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez accepter le partage de vos données.</span>
                </div>
                </div><br>

                <div class="col-md-12 text-center ">
                    <button type="submit" class=" btn btn-block mybtn btn-success">S'inscrire</button>
                </div>
                </form>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title" style="color:black">Conditions d'utilisations</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="padding: 5px; color:black">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias 
                                    possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis 
                                    quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae 
                                    tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, 
                                    consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis 
                                    facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a 
                                    suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="container" id="veterinaire">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="form mt-5">
                <?php echo validation_errors(); ?>
                <?php $data = array('id' => "formulaire2"); ?>
                <?php echo form_open_multipart('utilisateurs/inscription', $data); ?>

                <input type="hidden" name="type_utilisateur" value="veterinaire">

                <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Votre cabinet : </label></strong>
                <div class="form-group">
                    <input type="text" name="numVeterinaire" id="numVeterinaire" class="form-control" aria-describedby="emailHelp" placeholder="identifiant vétérinaire">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">L'identifiant professional doit comporter 5 chiffres.</span>
                </div>
                
                <div class="form-group">
                    <input type="text" name="nomCabinet" id="nomCabinet" class="form-control" aria-describedby="emailHelp" placeholder="Nom du cabinet">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le nom doit comporter au moins 2 caractères.</span>
                </div>

                <strong><label style="color:rgb(0,177,77);font-size:1.5em"> Vos coordonnées : </label></strong>
                <div class="form-group">
                    <input type="text" name="adresse" id="adresse2" class="form-control"aria-describedby="emailHelp" placeholder="Adresse">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez renseigner votre adresse.</span>
                </div>

                <div class="form-group">
                    <input type="text" name="codePostal" id="codePostal2" class="form-control"aria-describedby="emailHelp" placeholder="Code postal">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un code postal valide.</span>
                </div>

                <div class="form-group">
                    <input type="tel" name="telephone" id="telephone2" class="form-control" aria-describedby="emailHelp" placeholder="Telephone">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer un numéro de téléphone valide.</span>
                </div>

                <div class="form-group">
                    <input type="email" name="email" id="email2" class="form-control"ria-describedby="emailHelp" placeholder="email">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez entrer une email valide.</span>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password3" class="form-control" aria-describedby="emailHelp" placeholder="Mot de passe">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le mot de passe doit comporter au moins 8 caractères.</span>
                </div>

                <div class="form-group">
                    <input type="password" name="password2" id="password4" class="form-control" aria-describedby="emailHelp" placeholder="Confirmez le mot de passe">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Le mots de passe ne correspondent pas.</span>
                </div>

                <div class="form-group">
                    <strong><label style="color:rgb(0,177,77);font-size:1.5em">Choisissez une photo de profil</label> (optionnel)</strong>
                    <input type="file" onchange="handleFiles(files, preview2);getoutput(this)" name="userfile" id="photo2" size="20">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Attention : formats acceptés : png, jpg, gif.</span>
                    <div><label for="photo2"><div id="preview2" style="width:200px;"></div></label></div>
                </div>

                <div class="form-group">
                <div class="custom-control custom-checkbox" style="color:black">
                    <label class="custom-control-label text-secondary mt-2" for="cgu2">J'accepte les <a href="#" data-toggle="modal" data-target="#myModal2">conditions générales d'Oporctunité</a></label>
                    <input type="checkbox" class="custom-control-input" id="cgu2">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez accepter les CGU.</span>
                </div>
                <div class="custom-control custom-checkbox" style="color:black">
                    <label class="custom-control-label text-secondary mt-2" for="partage2">Je reconnais que mes données seront utilisées conformément à <a href="#" data-toggle="modal" data-target="#myModal2">la politique de confidentialité</a> et la politique en <a href="#" data-toggle="modal" data-target="#myModal2">matière de cookies</a></label>
                    <input type="checkbox" class="custom-control-input" id="partage2">
                    <span class="d-inline-block bg-danger" style="font-size:1em;">Veuillez accepter le partage de vos données.</span>
                </div>
                </div><br>

                <div class="col-md-12 text-center ">
                    <button type="submit" class=" btn btn-block mybtn btn-success">S'inscrire</button>
                </div>
                </form>

                <!-- The Modal -->
                <div class="modal" id="myModal2">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title" style="color:black">Conditions d'utilisations</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="padding: 5px; color:black">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias 
                                    possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis 
                                    quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae 
                                    tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, 
                                    consectetur adipisicing elit. Rem libero a suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis 
                                    facere temporibus vitae veritatis quae molestiae, eos dolor.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem libero a 
                                    suscipit mollitia adipisci nisi recusandae tempore quasi molestias alias possimus debitis facere temporibus vitae veritatis quae molestiae, eos dolor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script> 
function cacher() {
    document.getElementById("elevage").style.display = "block";
    document.getElementById("veterinaire").style.display = "none";
}

function changer() {
    if (document.getElementById("selectchange").selectedIndex == 0) {
        document.getElementById("formulaire").reset();
        document.getElementById("elevage").style.display = "block";
        document.getElementById("veterinaire").style.display = "none";
    } else if (document.getElementById("selectchange").selectedIndex == 1) {
        document.getElementById("formulaire2").reset();
        document.getElementById("elevage").style.display = "none";
        document.getElementById("veterinaire").style.display = "block";
    }
}
</script>

<script>
//penser à délocaliser ce script
    
 function deactivateTooltips() {  
    var spans = document.getElementById("formulaire").querySelectorAll('span');  
    for (var i = 0 ; i < spans.length ; i++) {
        spans[i].className = 'd-none';
    }  
    var spans2 = document.getElementById("formulaire2").querySelectorAll('span');  
    for (var i = 0 ; i < spans2.length ; i++) {
        spans2[i].className = 'd-none';
    } 
} 

function getTooltip(elements) {
    while (elements = elements.nextSibling) {
        if (elements.tagName == 'SPAN') {
            return elements;
        }
    }      
    return false; 
}


//partie vétérinaire
var checkVeterinaire = {};

checkVeterinaire['numVeterinaire'] = function(id) {
    var numVeterinaire = document.getElementById(id),
        tooltipStyle = getTooltip(numVeterinaire);
        
    if (/[0-9]{5}/.test(numVeterinaire.value)) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkVeterinaire['nomCabinet'] = function(id) {
    var nomCabinet = document.getElementById(id),
        tooltipStyle = getTooltip(nomCabinet);

    if (nomCabinet.value.length >= 2) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkVeterinaire['telephone2'] = function(id) {
    var telephone2 = document.getElementById(id),
        tooltipStyle = getTooltip(telephone2);
    
    if (/[0-9]{10}/.test(telephone2.value)){
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkVeterinaire['codePostal2'] = function(id) {
    var codePostal2 = document.getElementById(id),
        tooltipStyle = getTooltip(codePostal2);
    
    if (/[0-9]{5}/.test(codePostal2.value)) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkVeterinaire['adresse2'] = function(id) {
    var adresse2 = document.getElementById(id),
        tooltipStyle = getTooltip(adresse2);
    
    if (adresse2.value.length >= 2) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkVeterinaire['email2'] = function(id) {
    var email2 = document.getElementById(id),
        tooltipStyle = getTooltip(email2);
    
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email2.value)) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkVeterinaire['password3'] = function(id) {
    var password3 = document.getElementById(id),
        tooltipStyle = getTooltip(password3);
    
    if (password3.value.length >= 8) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkVeterinaire['password4'] = function(id) {
    var password3 = document.getElementById('password3'),
        password4 = document.getElementById(id),
        tooltipStyle = getTooltip(password4);
    
    if (password3.value == password4.value && password4.value !== '') {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

//partie eleveur
var checkEleveur = {};

checkEleveur['numEleveur'] = function(id) {
    var numEleveur = document.getElementById(id),
        tooltipStyle = getTooltip(numEleveur);
    
    if (/FR...../.test(numEleveur.value)) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkEleveur['nomElevage'] = function(id) {
    var nomElevage = document.getElementById(id),
        tooltipStyle = getTooltip(nomElevage);

    if (nomElevage.value.length >= 2) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkEleveur['tailleElevage'] = function(id) {
    var tailleElevage = document.getElementById(id),
        tooltipStyle = getTooltip(tailleElevage);

    if (/[0-9]{1,}/.test(tailleElevage.value)) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkEleveur['telephone'] = function(id) {
    var telephone = document.getElementById(id),
        tooltipStyle = getTooltip(telephone);
    
    if (/[0-9]{10}/.test(telephone.value)){
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkEleveur['codePostal'] = function(id) {
    var codePostal = document.getElementById(id),
        tooltipStyle = getTooltip(codePostal);
    
    if (/[0-9]{5}/.test(codePostal.value)) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkEleveur['adresse'] = function(id) {
    var adresse = document.getElementById(id),
        tooltipStyle = getTooltip(adresse);
    
    if (adresse.value.length >= 2) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkEleveur['email'] = function(id) {
    var email = document.getElementById(id),
        tooltipStyle = getTooltip(email);
    
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkEleveur['password'] = function(id) {
    var password = document.getElementById(id),
        tooltipStyle = getTooltip(password);
    
    if (password.value.length >= 8) {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkEleveur['password2'] = function(id) {
    var password = document.getElementById('password'),
        password2 = document.getElementById(id),
        tooltipStyle = getTooltip(password2);
    
    if (password.value == password2.value && password2.value !== '') {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};


(function() {

    //events eleveur
    var formulaire = document.getElementById('formulaire'),
    inputs = document.getElementById("formulaire").querySelectorAll('input');
    //onkeyup
    for (var i = 0 ; i < inputs.length ; i++) {
        inputs[i].addEventListener('keyup', function(e) {
            checkEleveur[e.target.id](e.target.id);
        }, false);
    }
    //onsubmit
    formulaire.addEventListener('submit', function(e) {   
        var result = true;
        for (var i in checkEleveur) {
            result = checkEleveur[i](i) && result;
        }
        if (!result) {
            e.preventDefault();
        }      
        var photo = document.getElementById('photo'),
        tooltipStyle = getTooltip(photo);
        if(tooltipStyle.className == 'd-inline-block bg-danger'){
            e.preventDefault();
        }
        var cgu = document.getElementById('cgu'),
        tooltipStyle = getTooltip(cgu);
        if(cgu.checked == false){
            tooltipStyle.className = 'd-inline-block bg-danger';
            e.preventDefault();
        }
        var partage = document.getElementById('partage'),
        tooltipStyle = getTooltip(partage);
        if(tooltipStyle.className = 'd-inline-block bg-danger'){
            e.preventDefault();
        }
    }, false);

    //events veterinaire
    var formulaire2 = document.getElementById('formulaire2'),
    inputs2 = document.getElementById("formulaire2").querySelectorAll('input');
    //onkeyup
    for (var i = 0 ; i < inputs2.length ; i++) {
        inputs2[i].addEventListener('keyup', function(e) {
            checkVeterinaire[e.target.id](e.target.id);
        }, false);
    }
    //onsubmit
    formulaire2.addEventListener('submit', function(e) {   
        var result = true;
        for (var i in checkVeterinaire) {
            result = checkVeterinaire[i](i) && result;
        }
        if (!result) {
            e.preventDefault();
        }      
        var photo2 = document.getElementById('photo2'),
        tooltipStyle2 = getTooltip(photo2);
        if(tooltipStyle2.className == 'd-inline-block bg-danger'){
            e.preventDefault();
        }
        var cgu2 = document.getElementById('cgu2'),
        tooltipStyle = getTooltip(cgu2);
        if(cgu2.checked == false){
            tooltipStyle.className = 'd-inline-block bg-danger';
            e.preventDefault();
        }
        var partage2 = document.getElementById('partage2'),
        tooltipStyle = getTooltip(partage2);
        if(tooltipStyle.className = 'd-inline-block bg-danger'){
            e.preventDefault();
        }
    }, false);

})(); 

//check le format de la photo de profil
function getoutput(photo) {
    var maxLength = photo.value.split('.').length-1;
    var extension = photo.value.split('.')[maxLength];
    tooltipStyle = getTooltip(photo);
    if (extension == 'png' || extension == 'jpg' || extension == 'gif') {
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
}

//Preview de la photo de profil
function handleFiles(files, preview) {
    for (var i = 0; i < files.length; i++) {
    var file = files[i];
    if(i == 0){
        preview.innerHTML = '';
    }
    var img = document.createElement("img");
    img.classList.add("obj");
    img.file = file;
    img.style = 'width:100%;';
    preview.appendChild(img); 
    var reader = new FileReader();
    reader.onload = (function(aImg) { 
    return function(e) { 
    aImg.src = e.target.result; 
    }; 
    })(img);
    reader.readAsDataURL(file);
    }
}

deactivateTooltips(); 
</script>