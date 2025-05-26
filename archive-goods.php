<?php get_header(); ?>
<!-- start to contentsArea -->
<div class="c-bkImg c-heading2--PagesBk"></div>
        <section class="p-goods c-contentsWrap">
                <h2 class="c-heading2 c-heading2Pages">
                    <span class="c-heading2--EN u-fs-48">goods</span>
                    <span class="c-heading2--JP">グッズ</span>
                </h2>
                <?php 
                $g_args = [
                    'post_type' => 'goods',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                ];
                    $goodsQuery = new WP_Query($g_args);
                ?>
                <?php if ($goodsQuery -> have_posts()): ?>
    <?php while ($goodsQuery -> have_posts()): $goodsQuery -> the_post(); ?>
        <div class="p-goodsBox c-contentsWrap u-mt-64">
            <a class="u-mt-16" href="<?php the_permalink(); ?>">
                <div class="p-goodsBox__img">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri('/img/heroArea_bkImg.jpeg'); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="p-goodsBox__txt">
                    <?php the_title(); ?>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
        </section>
<!-- end to contentsArea -->
<?php get_footer(); ?>