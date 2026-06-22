<?php
// Determine current page filename for active link highlighting
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Optimization Meta Tags -->
    <title><?php echo isset($page_title) ? $page_title . " | Clube Goianiense de Automobilismo" : "Clube Goianiense de Automobilismo | Eventos e Competições"; ?></title>
    <meta name="description" content="<?php echo isset($page_desc) ? $page_desc : 'Associação oficial dedicada à organização de eventos automobilísticos e competições em Goiás. Conheça nossa história, pilotos, parceiros e transparência.'; ?>">
    <meta name="keywords" content="automobilismo, goiania, competições, corridas, kart, marcas e pilotos, automobilismo goiano, cga, clube goianiense">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://cgautomobilismo.com.br/<?php echo $current_page; ?>">
    
    <!-- Open Graph Tags (Social Media Integration) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . " | CGA" : "Clube Goianiense de Automobilismo"; ?>">
    <meta property="og:description" content="Organização oficial de eventos automobilísticos e competições em Goiás.">
    <meta property="og:url" content="https://cgautomobilismo.com.br/<?php echo $current_page; ?>">
    <meta property="og:site_name" content="Clube Goianiense de Automobilismo">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Font Awesome (for modern icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Accessibility Skip Link -->
    <a href="#main-content" class="skip-link">Pular para o conteúdo principal</a>

    <!-- Top Site Header -->
    <header class="site-header" id="site-header">
        <div class="container nav-container">
            <!-- Brand Logo -->
            <a href="index.php" class="logo" id="logo-cga" aria-label="Clube Goianiense de Automobilismo - Página Inicial">
                <div class="logo-icon">CGA</div>
                <div class="logo-text">
                    C.G.A.
                    <span>Automobilismo</span>
                </div>
            </a>

            <!-- Main Menu Navigation -->
            <nav class="main-nav" id="main-nav" aria-label="Menu principal">
                <a href="index.php" class="nav-link <?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>" id="nav-home">Início</a>
                <a href="sobre.php" class="nav-link <?php echo $current_page == 'sobre.php' ? 'active' : ''; ?>" id="nav-sobre">Sobre</a>
                <a href="transparencia.php" class="nav-link <?php echo $current_page == 'transparencia.php' ? 'active' : ''; ?>" id="nav-transparencia">Transparência</a>
                <a href="patrocinadores.php" class="nav-link <?php echo $current_page == 'patrocinadores.php' ? 'active' : ''; ?>" id="nav-patrocinadores">Patrocinadores</a>
                <a href="acessibilidade.php" class="nav-link <?php echo $current_page == 'acessibilidade.php' ? 'active' : ''; ?>" id="nav-acessibilidade">Acessibilidade</a>
                <a href="contato.php" class="nav-link <?php echo $current_page == 'contato.php' ? 'active' : ''; ?>" id="nav-contato">Contato</a>
            </nav>

            <!-- Header Action Items -->
            <div class="header-actions">
                <button class="access-widget-btn" id="access-widget-btn" aria-label="Abrir opções de acessibilidade" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-universal-access"></i>
                </button>
                <a href="contato.php?ref=associar" class="btn btn-primary" id="btn-header-join">Associe-se</a>
                <button class="menu-toggle" id="menu-toggle" aria-label="Abrir menu de navegação" aria-expanded="false" aria-controls="main-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Floating Accessibility Control Panel -->
    <div class="accessibility-panel" id="accessibility-panel" role="region" aria-labelledby="acc-panel-title-label">
        <h2 class="acc-panel-title" id="acc-panel-title-label">Acessibilidade</h2>
        
        <!-- Contrast Options -->
        <div class="acc-panel-option">
            <span class="acc-panel-label">Contraste da Tela</span>
            <div class="acc-btn-group">
                <button class="acc-panel-btn active" id="acc-contrast-normal">Padrão</button>
                <button class="acc-panel-btn" id="acc-contrast-high">Alto Contraste</button>
            </div>
        </div>

        <!-- Font Resizing Options -->
        <div class="acc-panel-option">
            <span class="acc-panel-label">Tamanho do Texto</span>
            <div class="acc-btn-group">
                <button class="acc-panel-btn" id="acc-font-decrease" aria-label="Diminuir fonte">A-</button>
                <button class="acc-panel-btn active" id="acc-font-normal" aria-label="Fonte padrão">Normal</button>
                <button class="acc-panel-btn" id="acc-font-increase" aria-label="Aumentar fonte">A+</button>
            </div>
        </div>

        <!-- Dyslexia Font Options -->
        <div class="acc-panel-option">
            <span class="acc-panel-label">Legibilidade de Texto</span>
            <div class="acc-btn-group">
                <button class="acc-panel-btn active" id="acc-font-std">Padrão</button>
                <button class="acc-panel-btn" id="acc-font-dyslexic">Dislexia</button>
            </div>
        </div>
        
        <a href="acessibilidade.php" style="display:block; text-align:center; font-size:0.75rem; color:var(--accent); font-weight:700; margin-top:8px;">Mais detalhes de Acessibilidade</a>
    </div>

    <!-- Main Content Container Wrapper -->
    <main id="main-content">
