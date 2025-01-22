<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<div class="home-page">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7bf8b7439accaae1dbcb6690298ed5dd6b196eb0.jpg" alt="WP smiling at laptop">
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="home-page__features">
        <div class="container">
        <h2>Herkenbaar?</h2>
         <div class="home-page__features-grid">
            <?php
            $features = [
                [
                    'icon_class' => 'fas fa-ruler-horizontal',
                    'title' => 'Creatieve Probleemoplosser',
                    'description' => 'Je bent in staat om met out-of-the-box oplossingen te komen voor complexe uitdagingen. Geen enkele bug is veilig voor jouw innovatieve aanpak!',
                ],
                [
                    'icon_class' => 'fas fa-video',
                    'title' => 'Koning(in) van de Plugins',
                    'description' => 'Je hebt uitgebreide kennis van zowel populaire als obscure plugins en weet precies welke te gebruiken om een website naar een hoger niveau te tillen.',
                ],
                [
                    'icon_class' => 'fas fa-columns',
                    'title' => 'Flexibele Teamspeler',
                    'description' => 'Je werkt net zo goed zelfstandig als in een team. Samenwerken met designers, marketeers en andere developers is voor jou een tweede natuur.',
                ],
                [
                    'icon_class' => 'fas fa-pencil-alt',
                    'title' => 'Nieuwsgierige Learner',
                    'description' => 'Je bent altijd op de hoogte van de laatste trends en ontwikkelingen binnen de WordPress-community en past deze kennis toe in je werk.',
                ],
            ];

            foreach ($features as $feature) {
                $icon_class = $feature['icon_class'];
                $title = $feature['title'];
                $description = $feature['description'];

                include locate_template('partials/feature-card.php');
            }
            ?>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section class="home-page__content">
        <div class="container home-page__content-container">
            <div class="home-page__content-text">
                <p class="home-page__hero-subtitle">Over Ons</p>
                <h2 class="home-page__content-title">Waarom WP Brothers?</h2>
                <p class="home-page__content-description">
                    Bij WP Brothers draait alles om creativiteit, innovatie en samenwerking. Wij zijn een dynamisch team van WordPress fanaten die de grenzen van webontwikkeling opzoeken en verleggen. Werken bij ons betekent deel uitmaken van een hechte familie die samenwerkt om de beste WordPress-oplossingen te bieden aan onze klanten.
                </p>
                <a href="#" class="home-page__content-button">Over Ons <i class="fa fa-chevron-right" style="color: var(--base-color-500); font-size: var(--size-body-small); padding-left: 6px;" ></i></a>
            </div>
            <div class="home-page__content-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2cbdc7b29b8b729db1b0ad933d96d3cbc1f83268.jpg" alt="Over Ons foto">
            </div>
        </div>
    </section>

    <section class="home-page__content">
        <div class="container home-page__content-container">
              <div class="home-page__content-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/09430a3f35a25fe2ba038840a7d4b99ba6e39942.jpg" alt="Creativiteit">
              </div>
            <div class="home-page__content-text">
                <p class="home-page__hero-subtitle">Solliciteren</p>
                <h2 class="home-page__content-title">Sluit je aan bij WP Brothers!</h2>
                <p class="home-page__content-description">
                Als je klaar bent om je carrière naar een hoger niveau te tillen en deel wilt uitmaken van een team dat streeft naar uitmuntendheid, dan is WP Brothers de plek voor jou. We zijn altijd op zoek naar getalenteerde WordPress developers die onze passie voor webontwikkeling delen. Kom en ontdek waarom werken bij WP Brothers niet zomaar een baan is, maar een avontuur vol kansen en groei.
                </p>
                <a href="#" class="home-page__content-button">Werken bij</a>
            </div>
        </div>
    </section>
    
    <section class="home-page__blog">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $recent_posts = new WP_Query([
                    'post_type' => 'blog',
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
