<?php get_header(); ?>
<!-- start to contentsArea -->
<!-- start to contentsArea -->
<div class="c-bkImg c-heading2--PagesBk"></div>
        <section class="p-music c-contentsWrap">
                <h2 class="c-heading2 c-heading2Pages">
                    <span class="c-heading2--EN u-fs-48">music</span>
                    <span class="c-heading2--JP">音楽</span>
                </h2>
            <div class="p-musicBox c-contentsWrap u-mt-64">
                <h2 class="c-heading2">
                    <span class="c-heading2--EN u-fs-48">Opening</span>
                    <span class="c-heading2--JP">オープニング主題歌</span>
                </h2>
                <a class="u-mt-16" href="<?php echo home_url('/music/opening') ?>">
                    <img src="<?php echo get_theme_file_uri('/img/music_alyxia.png'); ?>" alt="">
                    <p class="u-mt-8"><span>ALYXIA</span>Resonant Horizon</p>
                </a>
            </div>
            <div class="p-musicBox c-contentsWrap u-mt-64">
                <h2 class="c-heading2">
                    <span class="c-heading2--EN u-fs-48">Ending</span>
                    <span class="c-heading2--JP">エンディング主題歌</span>
                </h2>
                <a class="u-mt-16" href="<?php echo home_url('/music/ending') ?>">
                    <img src="<?php echo get_theme_file_uri('/img/music_kanae.png'); ?>" alt="">
                    <p class="u-mt-8"><span>Kanae Ryu</span>echoes of liberty</p>
                </a>
            </div>
        </section>
<!-- end to contentsArea -->
<!-- end to contentsArea -->
<?php get_footer(); ?>