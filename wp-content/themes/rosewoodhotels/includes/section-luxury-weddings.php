<?php 
    /*Template Name: Weddings */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t5a en";
    get_header();
?>
<div class="rw-main-container container stick-to-top">
	<?php
		$section = get_field('section');
	?>
	<section class="hero-slideshow">
		<div class="hero-slideshow__container">
			<div class="hero-slideshow__slider-container swiper-container">
				<div class="hero-slideshow__slider-wrapper swiper-wrapper">
					<?php 
						while( have_rows('carousel_images') ): the_row();
							$image = get_sub_field('image')['url'];
					?>
					<div class="hero-slideshow__slider-item swiper-slide swiper-lazy" style="background-image: url(<?php echo $image;?>?mw=1920)"></div>
					<?php endwhile;?>
				</div>
				<div class="hero-slideshow__slider-pagination swiper-pagination"></div>
			</div>
			<?php
				$title = get_field('title');
				$sub_image = get_field('sub_image')['url'];
				$content = get_field('content');
				$action_name = get_field('action_name');
			?>
			<div class="hero-slideshow__overlay">
				<div class="hero-slideshow__overlay-container">
					<div class="hero-slideshow__overlay-title"><?php echo $title;?></div>
					<div class="hero-slideshow__overlay-image"><img src="<?php echo $sub_image;?>?h=139&amp;la=en&amp;w=406" alt="wedding" width="406" height="139" /></div>
					<div class="hero-slideshow__overlay-content"><?php echo $content;?></div>
					<div class="hero-slideshow__overlay-button"><a href="#" class="hero-slideshow__overlay-button-link" popup-fancy="" data-popup-id="wedding-popup" data-calc-height="true" data-gtm="" data-gtm-event="gtm.rfp" data-gtm-event-action="RFP top" data-gtm-rfp="${href}"><?php echo $action_name;?></a></div>
				</div>
			</div>
		</div>
		<?php
			$section_1 = $section['section_1'];
		?>
		<div class="hero-slideshow__container" id="content">
			<div class="hero-slideshow__heading">
				<div class="hero-slideshow__heading-container">
					<div class="heading">
						<h1 class="heading__title"><?php echo $section_1['title'];?></h1>
						<div class="heading__content"><?php echo $section_1['content'];?></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="rfp-form"></div>
	<section class="centerItem-slider">
		<div class="centerItem-slider__container">
			<div class="centerItem-slider__filter">
				<?php
					$idViewPairs = array();
					while( have_rows('section') ): the_row();
						while( have_rows('section_1') ): the_row();
							$count = 1;
							while( have_rows('views') ): the_row();
								$view = get_sub_field('view');
								switch($count) {
									case 1: $idView = "beach-weddings"; break;
									case 2: $idView = "city-weddings"; break;
									case 3: $idView = "country-weddings"; break; 
								}
								$idViewPairs[$view] = $idView;

				?>
				<a class="centerItem-slider__filter-item <?php echo $idView;?> hoverState" href="#"><?php echo $view;?></a>
				<?php
								$count++;
							endwhile;
						endwhile;
					endwhile;
				?>
			</div>
			<div class="centerItem-slider__carousel swiper-container">
				<div class="centerItem-slider__carousel-container swiper-wrapper">
					<?php
						while( have_rows('section') ): the_row();
							while( have_rows('section_1') ): the_row();
								while( have_rows('views') ): the_row();
									$view = get_sub_field('view');
									while( have_rows('hotels') ): the_row();
										$name = get_sub_field('name');
										$location = get_sub_field('location');
										$image = get_sub_field('image')['url'];
										$link = get_sub_field('link');									
										$idView = $idViewPairs[$view];
										switch($idView) {
											case "beach-weddings": $idViewHotel = "by-the-sea"; break;
											case "city-weddings": $idViewHotel = "in-the-city"; break;
											case "country-weddings": $idViewHotel = "in-the-country"; break;
										}

					?>
					<div class="centerItem-slider__carousel-item swiper-slide <?php echo $idViewHotel;?>">
						<a href="<?php echo $link;?>" class="centerItem-slider__carousel-item-link" aria-label="<?php echo $section_1['action_name'];?> ">
							<div class="centerItem-slider__carousel-item-image" style="background-image: url(<?php echo $image;?>?mw=250)"></div>
							<div class="hover-text"><?php echo $section_1['action_name'];?> </div>
						</a>
						<div class="centerItem-slider__carousel-item-text">
							<div class="name"><?php echo $name;?></div>
							<div class="location"><?php echo $location;?></div>
						</div>
					</div>
					<?php
									endwhile;
								endwhile;
							endwhile;
						endwhile;
					?>
				</div>
				<div class="centerItem-slider__carousel-navigation">
					<div class="centerItem-slider__carousel-navigation-prev"></div>
					<div class="centerItem-slider__carousel-navigation-next"></div>
				</div>
			</div>
		</div>
	</section>
	<?php
		$section_2 = $section['section_2'];
	?>
	<section class="carousel-heading">
		<div class="carousel-heading__container--heading">
			<div class="heading">
				<h2 class="heading__title"><?php echo $section_2['title'];?></h2>
				<div class="heading__content"><?php echo $section_2['content'];?></div>
			</div>
		</div>
		<div class="carousel-heading__container--carousel">
			<div class="carousel carousel--simple swiper-container">
				<div class="carousel__container swiper-wrapper">
					<?php
						while( have_rows('section') ): the_row();
							while( have_rows('section_2') ): the_row();
								while( have_rows('carousel_images') ): the_row();
									$image = get_sub_field('image')['url'];

					?>
					<div class="carousel__item swiper-slide" role="img" aria-label="dream wedding" style="background-image: url(<?php echo $image;?>?mw=1440)"></div>
					<?php
								endwhile;
							endwhile;
						endwhile;
					?>
				</div>
				<div class="carousel__nav carousel__nav-prev"></div>
				<div class="carousel__nav carousel__nav-next"></div>
				<div class="carousel__pagination swiper-pagination"></div>
			</div>
		</div>
	</section>
	<?php
		$section_3 = $section['section_3'];
	?>
	<section class="olapic-section">
		<div class="olapic-section__container">
			<div class="heading">
				<h3 class="heading__title"><?php echo $section_3['title'];?></h3>
				<div class="heading__content">
					<p><?php echo $section_3['content'];?></p>
				</div>
			</div>
			<div class="olapic-section__content">
				<div id="olapic_specific_widget"></div>
				<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/photorankstatics-a.akamaihd.net/743d2e78a76dedeb07e0745158547931/static/frontend/latest/build.min.js"  data-olapic="olapic_specific_widget" data-instance="<?php echo $section_3['data_instance'];?>" data-apikey="<?php echo $section_3['api_key'];?>" async="async"></script>
				<div class="button-row"><a class="button transparent-black-btn" href="<?php echo $section_3['link'];?>"><?php echo $section_3['action_name'];?></a></div>
			</div>
		</div>
	</section>
	<?php
		$section_4 = $section['section_4'];
	?>
	<section class="carousel-caption carousel-caption--sync">
		<div class="carousel-caption__container">
			<div class="heading">
				<h4 class="heading__title"><?php echo $section_4['title'];?></h4>
			</div>
			<div class="carousel-caption__content carousel-caption__content--grey-border carousel-caption__content--grey-bg ">
				<div class="carousel-caption__content-carousel">
					<div class="carousel-caption__carousel swiper-container">
						<div class="carousel-caption__carousel-container swiper-wrapper">
							<div class="carousel-caption__carousel-item swiper-slide" role="img" aria-label="" style="background-image: url(<?php echo $section_4['image']['url'];?>?mx=790)"></div>
						</div>
						<div class="carousel-caption__carousel-nav carousel-caption__carousel-navigation-prev"></div>
						<div class="carousel-caption__carousel-nav carousel-caption__carousel-navigation-next"></div>
						<div class="carousel-caption__carousel-pagination"></div>
					</div>
				</div>
				<div class="carousel-caption__content-caption">
					<div class="carousel-caption__caption swiper-container">
						<div class="carousel-caption__caption-container swiper-wrapper">
							<div class="carousel-caption__caption-item swiper-slide">
								<div class="carousel-caption__caption-item-content">
									<div class="caption-title"><strong><?php echo $section_4['sub_title'];?></strong></div>
									<div class="caption"><?php echo $section_4['content'];?></div>
									<div class="button-row"><a class="button transparent-black-btn" href="<?php echo $section_4['link'];?>"><?php echo $section_4['action_name'];?></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
		$section_5 = $section['section_5'];
	?>
	<section class="image-caption">
		<div class="image-caption__container">
			<div class="image-caption__image" style="background-image: url(<?php echo $section_5['image']['url'];?>)"></div>
			<div class="image-caption__caption">
				<div class="image-caption__caption-container">
					<div class="image-caption__caption-title title"><?php echo $section_5['title'];?></div>
					<div class="image-caption__caption-content"><?php echo $section_5['content'];?></div>
					<div class="image-caption__caption-button-row">
						<a href="#" class="image-caption__caption-button" popup-fancy="" data-popup-id="wedding-popup" data-calc-height="true" data-gtm="" data-gtm-event="gtm.rfp" data-gtm-event-action="RFP bottom" data-gtm-rfp="${href}"><?php echo $section_5['action_name'];?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $popup = get_field('popup');?>
