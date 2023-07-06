<?php
/**
 * Template Name: homepage template
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kibria
 */

get_header();
?>











      <header id="home" class="masthead" style="background: url(<?php bloginfo('template_directory')?>/assets/img/header-bg.jpg);">
            <div class="container">
                <div class="masthead-subheading"><?php echo get_field('banner_subtitle') ?></div>
                <div class="masthead-heading text-uppercase"><?php echo get_field('banner_title') ?></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <div class="col-lg-4">
                            <div class="team-member">

                                <?php 

                                echo the_post_thumbnail('post-thumbnail', ['class' => 'mx-auto rounded-circle', 'title' => 'Team Member Image']);

                                ?>
                                <h4><?php echo the_title() ?></h4>
                                <p class="text-muted"><?php echo the_content() ?></p>
                                <a class="btn btn-dark btn-social mx-2" href="<?php echo get_field('twitter2') ?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="<?php echo get_field('facebook2') ?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="<?php echo get_field('linkedin2') ?>"><i class="fab fa-linkedin-in"></i></a>
                                
                            </div>
                        </div>
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <!-- read all information from database -->

                    <?php  

                    $loop = new WP_Query(array(
                        'post_type' => 'service',
                        'orderby'   => 'post_id',
                        'order'     => 'ASC',
                    ));

                    while($loop->have_posts()):
                          $loop->the_post();

                    ?>

                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <?php the_post_thumbnail(); ?>
                            </span>
                            <h4 class="my-3"><?php the_title(); ?></h4>
                            <p class="text-muted"><?php the_content(); ?></p>
                        </div>

                    <?php


                    endwhile;

                 

                    ?>

                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">

                    <?php 

                      $loop_about = new WP_Query(
                        array(
                        'post_type' => 'portfolio',
                        'orderby'   => 'post_id',
                        'order'     => 'ASC',
                    ));

                      $count = 0;
                    while($loop_about->have_posts()):
                          $loop_about->the_post();
                          $count++;

                          ?>

                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 1-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#<?php echo 'something'.$count;?>">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <?php 

                                            echo the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'About Image']);

                                        ?>
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading"><?php echo the_title();?></div>
                                        <div class="portfolio-caption-subheading text-muted"><?php echo the_content();?></div>
                                    </div>
                                </div>
                            </div>




                              <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="<?php echo 'something'.$count;?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php bloginfo('template_directory')?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo the_title();?></h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <?php 

                                            echo the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'About Image']);

                                        ?>
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                          <?php

                    endwhile

                    ?>

                    
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">

                    <?php 

                        $loop_about = new WP_Query(array(
                        'post_type' => 'about',
                        'orderby'   => 'post_id',
                        'order'     => 'ASC',
                    ));

                    while($loop_about->have_posts()):
                          $loop_about->the_post();

                          ?>
                          <li>
                            <div class="timeline-image"><?php 

                                echo the_post_thumbnail('post-thumbnail', ['class' => 'rounded-circle img-fluid', 'title' => 'About Image']);

                                ?></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"><?php echo the_title();?></h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted"><?php echo the_content();?></p></div>
                            </div>
                        </li>
                          <?php

                    endwhile;

                    ?>

                    

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Theo -->


            <section class="page-section" id="Theo">
                <div class="row">
                    <div class="col-lg-4 image-col">
                        <img src="<?php bloginfo('template_directory')?>/assets/img/theo/timeline1-min.png" class="img-fluid">
                    </div>
                    <div class="col-lg-8 3-text-col">
                        <div class="row">


                                <?php

                                   $loop = new WP_Query(array(
                                        'post_type' => 'timeline_posts',
                                        'orderby' => 'post_id',
                                        'order' => 'DESC',
                                    ));

                                   while ($loop->have_posts()):
                                    $loop->the_post();

                                        ?>

                             <div class="col-lg-4 concert-time">
                                <h1 style="margin: 0;"><?php the_title();?></h1>
                                <h2 style="margin: 0;"><?php the_title();?></h2>
                                <h2 style="margin: 0;"><?php the_title();?></h2>
                                <h3 style="margin: 0;"><?php the_title();?></h3>
                                <p style="margin: 0;"><?php the_content();?></p>
                                <h4 class=""><?php the_title();?></h4>
                            </div>

                                        <?php

                                   endwhile;
                                ?>

                            
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-4">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        <!-- Theo -->
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">

                    <!-- The first thing is ... Write a query -->
                    <?php 


                     $team_loop = new WP_Query(
                        array(
                        'post_type' => 'team',
                        'orderby'   => 'post_id',
                        'order'     => 'ASC',
                    ));

                     while($team_loop->have_posts()):
                        $team_loop->the_post();

                        ?>

                        <div class="col-lg-4">
                            <div class="team-member">

                                <?php 

                                echo the_post_thumbnail('post-thumbnail', ['class' => 'mx-auto rounded-circle', 'title' => 'Team Member Image']);

                                ?>
                                <h4><?php echo the_title() ?></h4>
                                <p class="text-muted"><?php echo the_content() ?></p>
                                <a class="btn btn-dark btn-social mx-2" href="<?php echo get_field('twitter') ?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="<?php echo get_field('facebook') ?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="<?php echo get_field('linkedin') ?>"><i class="fab fa-linkedin-in"></i></a>
                                
                            </div>
                        </div>

                        <?php

                     endwhile;


                    ?>


                    

                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>


<?php

get_footer();
