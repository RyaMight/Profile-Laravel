document.addEventListener('DOMContentLoaded', () => {
    const certificateModal = document.getElementById('certificate-modal');
    const certificateModalImage = document.getElementById('certificate-modal-image');

    if (certificateModal && certificateModal.parentNode !== document.body) {
        document.body.appendChild(certificateModal);
    }

    document.querySelectorAll('.certificate-link').forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();

            const imageSrc = link.dataset.img || link.getAttribute('href');
            const imgElement = link.querySelector('img');

            if (imageSrc && certificateModalImage) {
                certificateModalImage.src = imageSrc;
                certificateModalImage.alt = imgElement ? imgElement.alt : 'Preview sertifikat';

                certificateModal.classList.add('is-open');
                certificateModal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    const closeCertificateModal = () => {
        if (certificateModal) {
            certificateModal.classList.remove('is-open');
            certificateModal.setAttribute('aria-hidden', 'true');
            if (certificateModalImage) certificateModalImage.src = '';
            document.body.style.overflow = '';
        }
    };

    const closeBtn = document.querySelector('.certificate-modal-close');
    if (closeBtn) closeBtn.addEventListener('click', closeCertificateModal);

    if (certificateModal) {
        certificateModal.addEventListener('click', (event) => {
            if (event.target === certificateModal) closeCertificateModal();
        });
    }

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && certificateModal?.classList.contains('is-open')) {
            closeCertificateModal();
        }
    });

    const menuToggle = document.getElementById('menu-toggle');
    const navbar = document.getElementById('navbar');

    if (menuToggle && navbar) {
        menuToggle.addEventListener('click', () => {
            const isOpen = navbar.classList.toggle('is-open');
            menuToggle.setAttribute('aria-expanded', String(isOpen));
        });

        navbar.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                navbar.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    const navLinks = document.querySelectorAll('.navbar a[href^="#"]');
    const sections = [...navLinks]
        .map((link) => document.querySelector(link.getAttribute('href')))
        .filter(Boolean);

    if (sections.length) {
        const highlightNav = () => {
            const scrollPos = window.scrollY + 120;
            let currentId = sections[0].id;

            sections.forEach((section) => {
                if (section.offsetTop <= scrollPos) currentId = section.id;
            });

            navLinks.forEach((link) => {
                link.classList.toggle('active', link.getAttribute('href') === '#' + currentId);
            });
        };

        window.addEventListener('scroll', highlightNav, { passive: true });
        highlightNav();
    }

    const revealElements = document.querySelectorAll('.reveal');
    if (revealElements.length && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        revealElements.forEach((el) => observer.observe(el));
    } else {
        revealElements.forEach((el) => el.classList.add('is-visible'));
    }
});
