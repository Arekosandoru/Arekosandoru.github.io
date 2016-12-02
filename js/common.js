$(document).ready(function() {
	$("nav a").on("click", function(event){
		event.preventDefault();
		$("nav").addClass("navbar-fixed-top");
		id = ($(this).attr("href"));
		scrollVertical = $(id).offset().top;

		$("body, html").animate({scrollTop: scrollVertical});
	});

	$(document).on("scroll", function(){
		secondPage = $("nav li:nth-child(2) a").attr("href");

		if ( $("body").scrollTop() >= $("nav").height() )
		{
			$("nav").addClass("navbar-fixed-top blackBackground");
		} else {
			$("nav").removeClass("navbar-fixed-top blackBackground");
		}
	});




    //Ресайз окна
    function heightDetect() {
        $(".adaptiveSize").css("height", $(window).height());
    };
    heightDetect();
    $(window).resize(function() {
        heightDetect();
    });

    	////
    $(".next").on("click", function(event) {
        event.preventDefault();
        id = ($(this).attr("href"));
        scrollVertical = $(id).offset().top;
        $("body, html").animate({ scrollTop: scrollVertical });
    });

});

//Иконка загрузки страницы
$(window).load(function() {
    $(".loaderInner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");
});







