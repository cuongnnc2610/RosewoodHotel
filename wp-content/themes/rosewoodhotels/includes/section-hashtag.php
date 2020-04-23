<?php 
    /*Template Name: Hash Tag */
    $GLOBALS['ROSEWOOD']['boby_class'] = "pt28b en";
    get_header('secondary');
?>
<div class="container fixed" role="main">
	<div class="content shadow">
		<div class="main" id="content">
			<?php 
				$instance = get_field('instance');
				$api_key = get_field('api_key');
			?>
			<div id="olapic_specific_widget"></div>
			<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/photorankstatics-a.akamaihd.net/743d2e78a76dedeb07e0745158547931/static/frontend/latest/build.min.js"  data-olapic="olapic_specific_widget" data-instance="<?php echo $instance;?>" data-apikey="<?php echo $api_key;?>" async="async"></script>
		</div>
	</div>
</div>
<?php get_footer('about');?>