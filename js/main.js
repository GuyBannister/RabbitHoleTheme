$(document).ready(function(){

    $page = $('.page');
    $outer = $('.outer');
    $menu = $('.menuButton');
    $wrapper = $('.siteWrapper');
    $overflow = $('.overflow');
    $menuanimate = $(".siteWrapper, .headerWrapper, .footerWrapper");
    $menuwrapper = $('.menuWrapper');
    $scroll = $('.scrollButton');
    $ajaxwrapper = $('.ajaxWrapper');
    $mainLogoGraphic = $('.mainLogoGraphic');
    $fixedpage = $(".fixedpage");
    $ajaxwrapper = $(".ajaxWrapper");
    $ajaxcontent = $(".ajaxContent");


    jQuery.data($menu, 'state', 'closed');
		
		pageInit();
		menu();
    scrollinit();
    ajax();
    swiperInit();

function scrollinit() {  
        $scroll = $('.scrollButton');
        $scroll.on('click touchstart',function(){ 
        $scrollLocation = $(this).parent().nextAll(".page").position();
        // $scrollLocation =  "+=" + $height;
        $(window).scrollTo( $scrollLocation, 300);
        return false;   
        });     
}

function pageInit() {  
        $page = $('.page');
        $fixedpage = $(".fixedpage");
        $height = $(window).height();
        $height = $height - 111;
        // $page.css('min-height', $height);
        $fixedpage.css('height', $height);
        $('.swiper-slide').css('height', $height);

}

function menu() {
		$menu.on('click touchstart',function(){
		if (jQuery.data($menu, 'state') == 'closed') {	
			TweenLite.to($menuwrapper, 0.3, {left:0});
			TweenLite.to($menuanimate, 0.3, {left:472 });				
			jQuery.data($menu, 'state', 'open');	
		} else {
			TweenLite.to($menuwrapper, 0.3, {left:-120});
			TweenLite.to($menuanimate, 0.3, {left:0});	
			jQuery.data($menu, 'state', 'closed');
		}
		return false;
	});
}

function ajax() {

        $(document).on("click", '.navigation', function(e) { 
              
                e.preventDefault();       
                $href = $(this).attr('href');  

                $ajaxwrapper.css({opacity:0.4}, 300);
                $mainLogoGraphic.addClass("pulse");
                                        $(window).scrollTo( 0, 1);

                // animate menu back
                TweenLite.to($menuwrapper, 0.3, {left:-120});
                TweenLite.to($menuanimate, 0.3, {left:0});  
                jQuery.data($menu, 'state', 'closed');

                //IF YOU CAN PUSHSTATE A NEW URL
                if (window.history && window.history.pushState) {                  

                    $ajaxwrapper.load($href + " .ajaxContent", function() {

                        var stateObj = { '': '' };
                        window.history.pushState(stateObj, $href, $href); 


                        swiperInit();
                        $mainLogoGraphic.removeClass("pulse");
                        pageInit();
                        scrollinit();
                        $ajaxwrapper.css({opacity:1}, 300);
                            
                });

                //OTHERWISE JUST GO TO THAT PAGE (IE)
                } else { window.location.assign($href); }        

        });

    window.onpopstate = function(event) {
        if (event.state) { window.location.assign(location.pathname); }
    };



  
}



var $container = $('.eventmasonry');
$container.imagesLoaded( function() {
    $container.masonry({
        itemSelector: '.eventWrapper'
    });
});

function swiperInit() {

  var mySwiper = new Swiper('.swiper-container',{
    loop:true,
    grabCursor: true,
    resizeReInit:true
  });
  $('.arrow-left1').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right1').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })


    var mySwiper2 = new Swiper('.swiper-container2',{
    loop:true,
    grabCursor: true,
    resizeReInit:true
  });
  $('.arrow-left2').on('click', function(e){
    e.preventDefault()
    mySwiper2.swipePrev()
  })
  $('.arrow-right2').on('click', function(e){
    e.preventDefault()
    mySwiper2.swipeNext()
  })


    var mySwiper3 = new Swiper('.swiper-container3',{
    loop:true,
    grabCursor: true,
    resizeReInit:true
  });
  $('.arrow-left3').on('click', function(e){
    e.preventDefault()
    mySwiper3.swipePrev()
  })
  $('.arrow-right3').on('click', function(e){
    e.preventDefault()
    mySwiper3.swipeNext()
  })


}
    // $(".creativespaces").hover(
    //     function()
    //     {	
    //         $(".stillgif").find("img").attr("src", "http://rabbitholelab.co.uk/munro/frontend/images/spacesloop.gif");
    //     },
    //     function()
    //     {
    //         $(this).find("img").attr("src", "http://rabbitholelab.co.uk/munro/frontend/images/spacesstill.gif");
    //     }                         
    // );                  

    $(".creativespaces").hover(
        function()
        {	
            $(".stillgif").animate({"opacity":"0"}, 200);
        },
        function()
        {
             $(".stillgif").animate({opacity:1}, 200);
        }                         
    );    

// fire javascript events after window resize

        $(window).resize(function() {
            $delay(function(){
        
	pageInit();
// end do stuff
              
            }, 300);
        });
        
           $delay = (function() {
          $timer = 0;
          return function(callback, ms){
            clearTimeout ($timer);
            $timer = setTimeout(callback, ms);
          };
        })();


 }); // end
