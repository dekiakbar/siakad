
// function back di detail mahasiswa
function goBack() {
    window.history.back();
}

// sidebar 
$('.button-collapse').sideNav({
    menuWidth: 250,
    edge: 'left',
    closeOnClick: false, 
    draggable: true 
});

// input date mahasiswa
$(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
});

// form select
$(document).ready(function() {
    $('select').material_select();
  });