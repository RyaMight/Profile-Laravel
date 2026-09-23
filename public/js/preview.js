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
});