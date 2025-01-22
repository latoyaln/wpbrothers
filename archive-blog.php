<?php defined('ABSPATH') || exit('Forbidden');

get_header();

?>
<div class="container mx-auto px-4 pb-16"> <!-- Added pb-16 for bottom padding -->
    <?php
    if ( have_posts() ) :
        echo '<div class="blog-grid">';
        while ( have_posts() ) :
            the_post();
            include locate_template('partials/post.php');
        endwhile;
        echo '</div>';
    else :
        echo '<p class="text-center text-neutral-75">No posts found.</p>';
    endif;
    ?>
</div>

<?php

get_footer();
