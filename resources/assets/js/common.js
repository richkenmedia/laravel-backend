jQuery(document).ready(function($){
	$(".main-menu-button").click(function(){
        $(".main-menu-strip").toggle('');
    });
	$(".top-drop-down nav").click(function(){
        $(".drop-down-menu").toggle('');
    });
	//*** highlight keyword //****
	var keyword = $("#search").val();
	$(".table").highlight(keyword, false);
});