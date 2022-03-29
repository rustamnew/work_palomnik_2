<?
$color1 = $GLOBALS['global_info']['color1'];
$color2 = $GLOBALS['global_info']['color2'];
$color3 = $GLOBALS['global_info']['color3'];
?>
<style type="text/css">
    /**/
    ::-moz-selection {
        background-color: <?=$color1;?>;

    }
    ::selection {
        background-color: <?=$color1;?>;

    }

    /* Button */
    .btn-1 {
        background-color: <?=$color1;?>;
    }
    .btn-1:after{
        background-color: <?=$color2;?>;
    }
    .btn-2 {
        color: <?=$color1;?>;
        background-color: #FFF;
    }
    .btn-2:after{
        background-color: <?=$color1;?>;
    }
    .btn-3 {
        background-color: <?=$color2;?>;
    }
    .btn-3:after {
        background-color: <?=$color1;?>;
    }
    .btn-4{
        color: <?=$color1;?>;
    }
    .btn-4:after{
        background-color: <?=$color2;?>;
    }
    .sec-title h2{
        color: <?=$color1;?>;
    }
    .sec-title h3{
        color: <?=$color2;?>;
    }
    .lds-ring div {
        border: 8px solid <?=$color1;?>;
        border-color: <?=$color1;?> transparent transparent transparent;
    }

.top-nav-bar .top-nav-bar-box ul li span{
    color: <?=$color1;?>;
}
.top-nav-bar .top-nav-bar-box ul li a{
    color: <?=$color2;?>;
}
.top-nav-bar .top-nav-bar-box ul li a:hover{
    color: <?=$color1;?>;
}
header.navs-2 .nav-bar .nav-bar-link ul li a{
    color: <?=$color2;?>;
}

header.navs-3 .nav-bar .nav-bar-link ul li a:hover{
    color: <?=$color1;?>;
}

.nav-bar .nav-bar-link ul li a:before{
    background-color: <?=$color1;?>;
}
.nav-bar.active .nav-bar-link ul li a{
    color: <?=$color2;?>;
}
.nav-bar .nav-bar-link ul li a:hover,
.nav-bar .nav-bar-link ul li a.color-active,
.nav-bar.active .nav-bar-link > ul ul li:hover a{
    color: <?=$color1;?>;
}
.nav-bar .nav-bar-link > ul ul.level-2 li a{
    color: <?=$color3;?>;
}
.nav-bar .nav-bar-link > ul ul ul li:hover a{
    color: <?=$color1;?> !important;
}
.nav-bar .icon li .icon-item{
    color: <?=$color2;?>;
}
.nav-bar .icon li:hover .icon-item i{
    color: <?=$color1;?>;
}
.nav-bar .icon li.cart .cart-popup .item .item-content div{
    color: <?=$color2;?>;
}
.nav-bar .icon li.cart .cart-popup .item .delete-item{
    background-color: <?=$color2;?>;
}
.nav-bar .icon li.cart .cart-popup .item .delete-item:hover{
    background-color: <?=$color1;?>;
}
.nav-bar .icon li.cart .cart-popup .subtotal span:last-of-type{
    color: <?=$color1;?>;
}
.search-box form input:focus{
    border-bottom: 1px solid <?=$color1;?>;
}
.search-box form button{
    color: <?=$color1;?>;
}
.search-box .close-search:hover{
    color: <?=$color1;?>;
}
.menu-box .inner-menu .contact-info h4,
.menu-box .inner-menu .follow-us h4{
    color: <?=$color2;?>;
}
.menu-box .inner-menu .contact-info .contact-box i{
    color: <?=$color1;?>;
}
.menu-box .inner-menu .contact-info .contact-box .box p a:hover {
    color: <?=$color1;?>;
}
.contact-box-icon svg {
    fill: <?=$color1;?>;
}
.menu-box .inner-menu .follow-us .icon-follow li:hover a{
    background-color: <?=$color1;?>;
}
.exit-menu-box{
    background-color: <?=$color1;?>;
}
.header-owl.owl-theme .owl-nav [class*=owl-] i:hover{
    color: <?=$color1;?>;
}
.header-owl.owl-theme .owl-dots .owl-dot.active span,
.header-owl.owl-theme .owl-dots .owl-dot:hover span{
    background-color: <?=$color1;?>;
}
.fancybox .fancybox-item i,
.services .services-item i{
    color: <?=$color2;?>;
}
.fancybox .fancybox-item:hover i,
.services .services-item:hover i{
    color: <?=$color1;?>;
}
.fancybox .fancybox-item h4,
.services .services-item h4{
    color: <?=$color2;?>;
}
.about .text-box ul li:hover,
.benfits li:hover{
    color: <?=$color1;?>;
}
.about .text-box ul li i,
.benfits li i{
    background-color: <?=$color1;?>;

}
.about-2 .img-box .statistic-item{
    background-color: <?=$color1;?>;
}
.about-2 .faq .faq-box .question-header .click,
.about-2 .faq .faq-box .question-header .click i,
.faq.faq-page .faq-box .question-header .click,
.faq.faq-page .faq-box .question-header .click i,
.single-services-box .faq .faq-box .question-header .click,
.single-services-box .faq .faq-box .question-header .click i{
    color: <?=$color2;?>;
}
.services .services-item .more{
    color: <?=$color1;?>;
}
.services .services-item .more span{
    background-color: <?=$color1;?>;

}
.btn-service-price {
    background-color: <?=$color1;?>;
}
.single-services-box .img-box .price-detail {
    background-color: <?=$color1;?>;
}
.video-presentation .presentation-box .pulse{
    background-color: <?=$color1;?>;
}
.statistic-item i{
    color: <?=$color2;?>;
}
.statistic-item:hover i{
    color: <?=$color1;?>;
}
.statistic-item .content .counter{
    color: <?=$color2;?>;
}
.statistic-item .content .counter-name{
    color: <?=$color2;?>;
}
.case-item .text-box .tags li:hover a,
.case-item .text-box .content-text h4:hover,
.case-item .text-box .content-text h4:hover a,
.case-item .text-box .content-text a.more:hover{
    color: <?=$color1;?>;
}
.case-item .text-box .content-text a.more span{
    background-color: <?=$color1;?>;
}

