<?php defined('ABSPATH') || exit('Forbidden');

get_header();

?>
<div class="container">
    <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                include locate_template('partials/post.php');
            endwhile;
        else :
            echo '<p>No posts found.</p>';
        endif;
    ?>
</div>
<?php

get_footer();
