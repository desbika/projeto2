<?php
$page_title = isset($page_title) ? $page_title : 'Prime Hair Studio';
$page_description = isset($page_description) ? $page_description : 'Barbearia Premium em Campo Mourão';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <i class="fas fa-cut"></i>
                    <div class="logo-text"><span>Prime</span> Hair Studio</div>
                </div>
                <button class="menu-toggle" id="menu-toggle" aria-label="Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="menu-overlay" id="menu-overlay"></div>
                <ul class="nav-links" id="nav-links">
                    <li><a href="/Projeto2/">Home</a></li>
                    <li><a href="/Projeto2/sobre">Sobre</a></li>
                    <li><a href="/Projeto2/servicos">Serviços</a></li>
                    <li><a href="/Projeto2/agendamento">Agendamento</a></li>
                    <li><a href="/Projeto2/feedback">Feedback</a></li>
                </ul>
                <div class="social-icons">
                    <a href="https://www.instagram.com/prime.hair.studio/" target="_blank" aria-label="Instagram" class="social-icon instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/5544999259339?text=Olá!%20Gostaria%20de%20agendar%20um%20horário%20na%20Prime%20Hair%20Studio." class="social-icon whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <script>
        // Menu Mobile
        const menuToggle = document.getElementById('menu-toggle');
        const navLinks = document.getElementById('nav-links');
        const menuOverlay = document.getElementById('menu-overlay');
        const body = document.body;

        function toggleMenu() {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
            menuOverlay.classList.toggle('active');
            body.style.overflow = body.style.overflow === 'hidden' ? '' : 'hidden';
        }

        menuToggle.addEventListener('click', toggleMenu);
        menuOverlay.addEventListener('click', toggleMenu);

        // Fechar menu ao clicar em um link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                if (navLinks.classList.contains('active')) {
                    toggleMenu();
                }
            });
        });

        // Header Scroll
        const header = document.getElementById('header');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                header.classList.remove('scrolled');
                return;
            }

            if (currentScroll > lastScroll && !header.classList.contains('scroll-down')) {
                // Scroll Down
                header.classList.remove('scroll-up');
                header.classList.add('scroll-down');
            } else if (currentScroll < lastScroll && header.classList.contains('scroll-down')) {
                // Scroll Up
                header.classList.remove('scroll-down');
                header.classList.add('scroll-up');
            }

            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        });

        // Prevenir scroll quando menu está aberto
        function preventScroll(e) {
            if (navLinks.classList.contains('active')) {
                e.preventDefault();
            }
        }

        document.addEventListener('touchmove', preventScroll, { passive: false });
    </script>
</body>
</html> 