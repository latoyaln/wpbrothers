<div class="footer__column">
  <h3 class="footer__column-heading"><?php echo esc_html($heading); ?></h3>
  <ul class="footer__links">
    <?php foreach ($links as $link): ?>
      <li>
        <i class="fas fa-chevron-right"></i>
        <p class="footer__label"><?php echo esc_html($link); ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