.owl-case-study.owl-theme .owl-dots .owl-dot span,
.owl-testimonial.owl-theme .owl-dots .owl-dot span{
    background-color: <?=$color2;?>;
}
.owl-case-study.owl-theme .owl-dots .owl-dot.active span,
.owl-case-study.owl-theme .owl-dots .owl-dot:hover span,
.owl-testimonial.owl-theme .owl-dots .owl-dot.active span,
.owl-testimonial.owl-theme .owl-dots .owl-dot:hover span{
    background-color: <?=$color1;?>;
}
.case-study-list .list-name-case li{
    color: <?=$color2;?>;
}
.case-study-list .list-name-case li.active{
    background-color: <?=$color1;?>;
    border: 1px solid <?=$color1;?>;
}



.team-item .text-box h5{
    color: <?=$color2;?>;

}
.team-item .text-box span{
    color: <?=$color1;?>;
}
.team-item .text-box span a {
    color: <?=$color1;?>;
}

.team-item .text-box ul li a{
    color: <?=$color2;?>;
}
.team-item .text-box ul li a svg {
    fill: <?=$color2;?>;
}
.team-item .text-box ul li:hover a {
    color: <?=$color1;?>;
}
.team-item .text-box ul li:hover a svg{ 
    fill: <?=$color1;?>;
} 
.skills h3{
    color: <?=$color2;?>;
}
.skills .skill-box .skill-line .line{
    background-color: <?=$color1;?>;
}
.quote .sec-title h3{
    color: <?=$color2;?>
}
.quote .quote-item i{
    color: <?=$color1;?>;
}





.pricing-item .item-top h4{
    color: <?=$color2;?>;
}
.pricing-item.active .item-top h4{
    color: <?=$color1;?>;
}
.pricing-item .item-top .price-number h5{
    color: <?=$color2;?>;
}
.pricing-item .item-top .price-number span{
    color: <?=$color2;?>;
}
.pricing-item .item-last ul li:hover{
    color: <?=$color1;?>;
}
.pricing-item .item-last ul li i{
    color: <?=$color1;?>;
}



.icon-quote i{

    color: <?=$color1;?>;
}
.testimonial-expand-button {
    color: <?=$color1;?>;
}
.testimonial-expand-button:hover {
    color: <?=$color3;?>;
}
.owl-testimonial .testimonial-item .text-box{
    color: <?=$color2;?>;
}

