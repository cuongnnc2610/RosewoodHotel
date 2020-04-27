<?php 
    /*Template Name: Meetings and Events Child Page*/
    $GLOBALS['ROSEWOOD']['boby_class'] = "en r_t3e";
    get_header('secondary');
?>
<div class="rw-main-container container">
	<section class="intro-block-landing">
		<div class="hero-image-wrapper owl-carousel owl-theme">
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
			<h1 class="title-deco"><?php echo $title;?> </h1>
			<div class="desc">
				<?php echo $description;?>
			</div>
			<div class="row">
				<?php 
					$left_column = get_field('left_column');
					$right_column = get_field('right_column');
				?>
				<div class="col">
					<h2 class="bold title-h3"><?php echo $left_column['title'];?></h2>
					<?php echo $left_column['content'];?>
					<br />
				</div>
				<div class="col">
					<?php echo $right_column['content'];?>
					<a href="<?php echo $right_column['link'];?>" class="button black-btn " data-rfp="" data-type="meeting" data-locale="" target=""><?php echo $right_column['action_name'];?></a>
				</div>
			</div>
		</div>
		<div class="terms collapsible-wrap collapsed">
			<?php 
				$term = get_field('term');
			?>
			<a href="#" class="collapsible-trigger with-arrow-up" aria-expanded="false" aria-controls="expande-content"><?php echo $term['title'];?></a>
			<div class="content" id="expande-content" aria-hidden="true">
				<?php echo $term['content'];?>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>