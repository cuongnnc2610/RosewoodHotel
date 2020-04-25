<?php 
    /*Template Name: Luxury Hotel Offers */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t3a en";
    get_header('secondary');
?>
<div class="rw-main-container container">
	<?php $id_page_to_view = get_field('id_page_to_view');?>
	<section class="intro-block-landing">
		<div class="hero-image-wrapper owl-carousel owl-theme image-description image-description--right">
			<?php 
				while( have_rows('images', $id_page_to_view) ): the_row();		
					$image = get_sub_field('image')['url'];
			?>
			<div class="hero-image" style="background-image:url('<?php echo $image;?>');"></div>
			<?php endwhile;?>
		</div>
		<?php 
			while( have_rows('pages') ): the_row();
				$action_name = get_sub_field('action_name');
				while( have_rows('page') ): the_row();
					$link = get_sub_field('link');
					if ($id_page_to_view == url_to_postid( $link )) {
						$title = get_sub_field('title');
						$full_content = get_sub_field('full_content');
						break;						
					}
				endwhile;
			endwhile;					
		?>
		<div class="content" id="content">
			<h1 class="title-deco"><?php echo $title;?></h1>
			<h2 class="title-h2 bold"></h2>
			<?php echo $full_content;?>
			<a class="button border dynamic-width" aria-label="<?php echo $action_name;?> - " href="<?php echo $link;?>"><?php echo $action_name;?></a>
		</div>
	</section>
	<?php 
		$pages = get_field('pages');
		$action_name = $pages['action_name'];
	?>
	<section class="offer-container">
		<section class="alternating-row">
			<h2 class="title-deco h1"><?php echo $pages['title'];?></h2>
			<?php 
				while( have_rows('pages') ): the_row();
					while( have_rows('page') ): the_row();	
						$link = get_sub_field('link');
						if ($id_page_to_view == url_to_postid( $link )) continue;
						$image = get_sub_field('image')['url'];
						$title = get_sub_field('title');
						$content = get_sub_field('content');
						
			?>
			<div class="row">
				<div class="cell">
					<div class="img-wrap" style="background-image:url('<?php echo $image;?>');"></div>
				</div>
				<div class="cell">
					<div class="text-wrap">
						<h2 class="title title-deco left"><?php echo $title;?></h2>
						<p><?php echo $content;?></p>
						<a class="button border content_url dynamic-width" aria-label="<?php echo $action_name;?> - <?php echo $title;?>" href="<?php echo $link;?>"><?php echo $action_name;?></a>
					</div>
				</div>
			</div>
			<?php 
					endwhile;
				endwhile;
			?>
			<div class="extra-border"></div>
		</section>
	</section>
</div>
<?php get_footer();?>