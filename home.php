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
            <ul class="c-newsLists u-mt-24">
                <?php while (have_posts()): ?>
                    <?php the_post(); ?>
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
        <?php else: ?>
            <p>お知らせがありません</p>
        <?php endif; ?>
        <?php
            $args = array(
                'mid_size' => 0,
                'prev_text' => '&lt PREV',
                'next_text' => 'NEXT &gt;'
            );
            the_posts_pagination($args);
            ?>
    </div>
</article>
<!-- end to contentsArea -->
<?php get_footer(); ?>