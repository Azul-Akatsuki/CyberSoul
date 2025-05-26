<?php get_header(); ?>
<!-- start to contentsArea -->
<div class="c-bkImg c-heading2--PagesBk"></div>
<article class="p-newsDetails c-contentsWrap">
    <h2 class="c-heading2 c-heading2Pages">
        <span class="c-heading2--EN u-fs-48">news</span>
        <span class="c-heading2--JP">ニュース</span>
    </h2>
    <div class="p-newsDetailsBox c-contentsWrap u-mt-64">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
                <h3 class="u-pb-16">
                    <span><?php echo get_the_date(); ?></span>
                    <?php the_title(); ?>
                </h3>
                <p class="u-mt-32">
                    <?php the_content(); ?>
                </p>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <button class="c-backBtn" onclick="location.href='<?php echo home_url('/news') ?>'"><i class="ph ph-caret-left"></i>back</button>
</article>
<!-- end to contentsArea -->
<?php get_footer(); ?>