document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const name = form.name.value.trim();
      const email = form.email.value.trim();
      const message = form.message.value.trim();
      const status = document.getElementById('formStatus');

      if (!name || !email || !message) {
        status.textContent = "Please fill in all fields.";
        status.style.color = 'red';
        return;
      }

      // Here you would call your backend API to send the message, e.g. using fetch()
      // For this static version, we simulate success:
      status.textContent = "Thank you! Your message has been sent.";
      status.style.color = 'green';

      form.reset();
    });
  }
});
