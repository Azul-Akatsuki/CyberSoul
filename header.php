<!-- start to header -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVアニメ『サイバーソウル』公式サイト</title>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/style.css'); ?>">
    
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css"
    />
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    <?php if ( !is_page('welcome') ) :?>
    <button class="c-menuBtn">
        <div class="zdo_drawer_button">
            <span class="zdo_drawer_bar zdo_drawer_bar1"></span>
            <span class="zdo_drawer_bar zdo_drawer_bar2"></span>
            <span class="zdo_drawer_bar zdo_drawer_bar3"></span>
            <span class="zdo_drawer_menu_text zdo_drawer_text">MENU</span>
            <span class="zdo_drawer_close zdo_drawer_text">CLOSE</span>
        </div>
    </button>
    <?php endif; ?>
    <header id="p-menu" class="">
        <nav>
            <ul class="c-menuLists">
                <li><a href="<?php echo home_url('/') ?>">TOP<span>トップ</span></a></li>
                <li><a href="<?php echo home_url('/news') ?>">NEWS<span>ニュース</span></a></li>
                <li><a href="<?php echo home_url('/#l-introduction') ?>">INTRODUCTION<span>イントロダクション</span></a></li>
                <li><a href="<?php echo home_url('/onair') ?>">ONAIR<span>放送・配信情報</span></a></li>
                <li><a href="<?php echo home_url('/story') ?>">STORY<span>ストーリー</span></a></li>
                <li><a href="<?php echo home_url('/character') ?>">CHARACTER<span>キャラクター</span></a></li>
                <li><a href="<?php echo home_url('/world') ?>">WORLD<span>世界観</span></a></li>
                <li><a href="<?php echo home_url('/keyword') ?>">KEYWORD<span>用語集</span></a></li>
                <li><a href="<?php echo home_url('/staff-cast') ?>">STAFF / CAST<span>スタッフ / キャスト</span></a></li>
                <li><a href="<?php echo home_url('/music') ?>">MUSIC<span>音楽</span></a></li>
                <li><a href="<?php echo home_url('/gallery') ?>">GALLERY<span>ギャラリー</span></a></li>
                <li><a href="<?php echo home_url('/goods') ?>">GOODS<span>グッズ</span></a></li>
            </ul>
            <div class="c-menuLists__box u-mt-64">
                <div class="c-menuLists__SNS">
                    <span>OFFICIAL</span>
                    <ul>
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
            <div class="c-menuLists__SNS">
                <span>SHARE</span>
                <ul class="u-mt-24">
                    <li>
                        <a href="https://x.com/" target="_blank">
                            <img src="<?php echo get_theme_file_uri('/img/sns_X_logo-white.png'); ?>" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/?locale=ja_JP" target="_blank">
                            <img src="<?php echo get_theme_file_uri('/img/Facebook_Logo_Secondary.png'); ?>" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.line.me/ja/" target="_blank">
                            <img src="<?php echo get_theme_file_uri('/img/LINE_Brand_icon_RGB.png'); ?>" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            </div>    

        </nav>
    </header>
    <script src="<?php echo get_theme_file_uri('/js/hamburgerMenu.js'); ?>"></script>
    <main>
<!-- end to header -->