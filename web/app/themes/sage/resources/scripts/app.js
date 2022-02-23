/**
 * External Dependencies
 */
import 'jquery';


$(document).ready(() => {
    windowLoad();
    scroller();
    animateOnScroll();
    smoothScrollTo();
    sideNavigationHighlight();
    mobileMenu();
    viewProfile();
    clickToSpin();

    // $('body').fadeIn(800);
    // if (document.readyState == 'loading') {
    //     $('body').fadeOut(800);
    // }

    // Run script on specific page
    // var url_pathname = window.location.pathname;
    // if (url_pathname == "/page-name/") {
        // yourScript();
    // }
});

/*
 * Hides nav on scroll down, shows on scroll up
 */
document.addEventListener("DOMContentLoaded", function() {

    var el_autohide = document.querySelector('.autohide');

    if(el_autohide){
        var last_scroll_top = 0;
        window.addEventListener('scroll', function() {
            let scroll_top = window.scrollY;
            // set scroll amount (px)
            if( ! document.querySelector('html').classList.contains('is--mobile-nav__active')) {
                if (scroll_top < last_scroll_top) {
                    el_autohide.classList.remove('scrolled-down');
                    el_autohide.classList.add('scrolled-up');
                } else {
                    el_autohide.classList.remove('scrolled-up');
                    el_autohide.classList.add('scrolled-down');
                }
            }
            last_scroll_top = scroll_top;
        });
        // window.addEventListener
    }
});

/*
 * Removes loading animation when page load is completed
 */


function windowLoad() {
    $(".page-loader").fadeOut(200);
    $("body").removeClass("preload");
}

/*
 * Any on scroll functionality should be placed here so only one window scroll is called
 */
function scroller() {

    // == Change Header on scroll ==
    var header = $(".js__header");

    // ******* SCROLL ************\\
    $(window).on('scroll', function () {

        // == Change Header on scroll ==
        scroll = $(window).scrollTop();
        // set scroll amount (px)
        if (scroll >= 60) {
            header.addClass("header--secondary");// if scroll is further than #px change class
            // splashBox.css("z-index", -100);
        } else {
            header.removeClass("header--secondary"); // if not (is at top) change class back
        }

    });

    // == Change Header on scroll ==
    var scroll = scroll;
    if (scroll >= 60) {
        header.addClass("header--secondary");// if scroll is further than #px change class
    } else {
        header.removeClass("header--secondary"); // if not (is at top) change class back
    }
}

/*
 * Adds scroll to animation functionality
 * add class="animation-element" to an element you want to be triggered when scrolled to,
 * then your animation found in animation.less
 */
function animateOnScroll() {
    var $animation_elements = $('.animation-element');
    var $tab_animation_elements = $('.tab-animation-element');
    var $force_in_view = $('.force-in-view');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height() - 0;
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        if ($animation_elements) {
            $.each($animation_elements, function () {
                var $element = $(this);
                var element_height = $element.outerHeight();
                var element_top_position = $element.offset().top;
                var element_bottom_position = (element_top_position + element_height);

                //check to see if this current container is within viewport
                if ((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) {
                    $element.addClass('in-view');
                }
            });
        }
        if ($force_in_view) {
            $.each($force_in_view, function () {
                $(this).addClass('in-view');
            });
        }
    }

    $(window).load(function () {
        setTimeout(function () {
            $window.on('scroll resize', check_if_in_view);
            $window.trigger('scroll');
        }, 600);
    });
}

/*
 * Smooth scroll to target element when clicking <a>
 */
function smoothScrollTo() {
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 0 // Height of header
        }, 750);
    });
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function sideNavigationHighlight() {
    var azarias_window = $(window);
    var lastId,
        spyMenu = $("#scroll-spy"),
        // All list items
        menuItems = spyMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

// Bind click handler to menu items
// so we can get a fancy scroll animation
    menuItems.click(function (e) {
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top + 1;
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 600);
        e.preventDefault();
    });
    function spy() {
        scroll = azarias_window.scrollTop();
        // == Service Magnet Nav ==
        // == Scroll Spy ==
        // Get container scroll position
        var fromTop = scroll + 200; // Add menu height here

        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
            .parent().removeClass("active")
            .end().filter('[href="#' + id + '"]').parent().addClass("active");
        }
    }

    azarias_window.on('scroll', function () {
        spy()
    });

    spy();
}

function mobileMenu() {
    var $menu = $('#mobile-menu')
    var html = document.querySelector('html');
    //hamburger
    var hamburger = document.querySelector('.js--hamburger');
    hamburger.addEventListener('click',() => {
        html.classList.toggle('is--mobile-nav__active');
    });

}

