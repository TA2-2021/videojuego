var btnAbrirpopup = document.getElementById('pa');
var overlay = document.getElementById('overlay');
var popup = document.getElementById('popup');
var btnCerrarpopup = document.getElementById('btn-cerrar');

btnAbrirpopup.addEventListener('click', function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

btnCerrarpopup.addEventListener('click', function(){
    overlay.classList.remove('active');
    popup.classList.remove('active');
});