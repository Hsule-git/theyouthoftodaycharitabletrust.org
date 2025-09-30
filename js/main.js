import { createElem, scrollToSelector } from './utils.js';

// If not using modules, you can adapt this to global functions.

document.addEventListener('DOMContentLoaded', () => {
  renderHeaderFooter();
  renderProjects();
  renderTeam();
  setupNavToggle();
  setupProjectModal();
  setupScrollAnimations();
});

// Render header and footer (common across pages)
function renderHeaderFooter() {
  const root = document.getElementById('site-root');
  const header = createElem('header', ['navbar']);
  header.innerHTML = `
    <div class="container">
      <div class="logo"><a href="index.html">Our NGO</a></div>
      <nav>
        <button class="nav-toggle" aria-label="toggle menu">☰</button>
        <div class="nav-menu">
          <a href="index.html">Home</a>
          <a href="about.html">About</a>
          <a href="projects.html">Projects</a>
          <a href="contact.html">Contact</a>
        </div>
      </nav>
    </div>
  `;

  root.appendChild(header);

  const footer = document.getElementById('site-footer');
  footer.innerHTML = `
    <div class="container">
      <p>© ${new Date().getFullYear()} Our NGO. All rights reserved.</p>
      <div class="social">
        <a href="#">Facebook</a> |
        <a href="#">Twitter</a> |
        <a href="#">Instagram</a>
      </div>
    </div>
  `;
}

// Render project cards
function renderProjects() {
  const container = document.getElementById('project-cards');
  if (!container) return;

  NGO_DATA.projects.forEach(proj => {
    const card = createElem('div', ['card', 'fade-in']);
    card.innerHTML = `
      <img src="${proj.image}" alt="${proj.title}">
      <div class="card-content">
        <h3>${proj.title}</h3>
        <p>${proj.shortDesc}</p>
        <button data-projid="${proj.id}" class="btn-primary">Read More</button>
      </div>
    `;
    container.appendChild(card);
  });
}

// Render team cards
function renderTeam() {
  const container = document.getElementById('team-members');
  if (!container) return;

  NGO_DATA.team.forEach(mem => {
    const card = createElem('div', ['card', 'fade-in']);
    card.innerHTML = `
      <img src="${mem.image}" alt="${mem.name}">
      <div class="card-content">
        <h3>${mem.name}</h3>
        <p><em>${mem.role}</em></p>
        <p>${mem.bio}</p>
      </div>
    `;
    container.appendChild(card);
  });
}

// Toggle mobile nav
function setupNavToggle() {
  const toggle = document.querySelector('.nav-toggle');
  const menu = document.querySelector('.nav-menu');
  if (!toggle || !menu) return;
  toggle.addEventListener('click', () => {
    menu.classList.toggle('open');
  });
}

// Modal for project details
function setupProjectModal() {
  const modal = document.getElementById('project-modal');
  const modalBody = document.getElementById('modal-body');
  const closeBtn = modal.querySelector('.modal-close');

  document.body.addEventListener('click', (e) => {
    const btn = e.target.closest('button[data-projid]');
    if (btn) {
      const pid = btn.getAttribute('data-projid');
      const proj = NGO_DATA.projects.find(p => p.id === pid);
      if (proj) {
        modalBody.innerHTML = `
          <h2>${proj.title}</h2>
          <img src="${proj.image}" alt="${proj.title}" style="width:100%;border-radius:8px;">
          <p>${proj.details}</p>
        `;
        modal.classList.remove('hidden');
      }
    }
  });

  closeBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  // Click outside modal content to close
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.add('hidden');
    }
  });
}

// Scroll-triggered animations (fade-in)
function setupScrollAnimations() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, {
    threshold: 0.2
  });

  document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
  });
}
