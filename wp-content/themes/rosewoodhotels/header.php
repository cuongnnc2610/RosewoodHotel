<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6 lte9 lte8 lte7 no-js"><![endif]-->
<!--[if IE 7]><html class="ie ie7 lte9 lte8 lte7 no-js"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8 no-js"><![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9 no-js"><![endif]-->
<!--[if gt IE 9]><html class="no-js"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->
    <!-- Desktop Group Layout -->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- mobile detect and redirect -->
        <script>
            // getCookie function for language switch
            function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for(var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
        </script>
        <!-- language switch and redirect -->
        <script type="text/javascript">
            var langList = "en ja-JP zh-CN";
            var scCode = "zh-CN";
            var hasCN = langList.indexOf(scCode);
            var currentPageEnable = true;
            var browserLang = window.navigator.language;
            var url = window.location.pathname;
            var fullUrl = window.location.href;
            var checkForCMS = fullUrl.indexOf("cms.rosewoodhotels.com");
            var newUrl = url.substring(3);
            var lang = url.substring(1,3);
            // console.log(currentPageEnable);
            // console.log(fullUrl, url, newUrl, lang);
            // console.log(fullUrl.indexOf("cms.rosewoodhotels.com"));
            if (checkForCMS === -1) {
            // console.log('not in cms')
            }
            // browserLang should set to 'zh-CN' in live
            // console.log(langList, scCode, hasCN);
            if (hasCN !== -1 && browserLang === 'zh-CN' && (getCookie('lang-select') === '' || getCookie('lang-select') === 'sc') && lang !== 'sc' && currentPageEnable && checkForCMS === -1) {
            console.log('all true then redirect');
            window.location.href = '/sc' + newUrl;
            }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        
        <meta name="VIcurrentDateTime" content="637220976279071211" />
        <!--<script type="text/javascript" src="/layouts/system/VisitorIdentification.js"></script>-->
        <!--Desktop Group XSLT-->
        <?php $website_title = get_field('website_title');?>
        <title><?php echo $website_title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0" />
        <meta property="fb:app_id" content="" />
        <meta name="p:domain_verify" content="e07e7e2cdd18cf2e96508ba75f3f5ede" />
        <!--<meta name="Description" content="A Sense of Place®. Embark on a journey with Rosewood Hotels &amp; Resorts, the world’s finest array of luxury hotels and resorts inspired by elegant wanderlust." />
        <link rel="alternate" href="https://m.rosewoodhotels.com/en/default" media="only screen and (max-width:767px)" />       
        
        <meta property="og:url" content="https://www.rosewoodhotels.com/en/default" />
        <meta property="og:title" content="Luxury Hotels and Luxury Resorts | Rosewood Hotels" />
        <meta property="og:description" content="A Sense of Place®. Embark on a journey with Rosewood Hotels &amp; Resorts, the world’s finest array of luxury hotels and resorts inspired by elegant wanderlust." />
        <meta property="og:type" content="website" /><meta property="og:image" content="https://www.rosewoodhotels.com/en/-/media/Images/Rosewood_Hotels_and_Resorts/Group/home/RHR_November_MYK_2_1900x920.ashx" />
        -->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-icon-57x57-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-icon-72x72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-icon-114x114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-icon-144x144-precomposed.png" />
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon" />
        <?php wp_head();?>
        <link rel="alternate" href="" hreflang="zh-cn" />
        <link rel="alternate" href="" hreflang="zh-hk" />
        <link rel="alternate" href="" hreflang="ja-jp"/>
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-9VW7');
        </script>
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-57LCPQC');
        </script>
        <script type="text/javascript">
        window._vwo_code = window._vwo_code || (function(){
        var account_id=428368,
        settings_tolerance=4000,
        library_tolerance=4000,
        use_existing_jquery=false,
        is_spa=1,
        hide_element='body',
        /* DO NOT EDIT BELOW THIS LINE */
        f=false,d=document,code={use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){
        window.settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b=hide_element?hide_element+'{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}':'',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&f='+(+is_spa)+'&r='+Math.random());return settings_timer; }};window._vwo_settings_timer = code.init(); return code; }());
        </script>
        <script>
            !function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="PRH7V-5E9CM-9GDK5-G2TP7-QNM4H",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,o,_,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",_=document.getElementsByTagName("script")[0],_.parentNode.insertBefore(r,_);try{o=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",o=r.contentWindow.document}o.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"PRH7V-5E9CM-9GDK5-G2TP7-QNM4H",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},o.write("<bo"+'dy onload="document._l();">'),o.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="odc54yyxa7jkaxuqf3ua-f-69d68badc-clientnsv4-s.akamaihd.net",i={"ak.v":"27","ak.cp":"239363","ak.ai":parseInt("143045",10),"ak.ol":"0","ak.cr":37,"ak.ipv":4,"ak.proto":"h2","ak.rid":"390b11","ak.r":25990,"ak.a2":e,"ak.m":"b","ak.n":"essl","ak.bpcip":"112.197.222.0","ak.cport":51712,"ak.gh":"104.84.150.105","ak.quicv":"","ak.tlsv":"tls1.2","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1586507496","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==rjxUvB21lM8Pw0Mu8fS2DcqJDlpfVIl0XdYFGRYMkuYz4eMadPHjtpzQalQVid7c9PqVgPAAptVzXe5KviwIF9ZKRxLZo8xxDf1a7gNMEeEFo+/zGkMoKdCWKwq7slpJHALoe6hiHcWHVg27slS5vmr9QUCqLNrYtjE9DKiOiwUAavSxXDsjqqgp0l1w68/q+pMIIPrcVO0kwCEzX9KoH5Ae0l9Y8l6Gkc2ANdOgVNY9Ces7KlmxTtMigCai6gvlLqaGcHl1nDtXwdyoEJHZICSNCfU6gVf9vMRFXn6jBue2azA8NZxkuJwgzm2ArlBlTAH9KOPrY2IOR8uRYkl1W1T0LIUiy20LwU4EGLqnnfAzZLgDwlu6RzlraAH57DFYehj/eMii0LboKkjMSp/Bua5HP7kn5s/IfuP8kJwGZzo=","ak.pv":"40"};if(""!==t)i["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))i["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(i)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:i,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);
        </script>
    </head>
    <body id="MasterPageBodyTag" class="r_t1 en">
        <form method="post" action="/en/default" id="mainform">
            <div class="aspNetHidden">
                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="cqcVMEOKoPh1ug+MkVoPvnVzLK6QaZVnUk+Ewhqvy/HD/u8unx+qxY1i6udsrnjx5OmxZyjwhKF/9ZQ/cQIWgQX51rC7zxPIfUaxpaVPrzhjsJwws02gvX76FKOhclF8ymjwe0g3Ynxt3Z+ewQdnwEQGLeAz6tiSUxvUmYkRrMw=" />
            </div>
            <div class="aspNetHidden">
                <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="44F0C7B7" />
            </div>
        </form>
        <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-9VW7" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57LCPQC" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <div id="loading"></div>
        <header class="light-theme mobile-menu-show no-hover" data-templatepfile="rw-destop-group-headerxslt">

            <?php 
                if(get_field('announcement')):
                    $announcement = get_field('announcement');
            ?>
                <div class="announcement">
                    <div class="inner">
                        <a href="<?php echo $announcement['link'];?>"><?php echo $announcement['title'];?></a>
                    </div>
                </div>
            <?php endif;?>

            <?php 
                $brand_logo = get_field('brand_logo', 70);
                $booking_section = get_field('booking_section', 70);
                $languages = get_field('languages', 70);
            ?>
            <div class="desktop-menu">
                <div class="header-inner fixed_width light-theme-content">
                    <div class="header-top">
                        <a href="<?php echo get_home_url(); ?>" class="brand-logo gtm-header" style="background-image:url('<?php echo $brand_logo['image170x59_1']['url'];?>')" aria-label="<?php echo $website_title;?>"><?php echo $website_title;?></a>
                        <div class="buttons-wrapper">
                            <div class="lang-dropdown-wrapper">
                                <div class="lang-dropdown">
                                    <div class="lang-current lang-item gtm-header" href="<?php echo $languages['language1']['link'];?>"><?php echo $languages['language1']['language'];?></div> 
                                    <div class="lang-option lang-item">
                                        <?php 
                                            foreach ($languages as $language): 
                                                if ($language == $languages['language1']) continue;
                                        ?>
                                            <a href="<?php echo $language['link'];?>" data-lang="sc" class="gtm-header"><?php echo $language['language'];?></a>
                                        <?php endforeach;?>
                                    </div>                                    
                                </div>
                            </div>
                            <a data-gtm-button-attribute="main nav bar" class="button bold dynamic-width gtm-header" href="<?php echo $booking_section['booking_link'];?>" target="_self"><?php echo $booking_section['action_name'];?></a>
                        </div>
                    </div>

                    <?php
                        wp_nav_menu(
                            array(
                                'theme-location' => 'top-menu',
                                //'menu_class'     => 'header-menu first-level',
                                'items_wrap'     => '<ul role="menubar" aria-label="main menu" class="header-menu first-level">%3$s</ul>',
                                'depth'          => 2

                            )
                        )
                    ?>

                    <!--<ul class="header-menu first-level" role="menubar" aria-label="main menu">
                        <li class="without-sub-nav " role="menuitem" aria-haspopup="false">
                            <a data-target="#luxury_hotels_and_resorts" class="gtm-nav" data-dropdown="true" href="/en/luxury-hotels-and-resorts">Find a Hotel</a>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Meetings-&amp;-Events-light-theme-content">
                            <a data-target="#meetings_and_events" class="gtm-nav" data-dropdown="true" href="/en/meetings-and-events">Meetings & Events</a>
                            <ul class="header-menu second-level" role="menu" id="Meetings-&amp;-Events-light-theme-content">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events">Find a Venue</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events/rosewood-rest-assured">Rosewood Rest Assured</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events/group-offers">GROUP OFFERS</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events/global-giveback">GLOBAL GIVEBACK</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events/same-time-next-year">SAME TIME NEXT YEAR</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Weddings-light-theme-content">
                            <a data-target="#luxury_weddings" class="gtm-nav" data-dropdown="true" href="/en/luxury-weddings">Weddings</a>
                            <ul class="header-menu second-level" role="menu" id="Weddings-light-theme-content">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/luxury-weddings">Overview</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/luxury-weddings/perfect-match">Offer</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Interests-light-theme-content">
                            <a data-target="#interests" class="gtm-nav" data-dropdown="true" href="/en/interests">Interests</a>
                            <ul class="header-menu second-level" role="menu" id="Interests-light-theme-content">
                                <li role="menuitem">
                                    <a rel="noopener noreferrer" class="gtm-nav" href="https://www.rosewoodhotels.com/conversations" target="_blank">Rosewood Conversations</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/luxury-spa-resorts-and-hotels">Wellness</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/luxury-golf-vacations">Golf</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/luxury-family-hotels-and-resorts">Family</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/luxury-beach-resorts-and-hotels">Beach</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/a-sense-of-taste">A Sense of Taste</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Offers-light-theme-content">
                            <a data-target="#luxury_hotel_offers" class="gtm-nav" data-dropdown="true" href="/en/luxury-hotel-offers">Offers</a>
                            <ul class="header-menu second-level" role="menu" id="Offers-light-theme-content">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/limitededition">Rosewood Limited Edition</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/luxury-hotel-offers">LUXURY HOTEL OFFERS</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Gallery-light-theme-content">
                            <a data-target="#gallery" class="gtm-nav" data-dropdown="true" href="/en/gallery">Gallery</a>
                            <ul class="header-menu second-level" role="menu" id="Gallery-light-theme-content">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/gallery">Hotel Gallery</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/gallery-rosewood-regulars">Rosewood Regulars</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Residences-light-theme-content">
                            <a data-target="#residences" class="gtm-nav" data-dropdown="true" href="/en/residences">Residences</a>
                            <ul class="header-menu second-level" role="menu" id="Residences-light-theme-content">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/residences/residential-rentals">residential rentals</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/residences/serviced-apartments">serviced apartments</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/residences/ownership">ownership</a>
                                </li>
                            </ul>
                        </li>
                    </ul>-->
                </div>
                <div class="header-inner fixed_width dark-theme-conent">
                    <div class="header-top">
                        <a href="<?php echo get_home_url(); ?>" class="brand-logo gtm-header" style="background-image:url('<?php echo $brand_logo['image170x59_2']['url'];?>')" aria-label="<?php echo $website_title;?>"><?php echo $website_title;?></a>
                        <div class="buttons-wrapper">
                            <div class="lang-dropdown-wrapper">
                                <div class="lang-dropdown">
                                    <div class="lang-current lang-item gtm-header" href="<?php echo $languages['language1']['link'];?>"><?php echo $languages['language1']['language'];?></div> 
                                    <div class="lang-option lang-item">
                                        <?php 
                                            foreach ($languages as $language): 
                                                if ($language == $languages['language1']) continue;
                                        ?>
                                            <a href="<?php echo $language['link'];?>" data-lang="sc" class="gtm-header"><?php echo $language['language'];?></a>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <a data-gtm-button-attribute="main nav bar" class="button bold dynamic-width gtm-header" href="<?php echo $booking_section['booking_link'];?>" target="_self"><?php echo $booking_section['action_name'];?></a>
                        </div>
                    </div>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme-location' => 'top-menu',
                                //'menu_class'     => 'header-menu first-level',
                                'items_wrap'     => '<ul role="menubar" aria-label="main menu" class="header-menu first-level">%3$s</ul>',
                                'depth'          => 2
                            )
                        )
                    ?>
                    <!--<ul class="header-menu first-level" role="menubar" aria-label="main menu">
                        <li class="without-sub-nav " role="menuitem" aria-haspopup="false">
                            <a data-target="#luxury_hotels_and_resorts" class="gtm-nav" data-dropdown="true" href="/en/luxury-hotels-and-resorts">Find a Hotel</a>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Meetings-&amp;-Events-dark-theme-conent">
                            <a data-target="#meetings_and_events" class="gtm-nav" data-dropdown="true" href="/en/meetings-and-events">Meetings & Events</a>
                            <ul class="header-menu second-level" role="menu" id="Meetings-&amp;-Events-dark-theme-conent">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events">Find a Venue</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events/rosewood-rest-assured">Rosewood Rest Assured</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events/group-offers">GROUP OFFERS</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events/global-giveback">GLOBAL GIVEBACK</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/meetings-and-events/same-time-next-year">SAME TIME NEXT YEAR</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Weddings-dark-theme-conent">
                            <a data-target="#luxury_weddings" class="gtm-nav" data-dropdown="true" href="/en/luxury-weddings">Weddings</a>
                            <ul class="header-menu second-level" role="menu" id="Weddings-dark-theme-conent">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/luxury-weddings">Overview</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/luxury-weddings/perfect-match">Offer</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Interests-dark-theme-conent">
                            <a data-target="#interests" class="gtm-nav" data-dropdown="true" href="/en/interests">Interests</a>
                            <ul class="header-menu second-level" role="menu" id="Interests-dark-theme-conent">
                                <li role="menuitem">
                                    <a rel="noopener noreferrer" class="gtm-nav" href="https://www.rosewoodhotels.com/conversations" target="_blank">Rosewood Conversations</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/luxury-spa-resorts-and-hotels">Wellness</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/luxury-golf-vacations">Golf</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/luxury-family-hotels-and-resorts">Family</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/luxury-beach-resorts-and-hotels">Beach</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/interests/a-sense-of-taste">A Sense of Taste</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Offers-dark-theme-conent">
                            <a data-target="#luxury_hotel_offers" class="gtm-nav" data-dropdown="true" href="/en/luxury-hotel-offers">Offers</a>
                            <ul class="header-menu second-level" role="menu" id="Offers-dark-theme-conent">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/limitededition">Rosewood Limited Edition</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/luxury-hotel-offers">LUXURY HOTEL OFFERS</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Gallery-dark-theme-conent">
                            <a data-target="#gallery" class="gtm-nav" data-dropdown="true" href="/en/gallery">Gallery</a>
                            <ul class="header-menu second-level" role="menu" id="Gallery-dark-theme-conent">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/gallery">Hotel Gallery</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/gallery-rosewood-regulars">Rosewood Regulars</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" " role="menuitem" aria-haspopup="true" aria-controls="Residences-dark-theme-conent">
                            <a data-target="#residences" class="gtm-nav" data-dropdown="true" href="/en/residences">Residences</a>
                            <ul class="header-menu second-level" role="menu" id="Residences-dark-theme-conent">
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/residences/residential-rentals">residential rentals</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/residences/serviced-apartments">serviced apartments</a>
                                </li>
                                <li role="menuitem">
                                    <a class="gtm-nav" href="/en/residences/ownership">ownership</a>
                                </li>
                            </ul>
                        </li>
                        <li role="menuitem" aria-haspopup="true" aria-controls="Check rates">
                            <a data-gtm-button-attribute="slim bar" class="button-appear button bold dynamic-width gtm-header" href="https://gc.synxis.com/rez.aspx?Chain=5159" target="_self">Check Rates</a>
                        </li>
                    </ul>-->
                </div>
            </div>
            <div class="mobile-menu">
                <div class="top-section">
                    <div class="menu-toggle">
                        <div class="hamburger">
                            <span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                    <a href="<?php echo get_home_url(); ?>" class="brand-logo-mobile gtm-header" style="background-image:url('<?php echo $brand_logo['image368x128']['url'];?>')" aria-label="Luxury Hotels and Luxury Resorts | Rosewood Hotels"><?php echo $website_title;?></a>
                    <a class="button dynamic-width book-button gtm-header" href="<?php echo $booking_section['booking_link'];?>" target="_self"><?php echo $booking_section['action_name'];?></a>
                </div>

                <div class="slide-section group">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme-location' => 'top-menu',
                                'items_wrap'     => '<ul class="menu-items">%3$s</ul>',
                                'depth'          => 1
                            )
                        )
                    ?>
                    <!--<ul class="menu-items">
                        <li class="menu-items">
                            <a data-target="#luxury_hotels_and_resorts" class="gtm-nav" href="/en/luxury-hotels-and-resorts">Find a Hotel</a>
                        </li>
                        <li class="menu-items">
                            <a data-target="#meetings_and_events" class="gtm-nav" href="/en/meetings-and-events">Meetings & Events</a>
                        </li>
                        <li class="menu-items">
                            <a data-target="#luxury_weddings" class="gtm-nav" href="/en/luxury-weddings">Weddings</a>
                        </li>
                        <li class="menu-items">
                            <a data-target="#interests" class="gtm-nav" href="/en/interests">Interests</a>
                        </li>
                        <li class="menu-items">
                            <a data-target="#luxury_hotel_offers" class="hasSub gtm-nav" href="/en/luxury-hotel-offers">Offers</a>
                            <ul class="menu-sub-items">
                                <li>
                                    <a class="gtm-nav" href="/en/limitededition">Rosewood Limited Edition</a>
                                </li>
                                <li>
                                    <a class="gtm-nav" href="/en/luxury-hotel-offers">LUXURY HOTEL OFFERS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-items">
                            <a data-target="#gallery" class="gtm-nav" href="/en/gallery">Gallery</a>
                        </li>
                        <li class="menu-items">
                            <a data-target="#residences" class="gtm-nav" href="/en/residences">Residences</a>
                        </li>
                        <li class="menu-items">
                            <a rel="noopener noreferrer" data-target="#rosewood_curators" class="gtm-nav" href="https://www.rosewoodhotels.com/conversations/category/curators/" target="_blank">Rosewood Curators</a>
                        </li>
                    </ul>-->
                    <div class="menu-bottom">
                        <?php 
                            $page = get_page_by_path( "contact-us" , OBJECT );
                            if (isset($page)):
                        ?>
                            <div class="">
                                <a class="button border gtm-header" href="<?php echo get_permalink(get_page_by_path('contact-us'));?>"><?php echo $page->post_title;?></a>
                            </div>
                        <?php endif;?>

                        <div class="lang-section">
                            <?php 
                                foreach ($languages as $language): 
                                    if ($language == $languages['language1']) continue;
                            ?>
                                <div class="item">
                                    <a href="<?php echo $language['link'];?>" class="lang-link gtm-header" data-lang="sc"><?php echo $language['language'];?></a>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </header>