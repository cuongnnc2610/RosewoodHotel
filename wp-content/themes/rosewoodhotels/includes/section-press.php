<?php 
    /*Template Name: Press */
    $GLOBALS['ROSEWOOD']['boby_class'] = "t24 en";
    get_header('secondary');
?>
<div class="container fixed" role="main" id="content">
	<div class="content shadow">
		<?php 
			$title = get_field('title');
			$introduction = get_field('introduction');
		?>
		<section class="breadcrumb">
			<h1 class="title"><?php echo $title;?></h1>
		</section>
		<div class="side-shadow left"></div>
		<div class="intro">
			<p><?php echo $introduction;?></p>
		</div>
		<section class="main">
			<!--<?php/*
				$categories = get_categories(array(
				    'orderby' => 'name',
				    'order'   => 'DESC'
				));
				$numOfCategories = count($categories);
				$count = 1;
				foreach($categories as $category) :*/
			?>-->
			<?php 						
				$years = get_presses_years_array();
				$numOfYears = count($years);
				$count = 1;
				foreach($years as $year) :
			?>
			<h2 id="<?php echo $year;?>" class="title expandable title-h3"><a href="#<?php echo $year;?>"><span class="sp"></span><?php echo $year;?></a></h2>
			<section>
				<?php
					$args = array(
						'post_type' => 'presses' ,
						'orderby' => 'date' ,
						'order' => 'DESC' ,
						'posts_per_page' => -1,
						//'cat'         => $category->term_id,
						'date_query' => array(
					    	array(
					            'year'  => $year
					        ),
						),
					  'paged' => get_query_var('paged')
					); 
					$q = new WP_Query($args);
					if ( $q->have_posts() ) { 
					  while ( $q->have_posts() ) {
					    $q->the_post();
				?>
						<article>
							<a href="<?= the_permalink();?>" class="arrow-link"><?php the_title(); ?><span></span></a>
							<div class="description"><?php echo get_the_date();?></div>
						</article>
				<?php
					  }
					}
				?>
			</section>
			<?php endforeach;?>
			<section class="calendar notmobile">
				<ul>
					<!--<?php/*
						$categories = get_categories(array(
						    'orderby' => 'name',
						    'order'   => 'DESC'
						));
						$numOfCategories = count($categories);
						$count = 1;
						foreach($categories as $category) {
							if($count == 1) {
								echo '<li><a href="#' . $category->term_id . '" class="on">' . $category->name . '</a></li>';
							}
							else if($count == $numOfCategories) {
								echo '<li class="last"><a href="#' . $category->term_id . '">' . $category->name . '</a></li>';
							}
							else {
								echo '<li><a href="#' . $category->term_id . '">' . $category->name . '</a></li>';
							}
							$count++;
						}
					*/?>-->
					<?php 						
						$years = get_presses_years_array();
						$numOfYears = count($years);
						$count = 1;
						foreach($years as $year) {
							if($count == 1) {
								echo '<li><a href="#' . $year . '" class="on">' . $year . '</a></li>';
							}
							else if($count == $numOfYears) {
								echo '<li class="last"><a href="#' . $year . '">' . $year . '</a></li>';
							}
							else {
								echo '<li><a href="#' . $year . '">' . $year . '</a></li>';
							}
							$count++;
						}
					?>
				</ul>
			</section>
		</section>
		<div class="side-shadow right"></div>
	</div>
	<!--<nav class="secondary">
		<ul>
			<li class="on"><a href="press.html">Press Releases<span class="sp"></span></a></li>
		</ul>
	</nav>-->
</div>
<?php get_footer('about');?>