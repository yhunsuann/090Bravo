$(document).ready(function() {
    //Add class asctive on menu (desk)
    var $itemMenu = $(".menu_wrapper .t_nav li.level1");
    if($itemMenu && $itemMenu.length) {
        $itemMenu.click(function(){
            if($itemMenu.hasClass("active")){
                $itemMenu.removeClass("active");
            } 
            $(this).addClass("active");
            
        });
    }

    //Show select language when click
    var $itemSelect = $(".languages .language_title");
    $itemSelect.click(function(){
        if ($itemSelect.hasClass("active")) {
            $itemSelect.removeClass("active");
        } else {
            $(this).addClass("active");
        }
    });
    $('.featured_products .owl-carousel').owlCarousel({
        loop:true,
        nav: true,
        dots: true,
        margin: 20,
        items: 4,
        responsiveClass:true,
        mouseDrag: true,
        touchDrag: false,
        
        responsive:{
            0:{
                items:1,
                nav:true,
                mouseDrag: false,
                touchDrag: true,
                stagePadding: 20,
            },
            600:{
                items:2,
                nav:false,
                mouseDrag: false,
                touchDrag: true,
                stagePadding: 20,
            },
            1000:{
                items:4,
                nav:true,
                loop:false,
                mouseDrag: true,
                touchDrag: false
            }
        }
    });
    //Featured Products
    $('.owl-carousel').owlCarousel({
        loop:true,
        nav: true,
        dots: true,
        margin: 20,
        items:4,
        responsiveClass:true,
        mouseDrag: true,
        touchDrag: false,
        
        responsive:{
            0:{
                items:1,
                nav:true,
                mouseDrag: false,
                touchDrag: true,
                stagePadding: 20,
            },
            600:{
                items:2,
                nav:false,
                mouseDrag: false,
                touchDrag: true,
                stagePadding: 20,
            },
            1000:{
                items:4,
                nav:true,
                loop:false,
                mouseDrag: true,
                touchDrag: false
            }
        }
    });

    
    //Footer - back to top
    $(".button_back_to_top").click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 1000);
    });

    //Header
    //Open submenu
    var $liLevel1RemoveBorder = $(".menu_body ul li.level1").find(".sub_menu");
    $liLevel1RemoveBorder.closest(".level1").css({"border-bottom": "none", "padding-bottom": "0"});

    var $contentMenuMobile = $(".nav_open_menu");
    var $iconopenMenuMobile = $(".icon_open_nav");
    var $iconCloseMenuMobile = $(".icon_close_menu");
    var $contentSubMenu = $(".menu_body .sub_menu");

    $contentMenuMobile.removeClass("t_active");
    $("body").removeClass("active-header-no-scroll");

    var closeMenuMobile = function () {
        $contentMenuMobile.removeClass("active");
        $("body").removeClass("active-header-no-scroll");
    };
    
    var checkOpenMenu = function () {
        $iconopenMenuMobile.click(function () {
          $contentMenuMobile.addClass("active");
          $("body").addClass("active-header-no-scroll");
      
          $(window).click(function (event) {
            var $target = $(event.target);
            var $parent = $target.closest(".nav_open_menu_content");
            var $bat = $target.closest(".icon_open_nav");
            var $close = $target.closest(".icon_close_menu");
      
            if ($parent.length == 0 && $bat.length == 0 && $close.length == 0) {
              closeMenuMobile();
            }
          });
        });
      
        $iconCloseMenuMobile.click(function () {
          closeMenuMobile();
      
        });
      
        var $liLevel1 = $(".menu_body ul li.level1");
        var $submenuL2 = $(".menu_body .sub_menu");
        var $cacheLevel1;

        $submenuL2.slideUp();

        $liLevel1.click(function () {
            if ($submenuL2.css("display") && $submenuL2.css("display") == "block") {
                $submenuL2.slideUp();
            }
            if ($liLevel1.hasClass("active")) {
                $submenuL2.slideUp();
                $liLevel1.removeClass("active");
                // $submenuL2.removeClass("active");
                
            } else {
                
                $(this).closest(".level1").addClass("active");
                $(this).closest(".level1").find(".sub_menu").slideDown();
                // $(this).closest(".level1").find(".sub_menu").addClass("active");
            } 
        });
    };
      
    checkOpenMenu();

    //Games
    $('.t_tab-detail-product .t_tab-detail-product--head .tab_span').click(function () {
        var attr = $(this).attr("data-tab");
    
        // Cập nhật vào cache dataTab
        dataTab = attr
    
        $('.t_tab-detail-product .t_tab-detail-product--head .tab_span').removeClass("active");
        $('.t_tab-detail-product--body > .t_tab-detail-product--none').removeClass("active");
    
        $(this).addClass("active");
        $('.t_tab-detail-product--body div[data-tab="' + attr + '"]').addClass("active");
    });

    // Desktop tự động mở tab nếu chưa có tab nào được mở
    var $tabActive = $('.t_tab-detail-product .t_tab-detail-product--head .tab_span.active');
    if (!$tabActive || $tabActive.length == 0) {
        var $curentTab = $('.t_tab-detail-product .t_tab-detail-product--head .tab_span').first();
        $curentTab.addClass("active");

        var attr = $curentTab.attr("data-tab");
        // Cập nhật vào cache dataTab
        dataTab = attr

        $('.t_tab-detail-product--body div[data-tab="' + attr + '"]').addClass("active");
    }

    $('.t_tab-detail-product--head .tab_span').off('click.slider').on('click.slider', function () {
        var time1 = 70
        var position = $(this).parent().position();
        var width = $(this).parent().width();
        $(".t_slider").css({ "left": + position.left, "width": width });
    });
    
    var calculatorWidth = function() {
        var $actWidth = $(".t_tab-detail-product--head .tab_span.active");
        if ($actWidth && $actWidth.length) {
          var widthStart = $actWidth[0].getBoundingClientRect().width;
        }
        var actPosition = $(".t_tab-detail-product--head .active").position();
        var leftActPosition = actPosition ? actPosition.left : 0;
        $(".t_slider").css({ "left": +leftActPosition, "width": widthStart });
    }
    
    setTimeout(function () {
      calculatorWidth();
    }, 100)
    
    var delay = 0;
    $(window).off("resize.checkSwitchScreens").on("resize.checkSwitchScreens", function () {
      clearTimeout(delay)
      delay = setTimeout(function () {
        calculatorWidth();
      }, 10)
    })

    //On mobile
    $('.t_tab-detail-product--head-mobi .tab_span').click(function () {
        console.log("ok");
        var attr = $(this).attr("data-tab");
    
        // Cập nhật vào cache dataTab
        dataTab = attr
    
        $('.t_tab-detail-product--head-mobi .tab_span').removeClass("active");
        $('.t_tab-detail-product--body > .t_tab-detail-product--none').removeClass("active");
    
        $(this).addClass("active");
        $('.t_tab-detail-product--body div[data-tab="' + attr + '"]').addClass("active");
    })
    
    // Desktop tự động mở tab nếu chưa có tab nào được mở
    var $tabActive = $('.t_tab-detail-product--head-mobi .tab_span.active');
    if (!$tabActive || $tabActive.length == 0) {
      var $curentTab = $('.t_tab-detail-product--head-mobi .tab_span').first();
      $curentTab.addClass("active");
    
      var attr = $curentTab.attr("data-tab");
      // Cập nhật vào cache dataTab
      dataTab = attr
    
      $('.t_tab-detail-product--body div[data-tab="' + attr + '"]').addClass("active");
    }
    
    //Show select language when click
    var $itemSelectTab = $(".t_tab-detail-product--head-mobi .item_heading");
    $itemSelectTab.click(function(){
        if ($itemSelectTab.hasClass("active")) {
            $itemSelectTab.removeClass("active");
        } else {
            $(this).addClass("active");
            $(".select_items").addClass("active");
            $(window).click(function (event) {
                var $target = $(event.target);
                var $parent = $target.closest(".select_items");
                var $itemSelectTabClose = $target.closest(".t_tab-detail-product--head-mobi .item_heading .heading .text");
                var $itemSelectTabClose1 = $target.closest(".t_tab-detail-product--head-mobi .item_heading .heading .icon_arrow");
                if ($parent.length == 0 && $itemSelectTabClose.length == 0 && $itemSelectTabClose1.length == 0) {
                  $(".select_items").removeClass("active");
                }
              });
        }
    });

    //Loading more effect
    $(".list_games .button_show_all").click(function () {
        $(this).css("display", "none");
        $(".lds-roller").css("display", "flex");
    });

    //Counter
    function counterNumber() {
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).attr('data-count')
            }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
        });
    }

    function positionRelativeBody(el) {
        var rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {
            top: rect.top + scrollTop,
            left: rect.left + scrollLeft
        };
    }

    jQuery(document)
        .off("scroll")
        .on("scroll", function () {
            var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            var $sectionInfos = $(".infos");
            var $sectionInfosHeight = $sectionInfos.outerHeight();
            for (var i = 0; i < $sectionInfos.length; i++) {
                var $sectionInfo = $sectionInfos[i];
                var positionButton = positionRelativeBody($sectionInfo).top - 350;
                var bottomOfSection = positionButton + $sectionInfosHeight;
                if (positionButton < scrollTop && bottomOfSection > scrollTop) {
                    counterNumber();
                    break;
                } else {
                }
            }
        });

});