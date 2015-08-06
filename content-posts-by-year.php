<?php
    // Get years that have posts
    $years = $wpdb->get_results( "SELECT DISTINCT YEAR(post_date) AS year FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY year ASC;" );

    //  For each year, do the following
    foreach ( $years as $year ) {    
        // Get all posts for the year.  Using WP_Query instead of custom mySQL
        $posts_this_year = new WP_Query( array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'year' => $year->year
        ) );    

        // Display the year as a header
        echo '<h1>' . $year->year . '</h1>';

        // Start an unorder list
        echo '<ul class="posts-in-year">';

        // For each post for that year, do the following.  Using the Loop.  get_the_date now works
        while ( $posts_this_year->have_posts() ) {
            $posts_this_year->the_post();
            // Display the title as a hyperlinked list item
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a>' . ' ' . '&mdash;' . ' ' .  get_the_time('F d') . '</li>';
        }

        //Reset post data.  Important to do this so not to mess with main loop
        wp_reset_postdata();

        // End the unordered list
        echo '</ul>';
    }
?>    