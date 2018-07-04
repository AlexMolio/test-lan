/*slider*/

$(document).ready(function(){
    $('#main-slider').owlCarousel({
        loop:true,
        items:1,
        margin:0,
        animateOut: 'fadeOut'
        // autoplay:true,
        // autoplayTimeout:5000
    });
});


$(document).ready(function(){

    /*product icons*/

    (function(){

        var icon = $('.innovation_img, .safety_img');
        var iText = $('.product__content_list-innovation  .product__content_item');
        var sText = $('.product__content_list-safety  .product__content_item');


        icon.hover(

            function() {

                if($(this).hasClass('innovation_img')) {
                    var innovIcon = $(this);
                    var iList = $('.innovation_img');
                    var iNum =iList.index( innovIcon);

                    iText.eq(iNum).addClass('active');
                    iText.eq(iNum).siblings().removeClass('active');
                    innovIcon.addClass('active');
                    innovIcon.siblings().removeClass('active');

                } else {
                    var safeIcon = $(this);
                    var sList = $('.safety_img');
                    var sNum =sList.index( safeIcon);

                    sText.eq(sNum).addClass('active');
                    sText.eq(sNum).siblings().removeClass('active');
                    safeIcon.addClass('active');
                    safeIcon.siblings().removeClass('active');

                }

            }

        );

    })();

});

$(document).ready(function(){

   /*changing content*/

   var ibtn = $('.product__btn_innovation');
   var sbtn = $('.product__btn_safety');
   var iIcons = $('.product__img_icons-innovation');
   var sIcons = $(' .product__img_icons-safety');
   var iText = $('.product__content_list-innovation  .product__content_item');
   var sText = $('.product__content_list-safety  .product__content_item');

    ibtn.on('click', function(e) {
        e.preventDefault();

        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        $('.product__img').removeClass('active');
        iText.eq(0).addClass('active');
        iIcons.find('img').eq(0).addClass('active');
        iIcons.find('img').eq(0).siblings().removeClass('active');
        iIcons.addClass('active');
        sIcons.removeClass('active');
        sText.removeClass('active');

    });

    sbtn.on('click', function(e) {
        e.preventDefault();

        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        $('.product__img').addClass('active');
        sText.eq(0).addClass('active');
        sIcons.find('img').eq(0).addClass('active');
        sIcons.find('img').eq(0).siblings().removeClass('active');
        sIcons.addClass('active');
        iIcons.removeClass('active');
        iText.removeClass('active');
    });


});

$(document).ready(function(){

    /*changing features*/

    var title = $('.series__feature_title');
    var shemaList =$('.series__feature-shema').find('.series__feature_list');

    title.on('click', function(e) {
        e.preventDefault();

        $(this).siblings('.series__feature_list').toggleClass('active');
        $(this).closest('.series__feature-shema').toggleClass('schema-active');
        $(this).find('.series__feature_arrow').toggleClass('active');
    });

    var modelNx0 = $('.series__choice_model-nx0');
    var featuresNx0 = $('.series__features-nx0');
    var modelNx1 = $('.series__choice_model-nx1');
    var featuresNx1 = $('.series__features-nx1');
    var modelNx2 = $('.series__choice_model-nx2');
    var featuresNx2 = $('.series__features-nx2');
    var modelNx3 = $('.series__choice_model-nx3');
    var featuresNx3 = $('.series__features-nx3');
    var modelNx4 = $('.series__choice_model-nx4');
    var featuresNx4 = $('.series__features-nx4');
    var modelNx5 = $('.series__choice_model-nx5');
    var featuresNx5 = $('.series__features-nx5');

    modelNx0.on('click', function(e) {
        e.preventDefault();

        $(this).addClass('active');
        $(this).siblings('.series__choice_model ').removeClass('active');
        featuresNx0.addClass('active');
        featuresNx0.siblings().removeClass('active');
    });

    modelNx1.on('click', function(e) {
        e.preventDefault();

        $(this).addClass('active');
        $(this).siblings('.series__choice_model ').removeClass('active');
        featuresNx1.addClass('active');
        featuresNx1.siblings().removeClass('active');
    });

    modelNx2.on('click', function(e) {
        e.preventDefault();

        $(this).addClass('active');
        $(this).siblings('.series__choice_model ').removeClass('active');
        featuresNx2.addClass('active');
        featuresNx2.siblings().removeClass('active');
    });

    modelNx3.on('click', function(e) {
        e.preventDefault();

        $(this).addClass('active');
        $(this).siblings('.series__choice_model ').removeClass('active');
        featuresNx3.addClass('active');
        featuresNx3.siblings().removeClass('active');
    });

    modelNx4.on('click', function(e) {
        e.preventDefault();

        $(this).addClass('active');
        $(this).siblings('.series__choice_model ').removeClass('active');
        featuresNx4.addClass('active');
        featuresNx4.siblings().removeClass('active');
    });

    modelNx5.on('click', function(e) {
        e.preventDefault();

        $(this).addClass('active');
        $(this).siblings('.series__choice_model ').removeClass('active');
        featuresNx5.addClass('active');
        featuresNx5.siblings().removeClass('active');
    });

});

