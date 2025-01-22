<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<div class="home-page">
    <!-- Section 1 -->
    <section class="home-page__hero">
        <div class="container home-page__hero-container">
            <div class="home-page__hero-content">
                <p class="home-page__hero-subtitle">WP Brothers</p>
                <h1 class="home-page__hero-title">Welkom, WordPress Tovenaar!</h1>
                <p class="home-page__hero-description">
                    Welkom bij WP Brothers, de plek waar jouw WordPress magie werkelijkheid wordt. 
                    Of je nu een CSS-kunstenaar bent, een PHP-guru of een plug-in pionier, wij zijn op zoek naar jou! 
                    Bereid je voor om deel uit te maken van een team waar innovatie en creativiteit hoog in het vaandel staan. 
                    Klaar om de uitdaging aan te gaan? Laten we samen de mooiste WordPress wonderen creëren!
                </p>
            </div>
            <div class="home-page__hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/215d1c7002ed987517e77ded5f92d0e6489e9f01.jpg" alt="WordPress Tovenaar">
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="home-page__features">
        <div class="container">
            <h2 class="home-page__features-title">Herkenbaar?</h2>
            <div class="home-page__features-grid">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <div class="feature-card">
                        <i class="feature-card__icon fas fa-magic"></i>
                        <h3 class="feature-card__title">Feature <?php echo $i; ?></h3>
                        <p class="feature-card__description">
                            Een korte beschrijving van deze feature. Maak het zo dynamisch mogelijk.
                        </p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section class="home-page__cta">
        <div class="container home-page__cta-container">
            <div class="home-page__cta-content">
                <h2 class="home-page__cta-title">Over Ons</h2>
                <p class="home-page__cta-description">
                    Sluit je aan bij ons team en ontdek een wereld vol kansen en creatieve projecten.
                </p>
                <a href="#" class="home-page__cta-button">Join Us</a>
            </div>
            <div class="home-page__cta-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta-image.jpg" alt="Avontuur">
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class="home-page__cta home-page__cta--reversed">
        <div class="container home-page__cta-container">
            <div class="home-page__cta-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reversed-cta.jpg" alt="Creativiteit">
            </div>
            <div class="home-page__cta-content">
                <h2 class="home-page__cta-title">Word een WordPress meester!</h2>
                <p class="home-page__cta-description">
                    Duik diep in de wereld van WordPress en breng jouw unieke ideeën tot leven.
                </p>
                <a href="#" class="home-page__cta-button">Leer Meer</a>
            </div>
        </div>
    </section>

    <!-- Section 5 -->
    <section class="home-page__blog">
        <div class="container">
            <h2 class="home-page__blog-title">Laatste Blogs</h2>
            <div class="home-page__blog-grid">
                <?php
                $recent_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ]);

                if ($recent_posts->have_posts()) :
                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                        include locate_template('partials/post.php');
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Geen blogs gevonden.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
