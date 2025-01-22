<?php defined('ABSPATH') || exit('Forbidden');

get_header();

$categories = get_categories([
    'taxonomy' => 'category',
    'orderby' => 'name',
    'order'   => 'ASC',
]);

?>
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center space-x-4" id="filters">
            <label class="flex items-center">
                <input type="radio" name="filter" value="all" class="mr-2" checked> Toon Alles
            </label>
            <?php foreach ($categories as $category): ?>
                <label class="flex items-center">
                    <input type="radio" name="filter" value="<?php echo esc_attr($category->slug); ?>" class="mr-2"> <?php echo esc_html($category->name); ?>
                </label>
            <?php endforeach; ?>
        </div>

        <div class="flex items-center space-x-2">
            <span class="sort">Sorteer op</span>
            <select id="sorter" class="border rounded px-2 py-1">
                <option value="latest">Datum oplopend</option>
                <option value="oldest">Datum aflopend</option>
            </select>
        </div>
    </div>
    <hr class="solid">
    <div id="posts-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                include locate_template('partials/post.php');
            endwhile;
            wp_reset_postdata();

        else :
            echo '<p class="text-center text-neutral-75">No posts found.</p>';
        endif;
        ?>
        
    </div>
</div>

<script type="text/javascript">
    const posts = <?php
    $posts_data = [];
    if (have_posts()) :
        while (have_posts()) : the_post();
            $categories = get_the_category();
            $categories_slugs = array_map(function($cat) {
                return $cat->slug;
            }, $categories);
            $posts_data[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'medium'),
                'categories' => $categories_slugs,
                'date' => get_the_date('Y-m-d'),
            ];
        endwhile;
    endif;
    echo json_encode($posts_data);
    ?>;
</script>
<?php
get_footer();
