let player = document.getElementById("video");
let baseUrl = $('meta[name="base_url"]').attr('content');
let windowWidth = $(window).width();

function toggleVideo() {
    let blVideo = $('.bl-video');
    let control = $('.control');
    let btn = $('.toggleVideo, .toggleVideoArrow, .middle-arrow');
    let wWidth = $(window).width();
    let lefBarWidth = wWidth - parseInt($('.group-video').attr('data-width'));
    if (blVideo.hasClass('open')) {
        blVideo.removeClass('open');
        player.pause();
        control.fadeOut();
        btn.fadeIn();
        $('.left-bar').css('flex', '0 0 30%');
    } else {
        blVideo.addClass('open');
        control.fadeIn();
        btn.fadeOut();
        $('.left-bar').css('width', lefBarWidth + 'px');
        $('.left-bar').css('flex', '0 0 ' + lefBarWidth + 'px');
        setTimeout(function () {
            player.play();
        }, 500);
    }
}
function toggleVideoSound(value) {
    player.muted = value;
}
function stopVideo() {
    toggleVideo();
    $('.control').fadeOut();
    let endBuf = player.duration;
    player.currentTime = endBuf;
}
function fixVideoWidth(isInit){
    // if (windowWidth > 767){
    //     let videoContainer = $('#video');
    //     let height = videoContainer.outerHeight();
    //     let newWindowWidth = $(window).width();
    //     let maxWidth = newWindowWidth - newWindowWidth*0.3
    //     let width = height * 1.778;
    //     if (width < maxWidth) {
    //         videoContainer.css('width', width);
    //     }
    //     if (!isInit) {
    //         let lefBar = $('.left-bar');
    //         let blVideo = $('.bl-video');
    //         if (blVideo.hasClass('open')) {
    //             let wWidth = windowWidth;
    //             if (width < maxWidth){
    //                 lefBar.css('flex', '0 0 ' + ((wWidth - width)/wWidth) * 100 + '%');
    //             }
    //         }else {
    //             lefBar.css('flex', '0 0 30%');
    //         }
    //     }
    // }
}

$('.toggleVideo').click(function (e) {
    toggleVideo();
    fixVideoWidth();
    e.preventDefault();
});

$('.middle-arrow').click(function (e) {
    toggleVideo();
    fixVideoWidth();

    e.preventDefault();
});


$('.mute').click(function (e) {
    let me = $(this);
    if (me.hasClass('off'))
        toggleVideoSound(true);
    else
        toggleVideoSound(false);
    me.toggleClass('off');
    me.find('i').toggleClass('d-none');
    e.preventDefault();
});
$('.stop').click(function (e) {
    stopVideo();
    e.preventDefault();
});

function fixedBlVideoHeight() {
    let blVideo = $('.bl-video');
    let videoGroup = $('.group-video');
    let maxWidth = $(window).width() - ($(window).width() * 0.2);
    if(windowWidth > 991){
        let newWidth = videoGroup.outerHeight() * 1.778;
        if(newWidth > maxWidth)
            newWidth = maxWidth;
        videoGroup.attr('data-width', newWidth);
    }else {
        blVideo.css('height', 'auto');
    }
    fixVideoWidth();
}


function lightboxOnResize() {
    if (windowWidth < 991) {
        $('a[data-lightbox="example-set"]')
            .removeProp('data-lightbox')
            .addClass('lightboxRemoved');
    } else {
        $('a.lightboxRemoved').prop('data-lightbox', 'example-set');
    }
}

