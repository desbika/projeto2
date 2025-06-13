<?php
$page_title = 'Prime Hair Studio - Deixe seu Feedback';
$page_description = 'Sua opinião é fundamental para nós! Deixe seu feedback sobre nossos serviços e ajude a Prime Hair Studio a melhorar sempre. Avalie seu atendimento.';
include 'header.php';

// Array de depoimentos dos clientes
$depoimentos = [
    [
        'nome' => 'João Silva',
        'texto' => 'Atendimento impecável e o corte ficou exatamente como eu queria. A equipe é super profissional e o ambiente é muito estiloso. Virei cliente fiel!',
        'avaliacao' => 5,
        'foto' => 'https://i.pravatar.cc/100?u=joao'
    ],
    [
        'nome' => 'Carlos Souza',
        'texto' => 'Melhor barba que já fiz na vida. Usam produtos de alta qualidade e a toalha quente no final faz toda a diferença. Recomendo demais!',
        'avaliacao' => 5,
        'foto' => 'https://i.pravatar.cc/100?u=carlos'
    ],
    [
        'nome' => 'Maria Oliveira',
        'texto' => 'Levei meu filho para cortar o cabelo e a paciência e o carinho da equipe foram incríveis. O corte ficou ótimo e ele adorou a experiência.',
        'avaliacao' => 4.5,
        'foto' => 'https://i.pravatar.cc/100?u=maria'
    ]
];
?>

<section id="feedback" class="feedback section">
    <div class="container">
        <h2 class="section-title">Feedback</h2>
        <div class="feedback-content">
            <div class="feedback-intro">
                <div class="feedback-highlight">
                    <div class="feedback-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Sua opinião é muito importante para nós!</h3>
                    <p>Ajude-nos a melhorar nossos serviços compartilhando sua experiência</p>
                    <div class="commitments">
                        <h4 class="commitments-title">Nossos Compromissos</h4>
                        <ul class="commitments-list">
                            <li>
                                <i class="fas fa-gem"></i>
                                <span>Qualidade Premium</span>
                            </li>
                            <li>
                                <i class="fas fa-shield-alt"></i>
                                <span>Higiene Nota 10</span>
                            </li>
                            <li>
                                <i class="fas fa-couch"></i>
                                <span>Ambiente Aconchegante</span>
                            </li>
                            <li>
                                <i class="fas fa-hand-sparkles"></i>
                                <span>Atendimento Personalizado</span>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-social">
                        <h4 class="sidebar-social-title">Siga nosso trabalho de perto</h4>
                        <a href="https://www.instagram.com/prime.hair.studio/" target="_blank" class="social-button instagram">
                            <i class="fab fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                        <a href="https://wa.me/5544999259339?text=Olá!%20Gostaria%20de%20saber%20mais%20sobre%20a%20Prime%20Hair%20Studio." target="_blank" class="social-button whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="feedback-form-container">
                <form action="https://formsubmit.co/enzogamenezes@gmail.com" method="POST" class="feedback-form" id="feedbackForm">
                    <div class="form-group">
                        <label for="nome">Nome </label>
                        <input type="text" id="nome" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone">
                    </div>

                    <div class="form-group">
                        <label for="servico">Serviço Realizado</label>
                        <select id="servico" name="servico">
                            <option value="">Selecione um serviço</option>
                            <option value="corte">Corte de Cabelo</option>
                            <option value="barba">Barba</option>
                            <option value="coloracao">Coloração</option>
                            <option value="tratamento">Tratamento Capilar</option>
                            <option value="premium">Pacote Premium</option>
                            <option value="noivo">Dia do Noivo</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="avaliacao">Como você avalia nosso atendimento? *</label>
                        <div class="rating-container">
                            <div class="stars-rating">
                                <input type="radio" id="star5" name="avaliacao" value="5" required>
                                <label for="star5"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star4" name="avaliacao" value="4">
                                <label for="star4"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star3" name="avaliacao" value="3">
                                <label for="star3"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star2" name="avaliacao" value="2">
                                <label for="star2"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star1" name="avaliacao" value="1">
                                <label for="star1"><i class="fas fa-star"></i></label>
                            </div>
                            <span class="rating-text">Clique nas estrelas para avaliar</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="comentario">Comentários e Sugestões *</label>
                        <textarea id="comentario" name="comentario" rows="5" placeholder="Conte-nos sobre sua experiência, sugestões ou elogios..." required></textarea>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="recomendaria" name="recomendaria">
                            <span class="checkmark"></span>
                            Eu recomendaria a Prime Hair Studio para amigos e familiares
                        </label>
                    </div>
                    <input type="hidden" name="_next" value="/feedback?status=success">
                    <input type="hidden" name="_captcha" value="false">
                    <button type="submit" class="feedback-btn">
                        <i class="fas fa-paper-plane"></i>
                        <span>Enviar Feedback</span>
                    </button>
                </form>
            </div>
        </div>

        <div class="feedback-thanks" id="thankYouMessage" style="display: none;">
            <div class="thanks-icon">
                <i class="fas fa-heart"></i>
            </div>
            <h3>Muito obrigado pelo seu feedback!</h3>
            <p>Sua opinião é fundamental para continuarmos oferecendo o melhor serviço.</p>
        </div>
    </div>
