<?php defined('ABSPATH') || exit('Forbidden');

get_header();

?>
<div class="container mx-auto px-4">
    <?php
        if ( have_posts() ) :
            echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">';
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
