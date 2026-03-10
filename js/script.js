// Smooth scrolling for anchor links (fallback if browser doesn't support scroll-behavior)
const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
for (const link of smoothScrollLinks) {
  link.addEventListener('click', (event) => {
    const targetId = link.getAttribute('href');
    if (!targetId || targetId === '#') return;
    const target = document.querySelector(targetId);
    if (!target) return;

    event.preventDefault();
    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
}

// Update current year in footer
const yearElements = document.querySelectorAll('#currentYear, #currentYearFooter');
const currentYear = new Date().getFullYear();
for (const el of yearElements) {
  el.textContent = currentYear;
}

// Mobile menu toggle
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
if (mobileMenuToggle && mobileMenu) {
  mobileMenuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
}

// Registration form handling (demo placeholder)
function handleRegistration(event) {
  event.preventDefault();

  const form = event.target;
  const data = {
    firstName: form.firstName.value.trim(),
    lastName: form.lastName.value.trim(),
    email: form.email.value.trim(),
    organization: form.organization.value.trim()
  };

  // This is a placeholder action. Replace with real API integration.
  console.log('Registration submitted:', data);
  alert('Thank you! Your registration has been received (demo mode).');
  form.reset();
}

window.handleRegistration = handleRegistration;
