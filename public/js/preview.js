const certificateModal = document.getElementById('certificate-modal');
                const certificateModalImage = document.getElementById('certificate-modal-image');

                document.querySelectorAll('.certificate-link').forEach((link) => {
                    link.addEventListener('click', (event) => {
                        event.preventDefault();
                        certificateModalImage.src = link.href;
                        certificateModalImage.alt = link.querySelector('img').alt;
                        certificateModal.classList.add('is-open');
                        certificateModal.setAttribute('aria-hidden', 'false');
                    });
                });

                const closeCertificateModal = () => {
                    certificateModal.classList.remove('is-open');
                    certificateModal.setAttribute('aria-hidden', 'true');
                    certificateModalImage.src = '';
                };

                document.querySelector('.certificate-modal-close').addEventListener('click', closeCertificateModal);
                certificateModal.addEventListener('click', (event) => {
                    if (event.target === certificateModal) {
                        closeCertificateModal();
                    }
                });
                document.addEventListener('keydown', (event) => {
                    if (event.key === 'Escape') {
                        closeCertificateModal();
                    }
                });