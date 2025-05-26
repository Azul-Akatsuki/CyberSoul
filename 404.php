<?php get_header(); ?>
<!-- start to contentsArea -->
<div class="c-bkImg c-heading2--PagesBk"></div>
<section class="c-contentsWrap">
                <h2 class="c-heading2 c-heading2Pages">
                    <span class="c-heading2--EN u-fs-48">Not Found...</span>
                    <span class="c-heading2--JP">404 Error</span>
                </h2>
                <p class="u-mt-48 u-txt-c">
                    指定されたページが存在しないか、移動または削除された可能性があります。<br>
                    トップに戻るか、メニューから他のページをご覧ください。
                </p>
                <button class="c-backBtn" onclick="location.href='<?php echo home_url('/') ?>'"><i class="ph ph-caret-left"></i>TOP</button>
        </section>
<!-- end to contentsArea -->
<?php get_footer(); ?>