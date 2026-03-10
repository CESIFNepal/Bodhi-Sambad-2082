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
  {
    id: 'li-wei',
    name: 'Mr. Li Wei',
    role: 'Keynote Speaker',
    title: 'Senior Research Fellow, Asia Policy Institute',
    bio: 'Mr. Li brings deep insight into policy trends, strategic frameworks, and multilateral diplomacy shaping China’s engagement in South Asia.',
    image: 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'ayesha-patel',
    name: 'Dr. Ayesha Patel',
    role: 'Panelist',
    title: 'Economist, Regional Development Council',
    bio: 'Ayesha explores regional economic integration strategies, trade diplomacy challenges, and the future of cross-border infrastructure finance.',
    image: 'https://images.unsplash.com/photo-1525097487452-6278ff080c31?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'rajiv-thapa',
    name: 'Mr. Rajiv Thapa',
    role: 'Panelist',
    title: 'Senior Analyst, Global Affairs Forum',
    bio: 'Rajiv’s analysis focuses on strategic alliances, risk assessment, and policy coherence across South Asia in light of global power shifts.',
    image: 'https://images.unsplash.com/photo-1524503033411-c9566986fc8f?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'nisha-gupta',
    name: 'Dr. Nisha Gupta',
    role: 'Speaker',
    title: 'Director, South Asia Economic Institute',
    bio: 'Dr. Gupta researches economic corridors, supply chain resilience, and the digital transformation of regional trade.',
    image: 'https://images.unsplash.com/photo-1524503145539-992f7ca0a644?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'amar-khan',
    name: 'Mr. Amar Khan',
    role: 'Speaker',
    title: 'Senior Fellow, Himalayan Security Initiative',
    bio: 'Amar’s work examines border management, transboundary water security, and the implications of new infrastructure in the Himalayas.',
    image: 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'lina-chen',
    name: 'Dr. Lina Chen',
    role: 'Speaker',
    title: 'Associate Professor, School of International Affairs',
    bio: 'Lina focuses on international law, treaty frameworks, and the role of regional institutions in mediating great power competition.',
    image: 'https://images.unsplash.com/photo-1524504390861-1d3d7f5ceef1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'tarek-hassan',
    name: 'Mr. Tarek Hassan',
    role: 'Speaker',
    title: 'Research Director, Trade & Connectivity Lab',
    bio: 'Tarek studies emerging trade routes, customs modernization, and the economic implications of the Belt and Road Initiative.',
    image: 'https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'anita-das',
    name: 'Dr. Anita Das',
    role: 'Speaker',
    title: 'Senior Policy Advisor, Regional Cooperation Forum',
    bio: 'Anita specialises in development policy, energy transition, and community-driven frameworks for sustainable infrastructure.',
    image: 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'mohammed-raza',
    name: 'Mr. Mohammed Raza',
    role: 'Speaker',
    title: 'Director, Urban Resilience Centre',
    bio: 'Mohammed brings experience on urban planning, climate resilience, and inclusive infrastructure financing across South Asian cities.',
    image: 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'sara-fernandes',
    name: 'Dr. Sara Fernandes',
    role: 'Speaker',
    title: 'Professor of Diplomacy, Global Studies Institute',
    bio: 'Sara’s work explores diplomatic innovation, track-two dialogues, and the changing norms of international engagement.',
    image: 'https://images.unsplash.com/photo-1520975914552-027c1c7e01d3?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'rajesh-patel',
    name: 'Mr. Rajesh Patel',
    role: 'Speaker',
    title: 'Energy Analyst, Sustainable Futures Initiative',
    bio: 'Rajesh analyzes energy transition strategies, cross-border electricity trade, and regional cooperation on renewable infrastructure.',
    image: 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'meera-chandra',
    name: 'Dr. Meera Chandra',
    role: 'Speaker',
    title: 'Senior Fellow, Peace & Security Centre',
    bio: 'Meera specializes in confidence-building measures, conflict prevention, and the security implications of transnational infrastructure.',
    image: 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'hamid-al-khalid',
    name: 'Mr. Hamid Al-Khalid',
    role: 'Speaker',
    title: 'Director of Strategy, Regional Trade Consortium',
    bio: 'Hamid focuses on regional trade policy, logistics efficiency, and private sector partnerships for connectivity initiatives.',
    image: 'https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'yasmin-solanki',
    name: 'Dr. Yasmin Solanki',
    role: 'Speaker',
    title: 'Research Fellow, GeoEconomics Lab',
    bio: 'Yasmin explores the intersection of economics and geopolitics, particularly how infrastructure shapes regional power balances.',
    image: 'https://images.unsplash.com/photo-1524504390861-1d3d7f5ceef1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'sandeep-kumar',
    name: 'Mr. Sandeep Kumar',
    role: 'Speaker',
    title: 'Head of Partnerships, Connectivity Fund',
    bio: 'Sandeep leads partnership development for infrastructure projects, focusing on inclusive financing and governance best practices.',
    image: 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'jung-eun-kim',
    name: 'Dr. Jung Eun Kim',
    role: 'Speaker',
    title: 'Senior Researcher, Regional Climate Initiative',
    bio: 'Jung Eun researches climate resilience, cross-border water management, and sustainable development frameworks for South Asia.',
    image: 'https://images.unsplash.com/photo-1520975914552-027c1c7e01d3?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'amir-rahman',
    name: 'Mr. Amir Rahman',
    role: 'Speaker',
    title: 'Economic Advisor, Trade & Investment Council',
    bio: 'Amir evaluates investment trends, bilateral trade agreements, and economic corridor opportunities across the region.',
    image: 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'tara-kapoor',
    name: 'Dr. Tara Kapoor',
    role: 'Speaker',
    title: 'Director, Digital Infrastructure Lab',
    bio: 'Tara focuses on digital connectivity, data governance, and the implications of cross-border digital infrastructure for economic development.',
    image: 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'javed-ali',
    name: 'Mr. Javed Ali',
    role: 'Speaker',
    title: 'Senior Analyst, Strategic Studies Group',
    bio: 'Javed writes on military balance, infrastructure security, and the role of defense cooperation in regional stability.',
    image: 'https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'sunita-prasad',
    name: 'Dr. Sunita Prasad',
    role: 'Speaker',
    title: 'Climate Policy Specialist, Sustainable South Asia',
    bio: 'Sunita works on climate adaptation, green infrastructure policy, and the social dimensions of climate-resilient development.',
    image: 'https://images.unsplash.com/photo-1524504390861-1d3d7f5ceef1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'ocean-nguyen',
    name: 'Ms. Ocean Nguyen',
    role: 'Speaker',
    title: 'Innovation Lead, Cross-Border Tech Initiative',
    bio: 'Ocean explores innovation ecosystems, digital trade, and the role of technology hubs in regional cooperation.',
    image: 'https://images.unsplash.com/photo-1520975914552-027c1c7e01d3?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'mehran-hussain',
    name: 'Mr. Mehran Hussain',
    role: 'Speaker',
    title: 'Policy Director, Infrastructure Finance Network',
    bio: 'Mehran focuses on public-private partnerships, risk mitigation, and sustainable financing models for large-scale projects.',
    image: 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'nazanin-saeed',
    name: 'Dr. Nazanin Saeed',
    role: 'Speaker',
    title: 'Senior Fellow, Regional Governance Forum',
    bio: 'Nazanin researches governance innovations, accountability mechanisms, and inclusive decision-making in infrastructure planning.',
    image: 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'hassan-karim',
    name: 'Mr. Hassan Karim',
    role: 'Speaker',
    title: 'Director, Supply Chain Resilience Centre',
    bio: 'Hassan studies supply chain vulnerabilities, logistics modernization, and regional cooperation on critical trade corridors.',
    image: 'https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'parvati-rao',
    name: 'Dr. Parvati Rao',
    role: 'Speaker',
    title: 'Research Lead, Social Impact Lab',
    bio: 'Parvati explores how infrastructure projects can foster community resilience, gender equity, and inclusive development.',
    image: 'https://images.unsplash.com/photo-1524504390861-1d3d7f5ceef1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'liang-zhou',
    name: 'Dr. Liang Zhou',
    role: 'Speaker',
    title: 'Senior Analyst, Regional Security Centre',
    bio: 'Liang focuses on maritime security, coastal infrastructure, and the role of naval presence in regional stability.',
    image: 'https://images.unsplash.com/photo-1520975914552-027c1c7e01d3?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'neha-sharma',
    name: 'Ms. Neha Sharma',
    role: 'Speaker',
    title: 'Environmental Policy Expert, Green Development Network',
    bio: 'Neha works on biodiversity conservation, sustainable infrastructure, and the environmental impact assessment of cross-border projects.',
    image: 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'aminah-alvi',
    name: 'Ms. Aminah Alvi',
    role: 'Speaker',
    title: 'Trade Policy Specialist, South Asia Trade Council',
    bio: 'Aminah examines customs reform, non-tariff barriers, and the role of regional trade agreements in facilitating connectivity.',
    image: 'https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'kumar-rajan',
    name: 'Mr. Kumar Rajan',
    role: 'Speaker',
    title: 'Director, Rural Development Institute',
    bio: 'Kumar studies rural infrastructure, inclusive growth models, and the social benefits of improved regional linkages.',
    image: 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'emma-wong',
    name: 'Dr. Emma Wong',
    role: 'Speaker',
    title: 'Urban Planning Specialist, Metropolitan Policy Group',
    bio: 'Emma focuses on integrated urban development, transit-oriented growth, and sustainable city-region partnerships.',
    image: 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'nikhil-sharma',
    name: 'Mr. Nikhil Sharma',
    role: 'Speaker',
    title: 'Economist, Infrastructure Finance Hub',
    bio: 'Nikhil’s research covers project finance, risk mitigation, and investor engagement in regional infrastructure.',
    image: 'https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'tamilia-rahman',
    name: 'Ms. Tamilia Rahman',
    role: 'Speaker',
    title: 'Humanitarian Affairs Specialist, Crisis Response Network',
    bio: 'Tamilia highlights the role transport corridors and logistics play in disaster response and humanitarian access.',
    image: 'https://images.unsplash.com/photo-1520975914552-027c1c7e01d3?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'arjun-mehta',
    name: 'Mr. Arjun Mehta',
    role: 'Speaker',
    title: 'Policy Specialist, Energy Transition Initiative',
    bio: 'Arjun focuses on cross-border energy grids, renewable project collaboration, and energy security policies.',
    image: 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'laura-fernando',
    name: 'Dr. Laura Fernando',
    role: 'Speaker',
    title: 'Director, Maritime Affairs Institute',
    bio: 'Laura researches maritime law, port development, and the economic impact of sea lanes on regional trade.',
    image: 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'dinesh-kumar',
    name: 'Mr. Dinesh Kumar',
    role: 'Speaker',
    title: 'Senior Advisor, Border Infrastructure Group',
    bio: 'Dinesh specializes in border crossings, customs modernization, and the integration of smart infrastructure at checkpoints.',
    image: 'https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'karen-lee',
    name: 'Dr. Karen Lee',
    role: 'Speaker',
    title: 'Research Lead, Innovation in Governance',
    bio: 'Karen explores how digital tools and data sharing platforms can improve transparency in regional infrastructure projects.',
    image: 'https://images.unsplash.com/photo-1520975914552-027c1c7e01d3?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'arvind-patel',
    name: 'Mr. Arvind Patel',
    role: 'Speaker',
    title: 'Director, Cross-Border Cooperation Forum',
    bio: 'Arvind works on institutional mechanisms for dialogue, joint planning, and dispute resolution in regional infrastructure.',
    image: 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'sophia-williams',
    name: 'Dr. Sophia Williams',
    role: 'Speaker',
    title: 'Director, Regional Integration Institute',
    bio: 'Sophia focuses on public policy coordination, multilateral planning, and shared infrastructure governance.' ,
    image: 'https://images.unsplash.com/photo-1520975914552-027c1c7e01d3?auto=format&fit=crop&w=900&q=80'
  },
  {
    id: 'omar-ali',
    name: 'Mr. Omar Ali',
    role: 'Speaker',
    title: 'Senior Analyst, Connectivity Policy Lab',
    bio: 'Omar studies trade facilitation, border procedures, and the economic benefits of improved regional linkages.',
    image: 'https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=900&q=80'
  }
];

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
  document.body.style.overflow = 'hidden';
}

