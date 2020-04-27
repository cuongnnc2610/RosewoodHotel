<?php 
    /*Template Name: Meetings and Events */
    $GLOBALS['ROSEWOOD']['boby_class'] = "r_t6a en";
    get_header('secondary');
?>
<div class="rw-main-container container">
	<?php 
		$hero_image = get_field('hero_image');
		$title = get_field('title');
		$content = get_field('content');
	?>
	<section class="intro-block-landing">
		<div class="hero-image-wrapper owl-carousel owl-theme image-description image-description--right">
			<div class="hero-image" style="background-image:url('<?php echo $hero_image['url'];?>');"></div>
		</div>
		<div class="content" id="content">
			<h1 class="title-deco"><?php echo $title;?></h1>
			<?php echo $content;?>
		</div>
	</section>
</div>
<div class="content">
	<form id="mainContent">
		<div class="controls">
			<div class="row row-0 clearfix">
				<?php $all = get_field('all');?>
				<div>
					<span class="label"></span>
					<div class="select" id="menuscontainer">
						<div class="txt"><?php echo $all;?></div>
						<div class="dropdown">
							<ul>
								<li><a href="#" data-txt="<?php echo $all;?>" data-id=""><?php echo $all;?></a></li>
								<?php 
									$count = 1;
									while( have_rows('regions') ): the_row();
										$region = get_sub_field('region');										
								?>
								<li>
									<span><?php echo $region;?></span>
									<ul>
										<?php 
											while( have_rows('countries') ): the_row();		
												$country = get_sub_field('country');
												$id_country = "row-" . $count;
										?>
										<li><a href="#" data-txt="<?php echo $country;?>" data-id="<?php echo $id_country;?>">- <?php echo $country;?></a></li>
										<?php $count++; ?>
										<?php endwhile; ?>
									</ul>
								</li>
								<?php endwhile;?>
							</ul>
						</div>
					</div>
				</div>
				<?php $action_name = get_field('action_name');?>
				<div><a href="#" class="button black-btn gtm-mne-rfp" data-locale="en-US"><?php echo $action_name;?></a></div>
			</div>
			<?php $selected = get_field('selected');?>
			<div class="row row-1"><?php echo $selected;?>:
				<?php 
					$count = 1;
					while( have_rows('regions') ): the_row();
						$region = get_sub_field('region');
						$id_region = str_replace(' ', '', $region);
						
				?>
				<span class="entry <?php echo $id_region;?>"><?php echo $region;?> (<span class="n"></span>) <a href="#" class="btn-remove" data-continent="<?php echo $id_region;?>">X</a></span>
				<?php endwhile;?>
			</div>
		</div>
		<table class="at-a-glance">
			<?php 
				$count = 1;
				while( have_rows('regions') ): the_row();
					$region = get_sub_field('region');
					$id_region = str_replace(' ', '', $region);
					$isFirst = true;
					while( have_rows('countries') ): the_row();		
						$country = get_sub_field('country');
						$id_country = "row-" . $count;
						$primary_or_secondary = ($isFirst == true) ? "primary" : "secondary";
					
			?>
			<tr class="head <?php echo $id_region;?> <?php echo $id_country;?> <?php echo $primary_or_secondary;?>">
				<th colspan="2">
					<h2 class="title-deco"><?php echo $region;?></h2>
					<h3><?php echo $country;?></h3>
				</th>
				<?php
					$numOfTitles = count(get_field('list_of_infomation_title'));
					$countTitle = 1;
					while( have_rows('list_of_infomation_title') ): the_row();
				?>
				<?php if($countTitle == $numOfTitles):?>
					<th width="70"><span><?php echo get_sub_field('title');?></span></th>
				<?php else: ?>
				<th><span><?php echo get_sub_field('title');?></span></th>
				<?php endif;?>
				<?php endwhile;?>
			</tr>
			<?php 
				$countHotel = 1;
				while( have_rows('hotels') ): the_row();
					$main_information = get_sub_field('main_information');
					$className = ($countHotel % 2 == 0) ? "even" : "odd";					
			?>
			<tr class="<?php echo $className;?> <?php echo $id_region;?> <?php echo $id_country;?>">
				<?php if($main_information['file']['url'] == ""):?>
				<th><span class="sr-only" aria-label="true">empty</span></th>
				<?php else:?>
				<th><a class="icon-pdf" href="<?php echo $main_information['file']['url'];?>?la=en"><span>PDF</span></a></th>
				<?php endif;?>
				<th><a href="<?php echo $main_information['link'];?>" class="arrow-link"><?php echo $main_information['name'];?><span></span></a><br /><?php echo $main_information['location'];?></th>

				<?php while( have_rows('detail_information') ): the_row();?>
					<td><?php echo get_sub_field('data');?></td>
				<?php endwhile;?>
				<td>
					<fieldset>
						<legend class="sr-only">choose option RTP</legend>
						<label class="sr-only" for="L489G">hotels <?php echo $main_information['id_hotel'];?></label><input type="checkbox" name="hotels" value="<?php echo $main_information['id_hotel'];?>" data-continent="<?php echo $id_region;?>" id="<?php echo $main_information['id_hotel'];?>" />
					</fieldset>
				</td>
			</tr>
			<?php $countHotel++; ?>
			<?php endwhile;?>
			<?php $isFirst = false;?>
			<?php endwhile;?>
			<?php endwhile;?>
		</table>
		<div class="controls">
			<div class="row row-0 clearfix">
				<div></div>
				<?php $action_name = get_field('action_name');?>
				<div><a href="#" class="button black-btn gtm-mne-rfp" data-locale="en-US"><?php echo $action_name;?></a></div>
			</div>
			<?php $selected = get_field('selected');?>
			<div class="row row-1"><?php echo $selected;?>:
				<?php 
					$count = 1;
					while( have_rows('regions') ): the_row();
						$region = get_sub_field('region');
						$id_region = str_replace(' ', '', $region);
						
				?>
				<span class="entry <?php echo $id_region;?>"><?php echo $region;?> (<span class="n"></span>) <a href="#" class="btn-remove" data-continent="<?php echo $id_region;?>">X</a></span>
				<?php endwhile;?>
			</div>
		</div>
		<div class="dialog" id="dialog-warning">
			<div class="content">
				<div class="btn-close"></div>
				<?php $warning_message = get_field('warning_message');?>
				<div class="txt">
					<p><?php echo $warning_message;?></p>
				</div>
				<div class="btn"><a class="button black-btn btn-ok" href="#">OK</a></div>
			</div>
		</div>
		<!--<div class="dialog" id="dialog-confirm">
			<div class="content">
				<div class="btn-close"></div>
				<div class="txt">
					<p>Are you sure you want to remove all the selections?</p>
				</div>
				<div class="btn"><a class="button black-btn btn-confirm" href="#">Yes</a> 
					<a class="button btn-ok" href="#">No</a>
				</div>
			</div>
		</div>-->
	</form>
</div>
<?php get_footer();?>