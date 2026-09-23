document.addEventListener('DOMContentLoaded', () => {
    const certificateModal = document.getElementById('certificate-modal');
    const certificateModalImage = document.getElementById('certificate-modal-image');

    if (certificateModal && certificateModal.parentNode !== document.body) {
        document.body.appendChild(certificateModal);
    }

    document.querySelectorAll('.certificate-link').forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            certificateModalImage.src = link.href;
            certificateModalImage.alt = link.querySelector('img')?.alt || 'Preview sertifikat';
            certificateModal.classList.add('is-open');
            certificateModal.setAttribute('aria-hidden', 'false');
            
            document.body.style.overflow = 'hidden';
        });
    });

    const closeCertificateModal = () => {
        certificateModal.classList.remove('is-open');
        certificateModal.setAttribute('aria-hidden', 'true');
        certificateModalImage.src = '';
        
        document.body.style.overflow = '';
    };

    const closeBtn = document.querySelector('.certificate-modal-close');
    if (closeBtn) {
        closeBtn.addEventListener('click', closeCertificateModal);
    }

    certificateModal.addEventListener('click', (event) => {
        if (event.target === certificateModal) {
            closeCertificateModal();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && certificateModal.classList.contains('is-open')) {
            closeCertificateModal();
        }
    });
});