       <div class="row">
            <footer class="cf">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <ul class="column large-5 medium-12 small-12">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </ul>
                <?php else: ?> 
                    <ul class="column large-5 medium-12 small-12">
                        <h6>About</h6>
                        <li class="footer-about"><?php bloginfo('description') ?></li>
                    </ul>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <ul class="column large-3 medium-4 small-12 hide-for-small-only"> <!-- hide-for-small-only -->
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </ul>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <ul class="column large-2 medium-4 small-12">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </ul>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <ul class="column large-2 medium-4 small-12 hide-for-small-only"> <!-- hide-for-small-only -->
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </ul>
                <?php endif; ?>
                <?php if( !get_theme_mod( 'hide_copyright' ) == 1 ) : ?>
                    <ul class="column large-12 medium-14 small-12"> <!-- <p class="foot-note"></p> -->
                        <li class="foot-note"><?php echo get_theme_mod( 'copyright_textbox' ); ?></li>
                    </ul>
                <?php endif; ?>
            </footer>
        </div>
    <?php wp_footer(); ?>
    </body>
</html>