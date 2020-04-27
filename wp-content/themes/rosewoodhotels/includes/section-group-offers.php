<?php 
    /*Template Name: Group Offers*/
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t3b en";
    get_header('secondary');
?>
<div class="rw-main-container container">
	<section class="intro-block-details">
		<div class="hero-image-wrapper owl-carousel owl-theme image-description image-description--right">
			<?php 
				while( have_rows('carousel_images') ): the_row();
					$image = get_sub_field('image')['url'];
			?>
			<div class="hero-image" style="background-image:url('<?php echo $image;?>?mw=1280');"></div>
			<?php endwhile;?>
		</div>
		<div class="content" id="content">
			<?php 
				$title = get_field('title');
				$description = get_field('description');
			?>
			<h1 class="title-deco"><?php echo $title;?></h1>
			<?php echo $description;?>
		</div>
	</section>
	<section class="offer-container">
		<div class="shuffle-filter">
			<ul role="tablist">
				<?php 
					$action_name = get_field('action_name');
					$all = get_field('all');
					//$idAll = str_replace(' ', '', $all);
					$idAll = md5($all);
					$numOfRegions = count(get_field('destinations', 70));
					if ($numOfRegions > 1) {
							echo '<li class="active bold"><strong><a href="#" data-group="'.$idAll.'" aria-selected="true" aria-controls="'.$idAll.'" role="tab">'.$all.'</a></strong></li>';
						}
					while( have_rows('destinations', 70) ): the_row();
						$region = get_sub_field('region');
						//$idRegion = str_replace(' ', '', $nameRegion);
						$idRegion = md5($region);
				?>
				<li class="bold "><strong><a href="#" data-group="<?php echo $idRegion;?>" aria-selected="false" aria-controls="<?php echo $idRegion;?>"><?php echo $region;?></a></strong></li>
				<?php
					endwhile;
				?>
			</ul>
		</div>
		<section class="card-listing shuffle-container">
			<div class="content">
				<?php 
					$action_name = get_field('action_name');
					$all = get_field('all');
					//$idAll = str_replace(' ', '', $all);
					$idAll = md5($all);
					while( have_rows('destinations', 70) ): the_row();
						$region = get_sub_field('region');
						//$idRegion = str_replace(' ', '', $nameRegion);
						$idRegion = md5($region);
						while( have_rows('countries') ): the_row();
							$country = get_sub_field('country');
							$isShowCountry = false;
							while( have_rows('hotels') ): the_row();
								while( have_rows('information') ): the_row();
									while( have_rows('offer') ): the_row();
										if (strcmp(get_sub_field('name'), get_the_title()) == 0 && $isShowCountry == false):
			echo'<div class="shuffle-wrap" data-groups="[&quot;'.$idAll.'&quot;, &quot;'.$idRegion.'&quot;]" role="tabpanel" aria-labelledby="'.$idRegion.'">
					<div class="title" id="'.$idRegion.'">'.$country.'</div>';
										$isShowCountry = true;
										endif;
									endwhile;
								endwhile;
							endwhile;
							while( have_rows('hotels') ): the_row();
								while( have_rows('information') ): the_row();
									$image = get_sub_field('image');
									$location = get_sub_field('location');
									$nameHotel = get_sub_field('name');
									$link = get_sub_field('link');
									while( have_rows('offer') ): the_row();
										if (strcmp(get_sub_field('name'), get_the_title()) == 0):
											$content = get_sub_field('content');
											$valid_time = get_sub_field('valid_time');

			echo   '<div class="card">
						<div class="card-wrap border-container">
							<a aria-label="'.$action_name.' - '.$nameHotel.'" class="hit-area full" href="'.$link.'"><span></span></a>
							<div class="img-wrap">
								<div class="img-bg" style="background-image:url('.$image['url'].');"></div>
							</div>
							<div class="inner-content">
								<div class="text-wrap">
									<div class="h5">'.$location.'</div>
									<div class="title-wrap">
										<div class="title-deco">
											<div class="title">'.$nameHotel.'</div>
										</div>
									</div>
									<div class="description">
										<p>'.$content.'</p>
									</div>
									<div class="valid">'.$valid_time.'</div>
									<div class="cta">
										<div class="with-arrow cta-offer" aria-label="'.$action_name.' - '.$nameHotel.'">'.$action_name.'</div>
									</div>
								</div>
							</div>
						</div>
					</div>';
										endif;
									endwhile;
								endwhile;
							endwhile;	
			if ($isShowCountry == true) {
			echo'</div>';
			}	
						endwhile;
					endwhile;
				?>
			</div>
		</section>
		<div class="empty">

			<div class="content">
				<p><?php echo get_field('empty_content');?></p>
				<a href="#" class="button border dynamic-width"><?php echo get_field('empty_button_text');?></a>
			</div>
		</div>
		<div class="extra-border"></div>
	</section>
	<section class="discover-rw-section">
		<div class="row" data-index="0">
			<!--3-->
			<?php 
				while( have_rows('pages') ): the_row();	
					$link = get_sub_field('link');
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
						<a href="<?php echo $link;?>" class="button transparent-black-btn content_url" aria-label="<?php echo get_field('action_name');?> - <?php echo $title;?>"><?php echo get_field('action_name');?></a>
					</p>
					
				</div>
			</div>
			<?php 
					break;
				endwhile;
			?>
			<!--<div class="cell haveImg">
				<div class="img-wrap" style="background-image:url('https://www.rosewoodhotels.com/-/media/Images/Rosewood_Hotels_and_Resorts/Group/meetings_and_events/group-offers/Rosewood_Mayakoba_920x600.ashx');"></div>
				<a href="#" class="arrow-prev arrow-button" aria-label="Go to Previous Slide">
					<div class="arrow"></div>
				</a>
				<a href="#" class="arrow-next arrow-button" aria-label="Go to Next Slide">
					<div class="arrow"></div>
				</a>
			</div>
			<div class="cell">
				<div class="text-wrap">
					<h2 class="content_heading bold title-h2">Rosewood Rest Assured</h2>
					<p class="content_description">Book with the freedom to change.<br /></p>
					<a href="rosewood-rest-assured.html" class="button transparent-black-btn content_url" aria-label="Learn More - Rosewood Rest Assured">Learn More</a>
				</div>
			</div>-->
		</div>
		<div class="content">
			<div class="three-col">
				<?php 
					while( have_rows('pages') ): the_row();	
					endwhile;
				?>
				<?php 
					$count = 1;
					debug_to_console(count(get_field('pages')));
					while( have_rows('pages') ): the_row();	
						$link = get_sub_field('link');
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
				?>
			</div>
		</div>
		<div class="extra-border"></div>
	</section>
</div>
<?php get_footer();?>