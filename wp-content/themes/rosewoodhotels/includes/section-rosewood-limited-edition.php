<?php 
    /*Template Name: Rosewood Limited Edition */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t3e en";
    get_header();
?>
<div class="rw-main-container container">
	<?php $video = get_field('video');?>
	<section class="video video--loading-screen">
		<div class="video__container">
			<div class="video__background" style="background-image: url(<?php echo $video['image']['url'];?>)"></div>
			<div class="video__content">
				<div class="video__logo"></div>
				<div class="video__status-bar">
					<div class="video__status-bar--active"></div>
					<div class="video__status-bar--progress"></div>
				</div>
				<div class="video__sentence">
					<div class="video__sentence-text" data-duration=""></div>
					<div class="video__sentence-text" data-duration=""></div>
					<div class="video__sentence-text" data-duration="">&nbsp;</div>
				</div>
			</div>
		</div>
	</section>
	<section class="video video--timeline-overlay" id="video-section">
		<div class="video__container">
			<video class="video__el" id="video__el" preload="auto" muted="muted">
				<source src="<?php echo $video['source']['url'];?>" type="video/mp4"></source>
			</video>
			<div class="video__overlay">
				<div class="video__btn-mute"></div>
				<div class="video__overlay-btn video__overlay-btn--pause"></div>
				<div class="video__overlay-timeline">
					<div class="video__overlay-timeline-container"></div>
				</div>
				<div class="video__overlay-skiplink"><a href="#content" class="smooth-scrolling-func" data-duration="1000" data-offset="115" data-focus="false"><?php echo $video['action_name'];?> &gt;</a></div>
			</div>
		</div>
	</section>
	<?php $introduction = get_field('introduction');?>
	<section style="margin: 60px auto; max-width: 800px;">
		<div class="box__container">
			<p><img alt="" height="79" width="580" src="<?php echo $introduction['image_title']['url'];?>" /></p>
			<p>&nbsp;</p>
			<p><span style="background-color: #ffffff; color: #000000;"><?php echo $introduction['content'];?></span> </p>
		</div>
	</section>
	<div class="hidden">
		<div id="popup-video-limitededition" class="pop-video popup-box">
			<video id="video-limitededition" class="video-js vjs-big-play-centered" preload="none" width="" height="" poster="<?php echo $video['image']['url'];?>" controls="controls">
				<source src="<?php echo $video['source']['url'];?>" type="video/mp4"></source>
			</video>
		</div>
	</div>
	<?php $box_container = get_field('box_container');?>
	<section class="box box--three-boxes" id="content">
		<div class="heading">
			<div class="heading__title"><?php echo $box_container['title'];?></div>
			<div class="heading__link"><a href="#video-section" class="video__play-back-link smooth-scrolling-func" data-duration="1000" data-offset="122" data-focus="true"><?php echo $box_container['action_name'];?> &gt;</a></div>
		</div>
		<div class="box__container">
			<?php 
				while( have_rows('box_container') ): the_row();
					while( have_rows('box_items') ): the_row();		
						$image = get_sub_field('image');
						$location = get_sub_field('location');
						$title = get_sub_field('title');
						$content = get_sub_field('content');
						$action_name = get_sub_field('action_name');
						$link = get_sub_field('link');
			?>
			<a class="box__item" href="<?php echo $link;?>" target="">
				<div class="box__item-bg" style="background-image: url(<?php echo $image['url'];?>)"></div>
				<div class="box__item-content">
					<div class="box__item-group">
						<div class="box__item-title">
							<div class="box__item-location"><?php echo $location;?></div>
							<?php echo $title;?>
						</div>
						<div class="box__item-desc">
							<?php echo $content;?>&nbsp;
							<div class="box__item-link"><?php echo $action_name;?></div>
						</div>
					</div>
				</div>
			</a>
			<?php endwhile;?>
			<?php endwhile;?>
		</div>
	</section>
</div>
<?php get_footer();?>