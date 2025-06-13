<?php
$page_title = 'Prime Hair Studio - Nossos Serviços';
$page_description = 'Explore nossos serviços premium na Prime Hair Studio: cortes de cabelo, barba terapia, coloração, tratamentos e pacotes exclusivos como o Dia do Noivo.';
include 'header.php';
?>

<section id="services" class="services section">
    <div class="container">
        <h2 class="section-title">Nossos Serviços</h2>
        
        <p class="section-intro" style="text-align: center; max-width: 750px; margin: -0px auto 50px; font-size: 1.1rem; color: #f1faee; opacity: 0.9; line-height: 1.7;">
            Na Prime Hair Studio, cada serviço é uma experiência de cuidado e estilo. Utilizamos técnicas precisas e produtos de excelência para garantir que você saia sempre satisfeito e com o visual renovado. Escolha o seu e sinta a diferença.
        </p>

        <div class="services-container">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-cut"></i></div>
                <h3 class="service-title">Corte de Cabelo</h3>
                <p class="service-price">R$ 45,00</p>
                <p class="service-description">Consultoria de estilo e corte preciso para um visual moderno e personalizado. Acabamento impecável, do seu jeito.</p>
                <a href="/Projeto2/agendamento" class="btn">Agendar</a>
            </div>

            <div class="service-card">
                <div class="service-icon"><i class="fas fa-spa"></i></div>
                <h3 class="service-title">Barba Terapia</h3>
                <p class="service-price">R$ 45,00</p>
                <p class="service-description">Barba alinhada, modelada e tratada com toalha quente e produtos premium. Design, hidratação e relaxamento.</p>
                <a href="/Projeto2/agendamento" class="btn">Agendar</a>
            </div>

            <div class="service-card">
                <div class="service-icon"><i class="fas fa-palette"></i></div>
                <h3 class="service-title">Coloração Expert</h3>
                <p class="service-price">R$ 110,00</p>
                <p class="service-description">Transforme ou realce sua cor com segurança e estilo. Produtos de ponta para um resultado natural e duradouro.</p>
                <a href="/Projeto2/agendamento" class="btn">Agendar</a>
            </div>

            <div class="service-card">
                <div class="service-icon"><i class="fas fa-hand-holding-water"></i></div>
                <h3 class="service-title">Hidratação</h3>
                <p class="service-price">R$ 40,00</p>
                <p class="service-description">Revitalize seus fios com hidratação profunda e tratamentos específicos para a saúde e brilho do seu cabelo.</p>
                <a href="/Projeto2/agendamento" class="btn">Agendar</a>
            </div>

            <div class="service-card popular-choice">
                <span class="service-badge">Mais Pedido</span>
                <div class="service-icon"><i class="fas fa-crown"></i></div>
                <h3 class="service-title">Pacote Prime</h3>
                <p class="service-price">R$ 120,00</p>
                <p class="service-description">A experiência completa! Corte de cabelo, barba Terapia e sombrancelha.</p>
                <a href="/Projeto2/agendamento" class="btn">Agendar</a>
            </div>

            <div class="service-card">
                <div class="service-icon"><i class="fas fa-hand-sparkles"></i></div>
                <h3 class="service-title">Depilação</h3>
                <p class="service-price">R$ 15,00</p>
                <p class="service-description">Depilação profissional com cera quente. Áreas específicas ou pacote completo. Cuidados com a pele e resultados duradouros.</p>
                <a href="/Projeto2/agendamento" class="btn">Agendar</a>
            </div>
        </div>
    </div>
</section>

<section class="cta-services-section section">
    <div class="container">
        <h2 class="section-title">Pronto para Elevar Seu Estilo?</h2>
        <p>Nossos especialistas estão à sua espera para oferecer uma experiência de barbearia incomparável. Agende seu horário e descubra o padrão de excelência da Prime Hair Studio.</p>
        <div class="cta-buttons">
            <a href="/Projeto2/agendamento" class="btn btn-cta-primary">Agendar Agora</a>
            <a href="https://wa.me/5544999259339?text=Olá!%20Gostaria%20de%20saber%20mais%20sobre%20os%20serviços." target="_blank" class="btn btn-cta-secondary">Fale Conosco</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?> 