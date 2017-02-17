

<?php
/*
	Template Name: Home Page
*/

get_header(); ?>

<?php
	//Advanced Custom Fields
	$package1_title				= get_field('package1_title');
	$package1_text				= get_field('package1_text');
	$package1_price				= get_field('package1_price');
	$package2_title				= get_field('package2_title');
	$package2_text				= get_field('package2_text');
	$package2_price				= get_field('package2_price');
	$refer_friend_text			= get_field('refer_friend_text');
	$refer_friend_button_text	= get_field('refer_friend_button_text');
	$intro_heading				= get_field('intro_heading');
	$intro_first_sentence		= get_field('intro_first_sentence');
	$intro_description			= get_field('intro_description');
	$about_us_heading			= get_field('about_us_heading');
	$about_us_description		= get_field('about_us_description');
	$prices_heading				= get_field('prices_heading');
	$packages_heading			= get_field('packages_heading');
	$refer_friend_link_text		= get_field('refer_friend_link_text');
	$contact_us_banner_text		= get_field('contact_us_banner_text');
	$contact_us_banner_button_text	= get_field('contact_us_banner_button_text');
	$contact_us_heading = get_field('contact_us_heading');
	$contact_us_description = get_field('contact_us_description');
	$telephone_number = get_field('telephone_number');
	$facebook_username = get_field('facebook_username');
	$google_plus_username = get_field('facebook_username');
	$instagram_username = get_field('facebook_username');
	$faq_heading = get_field('faq_heading');

