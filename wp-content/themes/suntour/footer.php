
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="agileinfo_footer_bottom">
				<div class="col-md-6 agileinfo_footer_bottom_grid">
					<h6>Links</h6>
					<?php 
						 $args = array(
					        'orderby' => 'id',
					        'hide_empty'=> 0,
					        'number' => 5
					    );
						$categories = get_categories($args);
					 ?>
						<ul class="tag2 tag_agileinfo">
							<li><a href="/" class="scroll"><?php __('Home', 'suntour') ?></a></li>
							<?php foreach ($categories as $cat) : ?>
							<li><a href="" class="scroll"><?php echo __($cat->name, 'suntour') ?></a></li>
							<?php endforeach; ?>

							<!-- <li><a href="#services" class="scroll">Services</a></li>
							<li><a href="#team" class="scroll">Team</a></li>
							<li><a href="#news" class="scroll">News</a></li>
							<li><a href="#contact" class="scroll">Contact</a></li> -->
						</ul>
				</div>
				<div class="col-md-6 agileinfo_footer_bottom_grid">
					<h6>Follow Us</h6>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						<li><a href="#" class="facebook">
							  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="twitter"> 
							  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="instagram">
							  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="pinterest">
							  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
		</div>
		<div class="agileinfo_footer_bottom1">
				<h2><a href="index.html"><img alt="Suntour" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo"></a></h2>
				<p>© 2017 Suntour. All rights reserved <a href="<?php echo home_url(); ?>">Suntour</a></p>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- js -->
<?php wp_footer(); ?>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<!-- Calendar -->
				<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
 

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nicescroll.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<!--search-bar-->
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>	
<!--//search-bar-->

<!--responsiveslides js-->
<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
<!--responsiveslides js-->
<!-- flexSlider -->
					<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
<!--menu script-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/demo1.js"></script>
<!--//menu script-->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

<!--js for bootstrap working-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>