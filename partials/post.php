<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div>
        <?php the_excerpt(); // Display the post excerpt ?>
    </div>
    <footer>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </footer>
</article>
