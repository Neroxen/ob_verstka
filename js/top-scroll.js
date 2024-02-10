<script type="text/javascript">
	var container = $('.main-bracket');
var topscroll = $('.topscroll');

$('.fake').width($('.content-b').width());

topscroll.scroll(function(e){
    container.scrollLeft($(this).scrollLeft());
});
container.scroll(function(e){
    topscroll.scrollLeft($(this).scrollLeft());
});
</script>