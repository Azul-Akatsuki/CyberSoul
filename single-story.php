<?php get_header(); ?>
<!-- start to contentsArea -->
<div class="c-bkImg c-heading2--PagesBk"></div>
<section class="p-storyDetails c-contentsWrap">
    <h2 class="c-heading2 c-heading2Pages">
        <span class="c-heading2--EN u-fs-48">Story</span>
        <span class="c-heading2--JP">ストーリー</span>
    </h2>
    <div class="p-storyDetailsBox c-contentsWrap u-mt-64">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
                <?php
    $episode_number = get_story_episode_number(get_the_ID());
    if ($episode_number):
    ?>
    <h3 class="p-singleStory__epTitle">
        EPISODE <?php echo str_pad($episode_number, 2, '0', STR_PAD_LEFT); ?>
        <div class="p-singleStory__txt u-mt-8 u-pb-16">
                    <?php the_title(); ?>
                </div>
    </h3>
    <?php endif; ?>

    <div class="p-storyBox__ep__img u-mt-32">
    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri('/img/heroArea_bkImg.png'); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="p-storyBox__ep__imgList u-mt-16">
                    <ul>
                        <li><img src="<?php echo get_theme_file_uri('/img/heroArea_bkImg.png'); ?>" alt=""></li>
                        <li><img src="<?php echo get_theme_file_uri('/img/introduceArea_bk.png'); ?>" alt=""></li>
                        <li><img src="<?php echo get_theme_file_uri('/img/keyword_01.png'); ?>" alt=""></li>
                        <li><img src="<?php echo get_theme_file_uri('/img/keyword_02.png'); ?>" alt=""></li>
                        <li><img src="<?php echo get_theme_file_uri('/img/keyword_03.png'); ?>" alt=""></li>
                        <li><img src="<?php echo get_theme_file_uri('/img/keyword_02.png'); ?>" alt=""></li>
                        <li><img src="<?php echo get_theme_file_uri('/img/keyword_03.png'); ?>" alt=""></li>
                        <li><img src="<?php echo get_theme_file_uri('/img/heroArea_bkImg.png'); ?>" alt=""></li>
                        <li><img src="<?php echo get_theme_file_uri('/img/introduceArea_bk.png'); ?>" alt=""></li>
                        <li><img src="<?php echo get_theme_file_uri('/img/keyword_01.png'); ?>" alt=""></li>
                    </ul>
                </div>
                <div class="p-storyBox__ep__details u-mt-8">
                    <p class="u-mt-32">
                        <?php the_content(); ?>
                </p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <button class="c-backBtn" onclick="location.href='<?php echo home_url('/story') ?>'"><i class="ph ph-caret-left"></i>back</button>
    <script src="<?php echo get_theme_file_uri('/js/storyImg.js'); ?>"></script>
</section>
<!-- end to contentsArea -->
<?php get_footer(); ?>