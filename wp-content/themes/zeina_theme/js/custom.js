$(document).ready(function(){
    var slider = new MasterSlider();
    slider.setup('featured-slider' , {
            width:1210,
            height:570,
            space:0,
            autoplay: false,
            loop: true,
            overPause:true
        });
    slider.control('arrows');
    slider.control('thumblist' , {speed:10, inset:true, autohide:false, align:"left" , dir:"h", width: "200px", height: "150px", type: "tabs"});
	$(".widget-slider .widget-content").owlCarousel({
		autoPlay : false,
		stopOnHover : false,
		pagination:false,
		paginationSpeed : 1000,
		goToFirstSpeed : 2000,
		singleItem : true,
		autoHeight : true,
		navigation: false
	});
	$(".content-slider .block-content").owlCarousel({
		autoPlay : false,
		stopOnHover : false,
		pagination:false,
		paginationSpeed : 1000,
		goToFirstSpeed : 2000,
		autoHeight : true,
		itemsCustom : [
			[0, 1],
			[450, 2],
			[600, 2],
			[700, 3],
			[1000, 3],
			[1200, 3],
			[1400, 3],
			[1600, 3]
		],
		navigation : true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
	$(".menu-trigger").click(function(){
		$("body").toggleClass("overlay-opened");
		$("#overlay .search").hide();
		$("#overlay .menu").show();
	});
	$(".search-trigger").click(function(){
		$("body").toggleClass("overlay-opened");
		$("#overlay .menu").hide();
		$("#overlay .search").show();
	});
	$("a[rel^='prettyPhoto']").prettyPhoto({
		opacity:'0.95',
		slideshow:'5000',
		theme:'dark_rounded'
	});
	
	$("#overlay ul ul").each(function(){
		$(this).before('<i class="fa fa-angle-down"></i>');
		var itigger = $(this).parent().children("i");
		itigger.click(function(){
			if($(this).hasClass("opened")){
				$(this).removeClass("opened").next("ul").hide();
			} else {
				$(this).addClass("opened").next("ul").show();
			}
		});
	});
	
	$("#overlay a.close").click(function(){
		//$("#overlay").hide();
		$("body").removeClass("overlay-opened");
	});
	/*$(".content-slider").each(function(){
		var owl = $(".block-content", this).data('owlCarousel');
		var count = $(".owl-item", this).length;
		$(".title", this).append('<nav class="navi"></nav>');
		for(var i = 1; i <= count; i++ ){
			$(".navi", this).append('<a href="#"></a>');
		}
		$(".navi", this).children("a:first-child").addClass('active');
		$(".navi a", this).click(function(){
			owl.goTo($(this).index());
			$(this).addClass('active').siblings().removeClass("active");
			return false;
		});
	});*/
	$(".widget-slider").each(function(){
		var owl = $(".widget-content", this).data('owlCarousel');
		var count = $(".owl-item", this).length;
		$(".title", this).append('<nav class="navi"></nav>');
		for(var i = 1; i <= count; i++ ){
			$(".navi", this).append('<a href="#"></a>');
		}
		$(".navi", this).children("a:first-child").addClass('active');
		$(".navi a", this).click(function(){
			owl.goTo($(this).index());
			$(this).addClass('active').siblings().removeClass("active");
			return false;
		});
	});
	$(window).scroll(function(){
		if($(this).scrollTop() > 190){
			$("#menu").addClass("fixed");
			$("#main-header").css("padding-bottom", "50px");
		} else if($(this).scrollTop() < 190) {
			$("#menu").removeClass("fixed");
			$("#main-header").css("padding-bottom", "0");
		}
	});
	$(".dropdown-trigger").click(function(){
		$(this).parent().toggleClass("open");
		$(this).parent().siblings().removeClass("open");
	});
	
	// tabs
	
	$(".tabs").each(function(){
		var tabBtn = $(".tabs-nav a"),
			tabPane = $(".tabs-content .tabs-pane");
		$(".tabs-nav a").click(function(){
			var selectPane = $(this).attr("href");
			$(this).addClass("active").siblings().removeClass("active");
			$(selectPane).slideDown().siblings().slideUp();
			console.logo(selectPane);
			return false;
		});
	});
	
	$(".topbar .search").hover(function(){
		if(!$(this).hasClass("open")){
			$(this).addClass("open");
		}
	}, function(){
		$(this).removeClass("open");
	});
	
	$(".topbar .search a").click(function(){
		$(this).siblings(".submit").trigger("click");
	});
	
	$(".news-loop article").each(function(){
		var thumbnail = $(".thumbnail", this),
			image = thumbnail.children("img"),
			imageSrc = image.attr("src");
		thumbnail.attr("style", "background-image:url("+imageSrc+");");
	});
	
	// Skip to top
	$("#skip").css("right", ($(window).width() - 980) / 4);
	$(window).scroll(function(){
		if($(this).scrollTop() > 300){
			$("#skip").fadeIn();
		} else if($(this).scrollTop() < 300) {
			$("#skip").fadeOut();
		}
	});
    $("#skip").click(function(){
        $("html,body").animate({scrollTop: 0 }, 1000);
        return false;
    });
	
});
