<?php 
    /*Template Name: Awards */
    $GLOBALS['ROSEWOOD']['boby_class'] = "t24 en";
    get_header('secondary');
?>
<div class="container fixed" role="main" id="content">
	<nav class="secondary">
		<ul>
			<li>
				<a href="<?php echo get_permalink(625);?>"><?php echo get_the_title(625);?><span class="sp"></span></a>
			</li>
			<li>
				<a href="<?php echo get_permalink(627);?>"><?php echo get_the_title(627);?><span class="sp"></span></a>
			</li>
			<li class="on">
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
				$counter = 1;
				while( have_rows('calendar') ): the_row();		
			?>
					<h2 id="<?php echo get_sub_field('year');?>" class="title expandable title-h3"><a href="#<?php echo get_sub_field('year');?>"><span class="sp"></span><?php echo get_sub_field('year');?></a></h2>
					<?php echo get_sub_field('content');?>

			<?php endwhile;?>
			<section class="calendar notmobile">
				<ul>
					<?php 
						$counter = 1;
						while( have_rows('calendar') ): the_row();
							$num_of_fields = count(get_field('calendar'));		
							$year = get_sub_field('year');
							if ($counter == 1):
					?>
								<li>
									<a href="#<?php echo $year;?>" class="on"><?php echo $year;?></a>
								</li>
							<?php elseif ($counter == $num_of_fields):?>
								<li class="last">
									<a href="#<?php echo $year;?>"><?php echo $year;?></a>
								</li>
							<?php else:?>
								<li>
									<a href="#<?php echo $year;?>"><?php echo $year;?></a>
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