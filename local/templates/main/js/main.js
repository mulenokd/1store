var isDesktop = false,
    isTablet = false,
    isMobile = false,
    progress = new KitProgress("#FF345F", 2),
    countQueue = {};

function LineBlockHeight(block){

    $(block).css("height","");

    var maxHeight = $(block).innerHeight();

    $(block).each(function(){
      if ( $(this).innerHeight() > maxHeight ) 
      { 
        maxHeight = $(this).innerHeight();
      }
    });
     
    $(block).innerHeight(maxHeight);
}

$(document).ready(function(){	

     function slick_init(){

        $(".b-catalog-slider").slick({
            dots: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            cssEase: 'ease', 
            speed: 500,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow"></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow"></button>',
            touchThreshold: 100,
            responsive: [
                {
                  breakpoint: 1150,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 960,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1
                  }
                },
            ]
        });

        $('.b-detail-top-slider').slick({
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            cssEase: 'ease', 
            speed: 500,
            arrows: true,
            asNavFor: '.b-detail-bottom-slider',
            prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow"></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow"></button>',
            touchThreshold: 100
        });

        $('.b-detail-bottom-slider').slick({
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            cssEase: 'ease', 
            speed: 500,
            arrows: false,
            asNavFor: '.b-detail-top-slider',
            prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow"></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow"></button>',
            touchThreshold: 100,
            focusOnSelect: true,
            variableWidth: true
        });

        $('.b-gallery-preview .b-1-by-3-container').slick({
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            cssEase: 'ease', 
            speed: 500,
            autoplay: true,
            arrows: false,
            touchThreshold: 100,
            responsive: [
                {
                  breakpoint: 600,
                  settings: {
                    centerMode: true,
                    centerPadding: "30px",
                    slidesToShow: 1
                  }
                },
            ]
        });

        $('.b-work-slider-top').slick({
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            cssEase: 'ease', 
            speed: 500,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow"></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow"></button>',
            asNavFor: '.b-work-slider-bottom',
            touchThreshold: 100
        });

        $('.b-work-slider-bottom').slick({
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            cssEase: 'ease', 
            speed: 500,
            arrows: false,
            asNavFor: '.b-work-slider-top',
            touchThreshold: 100,
            focusOnSelect: true,
            responsive: [
                {
                  breakpoint: 500,
                  settings: {
                    slidesToShow: 1
                  }
                },
            ]
        });

    };

    function tabs_slider(id){
        var tabs_count = $('#'+id+' .b-tab').length - 1;
        $('#'+id).slick({
            dots: false,
            slidesToShow: tabs_count,
            infinite: true,
            slidesToScroll: 1,
            cssEase: 'ease', 
            centerMode: true,
            speed: 500,
            variableWidth: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow"></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow"></button>',
            touchThreshold: 100,
            focusOnSelect: true,
        });  
    };

    function wholesale_height(){
        $('.b-wholesale-catalog .b-wholesale-img-container').each(function(){
            $(this).height($(this).width());
        });
        $('.b-wholesale-brands .b-wholesale-img-container').each(function(){
            $(this).height($(this).width()/1.54);
        });
    }

    function certificateImg(){
        $('.b-certificates-list').find('.b-certificate-img').each(function() {
            var height = $(this).height();
            var width = $(this).width();
            var k = height/width;
            $(this).height(k*width);
        })
    }

    slick_init();

    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }

        if( myWidth > 1024 ){
            isDesktop = true;
            isTablet = false;
            isMobile = false;
        }else if( myWidth > 767 && myWidth < 1023 ){
            isDesktop = false;
            isTablet = true;
            isMobile = false;
        }else{
            isDesktop = false;
            isTablet = false;
            isMobile = true;
        }


        footerOuterHeight = !!$('.b-footer').outerHeight() ? $('.b-footer').outerHeight(true) + 30 : 0,
        headerHeight = 0;
        if($('.b-header').length){
            headerHeight = $('.b-header').outerHeight(true) + $(".b-header").offset().top;
        }
        var minHeight = myHeight - footerOuterHeight - headerHeight;
        if(minHeight >= 0){
            $('.b-content-block').css({
                'min-height': minHeight
            });
        } 
    }

    progress.endDuration = 0.2;

    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();

    // $('.b-sort-block a').on('click', function(){
    //     if ($(this).hasClass('active')) {
    //         if ($(this).hasClass('up')) {
    //             $(this).removeClass('up');
    //             $(this).addClass('down');
    //         }
    //         else{
    //             $(this).removeClass('down');
    //             $(this).addClass('up');
    //         }
    //     }
    //     else{
    //         $('.b-sort-block a').removeAttr('class');
    //         $('.b-sort-block a').addClass('icon-arrow');
    //         $(this).addClass('active up');
    //     }
    //     return false;
    // });

    setInterval(function(){
        if( $(".b-gift").length ){
            $(".b-catalog-gifts").show();
        }else{
            $(".b-catalog-gifts").hide();
        }
    }, 200);

