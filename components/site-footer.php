<?php
$basePath = $basePath ?? '.';
?>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-brand">
            <img src="<?= htmlspecialchars($basePath) ?>/assets/img/logo.png" alt="Cachaças Novo Cruzeiro" width="500" height="500" loading="lazy" decoding="async">
            <p>Cultura, tradição e história de Novo Cruzeiro.</p>
        </div>

        <div class="footer-social">
            <h2>Siga-nos</h2>
            <nav class="social" aria-label="Redes sociais">
                <a href="https://www.instagram.com/rkmsistemas?igsi=MTI2MW9oZWFxM2pxcg%3D%3D" target="_blank" aria-label="Instagram (abre em nova aba)" rel="noopener noreferrer">
                    <img src="<?= htmlspecialchars($basePath) ?>/assets/icons/instagram.svg" alt="">
                </a>
                <a href="https://wa.me/5533988326434?text=Ol%C3%A1!%20Vim%20pelo%20site%20das%20cacha%C3%A7as!%20Gostaria%20de%20mais%20algumas%20infoma%C3%A7%C3%B5es." target="_blank" aria-label="WhatsApp (abre em nova aba)" rel="noopener noreferrer">
                    <img src="<?= htmlspecialchars($basePath) ?>/assets/icons/whatsapp.svg" alt="">
                </a>
            </nav>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2026 RKM Sistemas. Todos os direitos reservados.</p>
    </div>
</footer>
