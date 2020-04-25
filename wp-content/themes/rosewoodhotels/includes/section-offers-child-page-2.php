<?php 
    /*Template Name: Offers Child Pages 2 */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t3c en";
    get_header('secondary');
?>
<div class="rw-main-container container">
	<section class="intro-block-details">
		<div class="hero-image-wrapper owl-carousel owl-theme image-description image-description--right">
			<div class="hero-image" style="background-image:url('<?php echo get_field('image')['url'];?>');"></div>
		</div>
		<?php 
			global $wp;
			$current_url = home_url( add_query_arg( array(), $wp->request ) ) . "/";
			$title = "";
			$full_content = "";
			while( have_rows('pages', 354) ): the_row();
				while( have_rows('page') ): the_row();	
					$link = get_sub_field('link');
					if (strcmp($current_url, $link) == 0) {
						$title = get_sub_field('title');
						$full_content = get_sub_field('full_content');	
						break;						
					}		
				endwhile;		
			endwhile;
		?>
		<div class="content" id="content">
			<h1 class="title-deco"><?php echo $title;?></h1>
			<?php echo $full_content;?>
		</div>
	</section>
	<?php 
		$offer_container = get_field('offer_container');
		if ($offer_container['title'] != ""): 
	?>
	<section class="offer-container">
		<div class="extra-border"></div>
		<h2 class="bold title-h2"><?php echo $offer_container['title'];?></h2>
		<section class="card-listing with-details">
			<div class="content">
				<?php 
					while( have_rows('offer_container') ): the_row();
						$action_name = get_sub_field('action_name');
						$count = 1;
						while( have_rows('hotels') ): the_row();		
							$image = get_sub_field('view_information')['image'];
							$sub_title = get_sub_field('view_information')['sub_title'];
							$title = get_sub_field('view_information')['title'];
				?>
				<div class="card">
					<div class="card-wrap border-container">
						<a href="#" class="hit-area full focus-change" aria-controls="card-details-1" aria-expanded="false" aria-label="<?php echo $title;?>" data-target="#card-details-<?php echo $count;?>">
							<div class="img-wrap">
								<div class="img-bg" style="background-image:url('<?php echo $image['url'];?>');"></div>
							</div>
							<div class="inner-content">
								<div class="text-wrap">
									<div class="title-h5"><?php echo $sub_title;?></div>
									<div class="title title-h4"><?php echo $title;?></div>
									<div class="cta">
										<div class="with-line" aria-label="<?php echo $action_name;?> - <?php echo $sub_title;?>"><?php echo $action_name;?></div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<?php
							$count++;
						endwhile;
					endwhile;
				?>
				<div class="spacer"></div>
			</div>
			<div class="card-details">
				<div class="content">
					<?php 
						while( have_rows('offer_container') ): the_row();
							$action_name = get_sub_field('action_name');
							$count = 1;
							while( have_rows('hotels') ): the_row();		
								$detail_information = get_sub_field('detail_information');
								$left_title = $detail_information['left_title'];
								$price = $detail_information['price'];
								$plus_tax = $detail_information['plus_tax'];
								$phone_number_title = $detail_information['phone_number_title'];
								$phone_number = $detail_information['phone_number'];
								$action_name = $detail_information['action_name'];
								$link = $detail_information['link'];
								$right_title = $detail_information['right_title'];
					?>
					<div class="detail" id="card-details-<?php echo $count;?>" aria-hidden="true">
						<div class="col" style="float:left;">
							<div class="row">
								<h3 class="bold h5"><?php echo $left_title;?></h3>
								<p class="price bold"><span><?php echo $price;?></span>&nbsp;<small><?php echo $plus_tax;?></small></p>
							</div>
							<div class="row">
								<h3 class="bold h5"><?php echo $phone_number_title;?></h3>
								<?php echo $phone_number;?><br />
							</div>
							<div class="row"><a class="button black-btn" href="<?php echo $link;?>"><?php echo $action_name;?></a></div>
						</div>
						<div class="col itinerary-container">
							<h3 class="bold h5"><?php echo $right_title;?></h3>
							<div class="tab">
								<ul>
									<?php 
										while( have_rows('detail_information') ): the_row();
											while( have_rows('days') ): the_row();
												$count = 1;
												while( have_rows('day') ): the_row();
									?>
									<?php if ($count == 1): ?>
									<li class="active bold">
									<?php else: ?>
									<li class="bold">
									<?php endif;?>	
										<a href="#"><?php echo get_sub_field('title');?></a>
									</li>
									<?php 
													$count++;
												endwhile;
											endwhile;
										endwhile;
									?>
								</ul>
							</div>
							<div class="carousel-tab owl-carousel owl-theme">
								<?php 
									while( have_rows('detail_information') ): the_row();
										while( have_rows('days') ): the_row();
											while( have_rows('day') ): the_row();
								?>
								<div class="item">
									<div class="row">
										<div class="img-wrap img-bg" style="background-image:url('<?php echo get_sub_field('image')['url'];?>');"></div>
									</div>
									<div class="row">
										<?php echo get_sub_field('content');?>
									</div>
								</div>
								<?php 
											endwhile;
										endwhile;
									endwhile;
								?>
							</div>
						</div>
					</div>
					<?php
								$count++;
							endwhile;
						endwhile;
					?>
				</div>
			</div>
		</section>
	</section>
	<?php endif;?>
	<?php 
		$pages = get_field('pages', 354);
		$title = $pages['title'];
		$action_name_child_page = $pages['action_name_child_page'];
	?>
	<section class="discover-rw-section">
		<h2 class="title-deco title-h1 h1"><?php echo $title;?></h2>
		<div class="row" data-index="0">
			<!--3-->
			<?php 
				while( have_rows('pages', 354) ): the_row();
					while( have_rows('page') ): the_row();	
						$link = get_sub_field('link');
						if (strcmp($current_url, $link) == 0) continue;
						$image = get_sub_field('image')['url'];
						$title = get_sub_field('title');
						$content = get_sub_field('content');
						
			?>
			<div class="cell haveImg">
				<div class="img-wrap" style="background-image:url('<?php echo $image;?>');"></div>
				<a href="#" class="arrow-prev arrow-button" aria-label="Go to Previous Slide">
					<div class="arrow"></div>
				</a>
				<a href="#" class="arrow-next arrow-button" aria-label="Go to Next Slide">
					<div class="arrow"></div>
				</a>
			</div>
			<div class="cell">
				<div class="text-wrap">
					<h2 class="content_heading bold title-h2"><?php echo $title;?></h2>
					<p class="content_description">
						<p><?php echo $content;?></p>
						<a href="<?php echo $link;?>" class="button transparent-black-btn content_url" aria-label="<?php echo $action_name_child_page;?> - <?php echo $title;?>"><?php echo $action_name_child_page;?></a>
					</p>
					
				</div>
			</div>
			<?php 
						break;
					endwhile;
				endwhile;
			?>
		</div>
		<div class="content">
			<div class="three-col">
				<?php 
					while( have_rows('pages', 354) ): the_row();
						$count = 1;
						while( have_rows('page') ): the_row();	
							$link = get_sub_field('link');
							if (strcmp($current_url, $link) == 0) continue;
							$image = get_sub_field('image')['url'];
							$title = get_sub_field('title');
							$content = get_sub_field('content');
							
				?>
				<?php if ($count == 1): ?>
				<div class="block active">
				<?php else: ?>
				<div class="block ">
				<?php endif;?>
					<div class="img-wrap img-bg" style="background-image:url('<?php echo $image;?>');"></div>
					<a href="#" data-img="<?php echo $image;?>" data-heading="<?php echo $title;?>" data-description="&lt;p&gt;<?php echo $content;?>&lt;/p&gt;&#xA;&lt;br /&gt;" data-url="<?php echo $link;?>" aria-label="<?php echo $title;?> - <?php echo $count;?>/3"><?php echo $title;?></a>
				</div>
				<?php 
							$count++;
						endwhile;
					endwhile;
				?>
			</div>
		</div>
		<div class="extra-border"></div>
	</section>
</div>
<?php get_footer();?>