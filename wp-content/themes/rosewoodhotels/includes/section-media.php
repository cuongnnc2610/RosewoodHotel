<?php 
    /*Template Name: Media */
    $GLOBALS['ROSEWOOD']['boby_class'] = "t27 en";
    get_header('secondary');
?>
<div class="container fixed cs" role="main" id="content">
	<div class="content shadow">
		<?php $main_section = get_field('main_section');?>
		<section class="breadcrumb">
			<h1 class="title"><?php echo $main_section['title'];?></h1>
		</section>
		<div class="side-shadow left"></div>
		<div class="intro">
			<p><?php echo $main_section['introduction'];?></p>
		</div>
		<div class="main">
			<?php $left_section = get_field('left_section');?>
			<section>
				<h2 class="title title-h3"><?php echo $left_section['title'];?></h2>
				<?php
					$args = array(
					  'post_type' => 'presses' ,
					  'orderby' => 'date' ,
					  'order' => 'DESC' ,
					  'posts_per_page' => 6,
					  'paged' => get_query_var('paged')
					);
					$q = new WP_Query($args);
					if ( $q->have_posts() ) { 
					  while ( $q->have_posts() ) {
					    $q->the_post();
				?>
						<article>
							<a href="<?= the_permalink();?>" class="arrow-link"><?php the_title(); ?><span></span></a>
							<p class="subtitle"><?php echo get_the_date();?></p>
						</article>
				<?php
					  }
					}
				?>
				<a class="btn" href="<?php echo $left_section['link'];?>"><span><?php echo $left_section['action_name'];?></span></a>
			</section>
			<?php 
				$right_section = get_field('right_section', 527);
				$section_1 = $right_section['section_1'];
				$section_2 = $right_section['section_2'];
				$section_3 = $right_section['section_3'];
			?>
			<aside>
				<h3 class="title"><?php echo $right_section['title'];?></h3>
				<article>
					<h4><a class="arrow-link lightbox-link" data-class="t29 nofixed" href="#contacts"><?php echo $section_1['title'];?><span aria-label="external link icon"></span></a></h4>
					<p><em><?php echo $section_1['introduction'];?></em></p>
				</article>
				<article>
					<h4><a class="arrow-link lightbox-link" data-class="t29 nofixed" href="#rosewood-media-kit"><?php echo $section_2['title'];?><span aria-label="external link icon"></span></a></h4>
					<p><em><?php echo $section_2['introduction'];?></em></p>
				</article>
				<article>
					<h4><a class="external-link" href="<?php echo $section_3['link'];?>" target="_blank"><?php echo $section_3['title'];?><span aria-label="external link icon"></span></a></h4>
					<p><?php echo $section_3['introduction'];?></p>
				</article>
			</aside>
		</div>
		<div class="side-shadow right"></div>
	</div>
	<!--<nav class="secondary">
		<ul>
			<li><a href="media/press.html">Press Releases<span class="sp"></span></a></li>
		</ul>
	</nav>-->
</div>
<section class="lightbox-overlay"></section>
<section class="lightbox">
	<a href="#" class="close-btn sp sprite-btn_popup_close"><span class="sr-only">button close popup</span>Close</a>
	<div class="scrollbar">
		<div></div>
	</div>
	<div class="scrolling_area"></div>
	<div class="wrapper">
		<div class="lightbox-container">
			<div class="lightbox-content"></div>
		</div>
	</div>
</section>
<section class="hidden" id="contacts">
	<div class="innerwrap horizontal&#xD;&#xA;">
		<h2 class="title box-title"><?php echo $section_1['title'];?></h2>
		<div class="box-intro">
			<p><?php echo $section_1['introduction'];?></p>
		</div>
		<div class="cols-3">
			<div class="cols-3">
				<?php 
					while( have_rows('right_section', 527) ): the_row();
						while( have_rows('section_1') ): the_row();
							while( have_rows('region') ): the_row();
								$name = get_sub_field('name');
								$information = get_sub_field('information');
				?>
				<h2 class="title title"><?php echo $name;?></h2>
				<div class="cf">
					<section class="country">
						<div class="properties">
							<div class="property p1 odd">
								<h3 class="title"><?php echo $information['person'];?></h3>
								<div class="description">
									<p><?php echo $information['communication'];?><br />E:<a href="mailto:<?php echo $information['email'];?>"><?php echo $information['email'];?></a><br />T:<?php echo $information['phone'];?></p>
								</div>
							</div>
						</div>
					</section>
				</div>
				<?php 
							endwhile;
						endwhile;
					endwhile;
				?>
			</div>
		</div>
	</div>
</section>
<section class="hidden" id="rosewood-media-kit">
	<div class="innerwrap horizontal&#xD;&#xA;">
		<h2 class="title box-title"><?php echo $section_2['main_title'];?></h2>
		<div class="boxes-intro">
			<?php 
				while( have_rows('right_section', 527) ): the_row();
					while( have_rows('section_2') ): the_row();
						while( have_rows('file') ): the_row();
							$title = get_sub_field('title');
							$link = get_sub_field('link')['url'];
			?>
			<div class="box-intro">
				<h3><a class="arrow-link" href="<?php echo $link;?>?la=en"><?php echo $title;?><span></span></a></h3>
				<p></p>
			</div>
			<?php 
						endwhile;
					endwhile;
				endwhile;
			?>
		</div>
		<div class="box-intro">
			<h3 class="title"><?php echo $section_2['title'];?></h3>
			<p><?php echo $section_2['introduction'];?></p>
		</div>
		<div class="cols-3">
			<?php 
				while( have_rows('right_section', 527) ): the_row();
					while( have_rows('section_2') ): the_row();
						while( have_rows('region') ): the_row();
							$title = get_sub_field('title');
							
			?>
			<h2 class="title title"><?php echo $title;?></h2>
			
			<div class="cf">
				<?php while( have_rows('country') ): the_row();?>
				<section class="country">
					<div class="title">
						<h3 class="title"><?php echo get_sub_field('name');?></h3>
					</div>
					<div class="properties">
						<?php 
							$count = 1;
							while( have_rows('hotel') ): the_row();
								if($count == 1) $className = "property p1 odd";
								if($count == 2) $className = "property";
								if($count == 3) $className = "property odd";
								if($count == 4) $className = "property p1";
								if($count == 5) $className = "property odd";
								if($count == 6) $className = "property";
						?>
						<div class="<?php echo $className;?>">
							<h3 class="title"><a href="<?php echo get_sub_field('link');?>" class="arrow-link"><?php echo get_sub_field('name');?><span></span></a></h3>
						</div>
						<?php 
								$count++;
								if ($count == 7) $count = 1;
							endwhile;
						?>

					</div>
				</section>
				<?php endwhile;?>
			</div>
			<?php 
						endwhile;
					endwhile;
				endwhile;
			?>
		</div>
	</div>
</section>
<section class="hidden" id="digital-library">
	<div class="innerwrap horizontal&#xD;&#xA;">
		<h2 class="title box-title"><?php echo $section_3['title'];?></h2>
		<div class="cols-3">
			<div class="cols-3"></div>
		</div>
	</div>
</section>
<?php get_footer('about');?>