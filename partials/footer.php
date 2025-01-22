<?php defined('ABSPATH') || exit('Forbidden'); ?>

</main>

<footer class="footer">
  <div class="footer__container">
    <div class="footer__left">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/whitelogo.png" alt="WP Brothers Logo" class="footer__logo">
      <p class="footer__text">WP Brothers is een gespecialiseerd bureau op het gebied van het WordPress CMS en is onderdeel van Social Brothers.</p>
      <p class="footer__phone">030 737 09 02</p>
      <p class="footer__email"><a href="mailto:info@wpbrothers.nl">info@wpbrothers.nl</a></p>
    </div>
    
    <div class="footer__right">
      <?php
        $footer_columns = [
          [
            'heading' => 'Heading',
            'links'   => ['Label', 'Label', 'Label']
          ],
          [
            'heading' => 'Heading',
            'links'   => ['Label', 'Label', 'Label']
          ],
          [
            'heading' => 'Heading',
            'links'   => ['Label', 'Label', 'Label']
          ],
        ];

        foreach ($footer_columns as $column) {
          $heading = $column['heading'];
          $links = $column['links'];

          include 'footer-column.php';
        }
      ?>
    </div>
  </div>

  <div class="footer__bottom-bar">
  <div class="footer__bottom-container">
    <div class="footer__bottom-links">
      <a href="#" class="footer__bottom-link">Algemene voorwaarden</a>
      <a href="#" class="footer__bottom-link">Privacy Statement</a>
      <a href="#" class="footer__bottom-link">Toegankelijkheid</a>
    </div>
    <div class="footer__social-links">
      <a href="https://facebook.com" target="_blank" class="footer__social-link">
        <i class="fas f-brands fa-facebook"></i>
      </a>
      <a href="https://instagram.com" target="_blank" class="footer__social-link">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://linkedin.com" target="_blank" class="footer__social-link">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a href="https://twitter.com" target="_blank" class="footer__social-link">
        <i class="fab fa-twitter"></i>
      </a>
    </div>
  </div>
</div>

</footer>
