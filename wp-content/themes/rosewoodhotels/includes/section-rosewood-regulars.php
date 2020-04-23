<?php
	/*Template Name: Rosewood Regulars */
	$GLOBALS['ROSEWOOD']['boby_class'] = "pt28 en";
	get_header('secondary');
?>
<div class="container fixed" role="main">
	<div class="content shadow" id="content">
		<div class="main">
			<section class="hidden gallery-pop-up-mobile" id="gallery-pop-up-mobile">
				<div class="gallery-pop-up-list">
					<div class="gallery-source-container swiper-container">
						<ul class="gallery_source swiper-wrapper clearfix autoHeight">
							<?php 
								while( have_rows('gallery_swiper') ): the_row();
									$image = get_sub_field('image')['url'];
									$description = get_sub_field('description');
									$type = get_sub_field('type');
									if ($type == "Horizontal") $type = "h=361&amp;la=en&amp;mw=768&amp;w=768";
									else $type = "h=940&amp;la=en&amp;mw=768&amp;w=726";
							?>
							<li class="main-visual2 swiper-slide">
								<div class="image-container2">
									<div class="image-src2">
										<img src="<?php echo $image;?>?<?php echo $type;?>" alt="Rosewood Hong Kong" width="768" height="361" data-url="/en/default" data-description="<?php echo $description;?>" data-name="<?php echo get_field('website_title', 70);?>" data-src="<?php echo $image;?>" data-video-src="/en/-/media/0DE95AE441AB4D019EB067441B7C2450.ashx" />
										<a href="#" class="sp-gallery sp-left-arrow-white mobile-main-visual-prev-fake"><span class="sr-only" aria-label="true">arrow prev</span></a>
										<a href="#" class="sp-gallery sp-right-arrow-white mobile-main-visual-next-fake"><span class="sr-only" aria-label="true">arrow next</span></a>
									</div>
									<div class="images-details2">
										<div class="description">
											<a href="default.html" target="_blank">
												<div class="h1">
													<span class="sr-only" aria-label="true">sp arrow textlink</span><?php echo get_field('website_title', 70);?><span class="sp-gallery sp-arrow_textlink_white_right"></span>
												</div>
											</a>
											<p><?php echo $description;?></p>
										</div>
										<div class="share clearfix">
											<a href="#" class="facebook" target="_blank"><span class="sr-only" aria-label="true">society icon</span><span class="sp-gallery sp-share_facebook_white"></span></a>
											<a href="#" class="twitter" target="_blank"><span class="sr-only" aria-label="true">society icon</span><span class="sp-gallery sp-share_twitter_white"></span></a>
											<a href="#" class="pinterest" target="_blank" data-pin-custom="true" data-pin-do="buttonPin"><span class="sr-only" aria-label="true">society icon</span><span class="sp-gallery sp-share_pinterest_white"></span></a>
										</div>
									</div>
								</div>
							</li>
							<?php endwhile;?>
						</ul>
						<a href="#" class="mobile-main-visual-prev"><span class="sr-only" aria-label="true">arrow prev</span></a>
						<a href="#" class="mobile-main-visual-next"><span class="sr-only" aria-label="true">arrow prev</span></a>
					</div>
				</div>
			</section>
			<section class="hidden" id="gallery-pop-up">
				<div class="gallery-pop-up-outer">
					<div class="gallery-pop-up-container clearfix">
						<div class="gallery-pop-up-main">
							<div class="main-visual">
								<div class="image-container">
									<div class="image-content">
										<div class="image-src"></div>
										<div class="images-details">
											<div class="description">
												<a href="#" target="_blank">
													<div class="h1"><span class="sr-only" aria-label="true">title popup</span></div>
												</a>
												<p></p>
											</div>
											<div class="share clearfix">
												<a href="#" class="facebook" target="_blank"><span class="sr-only" aria-label="true">society icon</span><span class="sp-gallery sp-share_facebook_white"></span></a>
												<a href="#" class="twitter" target="_blank"><span class="sr-only" aria-label="true">society icon</span><span class="sp-gallery sp-share_twitter_white"></span></a>
												<a href="#" class="pinterest" target="_blank" data-pin-custom="true" data-pin-do="buttonPin"><span class="sr-only" aria-label="true">society icon</span><span class="sp-gallery sp-share_pinterest_white"></span></a>
											</div>
										</div>
									</div>
								</div>
								<a href="#" class="sp-gallery sp-arrow_left_big main-visua-prev"><span class="sr-only" aria-label="true">arrow prev</span></a>
								<a href="#" class="sp-gallery sp-arrow_right_big main-visua-next"><span class="sr-only" aria-label="true">arrow next</span></a>
							</div>
							<div class="gallery-pop-up-list">
								<a href="#" class="gallery-source-prev">
								<span class="sr-only" aria-label="true">arrow prev</span><span class="sp-gallery sp-arrow_left_transparent"></span>
								</a>
								<div class="gallery-source-container">
									<ul class="gallery_source">
										<?php 
											while( have_rows('gallery_swiper') ): the_row();
												$image = get_sub_field('image')['url'];
												$description = get_sub_field('description');
												$type = get_sub_field('type');
												if ($type == "Horizontal") $type = "h=361&amp;la=en&amp;mw=768&amp;w=768";
												else $type = "h=940&amp;la=en&amp;mw=768&amp;w=726";
										?>
										<li data-src="<?php echo $image;?>" data-name="<?php echo $description;?>">
											<a href="#">
											<img src="<?php echo $image;?>?<?php echo $type;?>" alt="<?php echo get_field('website_title', 70);?>" width="768" height="361" data-url="/en/default" data-description="<?php echo $description;?>" data-name="<?php echo get_field('website_title', 70);?>" data-src="<?php echo $image;?>" data-video-src="/en/-/media/0DE95AE441AB4D019EB067441B7C2450.ashx" />
											<span class="sr-only" aria-label="true">link image</span>
											</a>
										</li>
										<?php endwhile;?>
									</ul>
								</div>
								<a href="#" class="gallery-source-next"><span class="sr-only" aria-label="true">arrow next</span><span class="sp-gallery sp-arrow_right_transparent"></span></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="pt28_gallery">
				<?php $page_content = get_field('page_content');?>
				<section class="pt28_gallery_container" data-module="pt28_gallery" data-resize="mobile">
					<h1 class="title"><?php echo $page_content['title'];?></h1>
					<div class="gallery-container">
						<?php 
							$isPageContentShowed = false;
							$numOfRows = count(get_field('gallery_swiper'));
							$count = 1;
							$isOdd = true;
							$isClosed = true;
							while( have_rows('gallery_swiper') ): the_row();
								$image = get_sub_field('image')['url'];
								$description = get_sub_field('description');
								$type = get_sub_field('type');
								if ($type == "Horizontal") $type = "h=361&amp;la=en&amp;mw=768&amp;w=768";
								else $type = "h=940&amp;la=en&amp;mw=768&amp;w=726";
						?>
						<?php if ($isOdd == true && $count == 1):?>
						<div class="gallery-group clearfix odd ">
							<div class="gallery-group-column columnA clearfix">
						<?php $isClosed = false; endif;?>
						<?php if ($isOdd == false && $count == 1):?>
						<div class="gallery-group clearfix even ">
							<div class="gallery-group-column columnA clearfix">
						<?php $isClosed = false; endif;?>
								<?php if ($isPageContentShowed == false):?>
								<div class="gallery-block b<?php echo $count;?> rw">
									<div class="rw-wrapper">
										<div class="rw-inner">
											<p><?php echo $page_content['content'];?></p>
											<a href="<?php echo $page_content['link'];?>" class="" target="_self"><span><?php echo $page_content['action_name'];?></span></a>
										</div>
									</div>
								</div>
								<?php $isPageContentShowed = true; $count++; endif;?>
								<div class="gallery-block b<?php echo $count;?> image">
									<img src="<?php echo $image;?>?<?php echo $type;?>" alt="Rosewood Hong Kong" width="768" height="361" data-url="/en/default" data-description="Generational" data-name="Rosewood Hotels and Resorts" data-src="<?php echo $image;?>" />
									<div class="gallery-image-overlay">
										<div class="gallery-image-overlay-table">
											<div class="gallery-image-overlay-cell">
												<div class="gallery-image-overlay-content">
													<div class="image-hover">
														<div class="table">
															<div class="cell"><a href="#" class="facebook" target="_blank"><span class="sr-only" aria-label="true">society icon</span><span class="sp-gallery sp-share_facebook_white"></span></a></div>
															<div class="cell"><a href="#" target="_blank" class="twitter"><span class="sr-only" aria-label="true">society icon</span><span class="sp-gallery sp-share_twitter_white"></span></a></div>
															<div class="cell"><a class="pinterest" data-pin-custom="true" data-pin-do="buttonPin" href="#" target="_blank"><span class="sr-only" aria-label="true">society icon</span><span class="sp-gallery sp-share_pinterest_white"></span></a></div>
															<div class="cell mobile-enlarge-btn-cell"><a href="#" class="mobile-enlarge-btn"><span class="sr-only" aria-label="true">icons</span><span class="sp-gallery sp-enlarge_black"></span></a></div>
														</div>
													</div>
													<div class="video-hover"><a href="#" class=""><span class="sr-only" aria-label="true">icons</span></a></div>
												</div>
											</div>
										</div>
										<a href="javascript:void(0);" class="enlarge-btn change-focus" alt="<?php echo $description;?>" aria-label="<?php echo $description;?>"><span style="display:none;"><?php echo $description;?></span></a>
									</div>
								</div>
								<?php $count++;?>
						<?php if ($count == 7): ?>
							</div>
						</div>
						<?php $isOdd = !$isOdd; $count = 1; $isClosed = true; endif;?>
						<?php endwhile;?>
						<?php if ($isClosed == false): ?>
							</div>
						</div>
						<?php endif;?>
						<div class="gallery-loading-more hidden">
							<div class="gallery-loading-more-images"></div>
						</div>
						<div class="gallery-discover-more-wrapper">
							<div class="gallery-discover-more-table">
								<div class="gallery-discover-more-cell">
									<div class="gallery-discover-more"><a>Discover More<span class="sp-gallery sp-arrow_down_grey"></span></a></div>
								</div>
							</div>
						</div>
					</div>
					<a id="gallery-pop-up-btn-mobile" href="#gallery-pop-up-mobile" class="lightbox-link" data-class="nofixed gallery"><span class="sr-only" aria-label="true">popup gallery</span></a><a id="gallery-pop-up-btn" href="#gallery-pop-up" class="lightbox-link" data-class="nofixed gallery"><span class="sr-only" aria-label="true">popup gallery</span></a>
				</section>
			</section>
		</div>
	</div>
</div>
<section class="lightbox-overlay"></section>
<section class="lightbox">
	<a href="#" class="close-btn sp sprite-btn_popup_close">Close</a>
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
<?php get_footer('about');?>