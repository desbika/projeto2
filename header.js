// Variáveis para controle do scroll
const header = document.querySelector('header');
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