jQuery(window).scroll(function() {
    var aboutSection = jQuery('#about');
    var sectionTop = aboutSection.offset().top;
    var scrollTop = jQuery(window).scrollTop();

    if (scrollTop >= sectionTop) {
        aboutSection.css('background-color', '#ECF4E8');
    } else {
        aboutSection.css('background-color', 'rgba(254, 243, 234, 1)');
    }
});
jQuery(window).scroll(function() {
    var aboutSection = jQuery('#choose');
    var sectionTop = aboutSection.offset().top;
    var scrollTop = jQuery(window).scrollTop();

    if (scrollTop >= sectionTop) {
        aboutSection.css('background-color', '#ECF4E8');
    } else {
        aboutSection.css('background-color', 'rgba(254, 243, 234, 1)');
    }
});







// // Slick Carousel
jQuery('.trust-banner').slick({
	dots: false,
	infinite: true,
	arrows: false,
	accesibility: false,
	  autoplay: false,
// 	autoplaySpeed: 0,
// 	 cssEase: 'linear',
  initialSlide: 1,
	lazyLoad: 'ondemand',
// 	speed: 5000,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [{
			breakpoint: 1167,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 900,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},

		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
});
jQuery('.custom-prev').click(function () {
	jQuery('.trust-banner').slick('slickNext');
});

jQuery('.custom-next').click(function () {
	jQuery('.trust-banner').slick('slickPrev');
});


// Tabbing

function TabsManager(el) {
	this.tabsContainers = document.querySelectorAll(el);
	this.init();
}

TabsManager.prototype.init = function () {
	var self = this;

	document.body.addEventListener("click", function (event) {
		var target = event.target;

		while (target !== document.body) {
			if (target.matches(".tabs-tags__tag")) {
				self.handleTabClick(target);
				return;
			}

			target = target.parentNode;
		}
	});

	self.tabsContainers.forEach(function (tabsContainer) {
		if (tabsContainer) {
			var contentTexts = tabsContainer.querySelectorAll(".tabs-content__text");
			contentTexts.forEach(function (text, index) {
				if (index !== 0) {
					text.style.display = "none";
				}
			});
			tabsContainer.querySelector(".tabs-tags__tag").classList.add("active");
		}
	});
};

TabsManager.prototype.handleTabClick = function (clickedTab) {
	var self = this;
	var tabsContainer = clickedTab.closest(".tabs");

	if (tabsContainer) {
		var contentTexts = tabsContainer.querySelectorAll(".tabs-content__text");
		var tags = tabsContainer.querySelectorAll(".tabs-tags__tag");
		var index = Array.from(tags).indexOf(clickedTab);
		contentTexts.forEach(function (text) {
			text.style.display = "none";
		});
		contentTexts[index].style.display = "block";
		tags.forEach(function (t) {
			t.classList.remove("active");
		});
		clickedTab.classList.add("active");
	}
};

// tab-slider
jQuery('.tabs-content').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: false,
	infinite: false,
	speed: 1000,
	asNavFor: '.slider-thumb',
	arrows: false,
	//   prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
	//   nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
	accesibility: false,
	draggable: false,
	swipe: false,
	touchMove: false,
	centerMode:false,
	initialSlide: 1,
  });

  jQuery('.tabs-tags').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	asNavFor: '.slider-content',
	dots: false,
  	centerMode:false,
	focusOnSelect: true,
	infinite: true,
	  initialSlide: 1,
  });


//   choose-slider

jQuery(document).ready(function(jQuery) {
	jQuery('.why-chose').slick({
	  dots: false,
	  infinite: true,
	  speed: 500,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  arrows: false,
	  responsive: [{
		breakpoint: 1200,
		settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: false
		}
	},
	{
		breakpoint: 750,
		settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		}
	},
	{
		breakpoint: 480,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
	}
]
  });
});

        jQuery(document).ready(function () {
            jQuery('.mob-hamburger button').click(function () {
                jQuery(this).toggleClass('active');
                jQuery('.header-angle').toggleClass('active');
                jQuery('.header-pages ul').toggleClass('active');
            });
        });
  

    
     
        jQuery(document).ready(function () {
            jQuery(".mob-hamburger button").click(function () {
                jQuery("body").toggleClass("body-fix");
            });
        });
   

   
   
        jQuery(document).ready(function () {
            jQuery(".drop-down .sub").click(function () {
                jQuery(".sub-menu").slideToggle();
            });
        });

  jQuery(document).on('ready', function () {
    AOS.init({
      duration: 650,
      once: true
    });
  });
jQuery(document).ready(function(){
    jQuery("#myvid").prop('muted', true);

    jQuery("#vidbutton").click(function(){
        jQuery(this).toggleClass('stop');
        
        // Toggle mute status
        var isMuted = jQuery('#myvid').prop('muted');
        jQuery('#myvid').prop('muted', !isMuted);

        // If the video was unmuted, start from the beginning
        if (isMuted) {
            jQuery('#myvid').get(0).currentTime = 0;
            jQuery('#myvid').get(0).play();
        }
    });
});


  


jQuery(document).ready(function(){
    jQuery("a").click(function(event) {
        event.preventDefault();
        var href = jQuery(this).attr("href");

        // Check if navigation was not done via the browser's back or forward arrows
            if (href !== "#" && href !== "#.") {
                jQuery('.loader').addClass("active1");
                setTimeout(function() {
                    window.location.href = href; // Navigate to the link after 1.4 seconds
                }, 1400); // 1400 milliseconds = 1.4 seconds
            }
    });
});



jQuery(window).on("load", function(){
	jQuery('.loader2').addClass("pageActive");
	jQuery('.loader').addClass("pageActive");
	setTimeout(function(){
		jQuery('.loader').removeClass("pageActive");
	}, 1000)
});






jQuery(document).ready(function(){
    // Check if the page is being shown again after a back or forward navigation
    window.addEventListener('pageshow', function(event) {
        // Check if the page is loaded from the cache
        if (event.persisted) {
            // Reload the page
            window.location.reload();
        }
    });

    jQuery("a").click(function(event) {
        event.preventDefault();
        var href = jQuery(this).attr("href");

        // Check if navigation was not done via the browser's back or forward arrows
        if (window.performance && window.performance.navigation.type !== 2 && window.performance.navigation.type !== 1) {
            if (href !== "#" && href !== "#.") {
                jQuery('.loader').addClass("active1");
                setTimeout(function() {
                    window.location.href = href; // Navigate to the link after 1.4 seconds
                }, 1400); // 1400 milliseconds = 1.4 seconds
            }
        }
    });
});