.owl-testimonial .testimonial-item .item-name img{
    border: 3px solid <?=$color1;?>;
}
.owl-testimonial .testimonial-item .item-name h5{
    color: <?=$color2;?>;
}
.owl-testimonial-2 .box-item .text-box::after {
    background-color: <?=$color1;?>;
} 
.owl-testimonial-3 .box-item .text-box::after {
    background-color: <?=$color1;?>;
}
/*
.owl-testimonial-2 .box-item .text-box .testimonial-expand-button, 
.owl-testimonial-3 .box-item .text-box .testimonial-expand-button {
    color: <=$color1;?>;
}
*/
.owl-testimonial-1 .box-item .clients-talk .img-box img, 
.owl-testimonial-2 .box-item .clients-talk .img-box img, 
.owl-testimonial-3 .box-item .clients-talk .img-box img {
    border: 2px solid <?=$color1;?>;
}
.owl-testimonial-1 .box-item .clients-talk .info span, 
.owl-testimonial-2 .box-item .clients-talk .info span, 
.owl-testimonial-3 .box-item .clients-talk .info span {
    color: <?=$color1;?>;
}
.testimonial-grid .testimonial-item .item-name img{
    border: 3px solid <?=$color1;?>;
}
.testimonial-grid .testimonial-item .item-name h5{
    color: <?=$color2;?>;
}
.testimonial-grid .box-item .text-box::after {
    background-color: <?=$color1;?>;
}
.testimonial-grid .box-item .text-box .testimonial-expand-button {
    color: <?=$color1;?>;
}
.testimonial-grid .box-item .clients-talk .img-box img {
    border: 2px solid <?=$color1;?>;
}
.testimonial-grid .box-item .clients-talk .info span {
    color: <?=$color1;?>;
}
.testimonial_popup .clients-talk .info span {
    color: <?=$color1;?>;
}
.blog-item .img-box ul{
    background-color: <?=$color1;?>;
}
.blog-item .img-box ul li:hover a{
    color: <?=$color2;?>;
}
.blog-item .text-box h5{
    color: <?=$color2;?>;
}
.blog-item .text-box .title-blog:hover,
.blog-item .text-box h5:hover{
    color: <?=$color1;?>;
}

.blog-item .text-box .link{
    color: <?=$color1;?>;
}
.blog-item .text-box .link:hover {
    color: <?=$color2;?>;
}
.blog-item .text-box .link span{
    background-color: <?=$color1;?>;
   
}
.footer{
    background-color: <?=$color2;?>;

}
.footer p a:hover {
    color: <?=$color1;?>;
}
.footer .links li:hover a{
    color: <?=$color1;?>;
}
.footer .newsletter{
    background-color: <?=$color3;?>;
}
.footer .newsletter h5{
    color: <?=$color1;?>;
}
.footer .newsletter form input:focus{
    border-color: <?=$color1;?>;
}
.footer .newsletter form a{
    background-color: <?=$color1;?>;
}
.copyright{
    background-color: <?=$color3;?>;
}
.copyright p a{
    color: <?=$color1;?>;
}
.copyright ul li:hover a{
    color: <?=$color1;?>;
}
.scroll-up a {
    background-color: <?=$color1;?>;
    border: 1px solid <?=$color1;?>;
}
.scroll-up:hover a{
    background-color: <?=$color2;?>;
    border: 1px solid <?=$color2;?>;
}
.breadcrumb-header .banner ul li:hover a{
    color: <?=$color1;?>;
}

.services-head h4{
    color: <?=$color2;?>;
}

.services-list li.active a,
.services-list li:hover a{
    color: <?=$color1;?>;
}
.brochures h5,
.single-services-box h4{
    color: <?=$color2;?>;
}