</section>

<section id="testimonials" class="testimonials section">
    <div class="container">
        <h2 class="section-title">O Que Nossos Clentes Dizem</h2>
        <div class="testimonials-grid">
            <?php foreach ($depoimentos as $depoimento): ?>
            <div class="testimonial-card">
                <div class="testimonial-quote-icon">
                    <i class="fas fa-quote-left"></i>
                </div>
                <blockquote class="testimonial-text">
                    "<?php echo $depoimento['texto']; ?>"
                </blockquote>
                <div class="testimonial-author">
                    <img src="<?php echo $depoimento['foto']; ?>" alt="Foto do cliente <?php echo $depoimento['nome']; ?>" class="author-img">
                    <div class="author-info">
                        <p class="author-name"><?php echo $depoimento['nome']; ?></p>
                        <div class="author-rating">
                            <?php
                            $estrelasCheias = floor($depoimento['avaliacao']);
                            $temMeiaEstrela = $depoimento['avaliacao'] - $estrelasCheias >= 0.5;
                            
                            for ($i = 0; $i < $estrelasCheias; $i++) {
                                echo '<i class="fas fa-star"></i>';
                            }
                            if ($temMeiaEstrela) {
                                echo '<i class="fas fa-star-half-alt"></i>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    // Script Específico do Formulário de Feedback
    const feedbackForm = document.getElementById('feedbackForm');
    const thankYouMessage = document.getElementById('thankYouMessage');
    const feedbackContent = document.querySelector('.feedback-content');

    if (feedbackForm) {
        feedbackForm.addEventListener('submit', function (e) {
            e.preventDefault();
            
            const submitBtn = document.querySelector('.feedback-btn');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Enviando...</span>';
            submitBtn.disabled = true;

            const formData = new FormData(this);

            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    if(feedbackContent) feedbackContent.style.display = 'none';
                    if(thankYouMessage) thankYouMessage.style.display = 'block';
                } else {
                    response.json().then(data => {
                        if (data.errors) {
                            alert(data.errors.map(error => error.message).join(", "));
                        } else {
                            alert('Ocorreu um erro ao enviar o feedback. Tente novamente.');
                        }
                    });
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            })
            .catch(error => {
                console.error('Erro no envio do formulário:', error);
                alert('Ocorreu um erro de conexão ao enviar o feedback.');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });
    }

    // Melhorar a experiência das estrelas
    document.querySelectorAll('.stars-rating input').forEach(input => {
        input.addEventListener('change', function () {
            const ratingText = document.querySelector('.rating-text');
            if (!ratingText) return;

            const value = this.value;
            const texts = {
                '1': 'Muito insatisfeito 😞',
                '2': 'Insatisfeito 😐',
                '3': 'Neutro 🙂',
                '4': 'Satisfeito 😊',
                '5': 'Muito satisfeito! 🤩'
            };
            ratingText.textContent = texts[value] || 'Clique nas estrelas para avaliar';

            // Remove classes de cor antigas
            ratingText.classList.remove('rating-good', 'rating-neutral', 'rating-bad');

            // Adiciona a classe de cor nova com base no valor
            if (value >= 4) {
                ratingText.classList.add('rating-good');
            } else if (value == 3) {
                ratingText.classList.add('rating-neutral');
            } else if (value > 0) {
                ratingText.classList.add('rating-bad');
            }
        });
    });

    // Para exibir a mensagem de "Obrigado" se redirecionado pelo formsubmit.co com um parâmetro na URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'success') {
        if(feedbackContent) feedbackContent.style.display = 'none';
        if(thankYouMessage) thankYouMessage.style.display = 'block';
    }
</script>

<?php include 'footer.php'; ?> 