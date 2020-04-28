<?php 
    /*Template Name: Perfect Match */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t5b en";
    get_header('secondary');
?>
<div class="rw-main-container container">
	<?php
		$image = get_field('image')['url'];
		$section = get_field('section');
		$section_1 = $section['section_1'];
	?>
	<section class="hero-slideshow hero-slideshow--small">
		<div class="hero-slideshow__container">
			<div class="hero-slideshow__slider-container swiper-container">
				<div class="hero-slideshow__slider-wrapper swiper-wrapper">
					<div style="background-image: url(<?php echo $image;?>?mw=1920)" class="hero-slideshow__slider-item swiper-slide swiper-lazy"></div>
				</div>
				<div class="hero-slideshow__slider-pagination swiper-pagination"></div>
			</div>
		</div>
		<div class="hero-slideshow__container">
			<div class="hero-slideshow__heading">
				<div class="hero-slideshow__heading-container">
					<div class="heading">
						<h1 class="heading__title"><?php echo $section_1['title'];?></h1>
						<div class="heading__content"><?php echo $section_1['content'];?></div>
					</div>
					<div class="button-row"><a href="#" class="button transparent-black-btn dynamic-width" popup-fancy="" data-popup-id="wedding-popup" data-calc-height="true"><?php echo $section_1['action_name'];?></a></div>
				</div>
			</div>
		</div>
	</section>
	<?php
		$section_2 = $section['section_2'];
	?>
	<section class="masonry masonry--four-grid">
		<div class="masonry__container">
			<div class="heading">
				<div class="heading__title"><?php echo $section_2['title'];?></div>
			</div>
			<div class="masonry__content">
				<?php
					while( have_rows('section', 330) ): the_row();
						while( have_rows('section_1') ): the_row();
							$action_name = get_sub_field('action_name');
							while( have_rows('views') ): the_row();
								$view = get_sub_field('view');
								while( have_rows('hotels') ): the_row();
									$name = get_sub_field('name');
									$location = get_sub_field('location');
									$image = get_sub_field('image')['url'];
									$link = get_sub_field('link');	
				?>
				<div class="masonry__item">
					<a aria-label="<?php echo $action_name;?> " class="masonry__item-link" href="<?php echo $link;?>">
						<div class="masonry__item-image"><img src="<?php echo $image;?>" alt="<?php echo $name;?>" style="width:252.5px;height:170.325px;" /><span class="hover-text"><?php echo $action_name;?> </span></div>
						<div class="masonry__item-content">
							<div class="name"><?php echo $name;?></div>
							<div class="location"><?php echo $location;?></div>
						</div>
					</a>
				</div>
				<?php
								endwhile;
							endwhile;
						endwhile;
					endwhile;
				?>
			</div>
			<div class="terms collapsible-wrap collapsed">
				<a href="#" class="collapsible-trigger with-arrow-up"><?php echo $section_2['term_title'];?></a>
				<div class="content">
					<?php echo $section_2['term_content'];?>
				</div>
			</div>
		</div>
	</section>
	<?php
		$section = get_field('section', 330);
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
<!--<div class="hidden-popup">
	<div class="popup-fancy" id="wedding-popup">
		<div class="popup-fancy__wrapper">
			<div id="wedding-rfp-form-container"></div>
			<div class="wedding-popup" id="wedding-rfp-form">
				<div class="popup-header">
					<div class="title-popup">Select property</div>
					<p class="desc-popup">You may select more than one property for your wedding inquiry</p>
				</div>
				<div class="popup-tab accommodation-container">
					<div class="slider__filter" data-filter-slider="rfp-form">
						<div class="slider__filter-wrapper" data-carousel="">
							<div class="slider-item" data-slider-id="rfp-continent-the-americas"><span class="filter-item">The Americas</span></div>
							<div class="slider-item" data-slider-id="rfp-continent-europe"><span class="filter-item">Europe</span></div>
							<div class="slider-item" data-slider-id="rfp-continent-middle-east"><span class="filter-item">Middle East</span></div>
							<div class="slider-item" data-slider-id="rfp-continent-asia"><span class="filter-item">Asia</span></div>
						</div>
					</div>
					<div class="shuffle-container" data-filter-content="rfp-form">
						<div class="content content-filter">
							<div class="content-filter-item visibility-hidden" data-slider-item="rfp-continent-the-americas">
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">United States / Canada</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-the-carlyle-a-rosewood-hotel" type="checkbox" value="L489G" /><label class="item-name" for="pop-up-the-carlyle-a-rosewood-hotel"><span>The Carlyle, A Rosewood Hotel</span><span class="item-location">New York, NY, USA</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-mansion-on-turtle-creek" type="checkbox" value="HQ49D" /><label class="item-name" for="pop-up-rosewood-mansion-on-turtle-creek"><span>Rosewood Mansion on Turtle Creek</span><span class="item-location">Dallas, TX, USA</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-inn-of-the-anasazi" type="checkbox" value="WJLKM" /><label class="item-name" for="pop-up-rosewood-inn-of-the-anasazi"><span>Rosewood Inn of the Anasazi</span><span class="item-location">Santa Fe, NM, USA</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-cordevalle" type="checkbox" value="VX4RD" /><label class="item-name" for="pop-up-rosewood-cordevalle"><span>Rosewood CordeValle</span><span class="item-location">San Martin, CA, USA</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-sand-hill" type="checkbox" value="JGRCR" /><label class="item-name" for="pop-up-rosewood-sand-hill"><span>Rosewood Sand Hill</span><span class="item-location">Menlo Park, CA, USA</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-washington-dc" type="checkbox" value="80F8P" /><label class="item-name" for="pop-up-rosewood-washington-dc"><span>Rosewood Washington, D.C.</span><span class="item-location">Washington, D.C., USA</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-miramar-beach-montecito" type="checkbox" value="5WR7R" /><label class="item-name" for="pop-up-rosewood-miramar-beach-montecito"><span>Rosewood Miramar Beach</span><span class="item-location">Montecito, CA, USA</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-hotel-georgia" type="checkbox" value="2VPF7" /><label class="item-name" for="pop-up-rosewood-hotel-georgia"><span>Rosewood Hotel Georgia</span><span class="item-location">Vancouver, BC, Canada</span></label></div>
									</div>
								</div>
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">Mexico</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-las-ventanas-al-paraiso-a-rosewood-resort" type="checkbox" value="ZH32C" /><label class="item-name" for="pop-up-las-ventanas-al-paraiso-a-rosewood-resort"><span>Las Ventanas al Para&#237;so, A Rosewood Resort</span><span class="item-location">Los Cabos, Mexico</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-mayakoba" type="checkbox" value="VRWT7" /><label class="item-name" for="pop-up-rosewood-mayakoba"><span>Rosewood Mayakoba</span><span class="item-location">Riviera Maya, Mexico</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-san-miguel-de-allende" type="checkbox" value="RQQL3" /><label class="item-name" for="pop-up-rosewood-san-miguel-de-allende"><span>Rosewood San Miguel de Allende</span><span class="item-location">San Miguel de Allende, Mexico</span></label></div>
									</div>
								</div>
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">Caribbean / Atlantic</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-bermuda" type="checkbox" value="3LPVV" /><label class="item-name" for="pop-up-rosewood-bermuda"><span>Rosewood Bermuda</span><span class="item-location">Bermuda</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-baha-mar" type="checkbox" value="F1RXM" /><label class="item-name" for="pop-up-rosewood-baha-mar"><span>Rosewood Baha Mar</span><span class="item-location">Nassau, The Bahamas</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-little-dix-bay" type="checkbox" value="M13LJ" /><label class="item-name" for="pop-up-rosewood-little-dix-bay"><span>Rosewood Little Dix Bay</span><span class="item-location">Virgin Gorda, BVI</span></label></div>
									</div>
								</div>
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">South America</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-sao-paulo" type="checkbox" value="74029" /><label class="item-name" for="pop-up-rosewood-sao-paulo"><span>Rosewood S&#227;o Paulo (2021)</span><span class="item-location">S&#195;O PAULO, BRAZIL</span></label></div>
									</div>
								</div>
							</div>
							<div class="content-filter-item visibility-hidden" data-slider-item="rfp-continent-europe">
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">Europe</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-london" type="checkbox" value="7DQQG" /><label class="item-name" for="pop-up-rosewood-london"><span>Rosewood London</span><span class="item-location">London, United Kingdom</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-castiglion-del-bosco" type="checkbox" value="MCRSF" /><label class="item-name" for="pop-up-rosewood-castiglion-del-bosco"><span>Rosewood Castiglion del Bosco</span><span class="item-location">Tuscany, Italy</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-hotel-de-crillon" type="checkbox" value="RV79Z" /><label class="item-name" for="pop-up-hotel-de-crillon"><span>H&#244;tel de Crillon, A Rosewood Hotel</span><span class="item-location">Paris, France</span></label></div>
									</div>
								</div>
							</div>
							<div class="content-filter-item visibility-hidden" data-slider-item="rfp-continent-middle-east">
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">Middle East</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-jeddah" type="checkbox" value="550VZ" /><label class="item-name" for="pop-up-rosewood-jeddah"><span>Rosewood Jeddah</span><span class="item-location">Jeddah, Saudi Arabia</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-abu-dhabi" type="checkbox" value="DVSK1" /><label class="item-name" for="pop-up-rosewood-abu-dhabi"><span>Rosewood Abu Dhabi</span><span class="item-location">Abu Dhabi, United Arab Emirates</span></label></div>
									</div>
								</div>
							</div>
							<div class="content-filter-item visibility-hidden" data-slider-item="rfp-continent-asia">
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">Cambodia</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-phnom-penh" type="checkbox" value="K83M3" /><label class="item-name" for="pop-up-rosewood-phnom-penh"><span>Rosewood Phnom Penh</span><span class="item-location">Phnom Penh, Cambodia</span></label></div>
									</div>
								</div>
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">Greater China</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-beijing" type="checkbox" value="69J3V" /><label class="item-name" for="pop-up-rosewood-beijing"><span>Rosewood Beijing</span><span class="item-location">Beijing</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-sanya" type="checkbox" value="JT1KJ" /><label class="item-name" for="pop-up-rosewood-sanya"><span>Rosewood Sanya</span><span class="item-location">Sanya</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-hong-kong" type="checkbox" value="TSKRW" /><label class="item-name" for="pop-up-rosewood-hong-kong"><span>Rosewood Hong Kong</span><span class="item-location">Hong Kong SAR</span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-guangzhou" type="checkbox" value="MBRQ3" /><label class="item-name" for="pop-up-rosewood-guangzhou"><span>Rosewood Guangzhou</span><span class="item-location">Guangzhou</span></label></div>
									</div>
								</div>
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">Thailand</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-bangkok" type="checkbox" value="1ZBK9" /><label class="item-name" for="pop-up-rosewood-bangkok"><span>Rosewood Bangkok</span><span class="item-location">Bangkok, Thailand </span></label></div>
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-phuket" type="checkbox" value="LHK0K" /><label class="item-name" for="pop-up-rosewood-phuket"><span>Rosewood Phuket</span><span class="item-location">Phuket, Thailand</span></label></div>
									</div>
								</div>
								<div class="popup-checkbox">
									<div class="popup-checkbox-title">Myanmar</div>
									<div class="popup-checkbox-item-wapper">
										<div class="popup-checkbox-item"><input id="pop-up-rosewood-yangon" type="checkbox" value="7D7BW" /><label class="item-name" for="pop-up-rosewood-yangon"><span>Rosewood Yangon</span><span class="item-location">Yangon, Myanmar</span></label></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="popup-footer" data-property-txt="Property selected" data-properties-txt="Properties selected">
					<p class="footer__desc"><span class="selected-number">0</span><span data-content="">Property selected</span></p>
					<a id="rfp-form-button" class="button popup-btn popup-btn-disable" href="#" data-display="wedding-rfp-form-container" data-locale="">Next</a>
				</div>
			</div>
		</div>
		<span class="popup-fancy__close" data-close=""></span>
	</div>
</div>-->
<?php $popup = get_field('popup', 330);?>
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