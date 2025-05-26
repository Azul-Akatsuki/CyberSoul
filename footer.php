<!-- start to footer -->
</main>
<?php if ( !is_page('welcome') ) :?>
<footer class="u-mt-64 u-mb-40">
    <div class="p-footerPageTopArea">
        <a class="c-pageTopBtn">
            <i class="ph ph-caret-up"></i>
            <span>PAGE TOP</span>
        </a>
    </div>
    <div class="p-footerBox">
        <img src="<?php echo get_theme_file_uri('/img/heroArea_title.png'); ?>" alt="">
        <ul class="p-footerBox__snsLists u-mt-32">
            <li>
                <a href="https://x.com/" target="_blank">
                    <img src="<?php echo get_theme_file_uri('/img/sns_X_logo-white.png'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="<?php echo get_theme_file_uri('/img/Instagram_Glyph_White.png'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/" target="_blank">
                    <img src="<?php echo get_theme_file_uri('/img/yt_icon_mono_dark.png'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="https://www.tiktok.com/ja-JP/" target="_blank">
                    <img src="<?php echo get_theme_file_uri('/img/TikTok-Social-Icon-Mono-White.png'); ?>" alt="">
                </a>
            </li>
        </ul>
    </div>
    <span class="c-copyright u-mt-64">&copy CyberSoul Project</span>
    <script src="<?php echo get_theme_file_uri('/js/pageTop.js'); ?>"></script>
</footer>
<?php endif; ?>
<?php wp_footer(); ?>
</body>

</html>
<!-- end to footer -->