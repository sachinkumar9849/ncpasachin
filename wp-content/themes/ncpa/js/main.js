/*!     
        jquery.picZoomer.js
        v 1.0
        David
        http://www.CodingSerf.com
*/

//放大镜控件
;(function($){
	$.fn.picZoomer = function(options){
		var opts = $.extend({}, $.fn.picZoomer.defaults, options), 
			$this = this,
			$picBD = $('<div class="picZoomer-pic-wp"></div>').css({'width':opts.picWidth+'px', 'height':opts.picHeight+'px'}).appendTo($this),
			$pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),
			$cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>').appendTo($picBD),
			cursorSizeHalf = {w:$cursor.width()/2 ,h:$cursor.height()/2},
			$zoomWP = $('<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>').appendTo($this),
			$zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
			picBDOffset = {x:$picBD.offset().left,y:$picBD.offset().top};

		
		opts.zoomWidth = opts.zoomWidth||opts.picWidth;
		opts.zoomHeight = opts.zoomHeight||opts.picHeight;
		var zoomWPSizeHalf = {w:opts.zoomWidth/2 ,h:opts.zoomHeight/2};

		//初始化zoom容器大小
		$zoomWP.css({'width':opts.zoomWidth+'px', 'height':opts.zoomHeight+'px'});
		$zoomWP.css(opts.zoomerPosition || {top: 0, left: opts.picWidth+30+'px'});
		//初始化zoom图片大小
		$zoomPic.css({'width':opts.picWidth*opts.scale+'px', 'height':opts.picHeight*opts.scale+'px'});

		//初始化事件
		$picBD.on('mouseenter',function(event){
			$cursor.show();
			$zoomWP.show();
			$zoomPic.attr('src',$pic.attr('src'))
		}).on('mouseleave',function(event){
			$cursor.hide();
			$zoomWP.hide();
		}).on('mousemove', function(event){
			var x = event.pageX-picBDOffset.x,
				y = event.pageY-picBDOffset.y;

			$cursor.css({'left':x-cursorSizeHalf.w+'px', 'top':y-cursorSizeHalf.h+'px'});
			$zoomPic.css({'left':-(x*opts.scale-zoomWPSizeHalf.w)+'px', 'top':-(y*opts.scale-zoomWPSizeHalf.h)+'px'});

		});
		return $this;

	};
	$.fn.picZoomer.defaults = {
        picHeight: 460,
		scale: 2.5,
		zoomerPosition: {top: '0', left: '380px'},

		zoomWidth: 400,
		zoomHeight: 460
	};
})(jQuery); 



$(document).ready(function () {
     $('.picZoomer').picZoomer();
    $('.piclist li').on('click', function (event) {
        var $pic = $(this).find('img');
        $('.picZoomer-pic').attr('src', $pic.attr('src'));
    });
   
  var owl = $('#recent_post');
              owl.owlCarousel({
                margin:20,
                dots:false,
                nav: true,
                navText: [
                  "<i class='fa fa-chevron-left'></i>",
                  "<i class='fa fa-chevron-right'></i>"
                ],
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                  0: {
                    items: 2
                  },
                  600: {
                    items:3
                  },
                  1000: {
                    items:5
                  },
                  1200: {
                    items:4
                  }
                }
  });    
  
        $('.decrease_').click(function () {
            decreaseValue(this);
        });
        $('.increase_').click(function () {
            increaseValue(this);
        });
        function increaseValue(_this) {
            var value = parseInt($(_this).siblings('input#number').val(), 10);
            value = isNaN(value) ? 0 : value;
            value++;
            $(_this).siblings('input#number').val(value);
        }

        function decreaseValue(_this) {
            var value = parseInt($(_this).siblings('input#number').val(), 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            $(_this).siblings('input#number').val(value);
        }
    });

// about img 

var btn = $("#button");

$(window).scroll(function () {
   if ($(window).scrollTop() > 300) {
      btn.addClass("show");
   } else {
      btn.removeClass("show");
   }
});

