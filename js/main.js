document.addEventListener('DOMContentLoaded', () => {
  renderHeaderFooter();
  renderPageSpecific();
  setupNavToggle();
  setupProjectModal();
  setupScrollAnimations();
  setupContactForm();
});

function renderHeaderFooter() {
  const headerPlaceholder = document.getElementById('site-header');
  const footerPlaceholder = document.getElementById('site-footer');

  headerPlaceholder.innerHTML = `
    <header>
      <div class="container navbar">
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
    </header>
  `;

  footerPlaceholder.innerHTML = `
    <footer>
      <div class="container">
        <p>© ${new Date().getFullYear()} Our NGO. All rights reserved.</p>
        <div class="social">
          <a href="#">Facebook</a> |
          <a href="#">Twitter</a> |
          <a href="#">Instagram</a>
        </div>
      </div>
    </footer>
  `;
}

function renderPageSpecific() {
  // Projects rendering (on index / projects page)
  const projectCardsContainer = document.getElementById('project-cards');
  if (projectCardsContainer) {
    NGO_DATA.projects.forEach(proj => {
      const card = utils.createElem('div', ['card', 'fade-in']);
      card.innerHTML = `
        <img src="${proj.image}" alt="${proj.title}">
        <div class="card-content">
          <h3>${proj.title}</h3>
          <p>${proj.shortDesc}</p>
          <button data-projid="${proj.id}" class="btn-primary">Read More</button>
        </div>
      `;
      projectCardsContainer.appendChild(card);
    });
  }

  // Team rendering (only index / about pages with team section)
  const teamContainer = document.getElementById('team-members');
  if (teamContainer) {
    NGO_DATA.team.forEach(mem => {
      const card = utils.createElem('div', ['card', 'fade-in']);
      card.innerHTML = `
        <img src="${mem.image}" alt="${mem.name}">
        <div class="card-content">
          <h3>${mem.name}</h3>
          <p><em>${mem.role}</em></p>
          <p>${mem.bio}</p>
        </div>
      `;
      teamContainer.appendChild(card);
    });
  }
}

function setupNavToggle() {
  const toggle = document.querySelector('.nav-toggle');
  const menu = document.querySelector('.nav-menu');
  if (!toggle || !menu) return;
  toggle.addEventListener('click', () => {
    menu.classList.toggle('open');
  });
}

function setupProjectModal() {
  const modal = document.getElementById('project-modal');
  if (!modal) return;
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
          <img src="${proj.image}" alt="${proj.title}" style="width:100%; border-radius:8px; margin-bottom:1rem;">
          <p>${proj.details}</p>
        `;
        modal.classList.remove('hidden');
      }
    }
  });

  closeBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.add('hidden');
    }
  });
}

function setupScrollAnimations() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
  });
}

function setupContactForm() {
  const form = document.getElementById('contactForm');
  const status = document.getElementById('formStatus');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    status.textContent = '';

    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const message = form.message.value.trim();
    if (!name || !email || !message) {
      status.textContent = 'Please fill in all fields.';
      status.style.color = 'red';
      return;
    }

    // Simulate a network request (replace with real API)
    try {
      await new Promise(r => setTimeout(r, 1000));
      status.textContent = 'Thank you! Your message has been sent.';
      status.style.color = 'green';
      form.reset();
    } catch (err) {
      status.textContent = 'Sorry, error sending message.';
      status.style.color = 'red';
    }
  });
}
