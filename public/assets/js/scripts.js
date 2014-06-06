$(document).ready(function() {
    $('a[class]').click(function() {
        $('.active').removeClass('active');
        $('#menu' + $(this).attr('class')).addClass('active');
    });
});