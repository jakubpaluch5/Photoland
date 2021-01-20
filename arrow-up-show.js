$(function() {
    function update() {
if ($(window).scrollTop() > 1) {
    $('#arrow-up').addClass('animate__animated');
    $('#arrow-up').addClass('animate__fadeInLeft');
} else {


}
}
setInterval(update, 500);
});