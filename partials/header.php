<?php defined('ABSPATH') || exit('Forbidden'); ?>

<header class="header">
  <div class="header__container">
    <div class="header__logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wplogo.png" alt="Logo">
    </div>

    <button class="header__mobile-toggle" aria-label="Toggle menu">
      <span class="header__mobile-icon"></span>
    </button>

    <nav class="header__nav">
      <ul class="header__nav-list">
        <li class="header__nav-item">
          <a href="/blog" class="header__nav-link">Blog</a>
        </li>

        <!-- Dropdown -->
        <li class="header__nav-item header__nav-item--dropdown">
          <button class="header__nav-link header__dropdown-toggle" aria-haspopup="true" aria-expanded="false">
            Dropdown <i class="fa fa-arrow-down"></i>
          </button>
          <ul class="header__dropdown-menu">
            <li><a href="/link1" class="header__dropdown-item">Link 1</a></li>
            <li><a href="/link2" class="header__dropdown-item">Link 2</a></li>
            <li><a href="/link3" class="header__dropdown-item">Link 3</a></li>
          </ul>
        </li>

        <!-- Search -->
        <li class="header__nav-item header__nav-item--search">
          <button class="header__nav-link header__search-toggle">
            <i class="fa fa-search"></i>
          </button>
        </li>

        <li class="header__nav-item">
          <a href="/login" class="header__nav-link header__nav-link--login">Log In</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<main>