function viewProfile() {
    var html = document.querySelector('html');
    //hamburger
    $(".team-profile__right__btn").click(function(event) {
        let id = '#'+event.target.id;
        $(id).siblings().toggleClass("visible", 200);
        $(id).text(($(id).text() == 'See more +') ? 'See less -' : 'See more +');
    });

}

function clickToSpin() {
    var deg = 0;
    $('.js__click-to-spin').on('click', function () {
        showNext();
        deg += 45;
        $('.arrows').css({"-webkit-transform" : "rotate(-"+deg+"deg)"})
    });

    function showNext() {
        var visibleSpinSVGs = $('.js__spin img.visible');
        var nextSVG;
        if (visibleSpinSVGs.hasClass('last-svg')) {
            nextSVG = $('.js__spin img:first-of-type');
        } else {
            nextSVG = visibleSpinSVGs.next();
        }
        nextSVG.addClass('visible');
        visibleSpinSVGs.removeClass('visible')
    }
}

gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray('.title').forEach(title => {
    gsap.from(title, {
        autoAlpha: 0,
        y: 5,
        scrollTrigger: {
            trigger: title,
            once: true
        },
        duration: 0.5,
    })
});

gsap.utils.toArray('.page-label').forEach(pageLabel => {
    gsap.from(pageLabel, {
        autoAlpha: 0,
        y: 5,
        scrollTrigger: {
            trigger: pageLabel,
            once: true
        },
        duration: 0.5,
        delay: 0.1
    })
});

gsap.utils.toArray('.large-paragraph').forEach(lgParagraph => {
    gsap.from(lgParagraph, {
        autoAlpha: 0,
        y: 5,
        scrollTrigger: {
            trigger: lgParagraph,
            once: true
        },
        duration: 0.5,
        delay: 0.1
    })
});

gsap.utils.toArray('.paragraph').forEach(paragraph => {
    gsap.from(paragraph, {
        autoAlpha: 0,
        y: 5,
        scrollTrigger: {
            trigger: paragraph,
            once: true
        },
        duration: 0.5,
        delay: 0.1
    })
});

gsap.utils.toArray('.svg').forEach(svg => {
    gsap.from(svg, {
        autoAlpha: 0,
        y: 5,
        scrollTrigger: {
            trigger: svg,
            once: true
        },
        duration: 0.5,
        delay: 0.1
    });
});

gsap.utils.toArray('.footer-title').forEach(footerTitle => {
    gsap.from(footerTitle, {
        autoAlpha: 0,
        y: 5,
        scrollTrigger: {
            trigger: footerTitle,
            once: true
        },
        duration: 0.5,
    })
});

gsap.utils.toArray('.btn').forEach(btn => {
    gsap.from(btn, {
        autoAlpha: 0,
        scrollTrigger: {
            trigger: btn,
            once: true
        },
        duration: 0.25,
    })
});

if (document.querySelector(".numbered-list__content")) {
    gsap.from(".numbered-list__content", {
        autoAlpha: 0,
        y: 5,
        stagger: 0.2,
        scrollTrigger: {
            trigger: '.numbered-box',
            once: true
        },
        duration: 0.3,
        delay: 0.1
    });
}


if (document.querySelector(".icon-list-li")) {
    gsap.from('.icon-list-li', {
        autoAlpha: 0,
        y: 5,
        stagger: 0.125,
        scrollTrigger: {
            trigger: '.icon-list-li',
            once: true
        },
        delay: 0.1
    });
}

gsap.utils.toArray('.divide-line').forEach(line => {
    gsap.from(line, {
        autoAlpha: 0,
        width: 0,
        scrollTrigger: {
            trigger: line,
            once: true
        },
        duration: 0.75,
        delay: 0.1,

    })
});

if (document.querySelector(".team_member_li a")) {
    gsap.from('.team_member_li a', {
        autoAlpha: 0,
        y: 5,
        stagger: 0.125,
        duration: 0.3,
        scrollTrigger: {
            trigger: '.team_member_li a',
            once: true
        },
        delay: 0.1
    });
}


gsap.utils.toArray('.team-profile__right__title').forEach(profile => {
    gsap.from(profile, {
        autoAlpha: 0,
        duration: 0.3,
        scrollTrigger: {
            trigger: profile,
            once: false
        },
        delay: 0.1

    })
});

gsap.utils.toArray('.team-profile__right__details').forEach(detail => {
    gsap.from(detail, {
        autoAlpha: 0,
        duration: 0.3,
        scrollTrigger: {
            trigger: detail,
            once: true
        },
    })
});

if (document.querySelector(".partners_li a")) {
    gsap.from('.partners_li a', {
        autoAlpha: 0,
        y: 5,
        stagger: 0.125,
        duration: 0.3,
        scrollTrigger: {
            trigger: '.partners_li a',
            once: true
        },
    });
}

gsap.config({
    nullTargetWarn: false,
});

