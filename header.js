// Variáveis para controle do scroll
window.addEventListener('DOMContentLoaded', function() {
    // Detecta se está na home
    if (window.location.pathname === '/' || window.location.pathname === '/index.php' || window.location.pathname.match(/\/Projeto2\/?$/)) {
        // Na home, não faz nada: header sempre fixo, sem animação
        return;
    }
    const header = document.getElementById('header');
    const scrollThreshold = 50;

    // Função para controlar o comportamento do header
    function handleScroll() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        // Adiciona classe 'scrolled' quando rolar mais que o threshold
        if (currentScroll > scrollThreshold) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    // Adiciona o evento de scroll
    window.addEventListener('scroll', handleScroll, { passive: true });

    // Inicializa o estado do header
    handleScroll();
});