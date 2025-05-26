<?php get_header(); ?>
<!-- start to contentsArea -->
<div class="c-bkImg c-heading2--PagesBk"></div>
<section class="p-goodsDetails c-contentsWrap">
    <h2 class="c-heading2 c-heading2Pages">
        <span class="c-heading2--EN u-fs-48">goods</span>
        <span class="c-heading2--JP">グッズ</span>
    </h2>
    <div class="c-contentsWrap u-mt-64">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
    <h3 class="p-singleGoods__title">
                    <?php the_title(); ?>
    </h3>

    <div class="p-goodsBox__img u-mt-32">
    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri('/img/heroArea_bkImg.png'); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="p-goodsBox__details u-mt-8">
                    <p class="u-mt-32">
                        <?php the_content(); ?>
                </p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <button class="c-backBtn u-mt-64" onclick="location.href='<?php echo home_url('/goods') ?>'"><i class="ph ph-caret-left"></i>back</button>
</section>
<!-- end to contentsArea -->
<?php get_footer(); ?>