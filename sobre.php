<?php
$page_title = 'Prime Hair Studio - Sobre Nós';
$page_description = 'Conheça a história da Prime Hair Studio e a paixão do nosso barbeiro, Ariel Mukoon. Descubra por que somos a escolha certa para o seu estilo em Campo Mourão.';
include 'header.php';
?>

<section id="about" class="about section">
    <div class="container">
        <h2 class="section-title">Prime Hair Studio: Seu Estilo, Nossa Arte.</h2>

        <div class="about-content">
            <div class="about-text">
                <h3>Nossa Paixão, Sua Confiança</h3>
                <p>Desde 2018, a arte da barbearia é nossa paixão. Oferecemos consultoria de estilo, ambiente relaxante e foco total na sua satisfação.</p>
                
                <h3>Nas Mãos de Quem Entende: Ariel Mukoon</h3>
                <p>Com Ariel Mukoon, sua transformação está garantida. Experiência, técnica apurada e os melhores produtos para um visual impecável.</p>
                
                <h3>Por que a Prime é a Sua Escolha?</h3>
                <ul class="prime-differentials">
                    <li>
                        <i class="fas fa-star"></i>
                        <div>
                            <h4>Atendimento Exclusivo</h4>
                            <p>Você em foco. Cuidado que entende e realça seu estilo.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-hand-scissors"></i>
                        <div>
                            <h4>Mestria em Cortes</h4>
                            <p>Cortes perfeitos, do clássico ao moderno. Seu visual, nossa arte.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-gem"></i>
                        <div>
                            <h4>Qualidade Inegociável</h4>
                            <p>Só o melhor para você. Produtos premium, resultados incríveis.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-couch"></i>
                        <div>
                            <h4>Seu Momento Prime</h4>
                            <p>Conforto e relaxamento. Seu refúgio particular no estilo Prime.</p>
                        </div>
                    </li>
                </ul>

                <h3>Descubra a Diferença</h3>
                <p>Viva a experiência Prime. Agende seu horário e sinta a transformação no seu visual e bem-estar.</p>
            </div>

            <div class="about-carousel">
                <div class="carousel-container">
                    <div class="carousel-wrapper">
                        <div class="carousel-slide active">
                            <img src="images/ariel3.jpg" alt="Barbeiro Ariel Mukoon em ação na Prime Hair Studio">
                        </div>
                        <div class="carousel-slide">
                            <img src="images/ariel2.jpg" alt="Ambiente interno da Barbearia Prime Hair Studio">
                        </div>
                        <div class="carousel-slide">
                            <img src="images/ariel.jpg" alt="Cliente satisfeito na Prime Hair Studio">
                        </div>
                        <div class="carousel-slide">
                            <img src="images/2024-09-26.webp" alt="Produtos de alta qualidade utilizados na Prime Hair Studio">
                        </div>
                    </div>
                    
                    <button class="carousel-btn prev-btn" onclick="changeSlide(-1)">
                        <span>‹</span>
                    </button>
                    <button class="carousel-btn next-btn" onclick="changeSlide(1)">
                        <span>›</span>
                    </button>
                    
                    <div class="carousel-indicators">
                        <span class="indicator active" onclick="currentSlide(1)"></span>
                        <span class="indicator" onclick="currentSlide(2)"></span>
                        <span class="indicator" onclick="currentSlide(3)"></span>
                        <span class="indicator" onclick="currentSlide(4)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Script Específico do Carrossel
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    const totalSlides = slides.length;
    let autoPlayInterval;

    function showSlide(index) {
        if (slides.length === 0 || indicators.length === 0 || index < 0 || index >= totalSlides) return;
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
        
        currentSlideIndex = index;
    }

    function changeSlide(direction) {
        if (slides.length === 0) return;
        currentSlideIndex += direction;
        
        if (currentSlideIndex >= totalSlides) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = totalSlides - 1;
        }
        showSlide(currentSlideIndex);
    }

    function currentSlide(index) {
        if (slides.length === 0) return;
        showSlide(index - 1);
    }

    function startAutoPlay() {
        if (slides.length === 0) return;
        stopAutoPlay(); 
        autoPlayInterval = setInterval(() => {
            changeSlide(1);
        }, 3000);
    }

    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }

    document.addEventListener('DOMContentLoaded', function() {
        if (slides.length > 0 && indicators.length > 0) {
            showSlide(0);
            startAutoPlay();
        }
        
        const carouselContainer = document.querySelector('.carousel-container');
        if (carouselContainer) {
            carouselContainer.addEventListener('mouseenter', stopAutoPlay);
            carouselContainer.addEventListener('mouseleave', startAutoPlay);
        }
    });
</script>

<?php include 'footer.php'; ?> 