<?php
$page_title = "Nossos Patrocinadores";
$page_desc = "Veja as marcas que apoiam o automobilismo em Goiás. Descubra os benefícios de patrocinar os eventos da CGA e fale conosco.";
include 'includes/header.php';
?>

<!-- Header Banner -->
<section class="section-padding" style="padding-top: calc(var(--header-height) + 60px); background: linear-gradient(180deg, var(--bg-secondary) 0%, var(--bg-primary) 100%); border-bottom: 1px solid var(--border-color);" aria-label="Introdução aos Patrocinadores">
    <div class="container">
        <span class="section-subtitle">Parcerias de Sucesso</span>
        <h1 class="hero-title font-italic-bold" style="font-size: 3rem; margin-bottom: 16px;">
            Marcas que <span class="text-accent">Aceleram</span> Conosco
        </h1>
        <p style="color: var(--text-secondary); max-width: 700px; font-size: 1.1rem;">
            O esporte a motor é uma plataforma incomparável de marketing e visibilidade. Agradecemos às empresas que confiam e impulsionam o automobilismo goiano.
        </p>
    </div>
</section>

<!-- Sponsors Lists Tiers -->
<section class="section-padding" aria-label="Patrocinadores Atuais">
    <div class="container">
        
        <!-- Gold Tier -->
        <div class="sponsor-tier-section sponsor-tier-gold">
            <h2 class="sponsor-tier-title font-italic-bold"><i class="fa-solid fa-crown"></i> Patrocinadores Ouro</h2>
            <div class="sponsors-grid">
                <div class="sponsor-card bento-neon-border">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/40/Mitsubishi_logo.svg" alt="Mitsubishi Motors" class="sponsor-card-logo">
                    <span class="sponsor-card-name">Mitsubishi Motors</span>
                </div>
                <div class="sponsor-card bento-neon-border">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Pirelli_Logo.svg" alt="Pirelli Pneus" class="sponsor-card-logo">
                    <span class="sponsor-card-name">Pirelli Brasil</span>
                </div>
                <div class="sponsor-card bento-neon-border">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Mobil_Logo.svg" alt="Mobil Lubrificantes" class="sponsor-card-logo">
                    <span class="sponsor-card-name">Mobil Lubrificantes</span>
                </div>
                <div class="sponsor-card bento-neon-border">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Honda-logo.svg" alt="Honda Motos e Carros" class="sponsor-card-logo">
                    <span class="sponsor-card-name">Honda Automóveis</span>
                </div>
            </div>
        </div>

        <!-- Silver Tier -->
        <div class="sponsor-tier-section sponsor-tier-silver" style="margin-top: 60px;">
            <h2 class="sponsor-tier-title font-italic-bold"><i class="fa-solid fa-award"></i> Patrocinadores Prata</h2>
            <div class="sponsors-grid">
                <div class="sponsor-card">
                    <i class="fa-solid fa-gas-pump" style="font-size: 2rem; color: var(--text-muted); margin-bottom: 12px;"></i>
                    <span class="sponsor-card-name">Combustíveis Cerrado</span>
                </div>
                <div class="sponsor-card">
                    <i class="fa-solid fa-screwdriver-wrench" style="font-size: 2rem; color: var(--text-muted); margin-bottom: 12px;"></i>
                    <span class="sponsor-card-name">Ferramentas Goiana</span>
                </div>
                <div class="sponsor-card">
                    <i class="fa-solid fa-truck-fast" style="font-size: 2rem; color: var(--text-muted); margin-bottom: 12px;"></i>
                    <span class="sponsor-card-name">Logística Planalto</span>
                </div>
                <div class="sponsor-card">
                    <i class="fa-solid fa-helmet-safety" style="font-size: 2rem; color: var(--text-muted); margin-bottom: 12px;"></i>
                    <span class="sponsor-card-name">Equipamentos Podium</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Call to Action Sponsorship Form -->
<section class="section-padding" style="background-color: var(--bg-secondary); border-top: 1px solid var(--border-color);" aria-label="Seja um Patrocinador">
    <div class="container">
        <div class="contact-grid">
            <div class="sponsorship-benefits">
                <span class="section-subtitle">Oportunidade Comercial</span>
                <h2 class="font-italic-bold" style="font-size: 2.2rem; margin-bottom: 24px;">Exponha Sua Marca no Grid</h2>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Os eventos do Clube Goianiense de Automobilismo contam com ampla cobertura de imprensa local, transmissões ao vivo em mídias sociais e forte engajamento de público presencial.
                </p>
                <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 16px;">Formatos de Exposição:</h3>
                <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 24px;">
                    <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check text-accent" style="margin-right: 8px;"></i> Placas estáticas na reta principal do Autódromo</li>
                    <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check text-accent" style="margin-right: 8px;"></i> Logomarca impressa nas credenciais e backdrops oficiais</li>
                    <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check text-accent" style="margin-right: 8px;"></i> Espaço promocional para estandes nos dias de corrida</li>
                    <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check text-accent" style="margin-right: 8px;"></i> Citações de patrocinadores nas locuções oficiais do evento</li>
                </ul>
            </div>

            <div class="contact-form">
                <h3 class="font-italic-bold" style="font-size: 1.5rem; margin-bottom: 24px;">Solicitar Proposta de Parceria</h3>
                
                <form id="sponsorship-inquiry" action="javascript:void(0);" onsubmit="alert('Obrigado pelo contato! Nossa comissão comercial responderá sua empresa em até 48 horas.'); this.reset();">
                    <div class="form-group">
                        <label for="company-name" class="form-label">Nome da Empresa</label>
                        <input type="text" id="company-name" class="form-control" required placeholder="Sua marca ou razão social">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-name" class="form-label">Nome de Contato</label>
                            <input type="text" id="contact-name" class="form-control" required placeholder="Seu nome completo">
                        </div>
                        <div class="form-group">
                            <label for="contact-phone" class="form-label">Telefone / WhatsApp</label>
                            <input type="tel" id="contact-phone" class="form-control" required placeholder="(62) 99999-9999">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-email" class="form-label">E-mail Comercial</label>
                            <input type="email" id="contact-email" class="form-control" required placeholder="nome@suaempresa.com.br">
                        </div>
                        <div class="form-group">
                            <label for="interest-tier" class="form-label">Nível de Interesse</label>
                            <select id="interest-tier" class="form-control" style="background-color: var(--bg-tertiary);">
                                <option value="gold">Patrocínio Ouro</option>
                                <option value="silver">Patrocínio Prata</option>
                                <option value="bronze">Apoio e Serviços</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Esboço da Proposta / Dúvidas</label>
                        <textarea id="message" class="form-control" placeholder="Descreva brevemente a atuação de sua marca e expectativas comerciais..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;" id="btn-sponsor-submit">Enviar Proposta <i class="fa-solid fa-paper-plane" style="margin-left: 8px;"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