.call-back{
    background-color: <?=$color1;?>;
}
.single-services-box h3{
    color: <?=$color2;?>;
}
.item-careers h4 a{
    color: <?=$color2;?>;
}
.item-careers h4:hover a{
    color: <?=$color1;?>;
}
.item-careers ul li.active{
    background-color: <?=$color1;?>;
}
.item-careers a{
    color: <?=$color1;?>;
}
.item-careers a span{
    background-color: <?=$color1;?>;
}
.item-careers_popup ul li.active{
    background-color: <?=$color1;?>;
}
.shop-item .item-text .open-item-shop h4{
    color: <?=$color2;?>;
}
.shop-item .item-text span{
    color: <?=$color1;?>;
}
.shop.area .text-box-details .title-product{
    color: <?=$color2;?>;
}
.shop.area .text-box-details .item-review span i.active{
    color: <?=$color1;?>;
}
.shop.area .text-box-details .item-review span a:hover{
    color: <?=$color1;?>;
}
.shop.area .text-box-details .item-price{
    color: <?=$color1;?>;
}
.shop.area .text-box-details .list-details li span{
    color: <?=$color2;?>;
}
.shop.area .text-box-details .list-details li a{
    color: <?=$color2;?>;
}
.shop.area .text-box-details .list-details li a:hover{
    color: <?=$color1;?>;
}
.page-404-area h2{
    color: <?=$color2;?>;
}
.page-404-area h2 span{
    color: <?=$color1;?>;
}
.pagination-blog-area .pagination li{
    color: <?=$color2;?>;
}

.pagination-blog-area .pagination li.active{
    background-color: <?=$color1;?>;
    border-color: <?=$color1;?>;
}
.widget .widget-title h3{
    color: <?=$color2;?>;
}
.widget .widget-body .search input:focus{
    border-color: <?=$color1;?>;
}
.widget .widget-body .search button.click{
    color: <?=$color1;?>;
}
.widget .widget-body .instagram ul li a{
    background-color: <?=$color1;?>;
}
.widget .widget-body .follow .icon li a{
    background-color: <?=$color1;?>;
    border: 1px solid <?=$color1;?>;
}
.widget .widget-body .follow .icon li:hover a{
    background-color: <?=$color2;?>;
    border-color: <?=$color2;?>;
}
.widget .categories ul li:hover a{
    color: <?=$color1;?>;
}
.widget .widget-body .tags ul li:hover a{
    background-color: <?=$color1;?>;
    border: 1px solid <?=$color1;?>;
}
.widget .accordion li:hover .link > a {
    color: <?=$color1;?>;
}
.widget .accordion .submenu li:hover > a {
    color: <?=$color1;?>;
}
.news-item .item-content span a{
    color: <?=$color1;?>;
}
.news-item .item-content a.title-blog:hover,
.news-item .item-content a.title-blog:hover h5{
    color: <?=$color1;?>;
}
.blog .share-post span{
    color: <?=$color2;?>;
}

