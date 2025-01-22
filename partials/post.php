<article>
    <header class="blog-card__header">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="blog-card__thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                </a>
            </div>
        <?php endif; ?>
    </header>
    <div class="blog-card__details">
        <h2 class="blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="blog-card__meta">
            <span class="blog-card__meta-category"><?php the_category(', '); ?></span>
            <span class="blog-card__meta-location">
                <i class="fas fa-map-marker-alt"></i> Location
            </span>
            <span class="blog-card__meta-time">
                <i class="fas fa-clock"></i> Fulltime
            </span>
        </div>
    </div>
</article>
