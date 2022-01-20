<?php get_header(); ?>
        

        <main>
            <section class="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Popular brand of peanut jaggery burfis
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">Who we are!</h3>
                        <p class="paragraph">
                            We are a cottage industry who manufactures peanut jaggery burfis (groundnut sweets) sweets. We prepare the products with the real taste. We have been in this industry over <strong>46+ years</strong> and we never compromise on the quality.
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with it</h3>
                        <p class="paragraph">
                            Peanuts has Vitamin E, Zinc and Magnesium, which kills bacteria on your skin and also its increases a good cholesterol in your body.
                        </p>

                        <a href="<?php echo get_bloginfo('url');?>/about-us" class="btn-text">Read more &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <img srcset="<?php echo get_bloginfo('template_directory'); ?>/assets/img/groundnut-sweet-image1.jpg 300w, <?php echo get_bloginfo('template_directory'); ?>/assets/img/groundnut-sweet-image1.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 1"
                                 class="composition__photo composition__photo--p1"
                                 src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/groundnut-sweet-image1.jpg">

                            <img srcset="<?php echo get_bloginfo('template_directory'); ?>/assets/img/groundnut-sweet-image2.jpeg 300w, <?php echo get_bloginfo('template_directory'); ?>/assets/img/groundnut-sweet-image2.jpeg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 2"
                                 class="composition__photo composition__photo--p2"
                                 src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/groundnut-sweet-image2.jpeg">

                            <img srcset="<?php echo get_bloginfo('template_directory'); ?>/assets/img/groundnut-sweet-image3.jpg 300w, <?php echo get_bloginfo('template_directory'); ?>/assets/img/groundnut-sweet-image3.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 3"
                                 class="composition__photo composition__photo--p3"
                                 src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/groundnut-sweet-image3.jpg">

                            <!--
                            <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                            <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                            <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                            -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-features">
                
                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-world"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Provide Energy</h3>
                            <p class="feature-box__text">
                            Yes, the peanut burfis contains Vitamin B1 and it improves the red blood cells in your body which is a base for energy.
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-compass"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">good for health</h3>
                            <p class="feature-box__text">
                            Comparing Sugar, Jaggery gives you zero calories and it gives a natural sweetener. It relieves join pain and improves the digestion.
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-map"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Other benefits</h3>
                             <p class="feature-box__text">
                                Manages the cholesterol levels and control heart, Treat skin ailments, Fight against nervous diseases and a many more...
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-heart"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Can kids eat this?</h3>
                            <p class="feature-box__text">
                                Groundnut or peanut burfi is good for kids to snack on these healthy candies which provide nutrition and also fill the stomach.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="lvs-home-pdts">
                <div class="row">
                    <?php echo do_shortcode('[products]'); ?>
                </div>
            </section>

            <section class="section-stories">
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/video.mp4" type="video/mp4">
                        <source src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/video.webm" type="video/webm">
                        Your browser is not supported!
                    </video>
                </div>

                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        We make people genuinely happy
                    </h2>
                </div>

                <div class="lvs-testimonial">
                <?php 
                    query_posts(array( 
                        'post_type' => 'testimonials',
                        'showposts' => 3
                    ) );  
                ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="row">
                    <div class="story">
                        <?php
                        $myimage = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        if(!empty($myimage)) { ?>
                            <figure class="story__shape">
                                <img src="<?php echo $myimage[0]; ?>" alt="<?php the_title(); ?> Image" class="story__img">
                                <figcaption class="story__caption"><?php the_title(); ?></figcaption>
                            </figure>
                        <?php } ?>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small"><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                    <div class="u-center-text u-margin-top-huge">
                        <a href="<?php echo get_bloginfo('url') ?>/testimonials" class="btn-text">Read all stories &rarr;</a>
                    </div>
                </div>

            </section>

            <section class="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                    Start send your feedback now
                                </h2>
                            </div>
                            <div class="lvs-customer-feedback-form">
                                <?php echo do_shortcode('[contact-form-7 id="47" title="Customer Feedback Form"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php get_footer(); ?>

    </body>
</html>