/*mob menu*/

(function(){

    var open = $('.header__btn_menu'),
        close = $('.header__menu_close'),
        menu = $('.header__menu_mob');

    open.on('click', function(e) {
        e.preventDefault();

        menu.addClass('active');
    });

    close.on('click', function(e) {
        e.preventDefault();

        menu.removeClass('active');
    });

    var anchor = $('.header__menu_mob .anchor-mob, .header__menu_mob .anchor');
    anchor.on('click', function(e) {
        e.preventDefault();

        menu.removeClass('active');
    });

})();

/*connecting form*/

(function(){

    var open = $('.js_openPopup'),
        close = $('.popup__connect_close'),
        popup = $('.popup__connect'),
        popupTnx = $('.popup__thankful'),
        menu = $('header');

    open.on('click', function(e) {
        e.preventDefault();

        popup.addClass('active');
        menu.hide();
    });

    close.on('click', function(e) {
        e.preventDefault();

        popup.removeClass('active');
        menu.show();
    });

    // $(document).bind( "mouseup touchend", function(e){
    //
    //     var itemActive = $('.popup__connect.active'),
    //         block = $(".popup__connect.active .container");
    //
    //     if (!block.is(e.target)
    //         && block.has(e.target).length === 0) {
    //
    //         popup.removeClass('active');
    //         menu.show();
    //     }
    // });


    $('.connect__form').on('submit', function(e) {
        e.preventDefault();

        var $form = $(this);

        $.ajax({

            //type: 'POST',
            //url: 'details.php',
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize()
        }).done(function() {
            $form.find('[type="text"], textarea').val('');
            popupTnx.addClass('active');
            $('.popup__connect').removeClass('active');
            menu.hide();
        }).fail(function() {
            console.log('fail');
        });
    });

    var closePopTnx = $('.popup__thankful_close, .thankful__btn');

    closePopTnx.on('click', function(e) {
        e.preventDefault();



        popupTnx.removeClass('active');
        $('.popup__connect').removeClass('active');
        $('.header__menu_mob').removeClass('active');
        menu.show();
    });

})();

/*anchors*/

$(document).ready(function(){

    var anchor_mob = $('.anchor-mob');

    anchor_mob.on("click", function (e) {
        e.preventDefault();

        var id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top - 60}, 1500);
    });

    var anchor = $('.anchor');

    anchor.on("click", function (e) {
        e.preventDefault();

        var id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top - 103}, 1500);
    });
});

// /*fixed menu*/
//
// $(document).ready(function(){
//
//     var menuHeight = 0;
//     var margin = 0;
//
//     $(window).scroll(function() {
//         var top = $(this).scrollTop();
//         var elem = $('#top_nav');
//         if(top + margin < menuHeight) {
//             elem.css('top', (menuHeight - top));
//         } else {
//             elem.css('top', margin)
//         }
//     });
// });

/*textarea*/

$(document).ready(function()
{
    $("#contentbox").keyup(function()
    {
        var box = $(this).val();
        var count= box.length;

        if(box.length <= 150)
        {
            $('#count').html(count);

        }
        else
        {
            return false;
        }
    });
});