function closeSpeakerModal() {
  const modal = document.getElementById('speaker-modal');
  if (!modal) return;

  modal.classList.add('hidden');
  document.body.style.overflow = '';
}

function attachSpeakerCardHandlers() {
  const speakerCards = document.querySelectorAll('[data-speaker-id]');
  speakerCards.forEach((card) => {
    const speakerId = card.getAttribute('data-speaker-id');
    if (!speakerId) return;

    card.addEventListener('click', () => openSpeakerModal(speakerId));
    card.addEventListener('keydown', (event) => {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        openSpeakerModal(speakerId);
      }
    });
  });
}

function renderSpeakersGrid() {
  const container = document.getElementById('speakersGrid');
  if (!container) return;

  container.innerHTML = '';
  SPEAKERS.forEach((speaker) => {
    const card = document.createElement('article');
    card.setAttribute('data-speaker-id', speaker.id);
    card.setAttribute('role', 'button');
    card.setAttribute('tabindex', '0');
    card.className = 'cursor-pointer rounded-3xl bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md';

    card.innerHTML = `
      <div class="relative overflow-hidden rounded-2xl">
        <img class="h-56 w-full object-cover" src="${speaker.image}" alt="${speaker.name}" />
      </div>
      <h2 class="mt-6 text-xl font-semibold text-charcoal">${speaker.name}</h2>
      <p class="mt-2 text-sm font-semibold text-accent">${speaker.role}</p>
      <p class="mt-3 text-sm text-gray-700">${speaker.title}</p>
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

    // Close mobile menu when a navigation link is clicked
    const mobileMenuElement = document.getElementById('mobile-menu');
    if (mobileMenuElement) {
      mobileMenuElement.classList.add('hidden');
    }
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

// Ensure the mobile menu closes when a link is clicked
if (mobileMenu) {
  const mobileLinks = mobileMenu.querySelectorAll('a[href^="#"]');
  mobileLinks.forEach((link) => {
    link.addEventListener('click', () => {
      mobileMenu.classList.add('hidden');
    });
  });
}

// Hook up speaker interactions
attachSpeakerCardHandlers();
renderSpeakersGrid();

// Close speaker modal when clicking outside the content or pressing ESC
const speakerModal = document.getElementById('speaker-modal');
const speakerModalClose = document.getElementById('speaker-modal-close');
if (speakerModal) {
  speakerModal.addEventListener('click', (event) => {
    if (event.target === speakerModal) {
      closeSpeakerModal();
    }
  });
}

if (speakerModalClose) {
  speakerModalClose.addEventListener('click', closeSpeakerModal);
}

window.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') {
    closeSpeakerModal();
  }
});

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
