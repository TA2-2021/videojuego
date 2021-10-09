var btnAbrirpopup = document.getElementById('pa'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    btnCerrarpopup = document.getElementById('btn-cerrar');

btnAbrirpopup.addEventListener('click', function(){
    overlay.classList.add('active');
});