<!DOCTYPE html>
<html class="html" lang="ru-RU">

<head>
  <meta charset="UTF-8">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <title>@yield('title')</title>

  <link rel="apple-touch-icon" sizes="256x256" href="{{asset('img/favicon/icon256.png')}}">
  <link rel="apple-touch-icon" sizes="128x128" href="{{asset('img/favicon/icon128.png')}}">
  <link rel="icon" type="image/png" sizes="64x64" href="{{asset('img/favicon/icon64.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/icon32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/icon16.png')}}">
  <link rel="mask-icon" href="{{asset('img/favicon/fav_svg.svg')}}" color="#00abaf">

  <meta name='robots' content='max-image-preview:large' />
  <link rel="pingback" href="http://localhost/shlifovka/xmlrpc.php">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  <link rel='dns-prefetch' href='//s.w.org' />
  <link rel="alternate" type="application/rss+xml" title="Автошлифовка в Курске &raquo; Лента"
    href="http://localhost/shlifovka/?feed=rss2" />
  <link rel="alternate" type="application/rss+xml" title="Автошлифовка в Курске &raquo; Лента комментариев"
    href="http://localhost/shlifovka/?feed=comments-rss2" />
  <link rel="alternate" type="application/rss+xml"
    title="Автошлифовка в Курске &raquo; Лента комментариев к &laquo;Sample Page&raquo;"
    href="http://localhost/shlifovka/?feed=rss2&#038;page_id=2" />


  <script type="text/javascript">
    window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "http:\/\/localhost\/shlifovka\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.3" } };
    /*! This file is auto-generated */
    !function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode; p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0); e = i.toDataURL(); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji))) }(window, document, window._wpemojiSettings);
  </script>

  <link rel="stylesheet" href="css/emoji.css">
  <link rel="stylesheet" href="css/style-1.min.css">
  <link rel="stylesheet" href="css/wp-block-library-theme.css">
  <link rel="stylesheet" href="css/global-styles.css">
  <link rel="stylesheet" href="css/eae.min.css">
  <link rel="stylesheet" href="css/v4-shims.min.css">
  <link rel="stylesheet" href="css/all.min-1.css">
  <link rel="stylesheet" href="css/vegas.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/simple-line-icons.min.css">
  <link rel="stylesheet" href="css/magnific-popup.min.css">
  <link rel="stylesheet" href="css/slick.min.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/hamburgers.min.css">
  <link rel="stylesheet" href="css/spin.css">
  <link rel='stylesheet' id='oceanwp-google-font-cuprum-css'
    href='//fonts.googleapis.com/css?family=Cuprum%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i&#038;subset=latin&#038;display=swap&#038;ver=5.9'
    type='text/css' media='all' />
  <link rel="stylesheet" href="css/elementor-icons.min.css">
  <link rel="stylesheet" href="css/frontend.min.css">
  <link rel="stylesheet" href="css/post-300.css">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/post-2.css">
  <link rel='stylesheet' id='google-fonts-1-css'
    href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCuprum%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CShadows+Into+Light%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COvo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;subset=cyrillic&#038;ver=5.9'
    type='text/css' media='all' />
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/solid.min.css">

  <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">

  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/jquery/jquery-migrate.min.js"></script>

  <link rel="https://api.w.org/" href="http://localhost/shlifovka/index.php?rest_route=/" />
  <link rel="alternate" type="application/json" href="http://localhost/shlifovka/index.php?rest_route=/wp/v2/pages/2" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/shlifovka/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml"
    href="http://localhost/shlifovka/wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 5.9.3" />
  <link rel="canonical" href="http://localhost/shlifovka/" />
  <link rel='shortlink' href='http://localhost/shlifovka/' />
  <link rel="alternate" type="application/json+oembed"
    href="http://localhost/shlifovka/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=http%3A%2F%2Flocalhost%2Fshlifovka%2F" />
  <link rel="alternate" type="text/xml+oembed"
    href="http://localhost/shlifovka/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=http%3A%2F%2Flocalhost%2Fshlifovka%2F&#038;format=xml" />
  <link rel="stylesheet" href="css/wp-custom.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body
  class="home page-template page-template-templates page-template-builder-fullwidth-std page-template-templatesbuilder-fullwidth-std-php page page-id-2 wp-custom-logo wp-embed-responsive oceanwp-theme dropdown-mobile vertical-header-style left-header default-collapse default-breakpoint has-sidebar content-right-sidebar page-header-disabled elementor-default elementor-kit-300 elementor-page elementor-page-2"
  itemscope="itemscope" itemtype="https://schema.org/WebPage">

  <div id="outer-wrap" class="site clr">
    <a class="skip-link screen-reader-text" href="#main">Перейти к содержимому</a>

    <div id="wrap" class="clr">

      <header id="site-header" class="vertical-header has-shadow vh-center-logo clr" data-height="0"
        itemscope="itemscope" itemtype="https://schema.org/WPHeader" role="banner">

        <div id="site-header-inner" class="clr container">

          <div id="site-logo" class="clr" itemscope itemtype="https://schema.org/Brand">

            <div id="site-logo-inner" class="clr">

              <a href="{{route('index_page',[])}}" class="custom-logo-link" rel="home" aria-current="page"><img width="340"
                  height="263" src="img/logo.png"
                  class="custom-logo" alt="Автошлифовка в Курске"
                  srcset="img/logo.png 340w, img/logo.png 300w"
                  sizes="(max-width: 340px) 100vw, 340px" /></a>
            </div><!-- #site-logo-inner -->

          </div><!-- #site-logo -->

          <div id="site-navigation-wrap" class="clr">

            <nav id="site-navigation" class="navigation main-navigation clr" itemscope="itemscope"
              itemtype="https://schema.org/SiteNavigationElement" role="navigation">

              <ul id="menu-auto" class="main-menu dropdown-menu">
                <li id="menu-item-37" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37"><a
                    href="{{route('index_page')}}" class="menu-link"><span class="text-wrap">Главная</span></a></li>
                <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a
                    href="{{route('about_page')}}" class="menu-link"><span class="text-wrap">О компании</span></a>
                </li>
                <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a
                    href="{{route('contacts_page')}}" class="menu-link"><span class="text-wrap">Контакты</span></a>
                </li>
              </ul>
            </nav><!-- #site-navigation -->

          </div><!-- #site-navigation-wrap -->

          {{-- <div id="vertical-searchform" class="header-searchform-wrap clr">
            <form method="get" action="http://localhost/" class="header-searchform" role="search"
              aria-label="Vertical Header Search">
              <input type="search" name="s" autocomplete="off" value="" />
              <button class="search-submit"><i class="icon-magnifier"></i></button>
              <div class="search-bg"></div>
            </form>
          </div><!-- #vertical-searchform --> --}}

          <div class="oceanwp-mobile-menu-icon clr mobile-right">

            <a href="javascript:void(0)" class="mobile-menu" aria-label="Мобильное меню">
              <i class="fa fa-bars" aria-hidden="true"></i>
              <span class="oceanwp-text">Меню</span>
              <span class="oceanwp-close-text">Закрыть</span>
            </a>

          </div><!-- #oceanwp-mobile-menu-navbar -->

          <a href="javascript:void(0)" class="vertical-toggle">
            <div class="hamburger hamburger--spin">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </a>

        </div>

        <div id="mobile-dropdown" class="clr">

          <nav class="clr" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">

            <ul id="menu-auto-1" class="menu">
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37"><a
                  href="{{route('index_page',[])}}">Главная</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a
                  href="http://localhost/?page_id=32">О компании</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a
                  href="http://localhost/?page_id=34">Контакты</a></li>
            </ul>
            <div id="mobile-menu-search" class="clr">
              <form method="get" action="" class="mobile-searchform" role="search"
                aria-label="Искать:">
                <label for="ocean-mobile-search1">
                  <input type="search" name="s" autocomplete="off" placeholder="Поиск" />
                  <button type="submit" class="searchform-submit" aria-label="Submit search">
                    <i class="icon-magnifier" aria-hidden="true"></i>
                  </button>
                </label>
              </form>
            </div><!-- .mobile-menu-search -->

          </nav>

        </div>

      </header><!-- #site-header -->


      @yield('content')

      <footer id="footer" class="site-footer" itemscope="itemscope" itemtype="https://schema.org/WPFooter"
      role="contentinfo">

      <div id="footer-inner" class="clr">

        <div id="footer-bottom" class="clr">

          <div id="footer-bottom-inner" class="container clr">

            <div id="footer-bottom-menu" class="navigation clr">

              <div class="menu-auto-container">
                <ul id="menu-auto-2" class="menu">
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37"><a
                      href="{{route('index_page')}}">Главная</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a
                      href="{{route('about_page')}}">О компании</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a
                      href="{{route('contacts_page')}}">Контакты</a></li>
                </ul>
              </div>
            </div><!-- #footer-bottom-menu -->


            <!-- #copyright -->

          </div><!-- #footer-bottom-inner -->

        </div><!-- #footer-bottom -->

      </div><!-- #footer-inner -->

    </footer><!-- #footer -->

  </div><!-- #wrap -->

</div><!-- #outer-wrap -->

<a id="scroll-top" class="scroll-top-right" href="#"><span class="fa fa-angle-up"
    aria-label="Перейти наверх страницы"></span></a>

<link rel="stylesheet" href="css/animations.min.css">

<script type='text/javascript' id='eae-main-js-extra'>
  /* <![CDATA[ */
  var eae = { "ajaxurl": "http:\/\/localhost\/shlifovka\/wp-admin\/admin-ajax.php", "current_url": "aHR0cDovL2xvY2FsaG9zdC9zaGxpZm92a2Ev", "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 } };
  var eae_editor = { "plugin_url": "http:\/\/localhost\/shlifovka\/wp-content\/plugins\/addon-elements-for-elementor-page-builder\/" };
      /* ]]> */
</script>


<script src="js/eae.min.js"></script>
<script src="js/v4-shims.min.js"></script>
<script src="js/animated-main.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/magnific.min.js"></script>
<script src="js/vegas.min.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nicescroll.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/lightbox.min.js"></script>

<script type='text/javascript' id='oceanwp-main-js-extra'>
  /* <![CDATA[ */
  var oceanwpLocalize = { "isRTL": "", "menuSearchStyle": "drop_down", "sidrSource": null, "sidrDisplace": "1", "sidrSide": "left", "sidrDropdownTarget": "link", "verticalHeaderTarget": "link", "customSelects": ".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select" };
      /* ]]> */
</script>

<script src="js/main.min.js"></script>

<!--[if lt IE 9]>
      <script type='text/javascript' src='http://localhost/shlifovka/wp-content/themes/oceanwp/assets/js/third/html5.min.js?ver=2.0.2' id='html5shiv-js'></script>
      <![endif]-->

<script src="js/webpack.runtime.min.js"></script>
<script src="js/frontend-modules.min.js"></script>
{{-- <script src="js/waypoints.min.js"></script> --}}
<script src="js/core.min.js"></script>
<script src="{{asset( 'js/swiper.min.js' ) }}"></script>
<script src="{{asset( 'js/fslightbox.js' ) }}"></script>
<script src="{{asset( 'js/main-script.js' ) }}"></script>
{{-- <script src="js/share-link.min.js"></script> --}}
{{-- <script src="js/dialog.min.js"></script> --}}

<script type='text/javascript' id='elementor-frontend-js-before'>
  var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f \u0432 Facebook", "shareOnTwitter": "\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f \u0432 Twitter", "pinIt": "\u0417\u0430\u043f\u0438\u043d\u0438\u0442\u044c", "download": "\u0421\u043a\u0430\u0447\u0430\u0442\u044c", "downloadImage": "\u0421\u043a\u0430\u0447\u0430\u0442\u044c \u0438\u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u0438\u0435", "fullscreen": "\u0412\u043e \u0432\u0435\u0441\u044c \u044d\u043a\u0440\u0430\u043d", "zoom": "\u0423\u0432\u0435\u043b\u0438\u0447\u0435\u043d\u0438\u0435", "share": "\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f", "playVideo": "\u041f\u0440\u043e\u0438\u0433\u0440\u0430\u0442\u044c \u0432\u0438\u0434\u0435\u043e", "previous": "\u041d\u0430\u0437\u0430\u0434", "next": "\u0414\u0430\u043b\u0435\u0435", "close": "\u0417\u0430\u043a\u0440\u044b\u0442\u044c" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "\u0422\u0435\u043b\u0435\u0444\u043e\u043d", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "\u0422\u0435\u043b\u0435\u0444\u043e\u043d \u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u043e\u0435", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "\u041f\u043b\u0430\u043d\u0448\u0435\u0442", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "\u041f\u043b\u0430\u043d\u0448\u0435\u0442 \u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u043e\u0435", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "\u041d\u043e\u0443\u0442\u0431\u0443\u043a", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "\u0428\u0438\u0440\u043e\u043a\u043e\u0444\u043e\u0440\u043c\u0430\u0442\u043d\u044b\u0435", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.5.5", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "a11y_improvements": true, "e_import_export": true, "e_hidden_wordpress_widgets": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true }, "urls": { "assets": "http:\/\/localhost\/shlifovka\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 2, "title": "%D0%90%D0%B2%D1%82%D0%BE%D1%88%D0%BB%D0%B8%D1%84%D0%BE%D0%B2%D0%BA%D0%B0%20%D0%B2%20%D0%9A%D1%83%D1%80%D1%81%D0%BA%D0%B5%20%E2%80%94%20%D0%92%D1%81%D0%B5%20%D0%B2%D0%B8%D0%B4%D1%8B%20%D1%80%D0%B0%D0%B1%D0%BE%D1%82%20%D0%BF%D0%BE%20%D1%88%D0%BB%D0%B8%D1%84%D0%BE%D0%B2%D0%BA%D0%B5", "excerpt": "", "featuredImage": false } };
</script>

<script src="js/frontend.min.js"></script>
<script src="js/preloaded-modules.min.js"></script>

</body>

</html>
