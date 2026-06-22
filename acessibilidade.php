<?php
$page_title = "Acessibilidade";
$page_desc = "Conheça os recursos de acessibilidade do nosso portal: atalhos de teclado, alteração de contraste, redimensionamento de fonte e fonte adaptada para dislexia.";
include 'includes/header.php';
?>

<!-- Header Banner -->
<section class="section-padding" style="padding-top: calc(var(--header-height) + 60px); background: linear-gradient(180deg, var(--bg-secondary) 0%, var(--bg-primary) 100%); border-bottom: 1px solid var(--border-color);" aria-label="Introdução à Acessibilidade">
    <div class="container">
        <span class="section-subtitle">Direito de Todos</span>
        <h1 class="hero-title font-italic-bold" style="font-size: 3rem; margin-bottom: 16px;">
            Compromisso de <span class="text-accent">Acessibilidade</span>
        </h1>
        <p style="color: var(--text-secondary); max-width: 700px; font-size: 1.1rem;">
            Acreditamos que o acesso à informação é fundamental. Nosso portal foi planejado seguindo padrões web semânticos para garantir que todos possam navegar com autonomia e conforto.
        </p>
    </div>
</section>

<!-- Accessibility Details -->
<section class="section-padding" aria-label="Descrição de Recursos">
    <div class="container">
        <div class="events-grid">
            
            <!-- Left: Description of Features -->
            <div class="card-glowing">
                <h2 class="font-italic-bold" style="font-size: 1.5rem; margin-bottom: 24px;"><i class="fa-solid fa-circle-info text-accent" style="margin-right: 10px;"></i> Recursos Disponíveis</h2>
                
                <h3 style="font-size: 1.1rem; font-weight: 700; margin-top: 20px; margin-bottom: 8px;">1. Painel de Acessibilidade Flutuante</h3>
                <p style="color: var(--text-secondary); margin-bottom: 16px; font-size: 0.95rem;">
                    No topo direito da página, há um botão circular azul/cinza com o ícone de acessibilidade (<i class="fa-solid fa-universal-access"></i>). Ao ser ativado via clique ou teclado, ele permite alterar o contraste, ajustar o tamanho das letras (A+ / A-) e ativar a fonte adaptada para dislexia.
                </p>

                <h3 style="font-size: 1.1rem; font-weight: 700; margin-top: 20px; margin-bottom: 8px;">2. Atalhos de Teclado Rápidos</h3>
                <p style="color: var(--text-secondary); margin-bottom: 16px; font-size: 0.95rem;">
                    Você pode pular etapas e navegar diretamente para seções do site utilizando as teclas de atalho mapeadas (Alt + número correspondente, listados na tabela ao lado).
                </p>

                <h3 style="font-size: 1.1rem; font-weight: 700; margin-top: 20px; margin-bottom: 8px;">3. Navegação por Teclado e Foco Visível</h3>
                <p style="color: var(--text-secondary); margin-bottom: 16px; font-size: 0.95rem;">
                    O site foi otimizado para navegação completa através da tecla <code>Tab</code>. Elementos em foco exibem uma borda vermelha nítida facilitando o rastreamento visual.
                </p>

                <h3 style="font-size: 1.1rem; font-weight: 700; margin-top: 20px; margin-bottom: 8px;">4. Link de Salto de Conteúdo</h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem;">
                    Ao pressionar <code>Tab</code> assim que a página carrega, é exibido o link "Pular para o conteúdo principal", permitindo ignorar os cabeçalhos de navegação e iniciar a leitura diretamente no corpo do texto.
                </p>
            </div>

            <!-- Right: Shortcut keys list -->
            <div class="card-glowing">
                <h2 class="font-italic-bold" style="font-size: 1.5rem; margin-bottom: 24px;"><i class="fa-solid fa-keyboard text-accent" style="margin-right: 10px;"></i> Atalhos Rápidos (Teclas de Acesso)</h2>
                <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 24px;">
                    Use a combinação <strong>Alt + Tecla</strong> (ou <strong>Alt + Shift + Tecla</strong> em navegadores como Firefox) para navegar rapidamente:
                </p>

                <div style="display: flex; flex-direction: column; gap: 16px;">
                    <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border-color); padding-bottom:8px;">
                        <span style="font-weight: 600;">Ir para a Página Inicial</span>
                        <kbd style="background:var(--bg-tertiary); padding:4px 8px; border-radius:4px; font-family:monospace; border:1px solid var(--border-color);">Alt + 1</kbd>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border-color); padding-bottom:8px;">
                        <span style="font-weight: 600;">Ir para a Página Sobre</span>
                        <kbd style="background:var(--bg-tertiary); padding:4px 8px; border-radius:4px; font-family:monospace; border:1px solid var(--border-color);">Alt + 2</kbd>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border-color); padding-bottom:8px;">
                        <span style="font-weight: 600;">Ir para Transparência</span>
                        <kbd style="background:var(--bg-tertiary); padding:4px 8px; border-radius:4px; font-family:monospace; border:1px solid var(--border-color);">Alt + 3</kbd>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border-color); padding-bottom:8px;">
                        <span style="font-weight: 600;">Ir para Patrocinadores</span>
                        <kbd style="background:var(--bg-tertiary); padding:4px 8px; border-radius:4px; font-family:monospace; border:1px solid var(--border-color);">Alt + 4</kbd>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border-color); padding-bottom:8px;">
                        <span style="font-weight: 600;">Página Acessibilidade</span>
                        <kbd style="background:var(--bg-tertiary); padding:4px 8px; border-radius:4px; font-family:monospace; border:1px solid var(--border-color);">Alt + 5</kbd>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border-color); padding-bottom:8px;">
                        <span style="font-weight: 600;">Ir para a Página Contato</span>
                        <kbd style="background:var(--bg-tertiary); padding:4px 8px; border-radius:4px; font-family:monospace; border:1px solid var(--border-color);">Alt + 6</kbd>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center; padding-bottom:8px;">
                        <span style="font-weight: 600; color: var(--accent);">Alternar Alto Contraste</span>
                        <kbd style="background:var(--bg-tertiary); padding:4px 8px; border-radius:4px; font-family:monospace; border:1px solid var(--border-color);">Alt + C</kbd>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Feedback Accessibility Form -->
