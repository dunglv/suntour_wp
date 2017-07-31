<?php get_header(); ?>
<!--News-->
<div class="news" id="news">
        <div class="container">
                <div class="title-main-w3ls">
                        <h3 class="title-w3-agile"><span>R</span>sults <span>S</span>search: <span>  <?php the_search_query(); ?></span></h3>
                </div>
                <?php if (have_posts()): ?>
                <div class="classes_wrapper">
                        <div class="row class_box">
                                <?php while(have_posts()): the_post();?>
                                <div class="col-md-6 classes-grid-w3ls">
                                        <div class="class_right">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal1"><?php __(the_author(), 'suntour'); ?><br><span><?php __(the_title(), 'suntour'); ?></span></a></h3>
                                                <p class="w3_agileits_para"><?php __(the_excerpt(), 'suntour'); ?></p>
                                                <a href="#" class="find-about" data-toggle="modal" data-target="#latestModal<?php the_ID(); ?>">Find out more</a>
                                        </div>
                                        <div class="class_left img1">
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
                                                                <?php if(has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('post-thumbnail'); ?>
                                                <?php else: ?>
                                                <?php echo '<img src="'.get_template_directory_uri().'/images/team1.jpg" alt="Featured: " class="img-responsive">  ' ?>
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