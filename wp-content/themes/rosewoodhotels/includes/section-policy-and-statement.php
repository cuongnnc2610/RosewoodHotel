<?php 
    /*Template Name: Policy and Statement */
    $GLOBALS['ROSEWOOD']['boby_class'] = "t22 en";
    get_header('secondary');
?>
<div class="container fixed" role="main">
	<div class="content shadow" id="content">
		<section class="breadcrumb">
			<h1 class="title" style="text-transform: uppercase;"><?php the_title();?></h1>
		</section>
		<div class="side-shadow left"></div>
		<div class="main">
			<p>
				Last Updated:&nbsp; <?php the_modified_date();?><br />
			</p>

			<?php 
				while ( have_posts() ) : the_post();
					the_content();
				endwhile; 
			?>
		</div>
		<div class="side-shadow right"></div>
	</div>
</div>
<?php get_footer('about');?>