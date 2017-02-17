<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firstgeardriving
 */

?>

<?php wp_footer(); ?>

<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<p><a href="/"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-inverse.png" alt="First Gear School of Driving logo"></a></p>
			</div><!-- end col -->
			<div class="col-sm-9">
				<div class="col-sm-8">
					<?php

						wp_nav_menu ( array (


							'theme_location' => 'footer',
							'container' => 'nav',
							'menu_class' => 'list-unstyled list-inline'

						) );

					?>
				</div><!-- end col -->
				<div class="col-sm-4">
					<ul class="list-unstyled list-inline">
						<li class="pull-right">&copy; 2017 First Gear School of Driving</li>
					</ul>
				</div><!-- end col -->
			</div>
		</div><!-- container -->
	</footer>


	<!-- MODAL
	================================================== -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog container">
			<div class="modal-content row">
			
				<div class="modal-header col-sm-12">
					<button type="button" class="close" data-dismiss="modal"><span class="close" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h3 class="modal-title" id="myModalLabel"><i class="fa fa-address-card"></i> Refer a friend</h3>
				</div><!-- modal-header -->
				
				<div class="modal-body col-sm-12">
					<p>Simply enter your details and your friend's name, phone and email! As a thank you for referring your friend, we're going to give you a driving lesson, <em>for free!</em></p>

					<?php echo do_shortcode( '[contact-form-7 id="68" title="Refer a Friend Modal"]' ); ?>

				</div><!-- modal-body -->
				
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script
src="https://code.jquery.com/jquery-3.1.1.min.js"
integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
