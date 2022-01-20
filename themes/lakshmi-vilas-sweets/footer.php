<footer class="footer">
    <div class="footer__logo-box">

        <div class="footer__logo">
            <a href="<?php echo get_bloginfo('url') ?>" title="Lakshmi Vilas Sweets"><img src="<?php echo get_template_directory_uri() ?>/assets/img/lakshmi-vilas-sweets-logo.png" alt="lakshmi-vilas-sweets" class="header__logo"></a>
        </div>
        
    </div>
    <div class="row">
        <div class="col-1-of-2">
            <div class="footer__navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container'  => "div", 'footer__navigation' => "navigation__nav", 'menu_class'=>'footer__list', 'add_li_class'=>'footer__item' ) ); ?>
            </div>
        </div>
        <div class="col-1-of-2">
            <p class="footer__copyright">
                Built with love by Ramachandran Annamalai for his father company <a href="<?php echo get_bloginfo('url') ?>" class="footer__link">Lakshmi Vilas Sweets</a>.
                Copyright &copy; by Ramachandran Annamalai.
            </p>
        </div>
    </div>
</footer>

<div class="popup" id="popup">
    <div class="popup__content">
        <div class="popup__left">
            <img src="img/nat-8.jpg" alt="Tour photo" class="popup__img">
            <img src="img/nat-9.jpg" alt="Tour photo" class="popup__img">
        </div>
        <div class="popup__right">
            <a href="#section-tours" class="popup__close">&times;</a>
            <h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
            <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
            <p class="popup__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit
                amet massa vitae. Mi bibendum neque egestas congue. Placerat orci nulla pellentesque dignissim enim
                sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget
                gravida cum sociis natoque penatibus et. Proin fermentum leo vel orci porta non pulvinar neque laoreet.
                Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis. Faucibus
                vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit. Amet massa
                vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed
                euismod nisi porta.
            </p>
            <a href="#" class="btn btn--green">Book now</a>
        </div>
    </div>
</div>