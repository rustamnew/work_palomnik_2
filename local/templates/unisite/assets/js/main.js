/*
::
:: Theme Name: Consulto - Consulting Business HTML5 Template
:: Email: Nourramadan144@gmail.com
:: Author URI: https://themeforest.net/user/ar-coder
:: Author: ar-coder
:: Version: 1.1
:: 
*/

(function () {
    'use strict';
    
}());


$(document).ready(function () {
    // :: Loading
    $(window).on('load', function () {
        $('.loading').fadeOut();
    });
    
    // :: Scroll Smooth To Go Section
    $('.move-section').on('click', function (e) {
        e.preventDefault();
        var anchorLink = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchorLink.attr('href')).offset().top + 1
        }, 1000);
    });
    
    // :: Add Class Active For ('.nav-bar')
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 350) {
            $('.nav-bar').addClass('active');
        } else {
            $('.nav-bar').removeClass('active');
        }
    });
    
    // :: Varables Navbar
    var headerBar = $('.nav-bar'),
        $navbarMenu = $('#open-nav-bar-menu'),
        $menuLink = $('.open-nav-bar'),
        $menuTriggerLink = $('.has-menu > a');

    // :: Add Class Active For $menuLink And $navbarMenu
    $menuLink.on('click', function (e) {
        e.preventDefault();
        $menuLink.toggleClass('active');
        $navbarMenu.toggleClass('active');
    });

    // :: Add Class Active For $menuTriggerLink
    $menuTriggerLink.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.toggleClass('active').next('ul').toggleClass('active');
    });
    
    // :: Add Class Active To Search Box
    $('.open-search-box').on('click', function () {
        $('.search-box').fadeIn();
    });
    $('.search-box, .close-search').on('click', function () {
        $('.search-box').fadeOut();
    });
    $('.search-box form').on('click', function (e) {
        e.stopPropagation();
    });

    // :: Open And Close Menu
    $('.open-menu').on('click', function () {
        $('.menu-box').fadeIn().addClass('active');
    });
    $('.menu-box').on('click', function () {
        $(this).fadeOut().removeClass('active');
    });
    $('.exit-menu-box').on('click', function () {
        $('.menu-box').fadeOut().removeClass('active');
    });
    $('.menu-box .inner-menu').on('click', function (e) {
        e.stopPropagation();
    });
    
    // :: Counter Up Js
    /*$('.counter').counterUp({
        delay: 10,
        time: 1000
    });*/
    
    // :: Add Class Active On Go To Header
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 400) {
            $('.scroll-up').addClass('active');
            $('.fixed-messenger-buttons').addClass('active');
        } else {
            $('.scroll-up').removeClass('active');
            $('.fixed-messenger-buttons').removeClass('active');
        }
    });
    
    // :: OWL Carousel Js Header Hero
    $('.header-owl').owlCarousel({
        loop: true,
        nav:true,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });
    
    // :: OWL Carousel Js Case Study
    $('.owl-case-study').owlCarousel({
        loop: true,
        margin: 30,
        smartSpeed: 1000,
        autoplay: 2000,
        nav: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });
    
    // :: OWL Carousel Js Testimonial
    $('.owl-testimonial').owlCarousel({
        loop: true,
        nav:true,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });

    // :: OWL Carousel
    $('.owl-testimonial-3').owlCarousel({
        loop: false,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 10,
        center: false,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });
    $('.owl-testimonial-2').owlCarousel({
        loop: false,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 10,
        center: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        items: 1,
        responsive: {
            0: {
                items: 1,
                center: true
            },
            768: {
                items: 2,
                center: false
            }
        }
    });
    $('.owl-advisors').owlCarousel({
        loop: false,
        dots: false,
        margin: 30,
        smartSpeed: 1000,
        autoplay: 2000,
        nav: false,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });
    $('.owl-advisors-2').owlCarousel({
        loop: false,
        margin: 30,
        smartSpeed: 1000,
        autoplay: 2000,
        nav: false,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });
    $('.owl-promo-2').owlCarousel({
        loop: false,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 10,
        center: false,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });
    
    // :: Add Class Active To Navbar (.gallery .list-name-gallery li)
    $('.case-study-list .list-name-case li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    
    // :: Add Dark Mode
    $('.dark-mode-btn').on('click', function () {
        $('body').toggleClass('active-dark-mode');
    });
    /*Popup Form*/

    //Open
    let summonButtons = document.querySelectorAll('.summonFormButton')
    summonButtons.forEach((item) => {
        item.addEventListener('click', (e) => {
            e.preventDefault()
            let formWrap = document.querySelector('#summonedFormWrap')
            formWrap.classList.add('active')
        })
    })

    //Close
    let formWrap = document.querySelector('#summonedFormWrap')
    let summonedFormClose = document.querySelector('#summonedFormClose')

    formWrap.addEventListener('click', (e) => {
        if(e.target.id === 'summonedFormWrap') {
            closePopupForm(e)
        }
    })
    summonedFormClose.addEventListener('click', (e) => {
        closePopupForm(e)
    })
    

    //Product detail info 
    let productInfo = document.querySelector('.product-detail-text-additional')
    let productSpecs = document.querySelector('.product-detail-text-specs')
    let buttonInfo = document.querySelector('.product-detail-text-additional-button')
    let buttonSpecs = document.querySelector('.product-detail-text-specs-button')
    

    if (buttonSpecs) {
        console.log(buttonSpecs)
        buttonSpecs.addEventListener('click', (e) => {
            console.log(buttonSpecs)
            e.preventDefault()
            productInfo.classList.remove('active')
            productSpecs.classList.add('active')
        })
    }
    if (buttonInfo) {
        buttonInfo.addEventListener('click', (e) => {
            e.preventDefault()
            productSpecs.classList.remove('active')
            productInfo.classList.add('active')
        })
    }
    /*Custom Accordion*/
    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;
            
            var links = this.el.find('.link');
            
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }

        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
                $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }	
        var accordion = new Accordion($('#accordion'), false);
    });

    /* Skills Data Value */
    $(window).on('scroll', function () {
        $('.skills .skill-box .skill-line .line').each(function () {
            var toQuestionsAndSkills =
                $(this).offset().top + $(this).outerHeight();
            var goToBottom =
                $(window).scrollTop() + $(window).height();
            var widthValue = $(this).attr('data-value');
            if (goToBottom > toQuestionsAndSkills) {
                $(this).css({
                    width: widthValue,
                    transition: 'all 2s ease'
                });
            }
        });
    });


    /*Ajax forms*/
    let summonedSuccess = document.querySelector('#success-icon');

    $("#feedback-form").submit(function (e) {
        e.preventDefault()

        let valide = true

        let submitButton = $("#feedback-form").find(".form-submit-button")[0]
        submitButton.disabled = true

        setTimeout(() => {
            submitButton.disabled = false;
            valide = true
        }, 4000)

        

        if ($("#feedback-form").find(".captcha-wrap").length > 0) {
            valide = false
            let response = grecaptcha.getResponse()
            if(response.length == 0) {
                console.log('wrong')
            } else {
                valide = true
            }
	    } 
        if (valide) {
            $.ajax({
                url: $(this).attr("action"),
                data: $(this).serialize() + "&submit=Отправить",
                type: 'POST',
                success: function (data) {
                    summonedSuccess.classList.add('active');
                    $("#feedback-form")[0].reset();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
        valide = false
	})

    $("#feedback-form-popup").submit(function (e) {
        e.preventDefault()
        let valide = true

        let submitButton = $("#feedback-form-popup").find(".summonedFormInputSubmit")[0]
        submitButton.disabled = true

        setTimeout(() => {
            submitButton.disabled = false;
            valide = true
        }, 4000)

        if ($("#feedback-form-popup").find(".captcha-wrap").length > 0) {
            valide = false
            
            let n = 0

			if ($("#feedback-form").find(".captcha-wrap").length > 0) {
				n++
			}
			if ($("#feedback-form-contacts").find(".captcha-wrap").length > 0) {
				n++
			}
            

            let response = grecaptcha.getResponse(n)
            if(response.length == 0) {
                console.log('wrong')
            } else {
                valide = true
            }
	    } 
        if (valide) {
            $.ajax({
                url: $(this).attr("action"),
                data: $(this).serialize() + "&submit=Отправить",
                type: 'POST',
                success: function (data) {
                    summonedSuccess.classList.add('active');
                    $("#feedback-form-popup")[0].reset();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
	})

    $("#feedback-form-contacts").submit(function (e) {
        e.preventDefault()
        let valide = true

        let submitButton = $("#feedback-form-contacts").find(".form-submit-button")[0]
        submitButton.disabled = true

        setTimeout(() => {
            submitButton.disabled = false;
            valide = true
        }, 4000)

        if ($("#feedback-form-contacts").find(".captcha-wrap").length > 0) {
            valide = false
            let response = grecaptcha.getResponse()
            if(response.length == 0) {
                console.log('wrong')
            } else {
                valide = true
            }
	    } else {
            valide = true
        }
        if (valide) {
            $.ajax({
                url: $(this).attr("action"),
                data: $(this).serialize() + "&submit=Отправить",
                type: 'POST',
                success: function (data) {
                    summonedSuccess.classList.add('active');
                    $("#feedback-form-contacts")[0].reset();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
	})


    BX.ready(function(){
        loader = BX('ajax-preloader-wrap');
        BX.showWait = function(node, msg) {
            BX.style(loader, 'display', 'block');
            BX.addClass(loader, 'ajax-preloader--animated');
        };
        BX.closeWait = function(node, obMsg) {
            BX.style(loader, 'display', 'none');
            BX.removeClass(loader, 'ajax-preloader--animated');
        };
    });


    //Блок Услуги
    $(".services-section-button").on('click', (e) => {
        e.preventDefault()

        let buttons = document.querySelectorAll('.services-section-button')

        for (let i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('active')
        }

        let target = e.currentTarget
        target.classList.add('active')

        let num = e.currentTarget.getAttribute("data-number")
        let wrap = document.querySelector('.services-block')
        let rows = wrap.querySelectorAll('.services-block-row')

        for (let i = 0; i < rows.length; i++) {
            rows[i].classList.remove('active')
        }

        let row = document.querySelector(`[data-number-row='${num}']`)
        row.classList.add('active')
    })


    //Закрытие галочки
    $(document).click(function (e) {
        if ($(e.target).is('#success-icon') || $(e.target).is('#success-icon__icon')) {
            e.preventDefault()
            summonedSuccess.classList.remove('active');
        }
    });


})


let closePopupForm = (e) => {
    if (e) {
        e.preventDefault()
    }
    let formWrap = document.querySelector('#summonedFormWrap')
    formWrap.classList.remove('active')
}