$(window).resize(function () {
    fixedBlVideoHeight();
    lightboxOnResize();
    coreValueScene();
});
//scroll magic
var controller = new ScrollMagic.Controller();
function coreValueScene(){
    var coreValueScene = new ScrollMagic.Scene({
        triggerElement: "#coreValueTrigger",
        triggerHook   : .25,
    })
    // .addIndicators()
        .addTo(controller);
    coreValueScene.on('enter', function () {
        var items = $('.core-values .item');
        items.addClass('move-height');
        items.addClass('move-width');
        // setTimeout(function () {
        //     items.addClass('move-width');
        // },time)
    });
    coreValueScene.on('leave', function () {
        var items = $('.core-values .item');
        items.removeClass('move-height');
        items.removeClass('move-width');
        setTimeout(function () {
        },time)
    });
}
let time = 500;
if (windowWidth >= 1200) {
    coreValueScene();
}
if (windowWidth > 991) {
    let structScene = new ScrollMagic.Scene({
        triggerElement: "#structureTrigger",
        triggerHook   : .3,
    })
        // .addIndicators()
        .addTo(controller);
    structScene.on('enter', function () {
        let card = $('.bl-structure .card');
        for (let i = 0; i < 5; i++ ){
            setTimeout(function () {
                $(card[i]).addClass('animated');
            },i*100)
        }
    });
    structScene.on('leave', function () {
        let card = $('.bl-structure .card');
        for (let i = 0; i < 5; i++ ){
            setTimeout(function () {
                $(card[i]).removeClass('animated');
            },i*150)
        }
    });
// create a scene
    new ScrollMagic.Scene({
        triggerElement: "#ourStoryTrigger",
        triggerHook   : .35,
    })
        .setClassToggle('.child-bl','show')
        // .addIndicators()
        .addTo(controller);


    var clientScene = new ScrollMagic.Scene({
        triggerElement: "#serviceMap",
        triggerHook   : .6,
    })
    // .addIndicators()
        .addTo(controller);
    clientScene.on('enter', function () {
        $('.location').removeClass('height-0');
        setTimeout(function () {
            $('#groupLocation .dis-none').fadeIn();
        },300);
    });
    clientScene.on('leave', function () {
        $('#groupLocation .dis-none').fadeOut();
        setTimeout(function () {
            $('.location').addClass('height-0');
        },300);
    });


}


