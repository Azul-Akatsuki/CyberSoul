<?php get_header(); ?>
<!-- start to contentsArea -->
<!-- heroArea -->
        <section class="c-bkImg c-bkImg--heroArea" id="l-heroArea">
            <p class="p-heroArea__catch">
                <img src="<?php echo get_theme_file_uri('/img/heroArea_catch.png'); ?>" alt="">
            </p>
            <h1 class="p-heroArea__title">
                <img src="<?php echo get_theme_file_uri('/img/heroArea_title.png'); ?>" alt="">
                <img src="<?php echo get_theme_file_uri('/img/heroArea_tvInfo.png'); ?>" alt="">
            </h1>
        </section>
        <script src="<?php echo get_theme_file_uri('/js/heroFadeIn.js'); ?>"></script>
        <article class="c-bkImg u-pt-64 u-pb-16" id="l-news">
            <div class="c-contentsWrap">
            <h2 class="c-heading2">
                    <span class="c-heading2--EN u-fs-48">NEWS</span>
                    <span class="c-heading2--JP">ニュース</span>
                </h2>
                
                <?php 
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ];
                    $articleQuery = new WP_Query($args);
                ?>
                    <?php if ($articleQuery -> have_posts()): ?>
                        <ul class="c-newsLists u-mt-24">
                        <?php while ($articleQuery -> have_posts()): ?>
                            <?php $articleQuery -> the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <span><?php echo get_the_date(); ?></span>
                                        <p>
                                            <?php the_title(); ?>
                                        </p>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php wp_reset_postdata(); ?>
                                <?php else: ?>
                        <p>お知らせがありません</p>
                    <?php endif; ?>

                <div class="p-newsList__link u-mt-24">
                    <a class="c-newsBtn c-newsBtn--more" href="<?php echo home_url('/news/') ?>">MORE<i class="ph ph-caret-right"></i>
                    </a>
                </div>
            </div>
        </article>
        <section class="c-bkImg u-pt-64 u-pb-16" id="l-introduction">
            <div class="c-contentsWrap">
                <h2 class="c-heading2">
                    <span class="c-heading2--EN u-fs-48">INTRODUCTION</span>
                    <span class="c-heading2--JP">イントロダクション</span>
                </h2>
                <p class="u-mt-24">
                    光に満ちた巨大都市「ネオ・シティ」<br>
                    人々は高度に発達したテクノロジーの恩恵を受けながら、データに囲まれた生活を送っていた。<br class="u-pcOnly">だがその裏では、誰にも気づかれぬ“心の声”が静かに叫んでいた。<br>
                    ユウナは、好奇心旺盛で自由を愛する16歳の少女。<br>
                    ある日、彼女はデジタル世界の奥深くで、不思議な存在「サイバー・ソウル」と出会う。 <br class="u-pcOnly">それは、人間の“意志”と“記憶”が形となった、もう一つの「心」だった。<br>
                    仲間との出会い、広がる電脳空間、迫り来る支配と混乱—— この世界に問いかけるのは、ただひとつ。
                    <br><br>
                    「心は、誰のものか？」
                </p>
                <p class="u-mt-48">
                    テクノロジーと人間性が交錯する近未来。<br class="u-pcOnly">自由と統制、共鳴と葛藤の中で、少女たちは自らの“意志”を武器に立ち上がる。
                </p>
            </div>
        </section>
<!-- end to contentsArea -->
<?php get_footer(); ?>