import "@fortawesome/fontawesome-free/js/solid.js";
import "@fortawesome/fontawesome-free/js/fontawesome.js";
import "./tailwind.css";

declare const posts: Array<{
  id: number;
  title: string;
  thumbnail: string | null;
  categories: string[];
  date: string;
}>;

document.addEventListener("DOMContentLoaded", () => {
  console.log("DOM Loaded");
});

document.addEventListener('DOMContentLoaded', function() {
  const mobileToggleButton = document.querySelector('.header__mobile-toggle');
  const headerNav = document.querySelector('.header__nav');

  mobileToggleButton?.addEventListener('click', function() {
    headerNav?.classList.toggle('active');
    mobileToggleButton?.classList.toggle('active');
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const postsContainer = document.getElementById('posts-container');
  const filters = document.querySelectorAll<HTMLInputElement>('#filters input[name="filter"]');

  function renderPosts(filteredPosts: any[]) {
    if (!postsContainer) return;

    postsContainer.innerHTML = '';

    if (filteredPosts.length === 0) {
      postsContainer.innerHTML = '<p class="text-center text-neutral-75">No posts found.</p>';
      return;
    }

    filteredPosts.forEach(post => {
      const postElement = `
        <article>
          <header class="blog-card__header">
            ${post.thumbnail ? `<div class="blog-card__thumbnail">
              <a href="${post.permalink}">
                <img src="${post.thumbnail}" alt="${post.title}">
              </a>
            </div>` : ''}
          </header>
          <div class="blog-card__details">
            <h3><a href="${post.permalink}">${post.title}</a></h3>
            <div class="blog-card__meta">
              <span class="blog-card__meta-category">${post.categories.join(', ')}</span>
              <span class="blog-card__meta-location">
                <i class="fas fa-map-marker-alt"></i> Location
              </span>
              <span class="blog-card__meta-time">
                <i class="fas fa-clock"></i> Fulltime
              </span>
            </div>
          </div>
        </article>
      `;
      postsContainer.insertAdjacentHTML('beforeend', postElement);
    });
  }

  function filterAndSortPosts() {
    const selectedFilterElement = document.querySelector<HTMLInputElement>('#filters input[name="filter"]:checked');
    const selectedFilter = selectedFilterElement?.value || 'all';

    let filteredPosts = posts;

    if (selectedFilter !== 'all') {
      filteredPosts = posts.filter(post => post.categories.includes(selectedFilter));
    }

    renderPosts(filteredPosts);
  }

  filters.forEach(filter => filter.addEventListener('change', filterAndSortPosts));

  renderPosts(posts);
});
