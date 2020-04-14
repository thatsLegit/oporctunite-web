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

    if (/^\d{5}$/.test(numVeterinaire.value)) {
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
    
    if (/^\d{10}$/.test(telephone2.value)){
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkVeterinaire['ville2'] = function(id) {
    var ville2 = document.getElementById(id),
        tooltipStyle = getTooltip(ville2);
    
    if (ville2.value.length >= 2) {
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
    
    if (/^\d{5}$/.test(codePostal2.value)) {
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
    
    if (adresse2.value.length >= 6) {
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
    
    if (/^FR.{5}$/.test(numEleveur.value)) {
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
    
    if (/^\d{10}$/.test(telephone.value)){
        tooltipStyle.className = 'd-none';
        return true;
    } else {
        tooltipStyle.className = 'd-inline-block bg-danger';
        return false;
    }
};

checkEleveur['ville'] = function(id) {
    var ville = document.getElementById(id),
        tooltipStyle = getTooltip(ville);
    
    if (ville.value.length >= 2) {
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
    
    if (/^\d{5}$/.test(codePostal.value)) {
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
    
    if (adresse.value.length >= 6) {
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

//Mise en place des evenements
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
        
        //captcha check :
        var response = grecaptcha.getResponse();
        if (!response) {
            document.getElementById('alertCaptcha').className = 'd-inline-block bg-danger';
            e.preventDefault();
            return; 
        }
    
        var ajax = new XMLHttpRequest();

        ajax.onreadystatechange = function() {
            if (this.status === 200 && this.readyState === 4) {
                var reponse = this.responseText;
                if (reponse!='ok'){
                    document.getElementById('alertCaptcha').className = 'd-inline-block bg-danger';
                    e.preventDefault();
                    return; 
                }
            }
        }
        ajax.open('POST', 'https://oporctunite.envt.fr/Utilisateurs/Vrecaptcha', true);
        ajax.send('recaptcha='+response);


        //form validation :
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