    </main> <!-- Closing main content container -->

    <!-- Site Footer Section -->
    <footer class="site-footer" id="site-footer">
        <div class="container">
            <div class="footer-top">
                <!-- Column 1: Brand & Bio -->
                <div class="footer-brand">
                    <a href="index.php" class="logo" id="footer-logo" aria-label="CGA Home">
                        <div class="logo-icon">CGA</div>
                        <div class="logo-text">
                            C.G.A.
                            <span>Automobilismo</span>
                        </div>
                    </a>
                    <p class="footer-brand-desc">
                        O Clube Goianiense de Automobilismo é responsável pela fomento, organização e assessoria técnica de competições de automobilismo de alta performance no estado de Goiás.
                    </p>
                    <div class="footer-socials">
                        <a href="https://instagram.com" class="social-icon" aria-label="Instagram da CGA" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://facebook.com" class="social-icon" aria-label="Facebook da CGA" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com" class="social-icon" aria-label="Twitter da CGA" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://youtube.com" class="social-icon" aria-label="YouTube da CGA" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Column 2: Quick Navigation -->
                <div class="footer-links">
                    <h3 class="footer-links-title">Links Úteis</h3>
                    <ul class="footer-links-list">
                        <li><a href="index.php" id="footer-link-home">Página Inicial</a></li>
                        <li><a href="sobre.php" id="footer-link-sobre">Sobre o Clube</a></li>
                        <li><a href="transparencia.php" id="footer-link-transparencia">Portal de Transparência</a></li>
                        <li><a href="patrocinadores.php" id="footer-link-patrocinadores">Nossos Patrocinadores</a></li>
                        <li><a href="acessibilidade.php" id="footer-link-acessibilidade">Acessibilidade do Site</a></li>
                        <li><a href="contato.php" id="footer-link-contato">Fale Conosco</a></li>
                    </ul>
                </div>

                <!-- Column 3: Newsletter / Subscription -->
                <div class="footer-newsletter">
                    <h3 class="footer-links-title">Acompanhe as Novidades</h3>
                    <p style="font-size: 0.9rem; color: var(--text-secondary);">Receba atualizações sobre os campeonatos e eventos diretamente no seu email.</p>
                    <form class="newsletter-form" id="newsletter-form" action="javascript:void(0);">
                        <input type="email" placeholder="Seu email principal" class="newsletter-input" id="newsletter-email" required aria-label="Seu email principal">
                        <button type="submit" class="btn btn-primary" id="btn-newsletter-submit">Enviar</button>
                    </form>
                </div>
            </div>

            <!-- Footer Bottom Copy -->
            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> Clube Goianiense de Automobilismo. Todos os direitos reservados.</p>
                <p>Desenvolvido com foco em acessibilidade e performance.</p>
            </div>
        </div>
    </footer>

    <!-- Main JavaScript file -->
    <script src="assets/js/main.js"></script>
</body>
</html>
