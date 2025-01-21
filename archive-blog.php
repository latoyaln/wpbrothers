<?php defined('ABSPATH') || exit('Forbidden');

get_header();

?>
<div class="blog-container">
    <?php
        if ( have_posts() ) :
            echo '<div class="blog-grid">';
            while ( have_posts() ) :
                the_post();
                include locate_template('partials/post.php');
            endwhile;
            echo '</div>';
        else :
            echo '<p class="blog-container__message">No posts found.</p>';
        endif;
    ?>
</div>
<?php

get_footer();
