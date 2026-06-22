<?php
$page_title = "Portal da Transparência";
$page_desc = "Consulte os documentos oficiais, regulamentos, atas de assembleias e demonstrações financeiras do Clube Goianiense de Automobilismo.";
include 'includes/header.php';
?>

<!-- Header Banner -->
<section class="section-padding" style="padding-top: calc(var(--header-height) + 60px); background: linear-gradient(180deg, var(--bg-secondary) 0%, var(--bg-primary) 100%); border-bottom: 1px solid var(--border-color);" aria-label="Introdução do Portal">
    <div class="container">
        <span class="section-subtitle">Conformidade e Ética</span>
        <h1 class="hero-title font-italic-bold" style="font-size: 3rem; margin-bottom: 16px;">
            Portal da <span class="text-accent">Transparência</span>
        </h1>
        <p style="color: var(--text-secondary); max-width: 700px; font-size: 1.1rem;">
            Disponibilizamos publicamente nossos relatórios de gestão, atas de reuniões, estatutos jurídicos e regulamentos esportivos para consulta de pilotos, parceiros e órgãos fiscalizadores.
        </p>
    </div>
</section>

<!-- Accordion Section -->
<section class="section-padding" aria-label="Documentos Oficiais">
    <div class="container">
        <div class="transparency-accordion">
            
            <!-- Accordion 1: Estatuto e Regulamentos -->
            <div class="accordion-item">
                <button class="accordion-header" id="acc-header-estatuto" aria-expanded="false" aria-controls="acc-content-estatuto">
                    <span><i class="fa-solid fa-gavel text-accent" style="margin-right: 12px;"></i> Estatuto Social e Regulamentos Gerais</span>
                    <div class="accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                </button>
                <div class="accordion-content" id="acc-content-estatuto" role="region" aria-labelledby="acc-header-estatuto">
                    <div class="accordion-content-inner">
                        <p style="margin-bottom: 16px;">O Estatuto Social rege todas as diretrizes administrativas, direitos e deveres dos associados e a estrutura organizacional da nossa federação de automobilismo.</p>
                        <ul class="transparency-doc-list">
                            <li class="transparency-doc-item">
                                <a href="javascript:void(0);" class="transparency-doc-link" id="doc-estatuto-2026"><i class="fa-solid fa-file-pdf"></i> Estatuto Social da CGA - Atualizado 2026</a>
                                <span class="transparency-doc-meta">PDF (2.4 MB)</span>
                            </li>
                            <li class="transparency-doc-item">
                                <a href="javascript:void(0);" class="transparency-doc-link" id="doc-reg-esportivo-2026"><i class="fa-solid fa-file-pdf"></i> Regulamento Desportivo Geral - Temporada 2026</a>
                                <span class="transparency-doc-meta">PDF (1.8 MB)</span>
                            </li>
                            <li class="transparency-doc-item">
                                <a href="javascript:void(0);" class="transparency-doc-link" id="doc-reg-tecnico-kart-2026"><i class="fa-solid fa-file-pdf"></i> Regulamento Técnico de Karting - Versão 1.2</a>
                                <span class="transparency-doc-meta">PDF (950 KB)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Accordion 2: Demonstrativos Financeiros -->
            <div class="accordion-item">
                <button class="accordion-header" id="acc-header-financeiro" aria-expanded="false" aria-controls="acc-content-financeiro">
                    <span><i class="fa-solid fa-chart-line text-accent" style="margin-right: 12px;"></i> Demonstrativos Financeiros e Balancetes</span>
                    <div class="accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                </button>
                <div class="accordion-content" id="acc-content-financeiro" role="region" aria-labelledby="acc-header-financeiro">
                    <div class="accordion-content-inner">
                        <p style="margin-bottom: 16px;">Apresentamos os balanços patrimoniais e relatórios contábeis anuais, auditados e homologados pelo conselho fiscal.</p>
                        <ul class="transparency-doc-list">
                            <li class="transparency-doc-item">
                                <a href="javascript:void(0);" class="transparency-doc-link" id="doc-balanco-2025"><i class="fa-solid fa-file-invoice-dollar"></i> Balanço Patrimonial CGA - Exercício 2025</a>
                                <span class="transparency-doc-meta">PDF (1.1 MB)</span>
                            </li>
                            <li class="transparency-doc-item">
                                <a href="javascript:void(0);" class="transparency-doc-link" id="doc-balancete-q1-2026"><i class="fa-solid fa-file-invoice-dollar"></i> Balancete Financeiro Simplificado - 1º Trimestre 2026</a>
                                <span class="transparency-doc-meta">PDF (780 KB)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Accordion 3: Atas de Assembleia -->
            <div class="accordion-item">
                <button class="accordion-header" id="acc-header-atas" aria-expanded="false" aria-controls="acc-content-atas">
                    <span><i class="fa-solid fa-file-signature text-accent" style="margin-right: 12px;"></i> Atas de Assembleias e Resoluções</span>
                    <div class="accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                </button>
                <div class="accordion-content" id="acc-content-atas" role="region" aria-labelledby="acc-header-atas">
                    <div class="accordion-content-inner">
                        <p style="margin-bottom: 16px;">Atas das assembleias gerais ordinárias e extraordinárias convocadas pela mesa diretora.</p>
                        <ul class="transparency-doc-list">
                            <li class="transparency-doc-item">
                                <a href="javascript:void(0);" class="transparency-doc-link" id="doc-ata-jan-2026"><i class="fa-solid fa-file-lines"></i> Ata de Assembleia Geral Extraordinária - Janeiro 2026</a>
                                <span class="transparency-doc-meta">PDF (450 KB)</span>
                            </li>
                            <li class="transparency-doc-item">
                                <a href="javascript:void(0);" class="transparency-doc-link" id="doc-ata-eleicao-2025"><i class="fa-solid fa-file-lines"></i> Ata de Eleição e Posse da Diretoria Executiva (Gestão 2025-2028)</a>
                                <span class="transparency-doc-meta">PDF (620 KB)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Accordion 4: Parcerias e Convênios -->
            <div class="accordion-item">
                <button class="accordion-header" id="acc-header-parcerias" aria-expanded="false" aria-controls="acc-content-parcerias">
                    <span><i class="fa-solid fa-handshake-angle text-accent" style="margin-right: 12px;"></i> Parcerias, Convênios e Termos de Cooperação</span>
                    <div class="accordion-icon"><i class="fa-solid fa-chevron-down"></i></div>
                </button>
                <div class="accordion-content" id="acc-content-parcerias" role="region" aria-labelledby="acc-header-parcerias">
                    <div class="accordion-content-inner">
                        <p style="margin-bottom: 16px;">Convênios vigentes com prefeituras, órgãos estaduais de esporte e concessionárias de pista.</p>
                        <ul class="transparency-doc-list">
                            <li class="transparency-doc-item">
                                <a href="javascript:void(0);" class="transparency-doc-link" id="doc-termo-seel"><i class="fa-solid fa-circle-check"></i> Termo de Cooperação Técnica - SEEL / CGA</a>
                                <span class="transparency-doc-meta">PDF (1.5 MB)</span>
                            </li>
                            <li class="transparency-doc-item">
                                <a href="javascript:void(0);" class="transparency-doc-link" id="doc-convenio-autodromo"><i class="fa-solid fa-circle-check"></i> Acordo de Utilização do Autódromo de Goiânia</a>
                                <span class="transparency-doc-meta">PDF (900 KB)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
