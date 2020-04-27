<?php 
    /*Template Name: Sitemap */
    $GLOBALS['ROSEWOOD']['boby_class'] = "t19 en";
    get_header('secondary');
?>
<div class="container fixed" role="main">
	<section class="container">
		<div class="content shadow" id="content">
			<div class="side-shadow left"></div>
			<section class="breadcrumb">
				<h1 class="title" style="text-transform: uppercase;"><?php the_title();?></h1>
			</section>
			<div class="main">
				<?php 
					while( have_rows('pages') ): the_row();
						$titlePage = get_sub_field('title');
						$linkPage = get_sub_field('link');
				?>
				<section class="">
					<h2 class="title title-h3"><a href="<?php echo $linkPage;?>"><?php echo $titlePage;?></a></h2>
					<ul>
					<?php
						while( have_rows('sub_pages') ): the_row();
							$titleSubPage = get_sub_field('title');
							$linkSubPage = get_sub_field('link');
					?>				
						<li><a class="notmobile" href="<?php echo $linkSubPage;?>"><?php echo $titleSubPage;?></a></li>
					<?php endwhile;?>
					</ul>
				</section>
				<?php endwhile;?>
				<!--<section class="">
					<h2 class="title title-h3"><a href="meetings-and-events.html">MEETINGS & EVENTS</a></h2>
					<ul>
						<li><a href="meetings-and-events.html">Find a Venue</a></li>
						<li><a href="meetings-and-events/group-offers.html">Group Offer</a></li>
					</ul>
				</section>
				<section class="">
					<h2 class="title title-h3"><a href="luxury-weddings.html">WEDDINGS</a></h2>
					<ul>
						<li><a href="luxury-weddings.html">Overview</a></li>
						<li><a href="luxury-weddings/perfect-match.html">Offer</a></li>
						<li><a href="luxury-weddings_rw/inquiries.html" target="_blank">Inquiries</a></li>
					</ul>
				</section>
				<section class="col3">
					<h2 class="title title-h3"><a href="interests.html">INTERESTS</a></h2>
					<ul>
						<li><a href="interests/luxury-spa-resorts-and-hotels.html">Wellness</a></li>
						<li><a href="interests/luxury-golf-vacations.html">Golf</a></li>
						<li><a href="interests/luxury-family-hotels-and-resorts.html">Family</a></li>
						<li><a href="interests/luxury-beach-resorts-and-hotels.html">Beach</a></li>
						<li><a href="interests/a-sense-of-taste.html">A Sense of Taste</a></li>
					</ul>
				</section>
				<section class=" col4">
					<h2 class="title title-h3"><a href="about.html">ABOUT</a></h2>
					<ul>
						<li><a href="about/culture.html">Culture</a></li>
						<li><a href="about/story.html">Our Story</a></li>
						<li><a href="about/hotel-awards.html">Awards</a></li>
						<li><a href="about/sustainable-hotels-and-resorts.html">Substainability</a></li>
						<li><a>Team</a></li>
					</ul>
				</section>
				<section class="">
					<h2 class="title title-h3"><a href="media.html">MEDIA</a></h2>
					<ul>
						<li><a href="media/press.html">Press Releases</a></li>
					</ul>
				</section>
				<section class="col3">
					<h2 class="title title-h3"><a href="https://www.rosewoodhotelgroup.com/en-us/talent">CAREERS</a></h2>
					<ul>
						<li><a href="https://www.rosewoodhotelgroup.com/en-us/talent">Ways We Work</a></li>
						<li><a href="https://www.rosewoodhotelgroup.com/en-us/talent">Our People</a></li>
						<li><a href="https://www.rosewoodhotelgroup.com/en-us/talent">Your Career Path</a></li>
					</ul>
				</section>
				<section class="">
					<h2 class="title title-h3"><a href="luxury-hotel-offers.html">OFFERS</a></h2>
					<ul></ul>
				</section>
				<section class=" col4">
					<h2 class="title title-h3"><a>GALLERY</a></h2>
					<ul></ul>
				</section>
				<section class="col3">
					<h2 class="title title-h3"><a rel="noopener noreferrer" href="https://www.rosewoodhotels.com/conversations/category/curators/" target="_blank">ROSEWOOD CURATORS</a></h2>
					<ul></ul>
				</section>
				<section class="">
					<h2 class="title title-h3"><a rel="noopener noreferrer" href="https://usertest.synxis.com/xbe/rez.aspx?Chain=5159&amp;shell=gco" target="_blank">RESERVATIONS</a></h2>
					<ul></ul>
				</section>
				<section class="">
					<h2 class="title title-h3"><a href="developers.html">DEVELOPERS</a></h2>
					<ul></ul>
				</section>
				<section class="col3 col4">
					<h2 class="title title-h3"><a href="contact.html">CONTACT</a></h2>
					<ul></ul>
				</section>
				<section class="">
					<h2 class="title title-h3"><a href="newsletter-sign-up.html">RECEIVE NEWS & OFFERS</a></h2>
					<ul></ul>
				</section>
				<section class="">
					<h2 class="title title-h3"><a href="privacy-policy.html">PRIVACY POLICY</a></h2>
					<ul></ul>
				</section>
				<section class="col3">
					<h2 class="title title-h3"><a href="cookie-policy.html">COOKIE POLICY</a></h2>
					<ul></ul>
				</section>-->
			</div>
			<div class="side-shadow right"></div>
		</div>
	</section>
</div>
<?php get_footer('about');?>