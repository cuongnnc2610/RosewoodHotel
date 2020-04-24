<?php 
    /*Template Name: Residences */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t7a en";
    get_header();
?>
<div class="rw-main-container container stick-to-top">
	<section class="hero-slideshow hero-slideshow--residences">
		<?php $hero_slideshow = get_field('hero_slideshow');?>
		<div class="hero-slideshow__container">
			<div class="hero-slideshow__slider-container swiper-container">
				<div class="hero-slideshow__slider-wrapper swiper-wrapper">
					<div class="hero-slideshow__slider-item swiper-slide" style="background-image: url(<?php echo $hero_slideshow['image']['url'];?>?mw=1920)">
						<div class="hero-slideshow__slider-location"></div>
					</div>
				</div>
				<div class="hero-slideshow__slider-pagination swiper-pagination"></div>
			</div>
			<div class="hero-slideshow__overlay">
				<div class="hero-slideshow__overlay-container">
					<h1 class="title"><?php echo $hero_slideshow['title'];?></h1>
					<div class="line-deco line-deco--white line-deco--align-left"></div>
					<h2 class="h3"><?php echo $hero_slideshow['sub_title'];?></h2>
				</div>
			</div>
		</div>
		<div class="hero-slideshow__container">
			<div class="hero-slideshow__heading">
				<div class="hero-slideshow__heading-container">
					<div class="heading">
						<div class="heading__content"><?php echo $hero_slideshow['content'];?></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="offer-container">
		<section class="alternating-row">
			<?php 
				while( have_rows('pages') ): the_row();		
					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$caption = get_sub_field('caption');
					$action_name = get_sub_field('action_name');
					$link = get_sub_field('link');
			?>
			<div class="row" id="<?php echo str_replace(' ', '', $title);?>">
				<div class="cell">
					<div class="img-wrap" style="background-image:url('<?php echo $image['url'];?>');"></div>
				</div>
				<div class="cell ">
					<div class="text-wrap">
						<h2 class="title title-deco left"><?php echo $title;?></h2>
						<div class="caption"><?php echo $caption;?></div>
						<a aria-label="Learn More - Residential Rentals" class="button border content_url dynamic-width" href="<?php echo $link;?>"><?php echo $action_name;?></a>
					</div>
				</div>
			</div>
			<?php endwhile;?>
			<div class="extra-border"></div>
		</section>
	</section>
	<section class="masonry masonry--two-grid">
		<div class="masonry__container">
			<?php $title = get_field('difference')['title'];?>
			<div class="heading">
				<div class="heading__title"><?php echo $title;?></div>
			</div>
			<div class="masonry__content">
				<?php 
					while( have_rows('difference') ): the_row();	
						while( have_rows('differences') ): the_row();	
							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$caption = get_sub_field('caption');
				?>
				<div class="masonry__item">
					<div class="masonry__image"><img src="<?php echo $image['url'];?>?h=104&amp;la=en&amp;w=64" alt="<?php echo $title;?>" width="64" height="104" /></div>
					<div class="masonry__title title"><?php echo $title;?></div>
					<div class="masonry__caption"><?php echo $caption;?></div>
				</div>
				<?php 
						endwhile;
					endwhile;
				?>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>