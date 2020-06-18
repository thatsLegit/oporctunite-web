if(localStorage.getItem('cookieSeen') != 'shown'){
    $(".cookie-banner").delay(2000).fadeIn();
}

$('.cookie-banner > .close').click(function(e) {
    localStorage.setItem('cookieSeen','shown')
    $('.cookie-banner').fadeOut(); 
});

function openPoliqueCookies() {
    document.getElementById("poliqueCookies").style.display = "block";
    document.getElementById("page-top").style.overflow="hidden";
}

function closePoliqueCookies() {
    document.getElementById("poliqueCookies").style.display = "none";
    document.getElementById("page-top").style.overflow="unset";
}