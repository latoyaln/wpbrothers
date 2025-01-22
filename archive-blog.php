<?php defined('ABSPATH') || exit('Forbidden');

get_header();

?>
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center space-x-4">
            <label class="flex items-center">
                <input type="radio" name="filter" value="all" class="mr-2"> Toon Alles
            </label>
            <label class="flex items-center">
                <input type="radio" name="filter" value="blog" class="mr-2"> Blog
            </label>
            <label class="flex items-center">
                <input type="radio" name="filter" value="expertise" class="mr-2"> Expertise
            </label>
        </div>

        <!-- Sorter -->
        <div class="flex items-center space-x-2">
            <span>Sorteer op</span>
            <select class="border rounded px-2 py-1">
                <option value="date">Datum</option>
                <!-- Add more sorting options here if needed -->
            </select>
        </div>
    </div>

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
