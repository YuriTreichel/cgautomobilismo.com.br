<?php
$page_title = "Sobre o Clube";
$page_desc = "Conheça a história, missão, visão e valores do Clube Goianiense de Automobilismo. Conheça nossa diretoria executiva.";
include 'includes/header.php';
?>

<!-- Header Banner for Internal Pages -->
<section class="section-padding" style="padding-top: calc(var(--header-height) + 60px); background: linear-gradient(180deg, var(--bg-secondary) 0%, var(--bg-primary) 100%); border-bottom: 1px solid var(--border-color);" aria-label="Introdução Sobre Nós">
    <div class="container">
        <span class="section-subtitle">Quem Somos</span>
        <h1 class="hero-title font-italic-bold" style="font-size: 3rem; margin-bottom: 16px;">
            Tradição, Velocidade e <span class="text-accent">Segurança</span>
        </h1>
        <p style="color: var(--text-secondary); max-width: 700px; font-size: 1.1rem;">
            Desde a nossa fundação, atuamos na organização, assessoria regulatória e promoção de campeonatos de automobilismo em Goiás, transformando paixão em esporte de alto rendimento.
        </p>
    </div>
</section>

<!-- History Section -->
<section class="section-padding" aria-label="Nossa História">
    <div class="container about-history-section">
        <div class="about-history-content">
            <span class="section-subtitle">Nossa Jornada</span>
            <h2 class="font-italic-bold" style="font-size: 2.2rem; margin-bottom: 24px;">Como Tudo Começou</h2>
            <p style="color: var(--text-secondary); margin-bottom: 16px;">
                O Clube Goianiense de Automobilismo (CGA) nasceu da união de pilotos, preparadores e entusiastas que enxergaram no coração de Goiás um potencial gigante para o desenvolvimento do automobilismo de pista e kart.
            </p>
            <p style="color: var(--text-secondary); margin-bottom: 16px;">
                Ao longo de mais de três décadas, organizamos competições memoráveis que atraíram pilotos de renome nacional e internacional para o Autódromo de Goiânia. Consolidamos parcerias estratégicas, desenvolvemos regulamentos rigorosos e capacitamos centenas de oficiais de prova, comissários técnicos e fiscais de pista.
            </p>
            <p style="color: var(--text-secondary);">
                Hoje, a nossa prioridade é continuar inovando através do uso de tecnologias modernas de telemetria e cronometragem, sem nunca perder de vista o espírito desportivo clássico e a segurança intransigente exigida nas pistas.
            </p>
        </div>
        <div class="about-history-img-wrapper">
            <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?q=80&w=850&auto=format&fit=crop" alt="Carros clássicos de corrida no autódromo" class="about-history-img">
        </div>
    </div>
</section>

<!-- Mission, Vision, Values Bento Grid -->
<section class="section-padding" style="background-color: var(--bg-secondary); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);" aria-label="Pilares Institucionais">
    <div class="container">
        <div class="text-center" style="margin-bottom: 48px;">
            <span class="section-subtitle">Nossos Pilares</span>
            <h2 class="font-italic-bold" style="font-size: 2.2rem;">O Que Nos Guia</h2>
        </div>

        <div class="about-values-grid">
            <!-- Card 1: Missão -->
            <div class="value-card bento-neon-border">
                <div class="value-icon"><i class="fa-solid fa-crosshairs"></i></div>
                <h3 class="value-title font-italic-bold">Missão</h3>
                <p class="value-desc">
                    Fomentar a cultura do esporte a motor, organizando campeonatos profissionais e seguros que incentivem novos talentos e entretenham o público apaixonado por velocidade.
                </p>
            </div>

            <!-- Card 2: Visão -->
            <div class="value-card bento-neon-border">
                <div class="value-icon"><i class="fa-solid fa-eye"></i></div>
                <h3 class="value-title font-italic-bold">Visão</h3>
                <p class="value-desc">
                    Ser a principal referência de excelência regulatória e de entretenimento automobilístico na região Centro-Oeste até 2028, alcançando novos padrões tecnológicos.
                </p>
            </div>

            <!-- Card 3: Valores -->
            <div class="value-card bento-neon-border">
                <div class="value-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h3 class="value-title font-italic-bold">Valores</h3>
                <p class="value-desc">
                    Segurança absoluta nas pistas, integridade no cumprimento dos regulamentos técnicos, respeito aos pilotos e fomento ao espírito desportivo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Complete Directors Roster -->