/******************************************/

    var menuSlideout = new Slideout({
        'panel': document.getElementById('panel-page'),
        'menu': document.getElementById('mobile-menu'),
        'side': 'left',
        'padding': 300,
        'touch': false
    });

    // var catalogSlideout = new Slideout({
    //     'panel': document.getElementById('panel-page'),
    //     'menu': document.getElementById('mobile-catalog'),
    //     'side': 'right',
    //     'padding': 300,
    //     'touch': false
    // });

    $('.mobile-menu').removeClass("hide");
    $('.mobile-catalog').removeClass("hide");

    $('.burger-menu').click(function() {
        menuSlideout.open();
        $('.mobile-menu').show();
        $('.mobile-catalog').hide();
        $(".b-menu-overlay").show();
        return false;
    });

    $('#catalog-menu-btn').click(function() {
        catalogSlideout.open();
        $('.mobile-catalog').show();
        $('.mobile-menu').hide();
        $(".b-menu-overlay").show();
        return false;
    });

    $('.b-menu-overlay').click(function() {
        menuSlideout.close();
        catalogSlideout.close();
        $('.b-menu-overlay').hide();
        return false;
    });

    menuSlideout.on('open', function() {
        $('.mobile-menu').removeClass("hide");
        $('.burger-menu').addClass("menu-on");
        $(".b-menu-overlay").show();
    });

    // catalogSlideout.on('open', function() {
    //     $('.mobile-catalog').removeClass("hide");
    //     $(".b-menu-overlay").show();
    // });

    menuSlideout.on('close', function() {
        setTimeout(function(){
            $("body").unbind("touchmove");
            $(".b-menu-overlay").hide();
        },100);
    });

    // catalogSlideout.on('close', function() {
    //     setTimeout(function(){
    //         $("body").unbind("touchmove");
    //         $(".b-menu-overlay").hide();
    //     },100);
    // });

    var e = $('.b-menu-overlay, .mobile-menu');
    // var ev = $('.b-menu-overlay, .mobile-catalog');

    e.touch();
    // ev.touch();

    e.on('swipeLeft', function(event) {
        menuSlideout.close();
    });

    // ev.on('swipeRight', function(event) {
    //     setTimeout(function(){
    //         $(".b-menu-overlay").hide();
    //     },200);
    //     catalogSlideout.close();
    // });

