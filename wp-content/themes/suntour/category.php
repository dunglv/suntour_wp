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
            <div class="col-md-6 trip-agileitsimg">
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
            <div class="col-md-6 trip-agileitstext welcome-w3lleft"> 
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
	
    // $recent_posts = wp_get_recent_posts( $args );
    
    // echo "<pre>";
    // var_dump(the_post());
    // echo "</pre>";
    // die;
?>  
<?php if ($latest_query->have_posts()): ?>
<!--News-->
<div class="news" id="news">
	<div class="container">
		<div class="title-main-w3ls">
			<h3 class="title-w3-agile"><?php echo __('<span>L</span>atest <span>N</span>ews', 'suntour') ?></h3>
		</div>
		<div class="classes_wrapper">
		 	<div class="row class_box">
		 		<?php while($latest_query->have_posts()): $latest_query->the_post();?>
 			  	<div class="col-md-6 classes-grid-w3ls news-item">
					<div class="class_right lt-ex">
						<h3><a href="#" data-toggle="modal" data-target="#myModal1"><?php __(the_author(), 'suntour'); ?><br><span><?php __(the_title(), 'suntour'); ?></span></a></h3>
						<p class="w3_agileits_para"><?php $excerpt = the_excerpt();
						$excerpt = substr( $excerpt , 0, 50); __($excerpt, 'suntour') ?></p>
						<a href="#" class="find-about" data-toggle="modal" data-target="#latestModal<?php the_ID(); ?>"><?php echo __('Find out more', 'suntour') ?></a>
					</div>

					<div class="class_left img1 lt-thumb">
						<?php if(has_post_thumbnail()): 
									$post_thumbnail_id = get_post_thumbnail_id();
        							$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
								?>
					                <img src="<?php  echo $post_thumbnail_url; ?>" alt="Featured: " class="img-responsive">
					            <?php else: ?>
					            	<?php echo '<img src="'.get_template_directory_uri().'/images/about.jpg" alt="Featured: " class="img-responsive">' ?>
					            <?php endif; ?>
						<ul>
							<li><?php echo  __(get_the_date('d'), 'suntour'); ?></li>
							<li><?php echo  __(get_the_date('m'), 'suntour'); ?></li>
							<li><?php echo __(get_the_date('Y'), 'suntour'); ?></li>
						</ul>
					</div>
				</div>
				<!-- Modal1 -->
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
				<!-- //Modal1 -->
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<!--//News-->
<?php 
	$news_query  = new WP_Query;

	// echo "<pre>";
 //    var_dump($categories);
 //    echo "</pre>";
	    $news_query->query( array(
	        'cat'                 => $current_id,
	        'posts_per_page'      => 5,
	        'no_found_rows'       => true,
	        'ignore_sticky_posts' => true,
	    ));
   		if ($news_query->have_posts()):
   			# code...
   		
 ?>
	<!-- team -->
	<div class="team scrollme" id="team<?php echo $news_cat->cat_ID ?>" class="animateme"
      data-when="span"
      data-from="0"
      data-to="1"
      data-easing="easeinout"
      data-rotatey="360">
		<div class="container">
			
			<div class="w3_testimonials_grids team-grid">
				<?php while ($news_query->have_posts()):
					$news_query->the_post();
				?>
				<div class="col-md-3 w3layouts_team_grid team-item">
					<div class="agileits_grid w3_team_grid1">
						<figure class="effect-layla">
			                <?php if(has_post_thumbnail()): 
								$post_thumbnail_id = get_post_thumbnail_id();
    							$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
							?>
				                <img src="<?php  echo $post_thumbnail_url; ?>" alt="Featured: " class="img-responsive">
				            <?php else: ?>
				            	<?php echo '<img src="'.get_template_directory_uri().'/images/about.jpg" alt="Featured: " class="img-responsive">' ?>
				            <?php endif; ?>
				         
							<figcaption>
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
								</ul>
							</figcaption>			
						</figure>
					</div>
					<h4><?php the_title(); ?></h4>
					<p><?php the_author(); ?></p>
					<p><a href="#" class="find-about" data-toggle="modal" data-target="#allModal<?php the_ID(); ?>"><?php echo __('Find out more', 'suntour') ?></a></p>
				</div>
				<!-- Modal1 -->
				<div class="modal fade" id="allModal<?php the_ID(); ?>" tabindex="-1" role="dialog">
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
								<h5><?php __(the_category(), 'suntour'); ?></h5>
								<p><?php __(the_content(), 'suntour'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<!-- //Modal1 -->
				<?php endwhile; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
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
<?php get_footer(); ?>
