<?php 
/* Template Name: Tour Page
*
 * @package WordPress
 * @subpackage suntour
 * @since Twenty Fourteen 1.0?>
 */ 

get_header();
?>

<?php
$current_id = get_queried_object()->term_id;
$posts = get_posts(array(
	'numberposts' => 1,
	'meta_query' => array(
		array(
			
			'key' => 'featured',
			'compare' => '==',
			'value' => '1',
		)
	),
	'category' => $current_id
));

if( $posts ): ?>
<!-- trips -->
<div class="trips"> 
    <div class="container">
    	<?php foreach( $posts as $post ): 
		setup_postdata( $post )
		
		?>
        <div class="trips-agileinfo"> 
            <div class="col-xs-12 col-sm-6 col-md-6 trip-agileitsimg">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" alt="Featured: "> -->
                <?php if(has_post_thumbnail()): 
						$post_thumbnail_id = get_post_thumbnail_id();
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
					?>
		                <img src="<?php  echo $post_thumbnail_url; ?>" alt="Featured: " class="img-responsive">
		            <?php else: ?>
		            	<?php echo '<img src="'.get_template_directory_uri().'/images/about.jpg" alt="Featured: " class="img-responsive">' ?>
		            <?php endif; ?>
            </div> 
            <div class="col-xs-12 col-sm-6 col-md-6 trip-agileitstext welcome-w3lleft"> 
                <h3><?php __(the_title(), 'suntour'); ?></h3>
                <h5><?php __(the_author(), 'suntour'); ?></h5>
                <div class="sh-social">
                	<a class="fbs" href="#"><i class="fa fa-facebook"></i></a>
                	<a class="ggs" href="#"><i class="fa fa-google-plus"></i></a>
                </div>
                <p><?php __(the_excerpt(), 'suntour'); ?></p>
                <a href="#" class="find-about" data-toggle="modal" data-target="#feaModal<?php the_ID(); ?>"><?php echo __('Find out more','suntour') ?></a>
            </div> 
           
            <div class="clearfix"> </div>
        </div>
        <div class="modal fade" id="feaModal<?php the_ID(); ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><?php __(the_title(), 'suntour'); ?></h4>
                       <?php if(has_post_thumbnail()): 
									$post_thumbnail_id = get_post_thumbnail_id();
        							$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
								?>
					                <img src="<?php  echo $post_thumbnail_url; ?>" alt="Featured: " class="img-responsive">
					            <?php else: ?>
					            	<?php echo '<img src="'.get_template_directory_uri().'/images/about.jpg" alt="Featured: " class="img-responsive">' ?>
					            <?php endif; ?>
                        <h5><?php __(the_author(), 'suntour'); ?></h5>
                        <p><?php __(the_content(), 'suntour'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div> 
</div>
<!-- end trips -->
<?php wp_reset_postdata(); ?>
<?php endif; ?>

<!-- Latest post -->

<!-- //team -->
<script src="<?php echo get_template_directory_uri() ?>/js/scroll-me.min.js"></script>
<script>
	$(function(){
		// $('.team-grid').masonry({
		//   // options
		//   itemSelector: '.team-item',
		// });


	})
</script>
<!-- Latest post -->
 <?php
    $args = array( 'numberposts' => '4', 'category' => $current_id );
    $latest_query  = new WP_Query;
    $latest_query->query( array(
        'cat'  => $current_id,
        'posts_per_page'      => 4,
        'numberposts' => 4,
        'orderby'   => 'id',
        'order' => 'DESC'
    ));
?>
<?php if ($latest_query->have_posts()): ?>
<!-- Offers -->
<section class="boxes reviews" id="offers">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row"><!-- Wrapper -->
        	<div class="mid_wrapper owl-theme owl-carousel">
        		<?php while($latest_query->have_posts()): $latest_query->the_post();?>
        	    <!-- Item -->
	        	    <div class="bordered_block flex_block image_bck bordered_zoom height400">
	        	    	<a href="#" data-toggle="modal" data-target="latestModal<?php the_ID(); ?>">
	        	    	<?php 
	        	    		if(has_post_thumbnail()): 
								$post_thumbnail_id = get_post_thumbnail_id();
								$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
							else:
				            	 $post_thumbnail_url = get_template_directory_uri().'/images/about.jpg'; 
				      		endif; ?>
		        	        <div class="image_over image_bck" data-image="<?php echo $post_thumbnail_url; ?>"></div>
		        	        <a href="#" class="box_link"></a>
		        	        <div class="box_content offers-ct">
		        	            <h3><?php echo __(the_category()) ?> <i><?php the_title(); ?></i></h3>
		        	            <p><span class="btn"> <a class="find-about" href="#" data-toggle="modal" data-target="#latestModal<?php the_ID(); ?>"><?php echo __('Find out more', 'suntour') ?></a></span>
		        	            </p>
		        	        </div>
		        	    </a>
	        	    </div>
        		<?php endwhile; ?>
        	</div>
        	<!-- SHow modal content for each post -->
        	<?php while($latest_query->have_posts()): $latest_query->the_post();?>
	        	    <div class="modal fade" id="latestModal<?php the_ID(); ?>" tabindex="-1" role="dialog">
						<div class="modal-dialog">
						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4><?php __(the_title(), 'suntour'); ?></h4>
									<?php if(has_post_thumbnail()): 
										$post_thumbnail_id = get_post_thumbnail_id();
	        							$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
									?>
						                <img src="<?php  echo $post_thumbnail_url; ?>" alt="Featured: " class="img-responsive">
						            <?php else: ?>
						            	<?php echo '<img src="'.get_template_directory_uri().'/images/about.jpg" alt="Featured: " class="img-responsive">' ?>
						            <?php endif; ?>
					          
									<h5><?php __(the_author(), 'suntour'); ?></h5>
									<p><?php __(the_content(), 'suntour'); ?></p>
								</div>
							</div>
						</div>
					</div>
        	<?php endwhile; ?>
        	<!-- Wrapper End -->
        	</div>
    </div>
</section>
<!-- Offers End -->
<?php wp_reset_postdata(); ?>
<?php endif; ?>


<!--//News-->
<?php 
	$news_query  = new WP_Query;
    $news_query->query( array(
        'cat'                 => $current_id,
        'posts_per_page'      => 5,
        'no_found_rows'       => true,
        'ignore_sticky_posts' => true,
    ));
	if ($news_query->have_posts()):
?>
<!--Sales-->

<section class="boxes" id="sales">
    <div class="container-fluid">
        <!-- Title -->
        <h4 class="sml_abs_title wow fadeInUp">Sales</h4>
		<?php while ($news_query->have_posts()):
				$news_query->the_post();
			?>
        <div class="row">
        	<?php if(has_post_thumbnail()): 
				$post_thumbnail_id = get_post_thumbnail_id();
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				else:
					$post_thumbnail_url = '';
				endif;
			?>
            <div class="col-md-12 bordered_block grey_border image_bck" data-image="<?php echo $post_thumbnail_url; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 in-bb wow fadeInLeft">
                            <span class="great_title"><?php the_category(); ?></span>
                            <span class="great_subtitle great_subtitle_big"><?php the_title(); ?></span>
                            <span class="into_txt"><?php the_excerpt(); ?></span>
                            <br />
                            <a href="#" data-toggle="modal" data-target="#newsModal<?php the_ID(); ?>" class="btn btn-white">Read more</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="newsModal<?php the_ID(); ?>" tabindex="-1" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4><?php __(the_title(), 'suntour'); ?></h4>
						<?php if(has_post_thumbnail()): 
							$post_thumbnail_id = get_post_thumbnail_id();
							$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
						?>
			                <img src="<?php  echo $post_thumbnail_url; ?>" alt="Featured: " class="img-responsive">
			            <?php else: ?>
			            	<?php echo '<img src="'.get_template_directory_uri().'/images/about.jpg" alt="Featured: " class="img-responsive">' ?>
			            <?php endif; ?>
		          
						<h5><?php __(the_author(), 'suntour'); ?></h5>
						<p><?php __(the_content(), 'suntour'); ?></p>
					</div>
				</div>
			</div>
		</div>
   		<?php endwhile; ?>
        <!-- Row End -->
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<script type="text/javascript">
   	jQuery(function($){
	  $(".mid_wrapper").owlCarousel({
	  	nav : true,
	  	dots: false, 
	  	autoplay : true,  
	  	items:3,
	  	loop: true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive : {
		    // breakpoint from 0 up
		    0 : {
		        items: 1
		    },
		    // breakpoint from 480 up
		    600 : {
		        items: 2
		    },
		    // breakpoint from 768 up
		    991 : {
		       items: 3
		    }
		},
		autoplayHoverPause: true
	  });
});

</script>
        <!--Sales End-->
<?php get_footer(); ?>
