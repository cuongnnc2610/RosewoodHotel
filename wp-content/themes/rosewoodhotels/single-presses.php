<?php 
    $GLOBALS['ROSEWOOD']['boby_class'] = "t20 en";
    get_header('secondary');
?>
<div class="container fixed cs" role="main">
	<div class="content shadow test" id="content">
		<div class="side-shadow left"></div>
		<?php 
			$title_1 = get_field('title', 527);
			$title_2 = get_field('title', 568);
		?>
		<section class="breadcrumb">
			<h2 class="title"><?php echo $title_1;?></h2>
			<h1 class="title"><?php echo $title_2;?></h1>
		</section>
		<?php 
			$action_name = get_field('left_section', 527)['action_name'];
			$link = get_field('left_section', 527)['link'];
		?>
		<div class="intro"><a class="btn" href="<?php echo $link;?>"><span><?php echo $action_name;?></span></a><a class="btn notmobile nottablet notprint trigger_print" href="#"><span>PRINT</span></a></div>
		<div class="main">
			<h2 class="title-h3"><?php the_title(); ?></h2>
			<p class="subtitle"><?php echo get_the_date();?></p>
			<?php 
				while ( have_posts() ) : the_post();
					the_content();
				endwhile; 
			?>
			<p>&nbsp;</p>
			<?php $title = get_field('right_section', 527)['section_1']['title'];?>
			<aside class="teaser">
				<div class="title"><?php echo $title;?></div>
				<?php 
					while( have_rows('right_section', 527) ): the_row();
						while( have_rows('section_1') ): the_row();
							while( have_rows('region') ): the_row();
								$name = get_sub_field('name');
								$information = get_sub_field('information');
				?>
				<section>
					<h2 class="h5"><?php echo $name;?><br /></h2>
					<p><?php echo $information['person'];?></p>
					<p><?php echo $information['communication'];?></p>
					<p>E:<a href="mailto:<?php echo $information['email'];?>"><?php echo $information['email'];?></a></p>
					<p>T:<?php echo $information['phone'];?></p>
				</section>
				<?php 
							endwhile;
						endwhile;
					endwhile;
				?>
			</aside>
			<a class="btn" href="<?php echo $link;?>"><span><?php echo $action_name;?></span></a>
		</div>
		<div class="side-shadow right"></div>
	</div>
	<!--<nav class="secondary">
		<ul>
			<li class="on"><a href="../../press.html">Press Releases<span class="sp"></span></a></li>
		</ul>
	</nav>-->
</div>
<?php get_footer('about');?>