?>




    <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="2">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
		    		
		    		<div class="col-sm-5">
			    	
		    		</div><!-- col -->

		    		<div class="col-sm-7 hero-text">
			    		<h1><?php bloginfo('name'); ?></h1>
		    		</div><!-- col -->
		    		
		    		<div class="col-sm-5">
			    	
		    		</div><!-- col -->

		    		<div class="col-sm-7">
		    			<div id="price-timeline">
			            	<div class="price active">
			            		<h4><em>"<?php echo $package1_title; ?>"</em><br><?php echo $package1_text; ?></h4>
			            		<span><?php echo $package1_price; ?></span>
			            	</div><!-- end price -->
			            	<div class="price active">
			            		<h4><em><?php echo $package2_title; ?></em><br><?php echo $package2_text; ?></h4>
			            		<span><?php echo $package2_price; ?></span>
			            	</div><!-- end price -->
			            </div><!-- price-timeline -->
		    		</div>

    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>
	
	<!-- REFER A FRIEND
	================================================== -->
    <span class="anchor" id="referAnchor"></span>
    <section id="refer">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8">
					<p class="lead"><?php echo $refer_friend_text; ?></strong></p>
				</div><!-- end col -->
				
				<div class="col-sm-4">
					<button class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#myModal">
						<?php echo $refer_friend_button_text; ?>
					</button>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section><!-- optin --> 
	
	<!-- HOW WE CAN HELP YOU
	================================================== -->
	<section id="intro">
		<div class="container">
			
			<div class="section-header">
				<h2><?php echo $intro_heading; ?></h2>
			</div><!-- section-header -->
			
			<p class="lead"><?php echo $intro_first_sentence; ?></p>

			<p><?php echo $intro_description; ?></p>
		
		</div><!-- container -->
	</section><!-- boost-income --> 
    
    <!-- INSTRUCTOR
	================================================== -->
	<span class="anchor" id="instructorAnchor"></span>
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $about_us_heading; ?></h2>
						</div><!-- end col -->
					</div><!-- row -->
					
					<?php echo $about_us_description; ?>		
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor --> 
    
    <!-- PRICES AND PACKAGES
	================================================== -->
	<span class="anchor" id="pricesAnchor"></span>
	<section id="prices">
		<div class="container">
			<div class="col-sm-12">
				<div class="section-header">
					<h2><?php echo $prices_heading; ?></h2>
				</div><!-- section-header -->
				
				<div class="row">

					<?php $loop = new WP_Query( array(  'post_type' => 'lesson_prices', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="col-sm-3">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title"><?php the_title(); ?></h3>
						  </div>
						  <div class="panel-body">
						    <?php the_content(); ?>
						  </div>
						</div>
					</div><!-- end col -->

					<?php endwhile; ?>
					
				</div><!-- row -->
				<div class="row">

					<?php $loop = new WP_Query( array(  'post_type' => 'lesson_prices_large', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="col-sm-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title"><?php the_title(); ?></h3>
						  </div>
						  <div class="panel-body">
						    <?php the_content(); ?>
						  </div>
						</div>
					</div><!-- end col -->

					<?php endwhile; ?>
					
				</div><!-- row -->
			</div>

			<div class="col-sm-12" id="packages">
				<div class="section-header">
					<h2><?php echo $packages_heading; ?></h2>
				</div><!-- section-header -->
				
				<div class="row">
					
					<?php $loop = new WP_Query( array(  'post_type' => 'package_prices', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="col-sm-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title"><?php the_title(); ?></h3>
						  </div>
						  <div class="panel-body">
						    <?php the_content(); ?>
						  </div>
						</div>
					</div><!-- end col -->

					<?php endwhile; ?>
					
				</div><!-- row -->
			</div>
			<hr/>
			<div class="col-sm-12">
				<div class="row">
					<ul class="col-sm-6">

						<?php $loop = new WP_Query( array(  'post_type' => 'prices_bullets_col1', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

							<li><?php the_title(); ?></li>

						<?php endwhile; ?>

					</ul>
					<ul class="col-sm-6">
						
						<?php $loop = new WP_Query( array(  'post_type' => 'prices_bullets_col2', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

							<li><?php the_title(); ?></li>

						<?php endwhile; ?>

					</ul>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<p class="lead friend"><a data-toggle="modal" data-target="#myModal"><?php echo $refer_friend_link_text; ?></a></p>
					</div><!-- end col -->
				
			</div><!-- row -->
			</div>
		</div><!-- container -->
	</section><!-- course-features -->


<!-- CONTACT
	================================================== -->
	<span class="anchor" id="contactAnchor"></span>
	<section id="contact" data-type="background" data-speed="12" style="background-position: 50% 0px">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-7">
					<h2><?php echo $contact_us_banner_text; ?></h2>
					<p><a href="#contactFormAnchor" class="btn btn-lg btn-block btn-danger" title="Contact us"><?php echo $contact_us_banner_button_text; ?></a></p>
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- signup -->

<!-- CONTACT FORM
	================================================== -->

	<span class="anchor" id="contactFormAnchor"></span>
	<section id="contact-form">
		<div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $contact_us_heading; ?> | <a href="tel:<?php echo $telephone_number; ?>">Ph: <?php echo $telephone_number; ?></a></h2>
						</div><!-- end col -->
						<div class="col-lg-4">
							
							<?php if(!empty($facebook_username) ): ?>
							<a href="https://www.facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook" title="Facebook"></i></a>
							<?php endif; ?>

							<?php if(!empty($google_plus_username) ): ?>
							<a href="https://plus.google.com/u/0/<?php echo $google_plus_username; ?>" class="badge social gplus" target="_blank" title="Google +"><i class="fa fa-google-plus"></i></a>
							<?php endif; ?>

							<?php if(!empty($instagram_username) ): ?>
							<a href="https://www.instagram.com/<?php echo $instagram_username; ?>" class="badge social instagram" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
							<?php endif; ?>

						</div><!-- end col -->
					
					</div><!-- row -->
			    	
			    	<p class="lead"><?php echo $contact_us_description; ?></p>

			    	<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact Form"]' ); ?>
			    	
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
	</section><!-- boost-income -->

    
    <!-- FREQUENTLY ASKED QUESTIONS
	================================================== -->

	<span class="anchor" id="faqAnchor"></span>
	<div class="container" id="faq">
	<h2><?php echo $faq_heading; ?></h2>
    
	<?php echo do_shortcode("[WPSM_AC id=20]"); ?>

</div>
	
<?php get_footer(); ?>
