    <footer class="border-top navbar-light text-black" style="background-color: #d7e1ff;">
                <div class="container d-flex pt-3">
                    <div class="col-6 mb-3 mb-4 mb-md-0 mt-4">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full');
                        ?>
                        <img class="my-3 logo" src="<?php echo $logo[0] ?>" alt="logo" >
                    </div>
                    <div class="col mb-3"></div>
                    <div class="d-flex">
                        <?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul class="navbar-nav me-3 my-4 align-items-start">%3$s</ul>'
						))
				?>
                    </div>
                </div>
                <hr class="m-0" style="color: #00256c;">
        <div class="d-flex flex-column justify-content-between py-4">
            <?php 
                dynamic_sidebar('footer-2');
            ?>
            <div class="text-center pt-3 fs-5">Made by Ivano Bruno</div>
        </div>
    </footer>

    <?php
        wp_footer()
    ?>
    </body>
</html> 