// ready
$(document).ready(function () {
    fixedBlVideoHeight();
    fixVideoWidth(true);
    $('.service-row .item').click(function () {
        let me = $(this);
        let tabs = $('.service-tabs .item');
        $('.service-row .item').removeClass('active');
        me.addClass('active');
        tabs.removeClass('active');
        $(tabs[me.index()]).addClass('active');

        let serviceTabs = $('.service-tabs');

        let to = serviceTabs.offset().top + serviceTabs.outerHeight() - $(window).height();
        $('html, body').animate(
            {
                scrollTop: to,
            },
            200,
            'linear'
        )
    });

    $('.nav-item a').on('click', function(e) {
        e.preventDefault();
        let elm = $(this);
        let target = $(this).attr('href');
        if (windowWidth < 991){
            $('header .collapse').collapse("hide");
        }
        if (!scrollHash(target, elm)){
            window.location = target;
        }
    });

    function scrollHash(url, elm) {
        if (url.length) {
            let target = $( url.replace(baseUrl, ''));
            if (target.length){
                if (target.attr('id') == 'careers') {
                    $('html, body').animate({
                        scrollTop: target.offset().top,
                    }, 300, 'linear', function () {
                        setTimeout(function () {
                            $('.nav-item a').removeClass('active');
                            elm.addClass('active');
                        },100);
                    });
                }else {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 75,
                    }, 300, 'linear', function () {
                        setTimeout(function () {
                            $('.nav-item a').removeClass('active');
                            elm.addClass('active');
                        },100);
                    });
                }
                return true;
            }
            return false;
        }
        return false;
    }
    setTimeout(function () {
        scrollHash(baseUrl+window.location.hash);
    }, 500);

    function onScroll(event) {
        let scrollPos = $(document).scrollTop();
        $('.nav-item a').each(function (k, v) {
            let currLink = $(this);
            let refElement = $('#'+currLink.attr("href").split('#')[1]);
            if (refElement.length > 0) {
                if (typeof refElement.position() !== 'undefined' && refElement.position().top <= (scrollPos + getHeaderHeight() + 10) && refElement.position().top + refElement.outerHeight() > (scrollPos + getHeaderHeight())) {
                    $('#menu-center ul li a').removeClass("active");
                    currLink.addClass("active");
                }
                else {
                    currLink.removeClass("active");
                }
            }
        });
    }

    function getHeaderHeight() {
        return $('header').outerHeight();
    }

    // auto hide play button
    var timeout = null;


    $('.card').each(function (i, v) {
        let target = $(v);
        target.css('background-color',target.data('color'))
        target.find('.after').css('background-color',target.data('color'))
    });

    $('.card').each(function (i, v) {
        $(this).find('.animate-height').css('color',$(this).data('color-text'));
    });
    $('.card .a').each(function (i, v) {
        let target = $(v);
        target.css('color',target.data('color'));
        target.find('.a-before').css('background-color',target.data('color'));
        target.find('.a-after').css('background-color',target.data('color'));
    });
    $('.square').each(function (i, v) {
        let target = $(v);
        target.css('background-color',target.data('color'))
    });

    $('.view-full').click(function () {
        let me = $(this);
        $('html, body').animate(
            {
                scrollTop: me.offset().top - 75,
            },
            500,
            'linear',
            function () {
                $($('[data-lightbox="example-set"]')[0]).click();
            }
        )
    });

    $( ".carousel .carousel-inner" ).swipe( {
        swipeLeft: function ( event, direction, distance, duration, fingerCount ) {
            this.parent( ).carousel( 'next' );
        },
        swipeRight: function ( ) {
            this.parent( ).carousel( 'prev' );
        },
        threshold: 0,
        tap: function(event, target) {
            this.parent( ).carousel( 'next' );
            // get the location: in my case the target is my link
        },
        //เอา  a ออกถ้าต้องการให้ slide ที่เป็น tag a สามารถคลิกได้
        excludedElements:"label, button, input, select, textarea, .noSwipe"
    } );

    $('.carousel .carousel-inner').on('dragstart', 'a', function () {
        return false;
    });


    lightbox.option({
        'disableScrolling': true,
    });
    lightboxOnResize();

    $('.careers-page .d-table-row').click(function () {
        let me = $(this);
        let tabs = $('.wrap-careers-item .content');
        $('.careers-page .d-table-row').removeClass('active');
        me.addClass('active');
        tabs.hide();
        $(tabs[me.index()]).fadeIn();
    });

    //scroll menu
    $(window).scroll(function () {
        onScroll();
        let windowW = $(window).width();
        let header = $("header");
        let menu = $("nav.navbar");
        let subLogo = $("#logo_sub");
        let top = $(window).scrollTop();
        if (top > 0){
            menu.addClass('fixed');
            subLogo.addClass('d-none');
            if(windowW > 991)
                header.css('height','75px');
            else
                header.css('height','80px');
        }else {
            menu.removeClass('fixed');
            subLogo.removeClass('d-none');
            if(windowW > 991)
                header.css('height','145px');
            else
                header.css('height','80px');
        }
    });

    $('.owl-carousel-gallery .wrap-image').click(function(){
        $('.owl-carousel-gallery').trigger('to.owl.carousel', $(this).data('index'))
    });
    setTimeout(function () {
        $('#collapse0').collapse('show');
    },500);

    let accordion = $('#accordion').find('.collapse').collapse();
    accordion.on('show.bs.collapse', function () {
        $('#accordion').find('.svg').removeClass('hover');
        let id = $(this).attr('aria-labelledby');
        $('#'+id).find('svg').addClass('hover')
    });
    accordion.on('hide.bs.collapse', function () {
        let id = $(this).attr('aria-labelledby');
        $('#'+id).find('svg').removeClass('hover')
    });

    $('.hover-svg').on('mouseover', function (e) {
        e.preventDefault();
        $(this).find('svg').addClass('hover');
    });
    $('.hover-svg').on('mouseleave', function (e) {
        e.preventDefault();
        $(this).find('svg').removeClass('hover');
    });




















    try {

        //
        $('.service-row .image-svg').each(function (i, v) {
            let elm = $(v);
            new Vivus(elm.attr('id'), {
                duration: 1,
                file: elm.data('src'),
            }, function () {

            });
        });

        $('.service-detail .image-svg').each(function (i, v) {
            let elm = $(v);
            new Vivus(elm.attr('id'), {
                duration: 1,
                file: elm.data('src'),
            }, function () {

            });
        });

        new Vivus('logo', {
            duration: 1,
            file: $('#logo').data('src'),
        }, function () {

        });
    }catch (e) {
        console.log(e);
    }

    $('.btn-carousel').click(function () {
        filterClient($(this).data('owl-filter'));
        $('.btn-carousel').removeClass('active');
        $(this).addClass('active');
    });

    if (windowWidth < 991){
        $('.owl-carousel-gallery').owlCarousel({
            margin:10,
            dots: false,
            items: 1,
            startPosition: 1,
            responsive: {
                0: {
                    stagePadding: 50,
                },
                480: {
                    stagePadding: 50,
                },
                768: {
                    stagePadding: 50,
                },
                992: {
                    stagePadding: 100,
                },
                1200: {
                    stagePadding: 150,
                }
            }
        });
    }
    new LazyLoad({
        elements_selector: ".lazy",
        load_delay: 300
    });
});



let owl1 = $('.owl-carousel-client').owlCarousel({
    margin: 10,
    dots: true,
    responsive: {
        0: {
            items: 3
        },
        480: {
            items: 3
        },
        768: {
            items: 3
        },
        992: {
            items: 3
        },
        1200: {
            items: 5
        }
    }
});
function filterClient(filter){
    owl1.owlcarousel2_filter(filter);
}
