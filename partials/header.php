<?php defined('ABSPATH') || exit('Forbidden'); ?>
<header class="header">
  <div class="header__container">
    <div class="header__logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wplogo.png" alt="Logo">
    </div>

    <button class="header__mobile-toggle" aria-label="Toggle menu">
      <span class="header__mobile-icon"> <i class="fa fa-bars" style="color: var(--base-color-500);"></i></span>
    </button>

    <nav class="header__nav">
      <ul class="header__nav-list">
        <li class="header__nav-item">
          <a href="/blog" class="header__nav-link">Blog</a>
        </li>

        <li class="header__nav-item header__nav-item--dropdown">
          <button class="header__nav-link header__dropdown-toggle" aria-haspopup="true">
            Dropdown <i class="fa fa-chevron-down" style="color: var(--base-color-500);"></i>
          </button>
          <ul class="header__dropdown-menu">
            <li><a href="/link1" class="header__dropdown-item">Link 1</a></li>
            <li><a href="/link2" class="header__dropdown-item">Link 2</a></li>
            <li><a href="/link3" class="header__dropdown-item">Link 3</a></li>
          </ul>
        </li>

        <li class="header__nav-item header__nav-item--search">
          <div class="header__search">
            <button class="header__search-btn">
              <i class="fa fa-search" style="color: var(--base-color-500);"></i>
            </button>
            <input type="text" class="header__search-input" placeholder="Zoeken naar...." style="color: var(--font-color-placeholder);">
          </div>
        </li>

        <li class="header__nav-item">
          <a href="mailto:contact@yourdomain.com" class="header__nav-link header__contact-btn">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</header>


<main>
