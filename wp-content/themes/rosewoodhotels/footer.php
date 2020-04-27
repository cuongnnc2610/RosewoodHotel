        <footer data-templatepfile="rw-destop-group-footerxslt">
            <div class="desktop-footer">
                <nav>
                    <div class="share-wrapper fixed_width">
                        <?php $social_media = get_field('social_media', 70);?>
                        <div>
                            <strong><?php echo $social_media['title'];?></strong>&nbsp;<i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;&nbsp;
                        </div>
                        <div class="extendable">
                            <div class="share-items">
                                <div>
                                    <?php if (isset($social_media['wechat'])): ?>
                                        <a href="<?php echo $social_media['wechat'];?>" class="_lightbox gtm-footer" ><i class="fab fa-wechat"></i></a>
                                    <?php endif;?>    
                                    <?php if (isset($social_media['facebook'])): ?>
                                        <a href="<?php echo $social_media['facebook'];?>" class="gtm-footer"><i class="fab fa-facebook"></i></a>
                                    <?php endif;?>
                                    <?php if (isset($social_media['twitter'])): ?>
                                        <a href="<?php echo $social_media['twitter'];?>" class="gtm-footer"><i class="fab fa-twitter"></i></a>
                                    <?php endif;?>
                                    <?php if (isset($social_media['pinterest'])): ?>
                                        <a href="<?php echo $social_media['pinterest'];?>" class="gtm-footer"><i class="fab fa-pinterest"></i></a>
                                    <?php endif;?>
                                    <?php if (isset($social_media['instagram'])): ?>
                                        <a href="<?php echo $social_media['instagram'];?>" class="gtm-footer"><i class="fab fa-instagram"></i></a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container fixed_width">
                    <div class="col reserve-content">
                        <?php $room_reservations = get_field('room_reservations', 70);?>
                        <div class="title-h5">
                            <strong><?php echo $room_reservations['title'];?></strong>
                        </div>
                        <p>
                        <?php 
                            foreach ($room_reservations['section_content'] as $section):
                        ?>                            
                        
                                <?php echo $section['title'];?><br />
                                    <strong><?php echo $section['content'];?></strong> 

                                    <br />
                                    <br /> 
                                
                        <?php endforeach;?>
                        </p>
                        <?php if(isset($room_reservations['section_pop_up'])): ?>
                            <a href="#pop-reservation" class="_lightbox with-arrow gtm-footer"><?php echo $room_reservations['section_pop_up']['title'];?></a>
                        <?php endif;?>
                        <div class="buttons-wrapper">
                            <?php $booking_section = get_field('booking_section', 70);?>
                            <a class="button light gtm-footer" href="<?php echo $booking_section['booking_link'];?>" target="_self"><?php echo $booking_section['action_name'];?></a>
                            <?php 
                                $page = get_page_by_path( "contact-us" , OBJECT );
                                if (isset($page)):
                            ?>
                                <a class="button dark gtm-footer" href="<?php echo get_permalink(get_page_by_path('contact-us'));?>"><?php echo $page->post_title;?></a>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme-location' => 'top-menu',
                                //'menu_class'     => 'header-menu first-level',
                                'items_wrap'     => '<div class="col links-content">%3$s</div>',
                                'depth'          => 1

                            )
                        )
                    ?>
                    <!--<div class="col links-content">                        
                        <a data-target="#luxury_hotels_and_resorts" class="bold gtm-footer" href="/en/luxury-hotels-and-resorts">Find a Hotel</a>
                        <a data-target="#meetings_and_events" class="bold gtm-footer" href="/en/meetings-and-events">Meetings & Events</a>
                        <a data-target="#luxury_weddings" class="bold gtm-footer" href="/en/luxury-weddings">Weddings</a>
                        <a data-target="#interests" class="bold gtm-footer" href="/en/interests">Interests</a>
                        <a data-target="#luxury_hotel_offers" class="bold gtm-footer" href="/en/luxury-hotel-offers">Offers</a>
                        <a data-target="#gallery" class="bold gtm-footer" href="/en/gallery">Gallery</a>
                        <a data-target="#residences" class="bold gtm-footer" href="/en/residences">Residences</a>
                    </div>-->

                    <?php $contact_content = get_field('contact_content', 70);?>
                    <div class="col contact-conent">
                        <div class="upper-wrapper">
                            <div class="image-wrapper img-bg" style="background-image:url('<?php echo $contact_content['image']['url'];?>');"></div>
                            <div class="inner-content-wrapper">
                                <div class="title-h5">
                                    <strong><?php echo $contact_content['title'];?></strong>
                                </div>
                                <p><?php echo $contact_content['text'];?></p>
                                <div id="subscription" class="button-wrapper">
                                    <input class="light" type="text" name="lname" placeholder="<?php echo $contact_content['placeholder'];?>" />
                                    <a class="submit-area gtm-footer" href="<?php echo $contact_content['sign_up_email_link'];?>">
                                        <div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="lower-wrapper">
                            <?php foreach ($contact_content['menu'] as $item): ?>
                                <a class="bold gtm-footer" href="<?php echo $item['link'];?>"><?php echo $item['title'];?></a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="declaration">
                    <div class="inner-content">
                        <div class="site-info">
                            <?php 
                                $site_info = get_field('site_info', 70);
                                foreach ($site_info as $site):
                            ?>
                                <div class="item">
                                    <a class="gtm-footer" href="<?php echo $site['link'];?>"><?php echo $site['title'];?></a>
                                </div>
                            <?php endforeach;?>
                        </div>
                        <?php $copyright = get_field('copyright', 70);?>
                        <div class="copyright"><?php echo $copyright;?></div>
                    </div>
                </div>
            </div>
            <div class="mobile-footer">
                <nav>
                    <div class="share-container">
                        <p class="bold"><?php echo $social_media['title'];?></p>
                        <div class="share-blocks">
                            <div class="share-block">
                                <div>
                                    <?php if (isset($social_media['wechat'])): ?>
                                        <a href="<?php echo $social_media['wechat'];?>" target="_blank"><i class="fab fa-wechat"></i></span></a>
                                    <?php endif;?> 
                                    <?php if (isset($social_media['facebook'])): ?>
                                        <a href="<?php echo $social_media['facebook'];?>" target="_blank"><i class="fab fa-facebook"></i></span></a>
                                    <?php endif;?> 
                                    <?php if (isset($social_media['twitter'])): ?>
                                        <a href="<?php echo $social_media['twitter'];?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <?php endif;?> 
                                    <?php if (isset($social_media['pinterest'])): ?>
                                        <a href="<?php echo $social_media['pinterest'];?>" target="_blank"><i class="fab fa-pinterest"></i></a>
                                    <?php endif;?> 
                                    <?php if (isset($social_media['instagram'])): ?>
                                        <a href="<?php echo $social_media['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="declaration-section">
                    <div class="inner-wrapper">
                        <?php
                            $div = 0;
                            foreach ($contact_content['menu'] as $item):
                                if ($div == 2) :
                        ?>
                                </div>
                        <?php $div = 0; endif;?>
                        <?php   if($div == 0) :
                        ?>
                                <div class="site-info">
                                <?php endif; $div++;?>
                                    <div class="item">
                                        <a rel="noopener noreferrer" class="gtm-footer" href="<?php echo $item['link'];?>" target="_blank"><?php echo $item['title'];?></a>
                                    </div>
                        <?php endforeach;?>

                        <?php
                            foreach ($site_info as $site):
                                if ($div == 2) :
                        ?>
                                </div>
                        <?php $div = 0; endif;?>
                        <?php   if($div == 0) :
                        ?>
                                <div class="site-info">
                                <?php endif; $div++;?>
                                    <div class="item">
                                        <a rel="noopener noreferrer" class="gtm-footer" href="<?php echo $site['link'];?>" target="_blank"><?php echo $site['title'];?></a>
                                    </div>
                        <?php endforeach;?>

                        <?php if ($div != 0):?>
                                </div>
                        <?php endif;?>

                        <div class="copyright"><?php echo $copyright;?></div>
                        <?php 
                            $page = get_page_by_path( "find-a-hotel" , OBJECT );
                            if (isset($page)):
                        ?>
                            <a class="find-a-hotel-btn gtm-footer" href="<?php echo get_permalink($page);?>"><?php echo $page->post_title;?><span class="arrow d45"></span></a>
                        <?php endif;?>
                    </div>
                </div>
                <?php $languages = get_field('languages', 70);?>
                <div class="lang-section">
                    <div class="inner-wrapper">
                        <?php 
                            foreach ($languages as $language): 
                                if ($language == $languages['language1']) continue;
                        ?>
                            <div class="item">
                                <a href="<?php echo $language['link'];?>" data-lang="sc" class="gtm-footer"><?php echo $language['language'];?></a>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </footer>

        <div data-lang="en global&#xD;&#xA;    ja-JP global&#xD;&#xA;    zh-CNglobal&#xD;&#xA;    " data-enable="true" id="langList"></div>
        <section class="hidden">
            <?php 
                if(isset($room_reservations['section_pop_up'])): 
                    $section_pop_up = $room_reservations['section_pop_up'];
            ?>

                <div id="pop-reservation">
                    <div class="innerwrap">
                        <div class="bold h3"><?php echo $section_pop_up['title_pop_up']?></div>
                        <div class="cols-3">
                            <?php 
                                $counter = 0;
                                foreach ($section_pop_up as $section):
                                    if ($counter == 0 || $counter == 1) {$counter++; continue;}
                                    $header = $section['header'];
                            ?>
                            <section class="country">
                                <div class="title">
                                    <div class="bold h4"><?php echo $header;?></div>
                                </div>
                                <div class="properties">
                                    <div class="property">
                                        <div class="description">
                                            <p>
                                                <?php  
                                                    $counterProperty = 0;
                                                    $length = 0;
                                                    foreach ((array)$section as $property)
                                                        $length++;
                                                    foreach ((array)$section as $property):
                                                        if($counterProperty == 0) {$counterProperty++; continue;}
                                                        echo $property;
                                                        $counterProperty++;
                                                        if ($counterProperty != $length):
                                                ?>
                                                            <br /><br />
                                                <?php endif;?>
                                                <?php endforeach;?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php endforeach;?>
                            <!--<section class="country">
                                <div class="title">
                                    <div class="bold h4">Europe and Middle East</div>
                                </div>
                                <div class="properties">
                                    <div class="property">
                                        <div class="description">
                                            <p>Denmark: 800 51692<br />
                                            <br />
                                            France: 0 805 542 627<br />
                                            <br />
                                            Germany: 0 800 724 3515<br />
                                            <br />
                                            Great Britain: 0800 917 0892<br />
                                            <br />
                                            Italy: 00800 969 730<br />
                                            <br />
                                            Northern Ireland: 00 800 87 67 39 66<br />
                                            <br />
                                            Portugal: 00 800 87 67 39 66<br />
                                            <br />
                                            Saudi Arabia: 800 865 6042<br />
                                            <br />
                                            Spain: 900 822 526<br />
                                            <br />
                                            Sweden: 00 800 87 67 39 66<br />
                                            <br />
                                            Switzerland: 0 800 000 674<br />
                                            <br />
                                            United Arab Emirates: 800 065 0601</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="country">
                                <div class="title">
                                    <div class="bold h4">Asia Pacific</div>
                                </div>
                                <div class="properties">
                                    <div class="property">
                                        <div class="description">
                                            <p>China: 400 120 4880<br />
                                            <br />
                                            Australia: 1 800 215 283<br />
                                            <br />
                                            Hong Kong SAR: 800 960 173<br />
                                            <br />
                                            Indonesia: 001 803 017 5093<br />
                                            <br />
                                            Japan: 0120 914 266<br />
                                            <br />
                                            Singapore: 800 1865 066</p>
                                        </div>
                                    </div>
                                </div>
                            </section>-->
                        </div>
                    </div>
                </div>
            <?php endif;?>
            <div data-class=""></div>  


            <?php 
                $rosewood_limited_edition = get_field('rosewood_limited_edition', 70);
                $poster = $rosewood_limited_edition['poster']['url'];
                $video = $rosewood_limited_edition['mp4_video']['url'];
            ?>
            <div id="pop-video-limited-edition" class="pop-video popup-box">
                <video id="video-limited-edition" class="video-js vjs-big-play-centered" preload="auto" width="" height="" poster="<?php echo $poster;?>" muted="muted" controls="controls">
                    <source src="<?php echo $video;?>" type="video/mp4"></source>                     
                </video>
            </div>
            <!--<div id="wechat-popup" class="popup-box">
                <div class="section">
                    <div class="section__container">
                        <div class="section__content left">
                            <div class="hide-in-desktop section__content-title">Rosewood Hotels<br />
                        WeChat Official Account</div>
                            <img src="<?php //bloginfo('template_directory');?>/-/media/Images/Rosewood_Hotels_and_Resorts/Group/Social-Media/Brand_QR_400x400/RWHR-Website-Footer.png?mw=400" class="qr-code" />
                            <p class="wechat-id">WeChat ID: <strong>rosewoodhotels</strong></p>
                        </div>
                        <div class="section__content right">
                            <div class="hide-in-mobile section__content-title">Rosewood Hotels<br />
                        WeChat Official Account</div>
                            <div class="subscription">
                                <span class="subscription__text">Follow Us On WeChat</span>
                                <span class="subscription__image">
                                    <img src="<?php //bloginfo('template_directory');?>/-/media/Images/Rosewood_Hotels_and_Resorts/Common/wechat_80x60.png?mw=80" alt="WeChat Icon" class="wechat-icon" />
                                </span>
                            </div>
                            <div class="content">Method 1:<br />
                                <ol>
                                    <li><span>Use the QR Code scanner inside WeChat to scan the QR code</span></li>
                                    <li><span>You will be redirected to our Rosewood Hotels WeChat page. Press "Follow".</span></li>
                                </ol>
                                <br />
                                Method 2:<br />
                                <ol>
                                    <li><span>Search Rosewood Hotels WeChat ID: <strong>rosewoodhotels</strong></span></li>
                                </ol>
                                <br />
                                Method 3 (For Mobile):<br />
                                <ol>
                                    <li><span>Capture the screen of the QR code</span></li>
                                    <li><span>Inside WeChat, launch the "Scan QR Code" function</span></li>
                                    <li><span>Select "Album" option and select the screen shot with the QR code</span></li>
                                    <li><span>You will be redirected to Rosewood Hotels WeChat page. Press "Follow".</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </section>
        <!--<div data-privacy-policy="/en/privacy-policy" data-cookies-policy="/en/cookie-policy" data-curr-page="brand" class="cookies-consent">
            <div class="cookies-consent__container">By continuing to browse rosewoodhotels.com, you will be agreeing to the <a href="#" class="privacy-policy" target="_blank">Privacy Policy</a>, and the <a href="#" class="cookies-policy" target="_blank">Use of Cookies Policy</a> while using the website.<span class="cookies-consent__close"></span></div>
        </div>-->
        <?php wp_footer();?>
        <script type="text/javascript">
            srfp_options.locale = 'en-US';
            var srfp_widget = new srfp.widget(srfp_options);
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                /* Top Bar Menu */
                $( "ul.first-level" ).find( "ul" ).addClass("header-menu second-level");
                $( "ul.first-level" ).find( "ul" ).attr("role","menu");
                $( "ul.first-level" ).find( "ul" ).find( "li" ).attr("role","menuitem");
                $( "ul.first-level" ).find( "ul" ).find( "li" ).find( "a" ).removeAttr("data-dropdown");
                $( "ul.first-level > li" ).attr("role","menuitem");
                $( "ul.first-level > li" ).attr("aria-haspopup","true");

                //For single li in .header-menu first-level
                $( "ul.first-level > li" ).each(function() {
                    if ($(this).children().length == 1) {
                        $(this).addClass("without-sub-nav");
                    }
                });

                /* Mobile Menu */
                $( "ul.menu-items" ).find( "li" ).addClass("menu-items");
                $( "ul.menu-items" ).find( "li" ).find( "a" ).addClass("gtm-nav");

                /* Col link contents*/
                $( "div.links-content" ).find( "a" ).removeClass("gtm-nav");
                $( "div.links-content" ).find( "a" ).addClass("bold gtm-footer");
                $( "div.links-content" ).find( "li" ).css("list-style", "none");
            });
        </script>


        

    </body>
</html>
