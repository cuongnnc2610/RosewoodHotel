<?php 
    /*Template Name: Residences Child Pages */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t7b en";
    get_header();
?>
<div class="rw-main-container container stick-to-top">
	<section class="hero-slideshow hero-slideshow--residences">
		<?php $hero_slideshow = get_field('hero_slideshow');?>
		<div class="hero-slideshow__container">
			<div class="hero-slideshow__slider-container swiper-container">
				<div class="hero-slideshow__slider-wrapper swiper-wrapper">
					<div class="hero-slideshow__slider-item swiper-slide" style="background-image: url(<?php echo $hero_slideshow['image']['url'];?>?mw=1920)">
						<div class="hero-slideshow__slider-location"><a href="../mayakoba-riviera-maya.html"><?php echo $hero_slideshow['location'];?></a></div>
					</div>
				</div>
				<div class="hero-slideshow__slider-pagination swiper-pagination"></div>
			</div>
			<div class="hero-slideshow__overlay">
				<div class="hero-slideshow__overlay-container">
					<h1 class="title"><?php echo $hero_slideshow['title'];?></h1>
					<div class="line-deco line-deco--white line-deco--align-left"></div>
					<h2 style="font-size: 1.2em"><?php echo $hero_slideshow['sub_title'];?></h2>
				</div>
			</div>
		</div>
		<?php $destination = get_field('destination');?>
		<div class="hero-slideshow__container" id="content">
			<div class="hero-slideshow__heading">
				<div class="hero-slideshow__heading-container">
					<div class="heading">
						<?php if($destination['content'] != ""): ?>
						<h2 class="heading__title"><?php echo $destination['title'];?></h2>
						<div class="heading__content"><?php echo $destination['content'];?></div>
						<?php endif;?>
						<?php if($hero_slideshow['content'] != ""): ?>
						<div class="heading__content"><?php echo $hero_slideshow['content'];?></div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="card card--two-grid-carousel">
		<div class="card__container">
			<?php if($destination['content'] == ""): ?>
			<div class="heading">
				<h2 class="heading__title"><?php echo $destination['title'];?></h2>
			</div>
			<?php endif;?>
			<div class="card__content card__content--three-col">
				<?php 
					while( have_rows('destination') ): the_row();
						while( have_rows('destinations') ): the_row();		
							$image = get_sub_field('image');
							$location = get_sub_field('location');
							$name = get_sub_field('name');
							$description = get_sub_field('description');
							$hotel_link = get_sub_field('hotel_link');
							$booking_link = get_sub_field('booking_link');
				?>
				<div class="card__item">
					<div class="card__image">
						<div class="card__image-carousel swiper-container">
							<div class="carousel-container swiper-wrapper">
								<div class="carousel-image swiper-slide" role="img" aria-label="<?php echo $location;?>" style="background-image: url(<?php echo $image['url'];?>);"></div>
							</div>
						</div>
					</div>
					<div class="card__item-content">
						<div class="property-location"><?php echo $location;?></div>
						<h2 class="property-name title"><?php echo $name;?></h2>
						<div class="line-deco line-deco--orange"></div>
						<div class="property-desc"><?php echo $description;?></div>
						<div class="button-row">
							<a class="learn-more" href="<?php echo $hotel_link;?>"><?php echo $destination['detail_text'];?></a>
							<?php if($booking_link != ""):?>
							<a aria-label="Book - <?php echo $location;?>" class="button border book-button" href="<?php echo $booking_link;?>" target="_self"><?php echo $destination['action_text'];?></a>
							<?php endif;?>
						</div>
						
					</div>
				</div>
				<?php 
						endwhile;
					endwhile;
				?>
			</div>
		</div>
	</section>
	<?php 
		$card_two_box = get_field('card_two_box');
		if ($card_two_box['title'] != ""):
			$box_1 = $card_two_box['box_1'];
			$box_2 = $card_two_box['box_2'];
	?>
	<section class="card card--two-box">
        <div class="card__container">
            <div class="heading">
                <h2 class="heading__title"><?php echo $card_two_box['title'];?></h2>
            </div>
            <div class="card__content">
                <div class="card__item">
                    <div class="card__image"><img src="<?php echo $box_1['image']['url'];?>?h=300&amp;la=en&amp;w=460" alt="<?php echo $box_1['title'];?>" width="460" height="300" /></div>
                    <div class="card__item-content">
                        <h3 class="title"><?php echo $box_1['title'];?></h3>
                        <div class="card__text-content">
                            <p><?php echo $box_1['content'];?></p>
                            <ul>
                            	<?php
									while( have_rows('card_two_box') ): the_row();
										while( have_rows('box_1') ): the_row();
											while( have_rows('items') ): the_row();	
												$item = get_sub_field('item');
                                				echo '<li>'.$item.'</li>';                                
                                			endwhile;
                                		endwhile;
                                	endwhile;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__image"><img src="<?php echo $box_2['image']['url'];?>?h=300&amp;la=en&amp;w=460" alt="<?php echo $box_2['title'];?>" width="460" height="300" /></div>
                    <div class="card__item-content">
                        <h3 class="title"><?php echo $box_2['title'];?></h3>
                        <div class="card__text-content">
                            <p><?php echo $box_2['content'];?></p>
                            <ul>
                                <?php
									while( have_rows('card_two_box') ): the_row();
										while( have_rows('box_2') ): the_row();
											while( have_rows('items') ): the_row();	
												$item = get_sub_field('item');
                                				echo '<li>'.$item.'</li>';                                
                                			endwhile;
                                		endwhile;
                                	endwhile;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php endif;?>
	<section class="carousel-caption carousel-caption--sync">
		<div class="carousel-caption__container">
			<?php $benefit = get_field('benefit');?>
			<div class="heading">
				<h2 class="heading__title"><?php echo $benefit['heading_title'];?></h2>
			</div>
			<div class="carousel-caption__content carousel-caption__content--grey-border carousel-caption__content--grey-bg carousel-caption__content--reverse">
				<a class="carousel-caption__content-nav-prev" href="#"><span class="sr-only" aria-hidden="true">arrow prev</span></a><a class="carousel-caption__content-nav-next" href="#"><span class="sr-only" aria-hidden="true">arrow next</span></a>
				<div class="carousel-caption__content-carousel">
					<div class="carousel-caption__carousel swiper-container">
						<div class="carousel-caption__carousel-container swiper-wrapper">
							<div class="carousel-caption__carousel-item swiper-slide" role="img" aria-label="Rental benefits" style="background-image: url(<?php echo $benefit['image']['url'];?>?mx=790)"></div>
						</div>
					</div>
				</div>
				<div class="carousel-caption__content-caption">
					<div class="carousel-caption__caption swiper-container">
						<div class="carousel-caption__caption-container swiper-wrapper">
							<div class="carousel-caption__caption-item swiper-slide">
								<div class="carousel-caption__caption-item-content">
									<div class="caption-title"><strong><?php echo $benefit['caption_title'];?></strong></div>
									<div class="caption">
										<ul>
											<?php 
												while( have_rows('benefit') ): the_row();
													while( have_rows('caption') ): the_row();		
											?>
											<li><?php echo get_sub_field('item');?></li>
											<?php 
													endwhile;
												endwhile;
											?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer"><em><?php if ($benefit['note'] != "") echo $benefit['note']; else echo '&nbsp';?></em></div>
		</div>
	</section>
	<?php 
		$discover_section = get_field('discover_section');
		if ($discover_section['title'] != ""):
			$page_1 = $discover_section['page_1'];
			$page_2 = $discover_section['page_2'];
			$page_3 = $discover_section['page_3'];
	?>
	<section class="discover-rw-section sr">		
		<h2 class="title-deco h1"><?php echo $discover_section['title'];?></h2>
		<div class="row" data-index="0">
			<div class="cell haveImg">
				<div class="img-wrap" role="img" aria-label="<?php echo $page_1['title'];?>" style="background-image:url('<?php echo $page_1['image']['url'];?>?mw=790');"></div>
				<a href="#" class="arrow-prev arrow-button" aria-label="Go to Previous Slide">
					<div class="arrow"></div>
				</a>
				<a href="#" class="arrow-next arrow-button" aria-label="Go to Next Slide">
					<div class="arrow"></div>
				</a>
			</div>
			<div class="cell">
				<div class="text-wrap">
					<h2 class="content_heading bold title-h2"><?php echo $page_1['title'];?></h2>
					<div class="content_description">
						<p><?php echo $page_1['content'];?></p>
					</div>
					<a aria-label="<?php echo $discover_section['action_name'];?>: <?php echo $page_1['title'];?>" class="button transparent-black-btn content_url" href="<?php echo $page_1['link'];?>"><?php echo $discover_section['action_name'];?></a>
				</div>
			</div>
		</div>
		<div class="content" id="content">
			<div class="three-col">
				<div class="block  active">
					<div class="img-wrap img-bg" role="img" aria-label="<?php echo $page_1['title'];?>" style="background-image:url('<?php echo $page_1['image']['url'];?>?mw=790');"></div>
					<a href="../castiglion-del-bosco/dining/in-villa-dining.html" data-img="<?php echo $page_1['image']['url'];?>?mw=790" data-heading="<?php echo $page_1['title'];?>" data-description="&lt;p&gt;<?php echo $page_1['content'];?>&lt;/p&gt;" data-url="<?php echo $page_1['link'];?>" data-type="internal" data-target="" aria-label="<?php echo $page_1['title'];?> - 1/3"><?php echo $page_1['title'];?></a>
				</div>
				<div class="block ">
					<div class="img-wrap img-bg" role="img" aria-label="<?php echo $page_2['title'];?>" style="background-image:url('<?php echo $page_2['image']['url'];?>?mw=790');"></div>
					<a href="#" data-img="<?php echo $page_2['image']['url'];?>?mw=790" data-heading="<?php echo $page_2['title'];?>" data-description="&lt;p&gt;<?php echo $page_2['content'];?>&lt;/p&gt;" data-url="<?php echo $page_2['link'];?>" data-type="internal" data-target="" aria-label="<?php echo $page_2['title'];?> - 2/3"><?php echo $page_2['title'];?></a>
				</div>
				<div class="block ">
					<div class="img-wrap img-bg" role="img" aria-label="<?php echo $page_3['title'];?>" style="background-image:url('<?php echo $page_3['image']['url'];?>?mw=790');"></div>
					<a href="#" data-img="<?php echo $page_3['image']['url'];?>?mw=790" data-heading="<?php echo $page_3['title'];?>" data-description="&lt;p&gt;<?php echo $page_3['content'];?>&lt;/p&gt;" data-url="<?php echo $page_3['link'];?>" data-type="external" data-target="" aria-label="<?php echo $page_3['title'];?> - 3/3"><?php echo $page_3['title'];?></a>
				</div>
			</div>
		</div>
		<div class="extra-border"></div>
	</section>
	<?php endif;?>
	<section class="masonry masonry--two-box">
		<div class="masonry__container">
			<?php 
			$count = 1;
				while( have_rows('pages', 362) ): the_row();
					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$action_name = get_sub_field('action_name');
					$link = get_sub_field('link');
					if ($link == get_permalink()) continue;
					if ($count == 1):
			?>
			<div class="masonry__item" style="float: left;">
			<?php   else:?>
			<div class="masonry__item">
			<?php   endif;?>
				<a href="<?php echo $link;?>" class="masonry__content" style="background-image: url('<?php echo $image['url'];?>');" target="">
					<div class="masonry__text-area">
						<div class="masonry__text"><?php echo $action_name;?></div>
						<div class="masonry__title title" style="line-height: 1"><?php echo $title;?></div>
					</div>
				</a>
			</div>
			<?php $count++;?>
			<?php endwhile;?>
		</div>
	</section>
</div>
<?php get_footer();?>