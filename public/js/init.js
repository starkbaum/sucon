$(document).ready(function(){
    $('.button-collapse').sideNav();
    $(".dropdown-button").dropdown();
    $('.parallax').parallax();
    $('.slider').slider({
        interval: 50
    });
    $('ul.tabs').tabs();
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    $('select').material_select();

    $('#languages_list').select2({
        placeholder: 'Sprache auswählen',
        tags: true
    });

    $('#keywords_list').select2({
        placeholder: 'Keywords auswählen',
        tags: true
    });

    $('.slider').slider('pause');

    $('.indicator-item').on('click',function(){
        $('.slider').slider('pause');
    });

});