<?php 
    /*Template Name: Our Story */
    $GLOBALS['ROSEWOOD']['boby_class'] = "t24 en";
    get_header('secondary');
?>
<div class="container fixed" role="main" id="content">
	<nav class="secondary">
		<ul>
			<li>
				<a href="<?php echo get_permalink(625);?>"><?php echo get_the_title(625);?><span class="sp"></span></a>
			</li>
			<li class="on">
				<a href="<?php echo get_permalink(627);?>"><?php echo get_the_title(627);?><span class="sp"></span></a>
			</li>
			<li>
				<a href="<?php echo get_permalink(629);?>"><?php echo get_the_title(629);?><span class="sp"></span></a>
			</li>
			<li>
				<a href="<?php echo get_permalink(631);?>"><?php echo get_the_title(631);?><span class="sp"></span></a>
			</li>
			<li>
				<a href="<?php echo get_permalink(633);?>"><?php echo get_the_title(633);?><span class="sp"></span></a>
			</li>
		</ul>
	</nav>
	<div class="content shadow">
		<section class="breadcrumb">
			<h1 class="title" style = "text-transform: uppercase;"><?php single_post_title();?></h1>
		</section>
		<div class="side-shadow left"></div>
		<?php $introduction = get_field('introduction');?>
		<div class="intro">
			<p><?php echo $introduction;?></p>
		</div>

		<section class="main">
			<?php 
				while( have_rows('calendar') ): the_row();		
					$period_time = get_sub_field('period')['period_time'];
			?>
			<h2 id="<?php echo str_replace(' ', '', $period_time);?>" class="title expandable title-h3">
				<a href="#<?php echo str_replace(' ', '', $period_time);?>"><span class="sp"></span><?php echo $period_time;?></a>
			</h2>
			<section>
			<?php 
				while( have_rows('period') ): the_row();
					$counter = 1;
					while( have_rows('event') ): the_row();
						if ($counter % 2 == 0):
			?>
				<article class="even">
			<?php 		else:?>
				<article>
				<?php endif;?>
			<?php	if (get_sub_field('image')['url'] != ""):?>
					<img src="<?php echo get_sub_field('image')['url'];?>?h=150&amp;la=en&amp;w=220" alt="" width="220" height="150" />
			<?php endif;?>
					<div class="description">
						<p><?php echo get_sub_field('year');?><br /><?php echo get_sub_field('content');?></p>
					</div>
				</article>
			<?php $counter++;?>
			<?php 	endwhile;
				endwhile;
			?>
			</section>
			<?php endwhile;?>
			<section class="calendar notmobile">
				<ul>
					<?php 
						$counter = 1;
						while( have_rows('calendar') ): the_row();
							$num_of_fields = count(get_field('calendar'));		
							$period_time = get_sub_field('period')['period_time'];
							if ($counter == 1):
					?>
								<li>
									<a href="#<?php echo str_replace(' ', '', $period_time);?>" class="on"><?php echo $period_time;?></a>
								</li>
							<?php elseif ($counter == $num_of_fields):?>
								<li class="last">
									<a href="#<?php echo str_replace(' ', '', $period_time);?>"><?php echo $period_time;?></a>
								</li>
							<?php else:?>
								<li>
									<a href="#<?php echo str_replace(' ', '', $period_time);?>"><?php echo $period_time;?></a>
								</li>
					<?php 	endif;
							$counter++;
						endwhile; 
					?>
				</ul>
			</section>
		</section>
		<div class="side-shadow right"></div>
	</div>
</div>
<?php get_footer('about');?>