/******************************************/

    $('.menu-accordion').accordion({
        header: "> div > h3",
        collapsible: true,
        heightStyle: "content",
        active: false
    });

    if ($('.b-news-item-text').length) {
        $('.b-news-block').find('.b-news-item-text').each(function(){
            if ($(this).height() > 72) {
                $(this).css('max-height', '72px');
                $(this).parents('.b-news-item-right').find('.b-news-detail-link').removeClass('hide');
            }
        });
    }

    $(document).on('click', '.b-pagination-item, .b-load-more-works', function(){
        var $container = $(this).parents('.pagination-container'),
            $list = $container.find('.pagination-list'),
            $pagination = $container.find('.b-load-more-container'),
            $this = $(this),
            url = $(this).attr('href');
        $container.addClass('preloader');
        if (!$this.hasClass('b-load-more-works')) {
            $("body, html").animate({
                scrollTop : $container.offset().top - 150
            },800);
        }
        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){
                    if ($this.hasClass('b-load-more-works')) {
                        $list.append($(data).find('.pagination-list').html());
                    } else { 
                        $list.html($(data).find('.pagination-list').html());
                    }
                    console.log($(data).find('.b-load-more-container'));
                    $pagination.html($(data).find('.b-load-more-container').html());
                },
                complete: function(){
                    $container.removeClass('preloader');
                }
            })
        }
        return false;
    });

    $(document).on('click', '.b-load-more-comments', function(){
        var targetContainer = $('.b-comments-list'),
            url = $('.b-load-more').attr('href');
        $('.b-comments-list').addClass('preloader');
        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){
                    $('.b-load-more').remove();
                    console.log($(data).find('.parrent-comment'));
                    var elements = $(data).find('.parrent-comment'),
                        pagination = $(data).find('.b-load-more');
                        targetContainer.append(elements);
                    $('.b-load-more-container').append(pagination);
                },
                complete: function(){
                    $('.b-comments-list').removeClass('preloader');
                }
            })
        }
        return false;
    });

    $(document).on('change', '.b-catalog-form input, .b-catalog-form select', function(){
        var $form = $(this).parents('form'),
            $catalog = $form.parents('.b-catalog-preview').find('.b-catalog-list'),
            $pagination = $(this).parents('.pagination-container').find('.b-load-more-container'),
            type = $form.attr('type'),
            url = '?'+$form.serialize();
            console.log(url);
        $catalog.addClass('preloader');
        $.ajax({
            type: type,
            url: url,
            dataType: 'html',
            success: function(data){
                if ($(data).find('.b-catalog-list').html()) {
                    $catalog.html($(data).find('.b-catalog-list').html());
                } else {
                    $catalog.html("<p>По Вашему запросу товаров не найдено.</p>")
                }
                $pagination.html($(data).find('.b-load-more-container').html());
            },
            complete: function(){
                $catalog.removeClass('preloader');
            }
        })
    });

    function addContent($this){
        progress.start(3.5);
        var url = $this.attr('href'),
            text = parseInt($this.text());

        if ($this.hasClass('active')){
            text -= 1;
            $this.removeClass('active');
        } else {
            if($this.siblings('.active')){
                otherText = parseInt($this.siblings('.active').text()) - 1;
                $this.siblings('.active').text(otherText);
                $this.siblings('.active').removeClass('active');
            }
            text += 1;
            $this.addClass('active');
        }

        $this.text(text);

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                error: function(){

                    if ($this.hasClass('active')) {
                        $this.removeClass('active');
                        text -= 1;
                    } else {
                        $this.addClass('active');
                        text += 1;
                    }

                    $this.text(text);
                }
            })
        }
        progress.end();
    }

    $(document).on('click', '.b-work-detail-like a, .b-comment-mark',  function(){
        addContent($(this));
        return false;
    });

    $('.b-news-detail-link').on('click',function(){
        $(this).parents('.b-news-item-right').find('.b-news-item-text').css('max-height', 'unset');
        $(this).addClass('hide');
        return false;
    });

    $('.b-addressee-desktop .b-addressee-switch').on('click', function(){
        if($('.b-addressee-desktop .b-addressee-left').hasClass("active")){
            $('.b-addressee-desktop .b-addressee-left').removeClass("active");
            $('.b-addressee-desktop .b-addressee-right').addClass("active");
            $('.b-address').addClass("hide");
        }else{
            $('.b-addressee-desktop .b-addressee-right').removeClass("active");
            $('.b-addressee-desktop .b-addressee-left').addClass("active");
            $('.b-address').removeClass("hide");
        }
        $(".b-auth-container").addClass("hide");
        $("#"+ $(this).siblings(".active").attr("data-tab")).removeClass("hide");
        return false;
    });

    // Добавление в корзину
    var cartTimeout = 0,
        successTimeout = 0;
    $("body").on("click",".b-btn-to-cart",function(){
        var url = $(this).attr("href"),
            $cont = $(this).parents(".b-basket-count-cont"),
            $this = $(this);

        if( $cont.find("input[name=quantity]").length ){
            $cont.find("input[name=quantity]").val($cont.find("input[name=quantity]").attr("data-min"));
            url = url + "&quantity=" + $cont.find("input[name=quantity]").attr("data-min");
        }
        
        clearTimeout(cartTimeout);

        $(this).parents(".b-basket-count-cont").addClass("b-item-in-basket");

        // if( $(".b-basket-table").length ){
        //     $("body, html").animate({
        //         scrollTop : $(".b-basket-table").offset().top - $(".b-fixed-back").height() - 20
        //     }, 300);    
        // }

        progress.start(1.5);

        $.ajax({
            type: "GET",
            url: url,
            success: function(msg){
                progress.end();

                if( isValidJSON(msg) ){
                    var json = JSON.parse(msg);

                    if( json.result == "success" ){
                        if( json.action == "reload" ){
                            window.location.reload();
                        }else{
                            updateBasket(json.count, json.sum);
                        }
                    }
                }else{
                    alert("Ошибка добавления в корзину");
                }
            },
            error: function(){
                alert("Ошибка добавления в корзину");
            }
        });

        // if( $(".b-top-basket-mobile:visible").length ){
        //     $(".b-basket ul").html("<li class='b-preload-cart'><img src=\"/bitrix/templates/main/html/i/preload.svg\" alt=\"\" class=\"b-svg-preload b-svg-preload-popup\"></li>");

        //     if( !$(".b-basket-table").length ){
        //         $(".b-top-basket-mobile").click();
        //     }else{
        //         $("body, html").animate({
        //             scrollTop : $(".b-inner-cart").offset().top-53
        //         }, 300);
        //     }
        // }

        return false;
    });

    function isValidJSON(src) {
        var filtered = src;
        filtered = filtered.replace(/\\["\\\/bfnrtu]/g, '@');
        filtered = filtered.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']');
        filtered = filtered.replace(/(?:^|:|,)(?:\s*\[)+/g, '');

        return (/^[\],:{}\s]*$/.test(filtered));
    }

    function changeWholesale(){
        if( $(".b-dynamic-price").length && $(".b-dynamic-discount-price").length && $(".b-detail-right").length ){
            var value = $(".b-quantity-input").val()*1;

            $(".b-dynamic-discount-price").hide();
            $(".b-dynamic-price.price").show();

            $(".b-dynamic-discount-price").each(function(){
                var from = $(this).attr("data-from")*1;
                if( value >= from ){
                    $(".b-dynamic-price, b-dynamic-discount-price").hide();
                    $(this).show();
                }
            });
        }
    }

    changeWholesale();

    // Изменение количества в каталоге по кнопкам
    $("body").on("click", ".b-change-quantity", function(){
        var $input = $(this).parents(".b-input-cont").find("input"),
            quantity = $input.val()*1,
            side = $(this).attr("data-side"),
            maxBasketCount = $input.attr("data-max")*1,
            minBasketCount = $input.attr("data-min")*1;

        if( (quantity == 0 && side == "-") || (quantity == maxBasketCount && side == "+") ){
            if( quantity == maxBasketCount && side == "+" ){
                $(this).parents(".b-basket-count-cont").find(".b-error-max-count").show();
            }

            return false;
        }
        $(this).parents(".b-basket-count-cont").find(".b-error-max-count").hide();

        if( quantity == minBasketCount && side == "-" ){
            quantity = 0;
        }else{
            quantity = (side == "+")?(quantity+1):(quantity-1);

            if( quantity < minBasketCount ){
                quantity = minBasketCount;
            }
        }        
        
        $input.val(quantity).change();

        if( quantity == 0 ){
            $(this).parents(".b-basket-count-cont").removeClass("b-item-in-basket");
        }

        return false;
    });

    // Изменение количества в каталоге путем ввода
    $("body").on("change", ".b-quantity-input", function(){
        var url = $(this).parents(".input-cont").find(".icon-minus").attr("href"),
            $item = $(".b-cart-item[data-id='"+$(this).parents("li, tr").attr("data-id")+"']"),
            $input = $(this),
            quantity = $input.val()*1,
            maxBasketCount = $input.attr("data-max"),
            minBasketCount = $input.attr("data-min"),
            id = $(this).attr("data-id")*1;

        if( quantity > maxBasketCount ){
            $(this).parents(".b-basket-count-cont").find(".b-error-max-count").show();
        }else{
            $(this).parents(".b-basket-count-cont").find(".b-error-max-count").hide();
        }

        quantity = ( quantity < 0 )?0:quantity;
        quantity = ( quantity > maxBasketCount )?maxBasketCount:quantity;

        if( quantity == 0 ){
            $(this).parents(".b-basket-count-cont").removeClass("b-item-in-basket");
        }else{
            if( quantity < minBasketCount ){
                quantity = minBasketCount;
            }
        }
        
        $input.val(quantity);
        $item.find("p.b-basket-item-count").text(quantity+" шт.");
        $item.find("select.b-basket-item-count").val(quantity);

        ajaxChangeQuantity(id, quantity);
    });

    var quantityDelays = [];

    function ajaxChangeQuantity(id, quantity){
        if( typeof quantityDelays[id] == "undefined" ){
            quantityDelays[id] = 0;
        }
        if( typeof countQueue[id] == "undefined" ){
            countQueue[id] = 0;
        }

        clearTimeout(quantityDelays[id]);

        changeWholesale();

        quantityDelays[id] = setTimeout(function(){
            quantityDelays[id] = 0;

            countQueue[id]++;

            progress.start(1.5);

            $.ajax({
                type: "GET",
                url: "/ajax/?action=QUANTITY",
                data: { 
                    QUANTITY : quantity,
                    ELEMENT_ID : id
                },
                success: function(msg){
                    var reg = /<!--([\s\S]*?)-->/mig;
                    msg = msg.replace(reg, "");
                    var json = JSON.parse(msg);

                    countQueue[id]--;

                    progress.end();

                    if( json.result == "success" ){

                        if( countQueue[id] == 0 && quantityDelays[id] == 0 ){
                            console.log(json.quantity);
                            $(".b-quantity-input[data-id='"+json.id+"']").val(json.quantity);

                            if( json.quantity == 0 ){
                                $(".b-quantity-input[data-id='"+json.id+"']").parents(".b-basket-count-cont").removeClass("b-item-in-basket");
                            }
                        }

                        updateBasket(json.count, json.sum);
                    }else{
                        alert("Ошибка изменения количеста, пожалуйста, обновите страницу");
                    }
                },
                error: function(){
                    countQueue[id]--;
                }
            });
        }, 500);
    }

    function updateBasket(count, sum){
        $(".cart-count").text( count + " шт." );
        $(".cart-sum").text( sum );

        if( $(".cart-sum").text() == "0" ){
            $(".cart-sum").hide();
            $(".cart-count").hide();
        }else{
            $(".cart-sum").show();
            $(".cart-count").show();
        }
    }

    if( $(".b-detail-text-wrap").length ){
        if( $(".b-detail-text-wrap").height() > $(".b-detail-text").height() ){
            $(".b-detail-text-more").css("display", "inline-block");
        }else{
            $(".b-detail-text").removeClass("limit");
        }
    }

    $("body").on("click", ".b-detail-text-more", function(){
        if( $(".b-detail-text").hasClass("limit") ){
            $(".b-detail-text").removeClass("limit");
            $(this).text("Скрыть текст");
        }else{
            $(".b-detail-text").addClass("limit");
            $(this).text("Читать полностью");

            $("body, html").animate({
                scrollTop : $(".b-detail-text").offset().top - 8
            }, 300);
        }

        return false;
    });

    $(".b-reviews-count p").click(function(){
        if( $(".b-detail-reviews").length ){
            $("body, html").animate({
                scrollTop : $(".b-detail-reviews").offset().top + 1
            }, 300);
        }
    });

    $('.b-review-input .b-star').hover(function(){

        var index = parseInt($(this).index()) + 1;

        $(this).parent().find('.b-star').each(function(){
            $(this).css('color', '#CCC');
            if ($(this).index() < index) {
                $(this).css('color', '#FFAC00');
            }
        });
    })

    $('.b-review-input .b-star').mouseout(function() {
        $(this).parent().find('.b-star').css('color', '');
    });

    $('.b-review-input .b-star').on('click', function(){

        var index = parseInt($(this).index()) + 1;
        $(this).parent().removeClass('b-stars-0 b-stars-1 b-stars-2 b-stars-3 b-stars-4 b-stars-5');
        $(this).parent().addClass(('b-stars-'+index));
        $(this).parents('.b-review-input').find('input').val(index);

    });

    $('.item-review-btn').on('click', function(){ // добавить id товара в action формы

        var form = $('#b-review-form').find('form')
        var text = form.attr('action');
        var term = "product_id=";
        var id = $(this).attr('data-id');

        if (text.indexOf(term) != -1){
            if (text.indexOf(term) + term.length == text.length) {
                form.attr('action', text + id);
            }
        }
            
    });

    if ($('#pluploadCont').length){

        var uploader = new plupload.Uploader({
            runtimes : 'html5,flash,silverlight,html4',
            browse_button : 'pickfiles', // you can pass an id...
            container: document.getElementById('pluploadCont'), // ... or DOM Element itself
            url : $('#b-form-review').attr("data-file-action"),
            multi_selection: false,
            
            filters : {
                max_file_size : '20mb',
                mime_types: [
                    {title : "Image files", extensions : "jpg,jpeg,gif,png"},
                    {title : "Documents", extensions : "doc,docx,pdf,rtf,xls,xlsx"},
                    {title : "Archive", extensions : "zip,rar,7z"},
                ]
            },

            init: {
                PostInit: function() {
                    // var msgNoSupport = document.getElementById('plupload-no-support');
                    // msgNoSupport.parentNode.removeChild(msgNoSupport);
                    
                },
                FilesAdded: function(up, files) {
                    plupload.each(files, function(file) {
                        if (up.files.length > 1) {
                            up.removeFile(up.files[0]);
                        }
                        // document.getElementById('filelist').innerHTML = '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                        // document.getElementById("pickfiles").innerHTML = "Резюме выбрано";
                        $("#original_filename").val(file.name);
                        document.getElementById("pickfiles").className = "attach successful";
                    });
                    up.start();
                    
                },
                UploadProgress: function(up, file) {
                    document.getElementById("pickfiles").innerHTML = "Загрузка&nbsp;" + file.percent + "%";
                },
                FileUploaded: function(up, file, res) {
                    document.getElementById("pickfiles").innerHTML = "Файл прикреплен";
                    document.getElementById("pickfiles").className = "attach successful";
                    var json = JSON.parse(res.response);
                    $("#random_filename").val(json.filePath); 
                },
                Error: function(up, err) {
                    // alert("При загрузке файла произошла ошибка.\n" + err.code + ": " + err.message);
                    if (err.code == -600) {
                        document.getElementById("pickfiles").innerHTML = "Файл слишком большой";
                        document.getElementById("pickfiles").className = "attach error";
                    };
                    if (err.code == -601) {
                        document.getElementById("pickfiles").innerHTML = "Неверный формат файла";
                        document.getElementById("pickfiles").className = "attach error";
                    };
                }
            }
        });
        uploader.init();
    }

    if ($('#add-photo').length){
        $this = $('#add-photo');
        var uploader = new plupload.Uploader({
            runtimes : 'html5,flash,silverlight,html4',
            browse_button : 'pickfiles', // you can pass an id...
            container: document.getElementById('add-photo'), // ... or DOM Element itself
            url : $('#b-popup-add-work-form').attr("data-file-action"),
            multi_selection: true,
            filters : {
                max_file_size : '20mb',
                mime_types: [
                    {title : "Image files", extensions : "jpg,jpeg,gif,png"},
                    {title : "Documents", extensions : "doc,docx,pdf,rtf,xls,xlsx"},
                    {title : "Archive", extensions : "zip,rar,7z"},
                ]
            },
            init: {
                PostInit: function() {
                    
                },
                FilesAdded: function(up, files) {
                    progress.start(1.5);
                    plupload.each(files, function(file) {
                        
                    });
                    up.start();
                    $this.addClass('preloader');
                },
                UploadProgress: function(up, file) {
                    $('.b-popup-add-link.icon-add-photo:before').css('content', '\e922');
                },
                FileUploaded: function(up, file, res) {
                    var json = JSON.parse(res.response);
                    if ($this.hasClass("b-cabinet-form")){
                        $("#new_photo").val(json.filePath);
                        console.log('uploaded');
                    } else{
                        var block = 
                        '<div class="b-popup-add-photo" style="background-image:url(\'/upload/tmp/'+json.filePath+'\')">'+
                            '<a href="#" class="work-delete">'+
                                '<div></div>'+
                                '<div></div>'+
                            '</a>'+
                            '<input id="work-'+json.filePath+'", type="hidden", name="work-'+json.filePath+'", value="'+json.filePath+'">'+
                        '</div>';
                        $(block).appendTo('#b-popup-add-photo-list');
                    }
                    // $('<input>',{id:'work-'+json.filePath, type:'hidden', name:'work-'+json.filePath, value: json.filePath}).appendTo('#add-photo');
                    // $('<div>',{class:'b-popup-add-photo', style:'background-image:url("/upload/tmp/'+json.filePath+'")'}).appendTo('#b-popup-add-photo-list');
                },
                Error: function(up, err) {
                    // alert("При загрузке файла произошла ошибка.\n" + err.code + ": " + err.message);
                    if (err.code == -600) {
                        $("#pickfiles").innerHTML = "Файл слишком большой";
                        $("#pickfiles").addClass('error');
                    };
                    if (err.code == -601) {
                        $("#pickfiles").innerHTML = "Неверный формат файла";
                        $("#pickfiles").addClass('error');
                    };
                },
                UploadComplete: function() {
                    progress.end();
                    if ($this.hasClass("b-cabinet-form")) {
                        var type = $this.attr('method'),
                            url = $this.attr('action'),
                            data = $this.serialize();
                        $.ajax({
                            type: type,
                            url: url,
                            data: data,
                            dataType: 'html',
                            success: function(msg){
                                var json = JSON.parse(msg);
                                if ($('#pickfiles').hasClass("icon-add-photo")) {
                                    $('#pickfiles').removeClass('icon-add-photo');
                                    $('#pickfiles').addClass('icon-change-photo');
                                    $('#pickfiles').append('<div class="b-profile-photo-back"></div>');
                                }
                                $('#pickfiles').css('background-image', 'url("'+json.photo+'")');
                            },
                            complete: function(){
                                $this.removeClass('preloader');
                            }
                        })
                    }
                }
            }
        });
        uploader.init();
    }

    // console.log($('#b-popup-add-work textarea.b-popup-input'));

    if($('#work-comment').length){
        autosize($('#work-comment'));
    }

    $(document).on('click', '.b-popup-edit-add.icon-plus', function(){
        var $this = $(this),
            $form = $(this).parents('.b-popup').find('form'),
            $block = $form.find('#address-container');

        $block.clone()
            .each(function(){
                $(this).find('.b-popup-h4').before(
                    '<a href="#" class="b-popup-h4 b-popup-edit-add icon-minus">Адрес доставки</a>'
                    );
                $(this).find('div.b-popup-h4').remove();
                $(this).find('input').each(function(){
                    if ($(this).attr("type") == "hidden") {
                        $(this).remove();
                    } else {
                        $(this).val("");
                        $arr = $(this).attr('name').split("[");
                        $clone = parseInt($this.attr('data-clone'));
                        $string = $arr[0]+"["+$clone+"]["+$arr[2];
                        $(this).attr('name', $string);
                    }
                });
            })
            .insertBefore($this);

        $this.attr('data-clone', parseInt($this.attr('data-clone')) + 1);
    });

    $(document).on('click', '.b-popup-edit-add.icon-minus', function(){
        var $form = $(this).parents("form"),
            $link = $form.find(".b-popup-edit-add.icon-plus"),
            $id = $(this).parents(".b-popup-edit-container").find(".address-item-id").attr("value");
        $link.attr('data-clone', parseInt($link.attr('data-clone')) - 1);
        if (typeof $id != 'undefined') {
            $form.append("<input type='hidden' name='delete[]' value="+$id+">");
        }
        $(this).parents('.b-popup-edit-container').remove();
        return false;
    });

    $('.menu-accordion').accordion({
        header: "> div > h3",
        collapsible: true,
        heightStyle: "content",
        active: false
    });

    $('body').on('click','.work-delete', function(){
        $(this).parents('.b-popup-add-photo').remove();
    })

    $('.b-accordion-item').accordion({
        header: ">h3",
        collapsible: true,
        heightStyle: "content",
        active: false
    });

    $('.b-delivery-accordion-inner-item').accordion({
        header: "h4",
        collapsible: true,
        heightStyle: "content",
        active: false
    });

    $('.b-catalog-preview .b-big-tabs h2').on('click', function(){
        var tab = $(this).attr('data-tab');
        $(this).parent().siblings().find('h2').addClass('deactive');
        $(this).removeClass('deactive');
        $('.b-catalog-preview .b-catalog-list').addClass('hide');
        $('#'+tab).removeClass('hide');
    });

    $('.b-tabs-container').each(function(){
        containerWidth = $(this).width();
        width = 0;
        $(this).find('.b-tab').each(function(){
            width += $(this).width();
        })
        if (containerWidth/width > 2) {
            $(this).addClass('taleft');
        }
        else{
            $(this).addClass('tajustify');
        }
    });

    $('.b-sort-item select').styler();
    $('.detail-select-block select').styler();
    $('.b-cart-input select').styler();

    $('.sort-icon').on('click', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        var style = $(this).attr('data-style');
        var catalog = $(this).parents('.b-block').find('.b-catalog-list');
        catalog.removeAttr('class');
        catalog.addClass('b-catalog-list');
        catalog.addClass(style);
        return false;
    });

    $(document).on('click', '.b-comment-reply', function(){
        var $form = $(this).parents('.parrent-comment').find('.comment-form'),
            $parentComment = $(this).parents('.parrent-comment'),
            $list = $(this).parents('.b-comments-list');
            $hide = false;

        if ($form.hasClass('hide')) {
            $hide = true;
        }

        $list.find('.parrent-comment').each(function(){
            if (!$(this).find('.comment-form').hasClass('hide')) {
                $(this).find('.comment-form').addClass('hide');
            }
        });

        if ($hide) {
            $form.removeClass('hide');
            $("body, html").animate({
                scrollTop : $form.offset().top
            }, 500);
        } else {
            $form.addClass('hide');
        }

        return false;
    });

    $('.b-comment-btn').on('click',function(){
        $(this).parents('.comment-form').addClass('hide');
    })

    $('.b-works-sort-item select').change(function(){
        var $form = $(this).parents('form'),
            type = $form.attr('type'),
            url = '?'+$form.serialize();
        $('.b-works-list-container').addClass('preloader');
        console.log(url);
        $.ajax({
            type: type,
            url: url,
            dataType: 'html',
            success: function(data){
                $('.b-works-list-container').html($(data).find('.b-works-list-container').html());
            },
            complete: function(){
                $('.b-works-list-container').removeClass('preloader');
            }
        })
    })

    $('.b-faq-item').accordion({
        active: false,
        header: "> .b-faq-header",
        collapsible: true,
        heightStyle: "content"
    });

    if ($('.b-subcategory .b-1-by-3-blocks .b-block-1').height() > window.innerHeight) {
        $('.b-subcategory .b-1-by-3-blocks .b-block-1').css('position', 'unset');
    }

    $('.b-cart-line-red').css('width', $('.b-cart-line-red').attr('data-width'));

    $('input[name="delivery"]').on('change',function(){
        var tab = $(this).attr('data-tab');
        $('.delivery-container').addClass('hide');
        $('#delivery-container-'+tab).removeClass('hide');
    });

    // // Первая анимация элементов в слайде
    // $(".b-step-slide[data-slick-index='0'] .slider-anim").addClass("show");

    // // Кастомные переключатели (тумблеры)
    // $(".b-step-slider").on('beforeChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-tabs li.active").removeClass("active");
    //     $(".b-step-tabs li").eq(nextSlide).addClass("active");
    // });

    // // Анимация элементов в слайде
    // $(".b-step-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-slide .slider-anim").removeClass("show");
    //     $(".b-step-slide[data-slick-index='"+currentSlide+"'] .slider-anim").addClass("show");
    // });


    
	// var myPlace = new google.maps.LatLng(55.754407, 37.625151);
 //    var myOptions = {
 //        zoom: 16,
 //        center: myPlace,
 //        mapTypeId: google.maps.MapTypeId.ROADMAP,
 //        disableDefaultUI: true,
 //        scrollwheel: false,
 //        zoomControl: true
 //    }
 //    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

 //    var marker = new google.maps.Marker({
	//     position: myPlace,
	//     map: map,
	//     title: "Ярмарка вакансий и стажировок"
	// });

});