btn.on("click", function (e) {
   e.preventDefault();
   $("html, body").animate({
      scrollTop: 0
   }, "300");
});

// slide up end


var a = 0;
$(window).scroll(function () {
   var oTop = $("#counter-box").offset().top - window.innerHeight;
   if (a == 0 && $(window).scrollTop() > oTop) {
      $(".counter").each(function () {
         var $this = $(this),
            countTo = $this.attr("data-number");
         $({
            countNum: $this.text(),
         }).animate({
               countNum: countTo,
            },

            {
               duration: 850,
               easing: "swing",
               step: function () {
                  //$this.text(Math.ceil(this.countNum));
                  $this.text(Math.ceil(this.countNum).toLocaleString("en"));
               },
               complete: function () {
                  $this.text(Math.ceil(this.countNum).toLocaleString("en"));
                  //alert('finished');
               },
            }
         );
      });
      a = 1;
   }
});

// counter end

$(".slider")
   .slick({
      autoplay: true,
      speed: 800,
      lazyLoad: "progressive",
      arrows: false,
      dots: false,
   })
   .slickAnimation();

// slider home end
$(document).ready(function () {
   $("#myModal").modal("show");
});
// notice end
$(document).ready(function () {
   $(".toggle-wrap").hide();
   $(".toggle-trigger").click(function () {
      $(this).parent().nextAll('.toggle-wrap').first().toggle('slow');
   });
});
// team read readMore
$(document).ready(function () {
   window.addEventListener("scroll", function () {
      var header = document.querySelector(".header");
      header.classList.toggle("sticky-bar", window.scrollY > 50);
   });
});
// sticky end
$(document).ready(function () {
   //jquery for toggle sub menus
   $(".sub-btn").click(function () {
      $(this).next(".sub-menu").slideToggle();
      $(this).find(".dropdown").toggleClass("rotate");
   });

   //jquery for expand and collapse the sidebar
   $(".menu-btn").click(function () {
      $(".side-bar").addClass("active");
      $(".menu-btn").css("visibility", "hidden");
   });

   $(".close-btn").click(function () {
      $(".side-bar").removeClass("active");
      $(".menu-btn").css("visibility", "visible");
   });
});
// menu mobile end

// read more start
class readMore {
   constructor() {
      this.content = ".readmore__content";
      this.buttonToggle = ".readmore__toggle";
   }

   bootstrap() {
      this.setNodes();
      this.init();
      this.addEventListeners();
   }

   setNodes() {
      this.nodes = {
         contentToggle: document.querySelector(this.content),
      };

      this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(
         this.buttonToggle
      );
   }

   init() {
      const {
         contentToggle
      } = this.nodes;

      this.stateContent = contentToggle.innerHTML;

      contentToggle.innerHTML = `${this.stateContent.substring(0, 800)}...`;
   }

   addEventListeners() {
      this.buttonToggle.addEventListener("click", this.onClick.bind(this));
   }

   onClick(event) {
      const targetEvent = event.currentTarget;
      const {
         contentToggle
      } = this.nodes;

      if (targetEvent.getAttribute("aria-checked") === "true") {
         targetEvent.setAttribute("aria-checked", "false");
         contentToggle.innerHTML = this.stateContent;
         this.buttonToggle.innerHTML = "Show Less";
      } else {
         targetEvent.setAttribute("aria-checked", "true");
         contentToggle.innerHTML = `${this.stateContent.substring(0, 800)}...`;
         this.buttonToggle.innerHTML = "Show more";
      }
   }
}

const initReadMore = new readMore();
initReadMore.bootstrap();
//about read more end
$(document).ready(function () {

   $(".Modern-Slider").slick({
      autoplay: true,
      autoplaySpeed: 10000,
      speed: 600,
      slidesToShow: 1,
      slidesToScroll: 1,
      pauseOnHover: false,
      dots: true,
      pauseOnDotsHover: true,
      cssEase: 'linear',
      // fade:true,
      draggable: false,
      prevArrow: '<button class="PrevArrow"></button>',
      nextArrow: '<button class="NextArrow"></button>',
   });

})