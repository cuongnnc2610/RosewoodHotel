<?php 
    /*Template Name: Gallery */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t8 en";
    get_header('secondary');
?>
<div class="rw-main-container container">
        <div class="content">
        	<h1 class="title-h1 title-deco">A SENSE OF PLACE&#174;</h1>
        </div>
        <section class="intro-block-slides" data-carousel="slick-option" data-auto-width="true" data-arrows="true">
        	<div class="hero-image-wrapper-slick" data-carousel="slick-wrapper" data-change-content="content-section-featured" data-count-slide="counter-slider-featured" video-fullscreen-modal="">
        	<?php 
        		while( have_rows('slide') ): the_row();
        			while( have_rows('images') ): the_row();
        				$name = get_sub_field('name');
						$hotel = get_sub_field('hotel');
						$link = get_sub_field('link');	
        	?>
        		<div class="hero-image " style="background-image:url('<?php echo get_sub_field('image')['url'];?>?imwidth=960');" data-content-id="hero-intro-featured-featured_<?php echo str_replace(' ', '', $hotel);?>">
        			<div id="hero-intro-featured-featured_<?php echo str_replace(' ', '', $hotel);?>" class="hero-intro">
        				<span> <?php echo $name;?></span>
        				<a class="text-underline" href="<?php echo $link;?>" target="_blank"><?php echo $hotel;?></a>
        			</div>
        		</div>
        	<?php 
        			endwhile;
        		endwhile; ?>
        	</div>
        	<div class="content-wrapper">
        		<div id="content-section-featured" class="slider-desc"></div>
        		<div id="counter-slider-featured" class="slider-counter"></div>
        	</div>
        	<!--<div class="modal-group">
        		<div class="modal__overlay"></div>
        		<div id="popup-video-featured_miramar_video-featured" class="modal-video modal">
        			<div class="modal__wrapper">
        				<video id="video-featured_miramar_video-featured" class="video-js vjs-big-play-centered" preload="none" width="" height="" controls="controls" poster="#">
        					<source src="-/media/Files/MP4/Rosewood_Hotels_and_Resorts/Group/home/ROSEWOOD%201%20MIN%20CLEAN%20NO%20TITLES%20-WEB%20HD_resized.mp4" type="video/mp4"></source>
        				</video>
        				<div class="modal__close">
        					<img src="https://www.rosewoodhotels.com/files/rw_hotels_and_resorts/images/close-icon.svg" alt="Close Button" />
        				</div>
        			</div>
        		</div>
        	</div>-->
        </section>
        <?php 
        	$counterCarousels = 1;
        	while( have_rows('carousels') ): the_row();
        		
        		while( have_rows('carousel') ): the_row();
        			$title = get_sub_field('title');
        ?>
        <section class="carousel-zoom-image" data-change-content="content-section-<?php echo $counterCarousels;?>" data-count-slide="counter-slider-<?php echo $counterCarousels;?>" data-random-item="true">
        	<h3 class="title-block"><?php echo $title;?></h3>
        	<div class="carousel-inner">
        		<?php 
        			$counter = 1;
        			while( have_rows('images') ): the_row();
        				$image = get_sub_field('image');
        				$name = get_sub_field('name');
        				$hotel = get_sub_field('hotel');
        				$link = get_sub_field('link');
        		?>
        		<div data-container-class="img-landscape" data-content-id="content-zoom-featured_<?php echo $counterCarousels;?>_<?php echo $counter;?>" class="carousel-item randomItem">
        			<div class="carousel-item__image" style="background-image:url('<?php echo $image['url'];?>?imwidth=960');">
        				<span class="hover-zoom" aria-label="zoom item slide - featured_<?php echo $counterCarousels;?>_<?php echo $counter;?>"></span>
        			</div>
        			<div id="content-zoom-featured_<?php echo $counterCarousels;?>_<?php echo $counter;?>" class="hidden">
        				<span> <?php echo $name;?></span>
        				<a href="<?php echo $link;?>" target="_blank" class="text-underline border-left"><?php echo $hotel;?></a>
        			</div>
        		</div>
        		<?php $counter++;?>
        		<?php endwhile;?>
        		<!--<div data-container-class="img-landscape" data-content-id="content-zoom-accommodation_bahamar_oceanfrontsixbedroomvilla" class="carousel-item randomItem">
        			<div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Baha_Mar/accommodation/villas/Six-Bedroom-Villa-Living-Room_1920x720db27.jpg?imwidth=960');">
        				<span class="hover-zoom" aria-label="zoom item slide - accommodation_bahamar_oceanfrontsixbedroomvilla"></span>
        			</div>
        			<div id="content-zoom-accommodation_bahamar_oceanfrontsixbedroomvilla" class="hidden">
        				<span>Ocean Front Six Bedroom Villa</span>
        				<a href="baha-mar.html" target="_blank" class="text-underline border-left">Rosewood Baha Mar</a>
        			</div>
        		</div>
        		<div data-container-class="img-landscape" data-content-id="content-zoom-accommodation_cordevalle_fairwayhomes" class="carousel-item randomItem">
        			<div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_CordeValle/accommodation/rooms/Fairway_Homes/CordeValle_Resort_FairwayHome_LivingRoomdb27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - accommodation_cordevalle_fairwayhomes"></span></div><div id="content-zoom-accommodation_cordevalle_fairwayhomes" class="hidden"><span>Fairway Homes</span><a href="cordevalle-northern-california.html" target="_blank" class="text-underline border-left">Rosewood CordeValle</a></div>
        		</div>
        		<div data-container-class="img-landscape" data-content-id="content-zoom-accommodation_crillon_suiteducdecrillon" class="carousel-item randomItem">
        			<div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Hotel_de_Crillon/accommodation/signature-suites/duc_de_crillon_suite/duc_de_crillon_suite_1db27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - accommodation_crillon_suiteducdecrillon"></span></div><div id="content-zoom-accommodation_crillon_suiteducdecrillon" class="hidden"><span>Suite Duc De Crillon</span><a href="hotel-de-crillon.html" target="_blank" class="text-underline border-left">Hôtel de Crillon, A Rosewood Hotel</a></div>
        		</div>
        		<div data-container-class="img-landscape" data-content-id="content-zoom-accommodation_guangzhou_duluxe_king" class="carousel-item randomItem">
        			<div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Guangzhou/gallery/accommodation/Deluxe-King-Room---Hotel-1db27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - accommodation_guangzhou_duluxe_king"></span></div><div id="content-zoom-accommodation_guangzhou_duluxe_king" class="hidden"><span>Grand Studio</span><a href="guangzhou.html" target="_blank" class="text-underline border-left">Rosewood Guangzhou</a></div>
        		</div>
        		<div data-container-class="img-landscape" data-content-id="content-zoom-accommodation_littledixbay_onebedroompoolsuitelivingroom" class="carousel-item randomItem">
        			<div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Little_Dix_Bay/accommodation/villas/LDB_One-Bedroom-Pool-Suite_Living-Room_1920x902db27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - accommodation_littledixbay_onebedroompoolsuitelivingroom"></span></div><div id="content-zoom-accommodation_littledixbay_onebedroompoolsuitelivingroom" class="hidden"><span>One Bedroom Pool Suite Living Room</span><a href="little-dix-bay-virgin-gorda.html" target="_blank" class="text-underline border-left">Rosewood Little Dix Bay</a></div>
        		</div>
        		<div data-container-class="img-landscape" data-content-id="content-zoom-accommodation_yangon_grand_heritage_king" class="carousel-item randomItem">
        			<div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Yangon_Full/gallery/accommodation/Rosewood-Yangon---Grand-Heritage-King_02db27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - accommodation_yangon_grand_heritage_king"></span></div><div id="content-zoom-accommodation_yangon_grand_heritage_king" class="hidden"><span>Rosewood Suite</span><a href="yangon.html" target="_blank" class="text-underline border-left">Rosewood Yangon</a></div>
        		</div>-->
        		<div class="carousel-arrow carousel-previous" aria-label="Previous"></div>
        		<div class="carousel-arrow carousel-next" aria-label="Next"></div>
        	</div>
        	<div class="content-wrapper hidden">
        		<div id="content-section-accommodation" class="slider-desc"></div>
        		<div id="counter-slider-accommodation" class="slider-counter"></div>
        	</div>
        </section>
        <!--<section class="carousel-zoom-image" data-change-content="content-section-dining" data-count-slide="counter-slider-dining" data-random-item="true">
        	<h3 class="title-block">Dining</h3>
        	<div class="carousel-inner">
        		<div data-container-class="img-landscape" data-content-id="content-zoom-dining_crillion_lecrin" class="carousel-item randomItem">
        			<div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Hotel_de_Crillon/dining/RWCRILEcrin2Guillaume-de-Laubierdb27.jpg?imwidth=960');">
        				<span class="hover-zoom" aria-label="zoom item slide - dining_crillion_lecrin"></span>
        			</div>
        			<div id="content-zoom-dining_crillion_lecrin" class="hidden">
        				<span>L’ ECRIN </span>
        				<a href="hotel-de-crillon.html" target="_blank" class="text-underline border-left">Hôtel de Crillon, A Rosewood Hotel</a>
        			</div>
        		</div>
        		<div data-container-class="img-landscape" data-content-id="content-zoom-dining_guangzhou_bricklane" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Guangzhou/dining/RWGZU_Brick-Lane---Outdoor-Areadb27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - dining_guangzhou_bricklane"></span></div><div id="content-zoom-dining_guangzhou_bricklane" class="hidden"><span>Brick Lane</span><a href="guangzhou.html" target="_blank" class="text-underline border-left">Rosewood Guangzhou</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-dining_hk_the_legacy_house" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_HongKong/dining/RWHKG_The-Legacy-House---Main-Dining-Room1280x720db27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - dining_hk_the_legacy_house"></span></div><div id="content-zoom-dining_hk_the_legacy_house" class="hidden"><span>THE LEGACY HOUSE </span><a href="hong-kong.html" target="_blank" class="text-underline border-left">Rosewood Hong Kong</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-dining_london_scarfes_bar" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_London/dining/Restaurants/Scarfes-Bar/Scarfes-Bar-Stoolsdb27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - dining_london_scarfes_bar"></span></div><div id="content-zoom-dining_london_scarfes_bar" class="hidden"><span>SCARFES BAR</span><a href="london.html" target="_blank" class="text-underline border-left">Rosewood London</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-dining_tuckers_sulverdebalcon" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Tuckers_Point/gallery/new-gallery/SulVerdeBalconyView.jpg');"><span class="hover-zoom" aria-label="zoom item slide - dining_tuckers_sulverdebalcon"></span></div><div id="content-zoom-dining_tuckers_sulverdebalcon" class="hidden"><span>Dining - Sul Verde Balcony</span><a href="mansion-on-turtle-creek-dallas.html" target="_blank" class="text-underline border-left">Rosewood Mansion on Turtle Creek</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-dining_phnompenh_cuts" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Phnom_Penh/dining/Cuts/CUTS-second-1920x902db27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - dining_phnompenh_cuts"></span></div><div id="content-zoom-dining_phnompenh_cuts" class="hidden"><span>CUTS</span><a href="phnom-penh.html" target="_blank" class="text-underline border-left">Rosewood Phnom Penh</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-dining_rwcdb_campo_del_drago" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Castiglion_Del_Bosco/dining/Ristorante-Campo-del-Drago/RWCDB_Campo-del-Drago_1200xdb27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - dining_rwcdb_campo_del_drago"></span></div><div id="content-zoom-dining_rwcdb_campo_del_drago" class="hidden"><span>RISTORANTE CAMPO DEL DRAGO </span><a href="castiglion-del-bosco.html" target="_blank" class="text-underline border-left">Rosewood Castiglion del Bosco</a></div></div><div class="carousel-arrow carousel-previous" aria-label="Previous"></div><div class="carousel-arrow carousel-next" aria-label="Next"></div></div><div class="content-wrapper hidden"><div id="content-section-dining" class="slider-desc"></div><div id="counter-slider-dining" class="slider-counter"></div></div>
        </section>
        <section class="carousel-zoom-image" data-change-content="content-section-wellness" data-count-slide="counter-slider-wellness" data-random-item="true">
        	<h3 class="title-block">Wellness</h3>
        	<div class="carousel-inner"><div data-container-class="img-landscape" data-content-id="content-zoom-wellness_baha_mar_sense_spa" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Baha_Mar/Wellness/Sense-Spa/Sense-Spa-Mani-Pedi-Room_1920x902db27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - wellness_baha_mar_sense_spa"></span></div><div id="content-zoom-wellness_baha_mar_sense_spa" class="hidden"><span>SENSE, A ROSEWOOD SPA<sup>®</sup> </span><a href="baha-mar.html" target="_blank" class="text-underline border-left">Rosewood Baha Mar</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-wellness_hk_asaya" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_HongKong/wellness/asaya/Hero_Balance_1920x600/Asaya-Website-1/New-Asaya-Website-1_1db27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - wellness_hk_asaya"></span></div><div id="content-zoom-wellness_hk_asaya" class="hidden"><span>ASAYA </span><a href="hong-kong.html" target="_blank" class="text-underline border-left">Rosewood Hong Kong</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-wellness_miramar_sense_spa" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Miramar_Beach_Montecito/wellness/Spa/RosewoodMiramarBeach_SenseSpaRelaxationLounge_1920x902db27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - wellness_miramar_sense_spa"></span></div><div id="content-zoom-wellness_miramar_sense_spa" class="hidden"><span>SENSE<sup>®</sup> SPA </span><a href="miramar-beach-montecito.html" target="_blank" class="text-underline border-left">Rosewood Miramar Beach</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-wellness_phuket_asaya" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Phuket/wellness/asaya-features/asaya_atelier.jpg');"><span class="hover-zoom" aria-label="zoom item slide - wellness_phuket_asaya"></span></div><div id="content-zoom-wellness_phuket_asaya" class="hidden"><span>ASAYA </span><a href="phuket.html" target="_blank" class="text-underline border-left">Rosewood Phuket</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-wellness_abu_dhabi_pool" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Abu_Dhabi/gallery/spa/abu_dhabi_gallery_wellness_3.jpg');"><span class="hover-zoom" aria-label="zoom item slide - wellness_abu_dhabi_pool"></span></div><div id="content-zoom-wellness_abu_dhabi_pool" class="hidden"><span>Pool</span><a href="abu-dhabi.html" target="_blank" class="text-underline border-left">Rosewood Abu Dhabi</a></div></div><div data-container-class="img-landscape" data-content-id="content-zoom-wellness_luangprabang_pool" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Luang_Prabang/interests/Pool_002-MN.jpg');"><span class="hover-zoom" aria-label="zoom item slide - wellness_luangprabang_pool"></span></div><div id="content-zoom-wellness_luangprabang_pool" class="hidden"><span>Pool</span><a href="luang-prabang.html" target="_blank" class="text-underline border-left">Rosewood Luang Prabang</a></div></div><div class="carousel-arrow carousel-previous" aria-label="Previous"></div><div class="carousel-arrow carousel-next" aria-label="Next"></div></div><div class="content-wrapper hidden"><div id="content-section-wellness" class="slider-desc"></div><div id="counter-slider-wellness" class="slider-counter"></div></div>
        </section>
        <section class="carousel-zoom-image" data-change-content="content-section-meetings-and-events" data-count-slide="counter-slider-meetings-and-events" data-random-item="true">
        	<h3 class="title-block">Meetings &amp; Events</h3>
        	<div class="carousel-inner" data-min-items="4"><div data-container-class="img-landscape" data-content-id="content-zoom-featured_mne_beijing" class="carousel-item randomItem"><div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Beijing/Durston-second-batch/Rosewood-BeijingLobbyArrivalCalligraphic-Head-Sculpturedb27.jpg?imwidth=960');"><span class="hover-zoom" aria-label="zoom item slide - featured_mne_beijing"></span></div><div id="content-zoom-featured_mne_beijing" class="hidden"><span>Lobby</span><a href="beijing.html" target="_blank" class="text-underline border-left">Rosewood Beijing</a></div></div>
        		<div data-container-class="img-landscape" data-content-id="content-zoom-mne_phuket" class="carousel-item randomItem">
        			<div class="carousel-item__image" style="background-image:url('-/media/Images/Rosewood_Hotels_and_Resorts/Rosewood_Phuket/accomodation/villa/room_beachHouse_004.jpg');">
        				<span class="hover-zoom" aria-label="zoom item slide - mne_phuket"></span>
        			</div>
        			<div id="content-zoom-mne_phuket" class="hidden">
        				<span>THE BEACH HOUSE</span>
        				<a href="phuket.html" target="_blank" class="text-underline border-left">Rosewood Phuket</a>
        			</div>
        		</div>
        		<div class="carousel-arrow carousel-previous" aria-label="Previous"></div>
        		<div class="carousel-arrow carousel-next" aria-label="Next"></div>
        	</div>
        	<div class="content-wrapper hidden"><div id="content-section-meetings-and-events" class="slider-desc"></div><div id="counter-slider-meetings-and-events" class="slider-counter"></div></div>
        </section>-->
        <?php endwhile;?>
        <?php $counterCarousels++;?>
    	<?php endwhile;?>
    	<?php 
    		$counterVideos = 1;
        	while( have_rows('videos') ): the_row();        		
        		$title = get_sub_field('title');      			
        ?>
        <section class="auto-width-slides" data-carousel="slick-option" data-auto-width="true" data-arrows="true" data-min-items="2">
        	<h3 class="title-block"><?php echo $title;?></h3>
        	<div class="hero-image-wrapper-slick" data-carousel="slick-wrapper" video-fullscreen-modal="">

        		<?php 
        			$counter = 1;
        			while( have_rows('video') ): the_row();
        				$image = get_sub_field('image'); 
        		?>
        		<div class="hero-image img-landscape" style="background-image:url('<?php echo $image['url'];?>?imwidth=960');">
        			<span class="play-video-btn" aria-label="featured_<?php echo $counter;?>_video" btn-play-video="" data-id-video="popup-video-featured_<?php echo $counter;?>_video-videos">
        				<span class="icon-play2"></span>
        			</span>
        		</div>
        		<?php $counter++;?>
        		<?php endwhile;?>
        	</div>
        	<?php 
        		$counter = 1;
        		while( have_rows('video') ): the_row();
        			$source = get_sub_field('source')['url']; 
        	?>
        	<div class="modal-group">
        		<div class="modal__overlay"></div>
        		<div id="popup-video-featured_<?php echo $counter;?>_video-videos" class="modal-video modal">
        			<div class="modal__wrapper">
        				<video id="video-featured_<?php echo $counter;?>_video-videos" class="video-js vjs-big-play-centered" preload="none" width="" height="" controls="controls" poster="#">
        					<source src="<?php echo $source;?>" type="video/mp4"></source>
        				</video>
        				<div class="modal__close">
        					<img src="https://www.rosewoodhotels.com/files/rw_hotels_and_resorts/images/close-icon.svg" alt="Close Button" />
        				</div>
        			</div>
        		</div>
        	</div>
        	<?php $counter++;?>
        	<?php endwhile;?>
        </section>
        <?php $counterVideos++;?>
        <?php endwhile;?>
        <div class="section through-your-eyes-section sr"><div class="space"></div>
        <?php $hashtag = get_field('hashtag');?>
        <div class="section-content">
        	<h3 class="title-deco title-h1"><?php echo $hashtag['hashtag'];?></h3>
        	<?php echo $hashtag['content'];?>
        	<div id="olapic_specific_widget"></div>
        	<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/photorankstatics-a.akamaihd.net/81b03e40475846d5883661ff57b34ece/static/frontend/latest/build.min.js"  data-olapic="olapic_specific_widget" data-instance="<?php echo $hashtag['instance'];?>" data-apikey="<?php echo $hashtag['api_key'];?>" async="async"></script>
        	<a class="view-from-btn with-arrow" href="<?php echo $hashtag['link'];?>"><?php echo $hashtag['action_name'];?></a>
        </div>
        <div class="extra-border"></div>
    </div>
</div>
<?php get_footer();?>