<section class="section-padding" aria-label="Diretoria CGA Completa">
    <div class="container">
        <div class="text-center" style="margin-bottom: 60px;">
            <span class="section-subtitle">Liderança</span>
            <h2 class="font-italic-bold" style="font-size: 2.2rem;">Conselho de Administração</h2>
            <p style="color: var(--text-secondary); max-width: 600px; margin: 12px auto 0 auto;">
                Nossa diretoria trabalha em conjunto com órgãos reguladores para garantir a viabilidade jurídica e financeira de todos os campeonatos.
            </p>
        </div>

        <div class="roster-grid">
            <!-- Director 1 -->
            <div class="driver-card">
                <div class="driver-img-wrapper">
                    <div class="driver-number">01</div>
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=400&auto=format&fit=crop" alt="Marcos Vinícius" class="driver-img">
                    <div class="driver-overlay"></div>
                </div>
                <div class="driver-info">
                    <div class="driver-role">Presidente Executivo</div>
                    <h3 class="driver-name">Marcos Vinícius</h3>
                </div>
            </div>

            <!-- Director 2 -->
            <div class="driver-card">
                <div class="driver-img-wrapper">
                    <div class="driver-number">02</div>
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=400&auto=format&fit=crop" alt="Roberto Carlos" class="driver-img">
                    <div class="driver-overlay"></div>
                </div>
                <div class="driver-info">
                    <div class="driver-role">Diretor Desportivo</div>
                    <h3 class="driver-name">Roberto Carlos</h3>
                </div>
            </div>

            <!-- Director 3 -->
            <div class="driver-card">
                <div class="driver-img-wrapper">
                    <div class="driver-number">03</div>
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=400&auto=format&fit=crop" alt="Patrícia Lima" class="driver-img">
                    <div class="driver-overlay"></div>
                </div>
                <div class="driver-info">
                    <div class="driver-role">Diretora Administrativa</div>
                    <h3 class="driver-name">Patrícia Lima</h3>
                </div>
            </div>

            <!-- Director 4 -->
            <div class="driver-card">
                <div class="driver-img-wrapper">
                    <div class="driver-number">04</div>
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop" alt="Lucas Mendes" class="driver-img">
                    <div class="driver-overlay"></div>
                </div>
                <div class="driver-info">
                    <div class="driver-role">Comissário Técnico</div>
                    <h3 class="driver-name">Lucas Mendes</h3>
                </div>
            </div>

            <!-- Director 5 -->
            <div class="driver-card">
                <div class="driver-img-wrapper">
                    <div class="driver-number">05</div>
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=400&auto=format&fit=crop" alt="Fernanda Souza" class="driver-img">
                    <div class="driver-overlay"></div>
                </div>
                <div class="driver-info">
                    <div class="driver-role">Relações Públicas</div>
                    <h3 class="driver-name">Fernanda Souza</h3>
                </div>
            </div>

            <!-- Director 6 -->
            <div class="driver-card">
                <div class="driver-img-wrapper">
                    <div class="driver-number">06</div>
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=400&auto=format&fit=crop" alt="Ricardo Gomes" class="driver-img">
                    <div class="driver-overlay"></div>
                </div>
                <div class="driver-info">
                    <div class="driver-role">Diretor de Segurança</div>
                    <h3 class="driver-name">Ricardo Gomes</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
