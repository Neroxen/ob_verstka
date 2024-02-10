$('.main-bracket').css("max-width", $('body').outerWidth() - 20 );

	var container = $('.main-bracket');
var topscroll = $('.topscroll');

$('.fake').width($('.braket-content').width());

topscroll.scroll(function(e){
    container.scrollLeft($(this).scrollLeft());
});
container.scroll(function(e){
    topscroll.scrollLeft($(this).scrollLeft());
});