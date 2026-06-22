<?php
$page_title = "Fale Conosco";
$page_desc = "Entre em contato com o Clube Goianiense de Automobilismo por telefone, WhatsApp, email ou envie uma mensagem direta pelo formulário.";

// Form handling logic in PHP
$success_message = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($name && $email && $subject && $message) {
        // Here, a real system would send an email using mail() or a mail library
        // We will simulate a successful submission for client feedback
        $success_message = "Obrigado, $name! Sua mensagem sobre '$subject' foi enviada com sucesso e nossa secretaria entrará em contato em breve.";
    } else {
        $error_message = "Por favor, preencha todos os campos obrigatórios corretamente.";
    }
}

include 'includes/header.php';
?>

<!-- Header Banner -->
<section class="section-padding" style="padding-top: calc(var(--header-height) + 60px); background: linear-gradient(180deg, var(--bg-secondary) 0%, var(--bg-primary) 100%); border-bottom: 1px solid var(--border-color);" aria-label="Introdução aos Contatos">
    <div class="container">
        <span class="section-subtitle">Canais de Atendimento</span>
        <h1 class="hero-title font-italic-bold" style="font-size: 3rem; margin-bottom: 16px;">
            Fale Conosco <span class="text-accent">Hoje</span>
        </h1>
        <p style="color: var(--text-secondary); max-width: 700px; font-size: 1.1rem;">
            Deseja participar dos campeonatos, solicitar credenciamento de imprensa ou esclarecer dúvidas regulatórias? Escolha o melhor canal abaixo.
        </p>
    </div>
</section>

<!-- Main Contact Section -->
<section class="section-padding" aria-label="Canais de Contato">
    <div class="container">
        <div class="contact-grid">
            
            <!-- Left: Contact info -->
            <div class="contact-info">
                <span class="section-subtitle">Informações de Contato</span>
                <h2 class="font-italic-bold" style="font-size: 2.2rem; margin-bottom: 24px;">Nossos Canais</h2>
                <p style="color: var(--text-secondary); margin-bottom: 32px;">
                    Nossa equipe técnica e comercial atende de segunda a sexta, das 09h às 18h. Nos finais de semana de eventos, nossa secretaria fica aberta no Autódromo de Goiânia.
                </p>

                <div class="contact-info-list">
                    <!-- Address -->
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <div class="contact-info-title">Sede Administrativa</div>
                            <div class="contact-info-value">Av. Paranaíba, N. 1200, Centro - Goiânia - GO</div>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <div class="contact-info-title">Telefone Central</div>
                            <div class="contact-info-value">(62) 3218-1234</div>
                        </div>
                    </div>
                    <!-- WhatsApp -->
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="fa-brands fa-whatsapp" style="color: #2ecc71;"></i></div>
                        <div>
                            <div class="contact-info-title">WhatsApp Secretaria</div>
                            <div class="contact-info-value">(62) 99876-5432</div>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <div class="contact-info-title">E-mail de Contato</div>
                            <div class="contact-info-value">contato@cgautomobilismo.com.br</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Contact form -->
            <div class="contact-form" id="contato-formulario">
                <h3 class="font-italic-bold" style="font-size: 1.5rem; margin-bottom: 24px;">Envie uma Mensagem</h3>
                
                <!-- Display status messages if any -->
                <?php if ($success_message): ?>
                    <div class="alert-box alert-success" role="alert"><?php echo $success_message; ?></div>
                <?php endif; ?>
                <?php if ($error_message): ?>
                    <div class="alert-box alert-error" role="alert"><?php echo $error_message; ?></div>
                <?php endif; ?>

                <form action="contato.php#contato-formulario" method="POST">
                    <div class="form-group">
                        <label for="form-name" class="form-label">Nome Completo *</label>
                        <input type="text" id="form-name" name="name" class="form-control" required placeholder="Seu nome completo">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="form-email" class="form-label">E-mail *</label>
                            <input type="email" id="form-email" name="email" class="form-control" required placeholder="seuemail@exemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="form-phone" class="form-label">WhatsApp</label>
                            <input type="tel" id="form-phone" name="phone" class="form-control" placeholder="(62) 99999-9999">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-subject" class="form-label">Assunto *</label>
                        <input type="text" id="form-subject" name="subject" class="form-control" required placeholder="Ex: Inscrição campeonato, dúvidas técnicas, imprensa...">
                    </div>
                    <div class="form-group">
                        <label for="form-message" class="form-label">Mensagem *</label>
                        <textarea id="form-message" name="message" class="form-control" required placeholder="Escreva sua mensagem aqui..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;" id="btn-contact-submit">Enviar Mensagem <i class="fa-solid fa-paper-plane" style="margin-left: 8px;"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Google Map Embed Section -->
<section style="height: 450px; width: 100%; border-top: 1px solid var(--border-color); position: relative;" aria-label="Mapa do Autódromo de Goiânia">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.5794503792613!2d-49.1979996!3d-16.7118334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef7d21c4b7b3d%3A0xc6cbfa8669e46a78!2sAut%C3%B3dromo%20Internacional%20Ayrton%20Senna!5e0!3m2!1spt-BR!2sbr!4v1718753245620!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0; filter: invert(90%) hue-rotate(180deg) grayscale(80%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Localização do Autódromo de Goiânia no Google Maps"></iframe>
</section>

<?php
include 'includes/footer.php';
?>
