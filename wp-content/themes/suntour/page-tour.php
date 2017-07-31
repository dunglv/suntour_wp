<?php 
/* Template Name: Tour Page
*
 * @package WordPress
 * @subpackage suntour
 * @since Twenty Fourteen 1.0?>
 */ 
?>

<?php
$posts = get_posts(array(
	'meta_query' => array(
		array(
			'key' => 'featured',
			'compare' => '==',
			'value' => '1'
		)
	)
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
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('post-thumbnail'); ?>
            	<?php else: ?>
            	<?php echo '<img src="'.get_template_directory_uri().'/images/img1.jpg" alt="Featured: ">' ?>
            <?php endif; ?>
            </div> 
            <div class="col-md-6 trip-agileitstext welcome-w3lleft"> 
                <h3><?php __(the_title(), 'suntour'); ?></h3>
                <h5><?php __(the_author(), 'suntour'); ?></h5>
                <p><?php __(the_excerpt(), 'suntour'); ?></p>
                <a href="#" class="find-about" data-toggle="modal" data-target="#feaModal<?php the_ID(); ?>">Find out more</a>
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
                       
                        <img src="<?php echo get_template_directory_uri(); ?>//images/modal1.jpg" alt="Featured" class="img-responsive">
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
<!--  <?php
    $args = array( 'numberposts' => '4' );
    $recent_posts = wp_get_recent_posts( $args );
    
    echo "<pre>";
    var_dump($recent_posts);
    echo "</pre>";
?>   -->
<?php if(count($recent_posts) > 0): ?>
<!--News-->
<div class="news" id="news">
	<div class="container">
		<div class="title-main-w3ls">
			<h3 class="title-w3-agile"><span>L</span>atest <span>N</span>ews</h3>
		</div>
		<div class="classes_wrapper">
		 	<div class="row class_box">
		 		<?php  foreach( $recent_posts as $recent ): ?>
 			  	<div class="col-md-6 classes-grid-w3ls">
					<div class="class_right">
						<h3><a href="#" data-toggle="modal" data-target="#myModal1"><?php echo __(get_the_category($recent['ID'])[0]->name, 'suntour'); ?><br><span><?php echo __($recent['post_title'], 'suntour'); ?></span></a></h3>
						<p class="w3_agileits_para"><?php echo __($recent['post_excerpt'], 'suntour'); ?></p>
						<a href="#" class="find-about" data-toggle="modal" data-target="#latestModal<?php echo $recent['ID']; ?>">Find out more</a>
					</div>
					<div class="class_left img1">
						<ul>
							<li>25</li>
							<li>Sep</li>
							<li>2017</li>
						</ul>
					</div>
				</div>
				<!-- Modal1 -->
				<div class="modal fade" id="latestModal<?php echo $recent['ID']; ?>" tabindex="-1" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4><?php echo __($recent['post_title'], 'suntour'); ?></h4>
								<img src="images/modal1.jpg" alt=" " class="img-responsive">
								<h5><?php echo __(get_the_category($recent['ID'])[0]->name, 'suntour'); ?></h5>
								<p><?php echo __($recent['post_content'], 'suntour'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<!-- //Modal1 -->
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<!--//News-->
<?php 
	$categories  = get_categories();
	$news_query  = new WP_Query;

	// echo "<pre>";
 //    var_dump($categories);
 //    echo "</pre>";
    if (count($categories) > 0):
    	foreach ( $categories as $news_cat ) :
	    $news_query->query( array(
	        'cat'                 => $news_cat->term_id,
	        'posts_per_page'      => 5,
	        'no_found_rows'       => true,
	        'ignore_sticky_posts' => true,
	    ));
   		if ($news_query->have_posts()):
   			# code...
   		
 ?>
	<!-- team -->
	<div class="team" id="team<?php echo $news_cat->cat_ID ?>">
		<div class="container">
			<div class="title-main-w3ls">
				<h3 class="title-w3-agile"><!-- <span>M</span>eet <span>O</span>ur <span>T</span>eam --><?php echo $news_cat->name ?></h3>
			</div>
			<div class="w3_testimonials_grids">
				<?php while ($news_query->have_posts()):
					$news_query->the_post();
				?>
				<div class="col-md-3 w3layouts_team_grid">
					<div class="agileits_grid w3_team_grid1">
						<figure class="effect-layla">
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" alt="Featured: "> -->
				                <?php if(has_post_thumbnail()): ?>
				                <?php the_post_thumbnail('post-thumbnail'); ?>
				            	<?php else: ?>
				            	<?php echo '<img src="'.get_template_directory_uri().'/images/about.jpg" alt="Featured: ">' ?>
				            <?php endif; ?>
							<img src="images/team1.jpg" alt=" " class="img-responsive" />
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
					<p><a href="#" class="find-about" data-toggle="modal" data-target="#feaModal9">Find out more</a></p>
				</div>
				<?php endwhile; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php endif; ?>
<?php endforeach; ?>
<!-- //team -->
<?php endif; ?>