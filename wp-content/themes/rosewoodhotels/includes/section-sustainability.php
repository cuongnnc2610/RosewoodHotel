<?php 
    /*Template Name: Sustainability */
    $GLOBALS['ROSEWOOD']['boby_class'] = "t21 en";
    get_header('secondary');
?>
<div role="main" class="container fixed cs">
	<nav class="secondary">
		<ul>
			<li>
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
			<li class="on">
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
				<img class="responsive-img" src="<?php echo $image['url'];?>?mw=320" data-src768="<?php echo $image['url'];?>?mw=718" data-src1000="<?php echo $image['url'];?>?mw=960" alt="<?php single_post_title();?>" />
			</div>
			<section class="breadcrumb breadcrumb-mobile">
				<div class="title h1"><?php single_post_title();?></div>
			</section>
			<div class="main">
				<article>
					<?php 
						$post = get_post(633); 
						$content = apply_filters('the_content', $post->post_content); 
						echo $content;  
					?>
				</article>
			</div>
			<div class="side-shadow right"></div>
		</div>
	</section>
</div>
<?php get_footer('about');?>