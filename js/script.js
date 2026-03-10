// -----------------------------------------------------------------------------
// Speaker list / modal support (for speaker detail pages and the home preview)
// -----------------------------------------------------------------------------

const SPEAKERS = [
  {
    id: 'maya-shrestha',
    name: 'Dr. Maya Shrestha',
    role: 'Panel Chair',
    title: 'Professor of International Relations, Tribhuvan University',
    bio: 'Dr. Shrestha’s research focuses on regional diplomacy, governance reform, and the economic impact of infrastructure initiatives across South Asia.',
    image: 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=900&q=80'
  },
  // ... [Keep all your 40 speaker objects here] ...
  {
    id: 'omar-ali',
    name: 'Mr. Omar Ali',
    role: 'Speaker',
    title: 'Senior Analyst, Connectivity Policy Lab',
    bio: 'Omar studies trade facilitation, border procedures, and the economic benefits of improved regional linkages.',
    image: 'https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=900&q=80'
  }
];

// --- MODAL LOGIC ---
function getSpeakerById(id) {
  return SPEAKERS.find((speaker) => speaker.id === id);
}

function openSpeakerModal(speakerId) {
  const speaker = getSpeakerById(speakerId);
  if (!speaker) return;

  const modal = document.getElementById('speaker-modal');
  const image = document.getElementById('speaker-modal-image');
  const roleEl = document.getElementById('speaker-modal-role');
  const nameEl = document.getElementById('speaker-modal-name');
  const titleEl = document.getElementById('speaker-modal-title');
  const bioEl = document.getElementById('speaker-modal-bio');

  if (!modal || !image || !roleEl || !nameEl || !titleEl || !bioEl) return;

  image.src = speaker.image;
  image.alt = speaker.name;
  roleEl.textContent = speaker.role;
  nameEl.textContent = speaker.name;
  titleEl.textContent = speaker.title;
  bioEl.textContent = speaker.bio;

  modal.classList.remove('hidden');
  modal.classList.add('flex'); // Ensure it centers correctly
  document.body.style.overflow = 'hidden';
}

function closeSpeakerModal() {
  const modal = document.getElementById('speaker-modal');
  if (!modal) return;

  modal.classList.add('hidden');
  modal.classList.remove('flex');
  document.body.style.overflow = '';
}

// --- RENDERING ---
function renderSpeakersGrid() {
  const container = document.getElementById('speakersGrid');
  if (!container) return;

  container.innerHTML = '';
  SPEAKERS.forEach((speaker) => {
    const card = document.createElement('article');
    card.setAttribute('data-speaker-id', speaker.id);
    card.setAttribute('role', 'button');
    card.setAttribute('tabindex', '0');
    card.className = 'cursor-pointer rounded-3xl bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md border border-gray-100';

    card.innerHTML = `
      <div class="relative overflow-hidden rounded-2xl">
        <img class="h-56 w-full object-cover transition duration-500 hover:scale-110" src="${speaker.image}" alt="${speaker.name}" />
      </div>
      <h2 class="mt-6 text-xl font-semibold text-charcoal">${speaker.name}</h2>
      <p class="mt-2 text-sm font-semibold text-amber-600">${speaker.role}</p>
      <p class="mt-3 text-sm text-gray-700 line-clamp-2">${speaker.title}</p>
      <button class="mt-4 text-sm font-bold text-charcoal hover:underline">View Details →</button>
    `;

    card.addEventListener('click', () => openSpeakerModal(speaker.id));
    card.addEventListener('keydown', (event) => {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        openSpeakerModal(speaker.id);
      }
    });

    container.appendChild(card);
  });
}

// --- SMOOTH SCROLLING (With Header Offset) ---
function initSmoothScroll() {
  const links = document.querySelectorAll('a[href^="#"]');
  const headerHeight = document.querySelector('header')?.offsetHeight || 80;

  links.forEach(link => {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerHeight;

        window.scrollTo({
          top: offsetPosition,