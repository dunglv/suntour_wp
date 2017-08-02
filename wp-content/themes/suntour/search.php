<?php get_header(); ?>
<!--News-->
<div class="news" id="news">
        <div class="container">
                <div class="title-main-w3ls">
                        <h3 class="title-w3-agile"><?php echo __('<span>R</span>esults <span>S</span>earch: <span>', 'suntour') ?><?php the_search_query(); ?></span></h3>
                </div>
                <?php if (have_posts()): ?>
                <div class="classes_wrapper">
                        <div class="row class_box">
                                <?php while(have_posts()): the_post();?>
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
                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                <div class="classes_wrapper">
                        <p>No results found</p>
                </div>
                <?php endif; ?>
        </div>
</div>
<?php get_footer(); ?>