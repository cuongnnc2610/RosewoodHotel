<?php 
    /*Template Name: Offers Child Pages */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t3b en";
    get_header('secondary');
?>
<div class="rw-main-container container">
	<section class="intro-block-details">
		<div class="hero-image-wrapper owl-carousel owl-theme image-description image-description--right">
			<?php 
				while( have_rows('images') ): the_row();		
					$image = get_sub_field('image')['url'];
			?>
			<div class="hero-image" style="background-image:url('<?php echo $image;?>');"></div>
			<?php endwhile;?>
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
		<h2 class="bold title-h3"><?php echo $offer_container['title'];?></h2>
		<div class="shuffle-filter">
			<ul role="tablist">
				<?php 
					while( have_rows('offer_container') ): the_row();
						$numOfRegions = count(get_sub_field('regions'));
						$all = get_sub_field('all');
						$idAll = md5($all);
						if ($numOfRegions > 1) {
							echo '<li class="active bold"><strong><a href="#" data-group="'.$idAll.'" aria-selected="true" aria-controls="'.$idAll.'" role="tab">'.$all.'</a></strong></li>';
						}
						while( have_rows('regions') ): the_row();
							$nameRegion = get_sub_field('name');
							//$idRegion = str_replace(' ', '', $name);
							$idRegion = md5($nameRegion);
							
				?>			
				<li class="bold "><strong><a href="#" data-group="<?php echo $idRegion;?>" aria-selected="false" aria-controls="<?php echo $id;?>"><?php echo $nameRegion;?></a></strong></li>
				<?php
						endwhile;
					endwhile;
				?>
			</ul>
		</div>
		<section class="card-listing shuffle-container">
			<div class="content">
				<?php 
					while( have_rows('offer_container') ): the_row();
						$action_name = get_sub_field('action_name');
						$all = get_sub_field('all');
						//$idAll = str_replace(' ', '', $all);
						$idAll = md5($all);
						while( have_rows('regions') ): the_row();
							$nameRegion = get_sub_field('name');
							//$idRegion = str_replace(' ', '', $nameRegion);
							$idRegion = md5($nameRegion);
							while( have_rows('countries') ): the_row();
								$nameCountry = get_sub_field('name');
				
			echo'<div class="shuffle-wrap" data-groups="[&quot;'.$idAll.'&quot;, &quot;'.$idRegion.'&quot;]" role="tabpanel" aria-labelledby="'.$idRegion.'">
					<div class="title" id="'.$idRegion.'">'.$nameCountry.'</div>';
				 	 
								while( have_rows('hotels') ): the_row();
									$image = get_sub_field('image');
									$location = get_sub_field('location');
									$title = get_sub_field('title');
									$content = get_sub_field('content');
									$valid_time = get_sub_field('valid_time');
									$link = get_sub_field('link');
					
			echo   '<div class="card">
						<div class="card-wrap border-container">
							<a aria-label="'.$action_name.' - '.$title.'" class="hit-area full" href="'.$link.'"><span></span></a>
							<div class="img-wrap">
								<div class="img-bg" style="background-image:url('.$image['url'].');"></div>
							</div>
							<div class="inner-content">
								<div class="text-wrap">
									<div class="h5">'.$location.'</div>
									<div class="title-wrap">
										<div class="title-deco">
											<div class="title">'.$title.'</div>
										</div>
									</div>
									<div class="description">
										<p>'.$content.'</p>
									</div>
									<div class="valid">'.$valid_time.'</div>
									<div class="cta">
										<div class="with-arrow cta-offer" aria-label="'.$action_name.' - '.$title.'">'.$action_name.'</div>
									</div>
								</div>
							</div>
						</div>
					</div>';
									endwhile;
			echo'</div>';
				
							endwhile;
						endwhile;
					endwhile;
				?>
			</div>
		</section>
		<!--<div class="empty">
			<div class="content">
				<p>There are no properties in <span></span> with this offer.</p>
				<a href="#" class="button border dynamic-width">See All Offers</a>
			</div>
		</div>-->
		<div class="extra-border"></div>
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