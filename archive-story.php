<?php get_header(); ?>
<!-- start to contentsArea -->
<div class="c-bkImg c-heading2--PagesBk"></div>
        <section class="p-story c-contentsWrap">
                <h2 class="c-heading2 c-heading2Pages">
                    <span class="c-heading2--EN u-fs-48">story</span>
                    <span class="c-heading2--JP">ストーリー</span>
                </h2>
                <?php 
                $s_args = [
                    'post_type' => 'story',
                    'posts_per_page' => -1,
                    'orderby' => 'date',      // 投稿日でソート
                    'order' => 'ASC'
                ];
                    $storyQuery = new WP_Query($s_args);
                ?>
                <?php if ($storyQuery -> have_posts()): ?>
    <?php $episode_count = 1; // カウンター変数を初期化 ?>
    <?php while ($storyQuery -> have_posts()): $storyQuery -> the_post(); ?>
        <div class="p-storyBox c-contentsWrap u-mt-64">
            <a class="u-mt-16" href="<?php the_permalink(); ?>">
            <div class="p-storyBox__img--story">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri('/img/heroArea_bkImg.png'); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="p-storyBox__img--frame">
                    <img src="<?php echo get_theme_file_uri('/img/story_imgFrame.png'); ?>" alt="">
                </div>
                <div class="p-storyBox__epTitle  u-mt-16">
                    EPISODE <?php echo str_pad($episode_count, 2, '0', STR_PAD_LEFT); ?>
                </div>

                <div class="p-storyBox__txt">
                    <?php the_title(); ?>
                </div>
            </a>
        </div>
        <?php $episode_count++; ?>
    <?php endwhile; ?>
<?php endif; ?>
        </section>
<!-- end to contentsArea -->
<?php get_footer(); ?>