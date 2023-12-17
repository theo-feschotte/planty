<?php

// FOOTER IMAGE
$footer_image = get_field( "footer__image" );
$footer_background_color = get_field( "footer_background_color" );

?>
            </main>
        </div>

        <footer id="footer" class="c-footer">

            <?php echo( $footer_image ? '<div class="c-footer__bg-img" style="background-image:url('.$footer_image["url"].'); background-color:'.$footer_background_color.';"></div>' : "" ); ?>
            
            <div class="o-wrapper-xl">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-footer',
                        'container' => '',
                        'menu_class' => 'menu-list',
                    ]);
                ?>
            </div>

        </footer>
    
    </div>
    
    <?php wp_footer(); ?>

</body>

</html>