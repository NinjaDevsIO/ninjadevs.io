<?php
/**
* Footer For medium Theme.
*/
    $medium_options = get_option('medium_theme_options');
?>

    <footer class="home-footer">
        <div class="container medium-container">
            <?php
                if (!empty($medium_options['twitter']) ||
                    !empty($medium_options['fburl']) ||
                    !empty($medium_options['googleplus']) ||
                    !empty($medium_options['linkedin'])
                    ) {
            ?>
            <div class="col-md-12 footer-social">
                <?php
                    echo ($medium_options['scmessage'])? '<h6>'.esc_attr($medium_options['scmessage']).'</h6>' : '<h6>'.__('Connect With Me', 'medium').'</h6>';
                ?>
                <ul>
                <?php
                    echo ($medium_options['twitter'])? '<li><a href="'.esc_url($medium_options['twitter']).'"><i class="fa fa-twitter"></i></a></li>':'';
                    echo ($medium_options['fburl'])? '<li><a href="'.esc_url($medium_options['fburl']).'"><i class="fa fa-facebook"></i></a></li>':'';
                    echo ($medium_options['googleplus'])? '<li><a href="'.esc_url($medium_options['googleplus']).'"><i class="fa fa-google-plus"></i></a></li>':'';
                    echo ($medium_options['linkedin'])? '<li><a href="'.esc_url($medium_options['linkedin']).'"><i class="fa fa-linkedin"></i></a></li>':'';
                ?>
                </ul>
            </div>
            <?php } ?>
            <div class="col-md-12 footer-copyright">
                <a href="https://ninjadevs.io/" target="_blank">ninjadevs.io</a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html>
