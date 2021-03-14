require('./bootstrap');
$( document ).ready(function() {
    setTimeout(function(){
        $('.caricamento').addClass('hidden');
        $('.container').removeClass('hidden');
    },3000);
});