<div class="hidden-popup">
	<div class="popup-fancy" id="wedding-popup">
		<div class="popup-fancy__wrapper">
			<div id="wedding-rfp-form-container"></div>
			<div class="wedding-popup" id="wedding-rfp-form">
				<div class="popup-header">
					<div class="title-popup"><?php echo $popup['title'];?></div>
					<p class="desc-popup"><?php echo $popup['content'];?></p>
				</div>
				<div class="popup-tab accommodation-container">
					<div class="slider__filter" data-filter-slider="rfp-form">
						<div class="slider__filter-wrapper" data-carousel="">
							<?php 
								while( have_rows('destinations', 70) ): the_row();
									$region = get_sub_field('region');
									//$idRegion = str_replace(' ', '', $nameRegion);
									$idRegion = md5($region);
							?>
							<div class="slider-item" data-slider-id="rfp-continent-<?php echo $idRegion;?>"><span class="filter-item"><?php echo $region;?></span></div>
							<?php endwhile;?>
						</div>
					</div>
					<div class="shuffle-container" data-filter-content="rfp-form">
						<div class="content content-filter">
							<?php
								while( have_rows('destinations', 70) ): the_row();
									$region = get_sub_field('region');
									//$idRegion = str_replace(' ', '', $nameRegion);
									$idRegion = md5($region);
							?>
							<div class="content-filter-item visibility-hidden" data-slider-item="rfp-continent-<?php echo $idRegion;?>">
								<?php 
									while( have_rows('countries') ): the_row();
										$country = get_sub_field('country');
								?>
								<div class="popup-checkbox">
									<div class="popup-checkbox-title"><?php echo $country;?></div>
									<div class="popup-checkbox-item-wapper">
										<?php
											while( have_rows('hotels') ): the_row();
												while( have_rows('information') ): the_row();
													$location = get_sub_field('location');
													$nameHotel = get_sub_field('name');
													$idNameHotel = str_replace(' ', '-', $nameHotel);
													$link = get_sub_field('link');
										?>
										<div class="popup-checkbox-item"><input id="pop-up-<?php echo $idNameHotel;?>" type="checkbox" value="L489G" /><label class="item-name" for="pop-up-<?php echo $idNameHotel;?>"><span><?php echo $name;?></span><span class="item-location"><?php echo $location;?></span></label></div>
										<?php 
												endwhile;
											endwhile;
										?>
									</div>
								</div>
								<?php endwhile;?>
							</div>
							<?php endwhile;?>
						</div>
					</div>
				</div>
				<div class="popup-footer" data-property-txt="Property selected" data-properties-txt="Properties selected">
					<p class="footer__desc"><span class="selected-number">0</span><span data-content=""><?php echo $popup['data_content'];?></span></p>
					<a id="rfp-form-button" class="button popup-btn popup-btn-disable" href="#" data-display="wedding-rfp-form-container" data-locale="" data-gtm="" data-gtm-event="gtm.rfp" data-gtm-event-action="RFP next" data-gtm-rfp="${href}"><?php echo $popup['action_name'];?></a>
				</div>
			</div>
		</div>
		<span class="popup-fancy__close" data-close=""></span>
	</div>
</div>
<?php get_footer();?>