<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
        <div id="footer-widget" class="row m-0">
            <div class="container-fluid">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-2 col-md-2"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-8 col-md-8"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( false && is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-2 col-md-2"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

<?php }