.blog .share-post ul li a{
    color: <?=$color2;?>;
}
.blog .share-post ul li:hover a{
    background-color: <?=$color1;?>;
    border-color: <?=$color1;?>;
}
.blog.area .item-comments .inner-comments .comments-box .text-box .time{
    color: <?=$color1;?>;
}
.blog.area .item-comments .inner-comments .comments-box .text-box a:hover{
    border: 1px solid <?=$color1;?>;
    background-color: <?=$color1;?>;
}
.blog.area .add-comments .inner-add-comments-box input:focus,
.blog.area .add-comments .inner-add-comments-box textarea:focus{
    border-color: <?=$color1;?>;
}
.dark-mode-btn{
    background-color: <?=$color2;?>;
    border: 1px solid <?=$color2;?>;
}
.active-dark-mode .dark-mode-btn{
    color: <?=$color1;?>;
}
body.active-dark-mode{
    background-color: <?=$color2;?>;
}
.active-dark-mode .nav-bar.active{
    background-color: <?=$color2;?>;
}
.active-dark-mode .nav-bar .nav-bar-link > ul ul{
    background-color: <?=$color2;?>;
}
.active-dark-mode .nav-bar .icon li.cart .cart-popup{
    background-color: <?=$color2;?>;
}
.active-dark-mode .nav-bar .icon li.cart .cart-popup .item .delete-item{
    color: <?=$color1;?>;
}
.active-dark-mode .nav-bar .icon li.cart .cart-popup .button-cart a:first-of-type.btn-1:hover{
    color: <?=$color1;?>;
}
.active-dark-mode .nav-bar .icon li.cart .cart-popup .button-cart a:last-of-type{
    color: <?=$color1;?>;
}
.active-dark-mode .menu-box .inner-menu{
    background-color: <?=$color2;?>;
}
.active-dark-mode .fancybox .fancybox-item:hover i,
.active-dark-mode .services .services-item:hover i {
    color: <?=$color1;?>;
}
.active-dark-mode .about .text-box ul li:hover,
.active-dark-mode .benfits li:hover{
    color: <?=$color1;?>;
}
.active-dark-mode .about .text-box a.btn-1{
    color: <?=$color1;?>;
}
.active-dark-mode .services,
.active-dark-mode .team{
    background: <?=$color3;?>;
}
.active-dark-mode .quote .sec-title h3{
    color: <?=$color2;?>;
}
.active-dark-mode .testimonial,
.active-dark-mode .faq-quote{
    background-color: <?=$color2;?>;
}
.active-dark-mode .pricing-item{
    background-color: <?=$color3;?>;
}
.active-dark-mode .pricing-item .item-last a.btn-1:hover,
.active-dark-mode .pricing-item.active .item-top h4{
    color: <?=$color1;?>;
}
.active-dark-mode .owl-case-study.owl-theme .owl-dots .owl-dot.active span,
.active-dark-mode .owl-case-study.owl-theme .owl-dots .owl-dot:hover span,
.active-dark-mode .owl-testimonial.owl-theme .owl-dots .owl-dot.active span,
.active-dark-mode .owl-testimonial.owl-theme .owl-dots .owl-dot:hover span{
    background-color: <?=$color1;?>;
}
.active-dark-mode .blog{
    background-color: <?=$color3;?>;
}
.active-dark-mode .case-study-2{
    background-color: <?=$color3;?>;
}
.active-dark-mode .testimonial-2,
.active-dark-mode .testimonial-about{
    background-color: <?=$color3;?>;
}
.active-dark-mode .blog-home-2{
    background-color: <?=$color2;?>;
}
.active-dark-mode .contact{
    background-color: <?=$color3;?>;
}
.active-dark-mode .contact .quote .quote-item:last-of-type{
    background-color: <?=$color2;?>;
}
.active-dark-mode .single-services{
    background-color: <?=$color3;?>
}
.active-dark-mode .services-list li.active a,
.active-dark-mode .services-list li:hover a {
    color: <?=$color1;?>;
}
.active-dark-mode .brochures{
    background-color: <?=$color2;?>;
}
.active-dark-mode .item-careers h4:hover a {
    color: <?=$color1;?>;
}
.active-dark-mode .shop-page,
.active-dark-mode .shop.area{
    background-color: <?=$color3;?>;
}
.active-dark-mode .shop.area .text-box-details .list-details li a:hover {
    color: <?=$color1;?>;
}
.active-dark-mode .page-404-area{
    background-color: <?=$color3;?>;
}
.active-dark-mode .case-study.case-study-page{
    background: <?=$color3;?>;
}
.active-dark-mode .team.case-study-page{
    background: <?=$color2;?>;
}
.active-dark-mode .widget .widget-body .search input{
    background-color: <?=$color2;?>;
    border-color: <?=$color2;?>;
}
.active-dark-mode .widget .categories ul li:hover a {
    color: <?=$color1;?>;
}
.active-dark-mode .widget .widget-body .tags ul li a,
.active-dark-mode .blog.area .item-comments .inner-comments .comments-box .text-box a{
    background-color: <?=$color2;?>;
    border-color: <?=$color2;?>;
}
.active-dark-mode .widget .widget-body .tags ul li:hover a,
.active-dark-mode .blog.area .item-comments .inner-comments .comments-box .text-box a:hover{
    background-color: <?=$color1;?>;
}
.active-dark-mode .blog .share-post ul li a{
    background-color: <?=$color2;?>;
    border-color: <?=$color2;?>;
}
.active-dark-mode .blog.area .add-comments .inner-add-comments-box input,
.active-dark-mode .blog.area .add-comments .inner-add-comments-box textarea{
    background-color: <?=$color2;?>;
    border-color: <?=$color2;?>;
}
.summonedForm .summonedFormInputSubmit {
    background-color: <?=$color1;?>;
}
.tags-list li {
    background-color: <?=$color1;?>;
}
header.navs-2 .nav-top .nav-top-box ul.info li a {
    color: <?=$color2;?>;
}
header.navs-2 .nav-top .nav-top-box ul li a.icon {
    color: <?=$color2;?>;
}
header.navs-2 .nav-bar .nav-bar-link ul li a {
    color: <?=$color2;?>;
}
header.navs-2 .info-nav .info-nav-image svg {
    fill: <?=$color2;?>;
}
header.navs-2 .info-nav .contact-nav > p {
    color: <?=$color2;?>;
}
header.navs-2 .info-nav .contact-nav > span {
    color: <?=$color2;?>;
}
header.navs-2 .info-nav:hover .info-nav-image svg {
    fill: <?=$color1;?>;
}
header.navs-2 .info-nav:hover .contact-nav p {
    color: <?=$color1;?>;
}
.nav-top-box ul.info li a:hover{
    color: <?=$color1;?>;
}
.nav-top .nav-top-box ul.info li.has-dropdown ul li a {
    color: <?=$color3;?>;
}
.nav-top .nav-top-box ul.info li.has-dropdown ul li a:hover {
    color: <?=$color1;?>;
} 
.nav-top .nav-top-box ul li a.icon:hover{
    color: <?=$color1;?>;
}
.nav-bar .nav-bar-link ul li a:before{
    background-color: <?=$color1;?>;
}
.nav-bar .nav-bar-link > ul ul ul li:hover a{
    color: <?=$color1;?> !important;
}
.info-nav:hover .info-nav-image svg {
    fill: <?=$color1;?>;
}
.info-nav:hover .contact-nav p {
    color: <?=$color1;?>;
}
.nav-bar.active .info-nav i{
    color: <?=$color1;?>
}
.search-box form input:focus{
    border-bottom: 1px solid <?=$color1;?>;
}
.search-box form button{
    color: <?=$color1;?>;
}
.search-box .close-search:hover{
    color: <?=$color1;?>;
}
.icon-follow li a{
    background-color: <?=$color3;?>;
}
.icon-follow li:hover a svg{
    fill: <?=$color1;?>;
}
.menu-box .inner-menu .contact-info .contact-box i{
    color: <?=$color1;?>;
}
.menu-box .inner-menu .follow-us .icon-follow li a{
    color: <?=$color1;?>;
}
.menu-box .inner-menu .follow-us .icon-follow li a svg{
    fill: <?=$color1;?>;
}
.menu-box .inner-menu .follow-us .icon-follow li:hover a{
    background-color: <?=$color1;?>;
}
.exit-menu-box{
    background-color: <?=$color1;?>;
}
.fancybox-item:hover svg {
    fill: <?=$color1;?>;
}
.detail-item-content {
    color: <?=$color2;?>;
}
form input.form-submit-button,
.quote form input.form-submit-button{
    background-color: <?=$color1;?>;
}
.service-linked-items h4 {
    color: <?=$color3;?>;
}
.nav-bar .logo .open-nav-bar:hover span,
.nav-bar .logo .open-nav-bar.active span{
    background-color: <?=$color1;?>;
}
.nav-bar .nav-bar-link ul li.has-menu > a:after{
    background-color: <?=$color1;?>;
}
.pagination.pagination-sm .page-item.active .page-link {
    background-color: <?=$color1;?>;
    border-color: <?=$color1;?>;
    color: #FFF;
}   
.pagination.pagination-sm .page-link {
    color: <?=$color1;?>;
}
.pagination.pagination-sm .page-link:hover {
    color: <?=$color1;?>;
}
.pagination.pagination-sm .page-link:focus {
    background-color: <?=$color1;?>;
    color: #FFF;
}
.services-block .services-block-item h4{
    color: <?=$color2;?>;
}
.services-section-button.active{
    background-color: <?=$color2;?>;
}
.text-box-quote {
    padding: 6px 18px;
    background-color: <?=$color1;?>;
}
.header .box-hero .services-header .services-item:hover{
    background-color: <?=$color1;?>;
}
.header .services-header .services-item span{
    color: <?=$color2;?>;
}
.header .services-header .services-item-icon svg{
    fill: <?=$color2;?>;
}
.career-detail-tags li.active{
    background-color: <?=$color1;?>;
}
.career-detail-page h4 {
    color: <?=$color2;?>;
}
</style>