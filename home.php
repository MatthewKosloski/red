<?php get_header(); 
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
?>
    <!-- 
        had to manually put in title module.  See why here:
        http://www.advancedcustomfields.com/faq/value-loading-posts-page/
     -->
    <?php if( is_plugin_active( 'advanced-custom-fields/acf.php' ) ) : ?>
        <?php if( get_field('show_title', get_option('page_for_posts')) ) : ?>
            <div class="row">
                <section class="title column large-12 medium-12 small-12">
                    <?php if( get_field('title_icon', get_option('page_for_posts')) ) : ?>
                        <span class="<?php the_field('title_icon', get_option('page_for_posts')) ?>"></span>
                    <?php endif; ?>
                    <?php if( get_field('title_text', get_option('page_for_posts')) ) : ?>
                        <p><?php the_field('title_text', get_option('page_for_posts')) ?></p>
                    <?php endif; ?>
                    <hr>
                </section>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="row">
        <section class="cf main journal">
            <div class="column large-12 medium-12 small-12">
                <?php get_template_part( 'content', 'posts-by-year' ); ?>
            </div>
        </section>
    </div>
<?php get_footer(); ?>     