<?php
if (!defined('ABSPATH')) {
    exit; 
}

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
else :
    echo '<p>No posts found.</p>';
endif;

get_footer();
?>
