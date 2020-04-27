<?php get_header();?>
<div class="rw-main-container container">

	<!-- Hero Images -->
	<?php $hero_images = get_field('hero_images');?>

	<div class="section hero-image-section image-description has-under-section" data-carousel="hero-image-section-slick">
		<div class="hero-image-wrapper-slick">

		<?php 
			$counter = 0;
			foreach( $hero_images as $hero_image ):
				if ($counter == 0) {$counter++; continue;}
		?>

			<div class="item" style="background-image:url('<?php echo $hero_image['url'];?>');">
				<div class="item-desc"><?php echo $hero_images['title'];?></div>
			</div>

		<?php endforeach;?>

		</div>
	</div>

	<!-- Booking Section -->
	<?php 
		$booking_section = get_field('booking_section');
		$room = $booking_section['room'];
		$adult = $booking_section['adult'];
		$child = $booking_section['child'];
	?>

	<section class="booking-widget-section" data-url-destination="<?php echo $booking_section['booking_link'];?>" data-child="<?php echo $child['singular'];?>" data-children="<?php echo $child['plural'];?>" data-room="<?php echo $room['singular'];?>" data-rooms="<?php echo $room['plural'];?>" data-adult="<?php echo $adult['singular'];?>" data-adults="<?php echo $adult['plural'];?>" data-locale="en" data-date-format="MM/DD/YYYY">
		<div class="booking-widget-wrapper">
			
			<div class="booking-widget-tab">
				<div class="booking-widget-item booking-widget-destination js-booking-tab">
					<div class="booking-widget-item-heading">
						<p class="h3 booking-widget-title"><?php echo $booking_section['destination_title'];?></p>
						<p class="js-select-destination"><?php echo $booking_section['destination_default_value'];?></p>
					</div>
					<div class="booking-widget-autocomplete js-booking-container">
						<div id="booking-widget-list" class="booking-widget-list"></div>
						<div class="search-container">
							<input type="text" id="input-search-booking" placeholder="<?php echo $booking_section['destination_placeholder'];?>" aria-label="input search booking" class="ui-autocomplete-input" autocomplete="off" /><span class="icon-close js-reset-input"></span>
						</div>
					</div>
				</div>
				<div class="booking-widget-item booking-widget-check js-booking-tab" data-picker-months="<?php echo $booking_section['months'];?>" data-picker-days="<?php echo $booking_section['days'];?>">
					<div class="booking-widget-item-heading">
						<p class="h3 booking-widget-title"><?php echo $booking_section['time_title'];?></p>
						<p class="js-datepicker-text"></p>
					</div>
					<div class="booking-widget-datepicker js-booking-container">
						<div id="input-to-datepicker">
							<input class="input-datepicker" type="hidden" aria-label="input datepicker" id="input-from-datepicker" />
						</div>
					</div>
				</div>
				<div class="booking-widget-item booking-widget-guest js-booking-tab">
					<div class="booking-widget-item-heading">
						<p class="h3 booking-widget-title"><?php echo $booking_section['guest_title'];?></p>
						<p>
							<span class="js-rooms"><?php echo $room['min'];?></span>
							<span class="js-rooms-label"><?php echo $room['singular'];?></span>
							<span>&nbsp;•&nbsp;</span>
							<span class="js-adults"><?php echo $adult['min'];?></span>
							<span class="js-adults-label"><?php echo $adult['singular'];?></span>
							<span>&nbsp;•&nbsp;</span>
							<span class="js-children"><?php echo $child['min'];?></span>
							<span class="js-children-label"><?php echo $child['singular'];?></span></p>
					</div>
					<div class="booking-widget-chooses js-booking-container">
						<div class="booking-widget-content" id="booking-widget-chooses-content">
							<div class="booking-widget-rooms row">
								<label class="title" for="input-rooms"><?php echo $room['plural'];?></label>
								<div class="counter"><span class="minus"></span>
									<input type="text" id="input-rooms" value="<?php echo $room['min'];?>" aria-label="input-rooms" data-max="<?php echo $room['max'];?>" data-min="<?php echo $room['min'];?>" data-target=".js-rooms" /><span class="plus"></span>
								</div>
							</div>
							<div class="booking-widget-adults row">
								<label class="title" for="input-adults"><?php echo $adult['plural'];?></label><div class="counter"><span class="minus"></span><input type="text" id="input-adults" value="<?php echo $adult['min'];?>" aria-label="input-adults" data-max="<?php echo $adult['max'];?>" data-min="<?php echo $adult['min'];?>" data-target=".js-adults" /><span class="plus"></span></div>
							</div>
							<div class="booking-widget-childens row">
								<label class="title" for="input-childens"><?php echo $child['plural'];?><span class="age-limit"></span></label><div class="counter"><span class="minus"></span><input type="text" id="input-childens" value="<?php echo $child['min'];?>" aria-label="input-childens" data-max="<?php echo $child['max'];?>" data-min="<?php echo $child['min'];?>" data-target=".js-children" /><span class="plus"></span></div>
							</div>
							<div class="booking-widget-children-ages" data-ages-max-label="<?php echo $child['under'];?> <?php echo $child['max_age'];?>" data-ages-max="<?php echo $child['max_age'];?>" data-ages-desc="<?php echo $child['singular'];?>">
								<div class="title"><?php echo $child['childrens_age'];?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="booking-widget-item">
					<a id="checkrates-btn" class="button dark bold gtm-bookingconsole" href="#" target="_self" aria-label="<?php echo $booking_section['action_name'];?>"><?php echo $booking_section['action_name'];?></a>
				</div>
			</div>

			<?php 
				$special_code = $booking_section['special_code'];
			?>
			<div class="booking-widget-code js-booking-tab booking-widget-item">
				<h3 class="special-code"><?php echo $special_code['title'];?></h3>
				<div class="booking-widget-special-code js-booking-container">
					<div class="booking-widget-content" id="booking-widget-code-content">
						<?php 
							$counter = 0;
							foreach ($special_code as $placeholder):
								if ($counter == 0) {$counter++; continue;};
								if ($counter == 1) $id = "promo-code";
								if ($counter == 2) $id = "promo-group-code";
								if ($counter == 3) $id = "promo-iata-code";
						?>
								<div class="special-code-item">
									<label class="special-code-label" for="promo-code<?php echo $counter ?>"><span class="icon-close"></span><span class="special-code-text"></span></label><input type="text" id="<?php echo $id ?>" placeholder="<?php echo $placeholder;?>" aria-label="<?php echo $placeholder;?>" value="" />
								</div>
						<?php	$counter++; ?>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Destinations -->
	<?php $destinations = get_field('destinations');?>

	<div class="hidden destination-list">
		<!--<?php /*
			foreach( $destinations as $destination ):
				$location = $destination['location'];
				$name = $destination['name'];
				$link = $destination['link'];
				$region = $destination['region'];
		?>
				<div class="destination-item" data-book-url="<?php echo $link;?>" data-label="<?php echo $location;?>" data-desc="<?php echo $name;?>" data-region="<?php echo $region;?>"></div>
		<?php endforeach;*/?>-->
		<?php 
			while( have_rows('destinations') ): the_row();
				$region = get_sub_field('region');
				while( have_rows('countries') ): the_row();
					while( have_rows('hotels') ): the_row();
						while( have_rows('information') ): the_row();
							$link = get_sub_field('link');
							$location = get_sub_field('location');
							$name = get_sub_field('name');
		?>
		<div class="destination-item" data-book-url="<?php echo $link;?>" data-label="<?php echo $location;?>" data-desc="<?php echo $name;?>" data-region="<?php echo $region;?>"></div>
		<?php 
						endwhile;
					endwhile;
				endwhile;
			endwhile;
		?>
		
	</div>

	<div class="section reservation-section wow fadeInUp" data-wow-duration="1s"></div>

	<!-- In The Know -->
	<?php 
		$in_the_know = get_field('in_the_know');
		$intheknow_residences = $in_the_know['intheknow_residences'];
		$intheknow_forbestravel = $in_the_know['intheknow_forbestravel'];
		$intheknow_limitededition = $in_the_know['intheknow_limitededition'];
	?>
	
	<section class="discover-rw-section sr">
		<h1 class="title-deco"><?php echo $in_the_know['title'];?></h1>
		<div class="row" data-index="0">
			<div class="cell haveImg">
				<div class="img-wrap" style="background-image:url('<?php echo $intheknow_residences['image']['url'];?>');"></div>
				<a href="#" class="arrow-prev arrow-button" aria-label="Go to Previous Slide">
					<div class="arrow"></div>
				</a>
				<a href="#" class="arrow-next arrow-button" aria-label="Go to Next Slide">
					<div class="arrow"></div>
				</a>
			</div>
			<div class="cell">
				<div class="text-wrap">
					<div class="content_heading bold title-h2"><?php echo $intheknow_residences['title'];?></div>
					<p class="content_description"><?php echo $intheknow_residences['content'];?></p>
					<a aria-label="<?php echo $intheknow_residences['action_name'];?>" class="button transparent-black-btn content_url" href="residences"><?php echo $intheknow_residences['action_name'];?></a>
				</div>
			</div>
		</div>
		<div class="content" id="content">
			<div class="three-col">
				<div class="block active">
					<div class="img-wrap img-bg" style="background-image:url('<?php echo $intheknow_residences['image']['url'];?>');"></div>
					<a href="<?php echo $intheknow_residences['link'];?>" data-img="<?php echo $intheknow_residences['image']['url'];?>" data-heading="<?php echo $intheknow_residences['title'];?>" data-description="<?php echo $intheknow_residences['content'];?>" data-url="<?php echo $intheknow_residences['link'];?>" data-type="internal" data-target="" data-label="<?php echo $intheknow_residences['action_name'];?>" aria-label="<?php echo $intheknow_residences['action_name'];?>"><?php echo $intheknow_residences['title'];?></a>
				</div>
				<div class="block ">
					<div class="img-wrap img-bg" style="background-image:url('<?php echo $intheknow_forbestravel['image']['url'];?>');"></div>
					<a href="<?php echo $intheknow_forbestravel['link'];?>" data-img="<?php echo $intheknow_forbestravel['image']['url'];?>" data-heading="<?php echo $intheknow_forbestravel['title'];?>" data-description="<?php echo $intheknow_forbestravel['content'];?>" data-url="<?php echo $intheknow_forbestravel['link'];?>" data-type="internal" data-target="" data-label="<?php echo $intheknow_forbestravel['action_name'];?>" aria-label="<?php echo $intheknow_forbestravel['action_name'];?>"><?php echo $intheknow_forbestravel['title'];?></a>
				</div>
				<div class="block ">
					<div class="img-wrap img-bg" style="background-image:url('<?php echo $intheknow_limitededition['image']['url'];?>');"></div>
					<a href="<?php echo $intheknow_limitededition['link'];?>" data-img="<?php echo $intheknow_limitededition['image']['url'];?>" data-heading="<?php echo $intheknow_limitededition['title'];?>" data-description="<?php echo $intheknow_limitededition['content'];?>" data-url="<?php echo $intheknow_limitededition['link'];?>" data-type="internal" data-target="" data-label="<?php echo $intheknow_limitededition['action_name'];?>" aria-label="<?php echo $intheknow_limitededition['action_name'];?>"><?php echo $intheknow_limitededition['title'];?></a>
				</div>
			</div>
		</div>
		<div class="extra-border"></div>
	</section>

	<!-- RoseWood Limited Edition -->
	<?php $rosewood_limited_edition = get_field('rosewood_limited_edition');?>

	<div class="video-container">
		<section class="video_text-section img-bg sr filter-overlay-image-black" style="background-image:url('<?php echo $rosewood_limited_edition['poster']['url'];?>');">
			<div class="video-text-wrapper">
				<h2 class="title-deco left white h1"><?php echo $rosewood_limited_edition['title'];?></h2>
				<a href="#pop-video-limited-edition" class="_lightbox play-video-btn"><span class='far fa-play-circle' style='font-size:40px'></span><?php echo $rosewood_limited_edition['action_name'];?></a>
			</div>
		</section>
	</div>

	<!-- More RoseWood -->
	<?php $more_rosewood = get_field('more_rosewood');?>

	<section class="intro-block-landing sr">
		<div class="hero-image-wrapper owl-carousel owl-theme">
			<div class="hero-image" style="background-image:url('<?php echo $more_rosewood['image']['url'];?>');"></div>
		</div>
		<div class="content sr2">
			<h3 class="title-deco title-h1 h1"><?php echo $more_rosewood['title'];?></h3>
			<div class="bold title-h2"><?php echo $more_rosewood['sub_title'];?></div>
			<p><?php echo $more_rosewood['content'];?></p>
			<a href="<?php echo $more_rosewood['link'];?>" class="button border dynamic-width" aria-label="<?php echo $more_rosewood['action_name'];?> - <?php echo $more_rosewood['sub_title'];?>"><?php echo $more_rosewood['action_name'];?></a>
		</div>
	</section>

	<!-- Featured Destinations -->
	<?php $featured_destinations = get_field('featured_destinations');?>

	<div class="section featured-destinations-section sr">
		<div class="section-content">
			<h4 class="title-deco h1"><?php echo $featured_destinations['title'];?></h4>
		</div>
		<div class="section-hero-image-wrapper-outer">
			<div class="section-hero-image-wrapper owl-carousel owl-theme">

				<?php $counter = 0;?>
				<?php foreach( $featured_destinations as $featured_destination ):?>

					<?php if($counter == 0 || $counter == 1) {$counter++; continue;}?>
					<div class="section-hero-image" style="background-image:url('<?php echo $featured_destination['image']['url'];?>');" data-hotel="<?php echo $featured_destination['name'];?>" data-location="<?php echo $featured_destination['location'];?>" data-heading="The Essence Of The Islands" data-description="<?php echo $featured_destination['content'];?>" data-url="<?php echo $featured_destination['link'];?>" data-view-hotel-label="<?php echo $featured_destinations['action_name'];?>"></div>

				<?php endforeach; ?>	

			</div>
			<div class="nav-arrow-outer nav-arrow-prev">
				<div class="nav-arrow-inner">
					<a class="nav-arrow arrow-prev" href="#" aria-label="Go to Previous Slide"><span class="arrow"></span></a>
					<div class="details">
						<div class="small-h5"><span class="hotel"></span></div>
						<div class="xs small-h5"><span class="location"></span></div>
					</div>
				</div>
			</div>
			<div class="nav-arrow-outer nav-arrow-next">
				<div class="nav-arrow-inner">
					<a class="nav-arrow arrow-next" href="#" aria-label="Go to Next Slide"><span class="arrow"></span></a>
					<div class="details">
						<div class="small-h5"><span class="hotel"></span></div>
						<div class="xs small-h5"><span class="location"></span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content main">
			<div class="xs title-h5"><span class="hotel"></span><span class="location"></span></div>
			<div class="bold h3"></div>
			<p></p>
			<a href="" class="button border dynamic-width"><?php echo $featured_destinations['action_name'];?></a>
		</div>
	</div>

	<!-- Through your eyes -->
	<?php $through_your_eyes = get_field('through_your_eyes');?>

	<div class="section through-your-eyes-section sr">
		<div class="space"></div>
		<div class="section-content">
			<h5 class="title-deco title-h1 h1"><?php echo $through_your_eyes['title'];?></h5>
			<p><?php echo $through_your_eyes['text_1'];?><br />
				<?php echo $through_your_eyes['text_2'];?>
				<a rel="noopener noreferrer" rel="noopener noreferrer" href="<?php echo $through_your_eyes['instagram_account']['link'];?>" target="_blank"><?php echo $through_your_eyes['instagram_account']['username'];?></a>&nbsp;<?php echo $through_your_eyes['linking_word'];?>&nbsp;<a rel="noopener noreferrer" rel="noopener noreferrer" href="<?php echo $through_your_eyes['instagram_hashtag']['link'];?>" target="_blank"><?php echo $through_your_eyes['instagram_hashtag']['tag'];?></a>.
			</p>
			<div id="olapic_specific_widget"></div>
			<script type="text/javascript" src="<?php echo $through_your_eyes['js_source'];?>"  data-olapic="olapic_specific_widget" data-instance="<?php echo $through_your_eyes['instance'];?>" data-apikey="<?php echo $through_your_eyes['api_key'];?>" async="async"></script>
			<a class="view-from-btn with-arrow" href="rwjourneys"><?php echo $through_your_eyes['action']['action_name'];?></a>
		</div>
	</div>

	<!-- More from Rosewood -->
	<?php 
		$more_from_rosewood = get_field('more_from_rosewood');
		$rosewood_conversations = $more_from_rosewood['rosewood_conversations'];
		$rosewood_curators = $more_from_rosewood['rosewood_curators'];
	?>

	<div class="section more-from-rw-section sr">
		<div class="spacer"></div>
		<div class="section-content">
			<h6 class="title-deco title-h1 h1"><?php echo $more_from_rosewood['title'];?></h6>
			<div class="wrapper">
				<div class="sr2">
					<a aria-label="<?php echo $rosewood_conversations['action_name'];?> - <?php echo $rosewood_conversations['title'];?>" rel="noopener noreferrer" class="hit-area" href="<?php echo $rosewood_conversations['link'];?>" target="_blank"></a>
					<div class="img-wrap">
						<div class="img-bg" style="background-image:url('<?php echo $rosewood_conversations['image']['url'];?>');"></div>
					</div>
					<div class="inner-content">
						<div class="table">
							<div class="h2"><?php echo $rosewood_conversations['title'];?></div>
						</div>
						<div class="description">
							<p><?php echo $rosewood_conversations['content'];?></p>
							<div class="btn-wrapper">
								<div class="arrow-link" aria-label="<?php echo $rosewood_conversations['action_name'];?> - <?php echo $rosewood_conversations['title'];?>"><?php echo $rosewood_conversations['action_name'];?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="sr2">
					<a aria-label="<?php echo $rosewood_curators['action_name'];?> - <?php echo $rosewood_curators['title'];?>" rel="noopener noreferrer" class="hit-area" href="<?php echo $rosewood_curators['link'];?>" target="_blank"></a>
					<div class="img-wrap">
						<div class="img-bg" style="background-image:url('<?php echo $rosewood_curators['image']['url'];?>');"></div>
					</div>
					<div class="inner-content">
						<div class="table">
							<div class="h2"><?php echo $rosewood_curators['title'];?></div>
						</div>
						<div class="description">
							<p><?php echo $rosewood_curators['content'];?></p>
							<div class="btn-wrapper">
								<div class="arrow-link" aria-label="<?php echo $rosewood_curators['action_name'];?> - <?php echo $rosewood_curators['title'];?>"><?php echo $rosewood_curators['action_name'];?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>