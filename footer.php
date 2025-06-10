    <footer>
        <div class="container">
            <p>© 2025 Prime Hair Studio. Todos os direitos reservados.</p>
        </div>
    </footer>

    <a href="https://wa.me/5544999259339?text=Olá!%20Gostaria%20de%20agendar%20um%20horário%20na%20Prime%20Hair%20Studio."
        class="whatsapp-float" target="_blank" aria-label="Agendar pelo WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span class="tooltip">Agendar horário</span>
    </a>

    <button id="back-to-top" class="back-to-top" aria-label="Voltar ao topo">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        // Scripts Globais
        const menuToggle = document.getElementById('menu-toggle');
        const navLinks = document.getElementById('nav-links');
        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        }

        const header = document.getElementById('header');
        if (header) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        }

        if (navLinks) {
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    if (navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                    }
                });
            });
        }

        const backToTopButton = document.getElementById('back-to-top');
        if (backToTopButton) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTopButton.classList.add('show');
                } else {
                    backToTopButton.classList.remove('show');
                }
            });
            backToTopButton.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    </script>
</body>
</html> 