<section class="section-padding" style="background-color: var(--bg-secondary); border-top: 1px solid var(--border-color);" aria-label="Enviar Feedback de Acessibilidade">
    <div class="container" style="max-width: 800px;">
        <div class="contact-form">
            <h2 class="font-italic-bold text-center" style="font-size: 1.8rem; margin-bottom: 16px;">Nos ajude a melhorar!</h2>
            <p style="color: var(--text-secondary); text-align: center; margin-bottom: 32px;">
                Encontrou barreiras na navegação do nosso portal? Envie uma mensagem detalhando o problema para nossa comissão técnica.
            </p>

            <form id="accessibility-feedback-form" action="javascript:void(0);" onsubmit="alert('Obrigado pelo seu valioso feedback! Investigaremos a questão apontada o mais breve possível.'); this.reset();">
                <div class="form-row">
                    <div class="form-group">
                        <label for="feedback-name" class="form-label">Nome Completo</label>
                        <input type="text" id="feedback-name" class="form-control" required placeholder="Seu nome">
                    </div>
                    <div class="form-group">
                        <label for="feedback-email" class="form-label">Seu E-mail</label>
                        <input type="email" id="feedback-email" class="form-control" required placeholder="email@exemplo.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="feedback-msg" class="form-label">Descrição da Barreira ou Dificuldade de Acesso</label>
                    <textarea id="feedback-msg" class="form-control" required placeholder="Por favor, explique em qual página ou elemento encontrou dificuldades..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;" id="btn-feedback-submit">Enviar Feedback <i class="fa-solid fa-paper-plane" style="margin-left: 8px;"></i></button>
            </form>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
