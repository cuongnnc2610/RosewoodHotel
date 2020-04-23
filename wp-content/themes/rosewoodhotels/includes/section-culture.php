<?php 
    /*Template Name: Culture */
    $GLOBALS['ROSEWOOD']['boby_class'] = "t21 en";
    get_header('secondary');
?>
<div role="main" class="container fixed cs">
	<nav class="secondary">
		<ul>
			<li class="on">
				<a href="<?php echo get_permalink(625);?>"><?php echo get_the_title(625);?><span class="sp"></span></a>
			</li>
			<li>
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
	<section class="container">
		<div class="content shadow" id="content">
			<div class="side-shadow left"></div>
			<section class="breadcrumb">
				<h1 class="title" style = "text-transform: uppercase;"><?php single_post_title();?></h1>
			</section>
			<?php $image = get_field('image');?>
			<div class="banner">
				<img class="responsive-img" src="<?php echo $image['url'];?>?mw=320" data-src768="<?php echo $image['url'];?>?mw=718" data-src1000="<?php echo $image['url'];?>?mw=960" alt="Culture" />
			</div>
			<?php $introduction = get_field('introduction');?>
			<section class="breadcrumb breadcrumb-mobile">
				<div class="title h1"><?php single_post_title(); ?></div>
			</section>
			<div class="main">
				<article class="intro">
					<h2 class="title title"><?php echo $introduction['title'];?></h2>
					<div class="description">
						<p><?php echo $introduction['sub_title'];?></p>
						<p><?php echo $introduction['content'];?></p>
					</div>
				</article>
				<?php $principles = get_field('principles');?>
				<article>
					<h3><?php echo $principles['title'];?></h3>
					<p><?php echo $principles['description'];?></p>
					<?php 
						while( have_rows('principles') ): the_row();
							while( have_rows('principle') ): the_row();
					?>
								<p><strong><?php echo get_sub_field('aspect');?>:</strong> <?php echo get_sub_field('content');?></p>
							<?php endwhile;?>
					<?php endwhile;?>
				</article>
			</div>
			<div class="side-shadow right"></div>
		</div>
	</section>
</div>
<?php get_footer('about');?>