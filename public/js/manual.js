function goBack() {
    window.history.back();
}

$('.button-collapse').sideNav({
    menuWidth: 250,
    edge: 'left',
    closeOnClick: false, 
    draggable: true 
});

$(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
});