<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

<div class="container-fluid contact-section1">
	<div class="row">
		<div class="col-xs-6 col-md-6 col-sm-6 contact-nav">
			<div class="title-head-section">
			    <h3><span class="contact-span">CONTACT US</span></h3>
			    <h4><a href="#">HOME</a>/ CONTACT US</h4>
			</div>
		</div>
		<div class="col-xs-6 col-md-6 col-sm-6 sign-plates">
		    <div class="page-head-main">
			   <h2>GREAT LOOKING</h2>
			   <h4>SIGN PLATES</h4>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid contact-section2">
	<div class="row">
		<div class="col-xs-12 col-md-7 col-sm-12 contact-form-section">
			<h2>CONTACT US RIGHT NOW</h2>
			<?php echo do_shortcode('[contact-form-7 id="102" title="Contact form"]');?>
		</div>
		<div class="col-xs-12 col-md-5 col-sm-12 address-details">
			<div class="adress-section">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/addr-img.png" class="img-responsive">
				<div class="addr-content">
				   <h4>ADDRESS:</h4>
				   <p>Zooom Engineering, Keerthanam Village, <br>Coimbatore, Tamilnadu - 641035</p>
				</div>
			</div>
			<div class="phone-section">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/phone-img.png" class="img-responsive">
				<div class="phone-content">
					<h4>PHONE:</h4>
				    <p>+91 99613 44444</p>
				    
				</div>
			</div>
			<div class="email-section">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/email-img.png" class="img-responsive">
				<div class="email-content">
					<h4>E-MAIL:</h4>
				    <p>info@ottokart.com</p>
				   
				</div>
			</div>
			<div class="contact-icons">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="col-xs-12 col-md-12 col-sm-12 contact-bottom">
			<h2><span class="our-span">OUR</span> LOCATION</h2>
		</div>

	</div>
</div>


<div class="container-fluid ">
	<div class="row">
		
	</div>
</div>

<?php
get_footer();
