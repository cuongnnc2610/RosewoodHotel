<?php 
    /*Template Name: About */
    $GLOBALS['ROSEWOOD']['boby_class'] = "t4 en";
    get_header('secondary');
?>
<?php $background_image = get_field('background_image');?>
<section class="bg responsive-container filter-overlay-image-white bg-overlay" data-desktop="active" data-tablet="active" data-mobile="inactive">
	<img class="responsive-img" src="<?php echo $background_image['url'];?>?mw=480" data-src481="<?php echo $background_image['url'];?>?mw=768" data-src1000="<?php echo $background_image['url'];?>" alt="" />
</section>
<?php 
	$title = get_field('title');
	$content = get_field('content');
?>
<div class="container flexible" role="main">
	<div class="content">
		<article class="intro" id="content">
			<div class="transparent-bg">
				<h1 class="title"><?php echo $title;?></h1>
				<p><?php echo $content;?></p>
			</div>
		</article>
	</div>
	<div class="bottom">
		<div class="carousel">
			<div class="carousel-container" data-autowidth="true" data-desktopw="960" data-tabletw="717" data-desktop="active" data-tablet="active" data-mobile="inactive">
				<a href="#" class="ctrl2 notmobile prev-btn" aria-label="Show Previous Slide"><span class="sp"></span></a>
				<div class="carousel-wrapper">

					<ul>
						<?php 
						$num_of_fields = count(get_field('carousel'));
						$counter = 1;
						while( have_rows('carousel') ): the_row();
							$crs_title = get_sub_field('title');
							$crs_content = get_sub_field('content');
							$crs_link = get_sub_field('link');
							if($counter == $num_of_fields):
						?>
							<li class="last" rel="noopener noreferrer">
								<a href="<?php echo $crs_link;?>">
									<div class="btn">
										<h2><?php echo $crs_title;?><span class="sp"></span></h2>
										<div class="description">
								  			<?php echo $crs_content;?>
										</div>
									</div>
								</a>
							</li>
							
							<?php else:?>
							<li>
								<a href="<?php echo $crs_link;?>">
									<div>
										<h2><?php echo $crs_title;?><span class="sp"></span></h2>
										<div class="description">
											<p><?php echo $crs_content;?></p>
										</div>
									</div>
								</a>
							</li>
							<?php endif;?>
							<?php $counter++;?>
						<?php endwhile; ?>
					</ul>
				</div>
				<a href="#" class="ctrl2 notmobile next-btn" aria-label="Show Next Slide"><span class="sp"></span></a>
			</div>
		</div>
		<?php 
			$statistics = get_field('statistics');
			$figure = $statistics['figure'];
		?>
		<section class="container">
			<div class="row">
				<div class="span2-title"><p><?php echo $statistics['title'];?></p></div>
				<?php 
				while( have_rows('statistics') ): the_row();
					while( have_rows('figure') ): the_row();
						$title = get_sub_field('title');
						$number = get_sub_field('number');
						$content = get_sub_field('content');	
				?>
					<div class="span2">
						<p><?php echo $title;?></p>
						<div class="figure title"><?php echo $number;?></div><?php echo $content;?>
					</div>
					<?php endwhile;?>
				<?php endwhile;?>
				<div class="span2"></div>
			</div>
		</section>
	</div>
</div>
<?php get_footer('about');?>