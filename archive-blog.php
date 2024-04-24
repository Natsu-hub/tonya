<?php 
get_header(); 
?>

<main class="l-main">
<!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">Blog</span>
          <span class="c-below-mv__main-title">ブログ</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/blog-mv_sp.webp" type="image/webp" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/blog-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/blog-mv.png" alt="ブログ" width="1440" height="400">
        </picture>
      </div>
    </section>

<!-- archive-info -->
<section class="p-archive-blog l-section--below">
<div class="p-archive-blog__inner l-inner--small">
  <div class="p-archive-blog__body">
    <article class="p-archive-blog__primary">
      <div class="p-archive-blog__cards">
            <!-- 記事のループ処理開始 -->
            <?php
      if (wp_is_mobile()) {
        $num = 2; // スマホの表示数(全件は-1)
      } else {
        $num = 4; // PCの表示数(全件は-1)
      }
      $args = [
        'post_type' => 'blog',
        // 投稿タイプのスラッグ(通常投稿は'post')
        'posts_per_page' => $num, // 表示件数
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // ページネーション用
      ];
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()):
        while ($the_query->have_posts()):
          $the_query->the_post();
          ?>
          <a href="<?php the_permalink(); ?>" class="c-card js-fade-in">
            <div class="c-card__body">
              <time class="c-card__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d.'); ?></time>
              <p class="c-card__text">
                  <?php the_title(); ?>
              </p>
            </div>
            <figure class="c-card__img-wrapper">
              <?php if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-img.webp" alt="blog1">
                <?php } ?>
              </figure>
          </a>
          <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
          <!-- 記事のループ処理終了 -->
          </div>
        <div class="p-archive-blog__pages">
        <?php get_template_part('template/pagination'); ?>
        </div>
  </article>
  </div>
  <div class="p-privacy-policy__btn c-btn-below l-btn-below"><a class="c-btn-black" href="<?php echo HOME_URL; ?>">
            <p class="c-btn-black__text c-btn-black__text--prev">TOPへ戻る</p>
            <picture class="c-btn-black__img c-btn-black__img--prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/black_arrow.svg" alt="TOPへ戻る" width="202" height="10" loading="lazy">
            </picture>
          </a>
        </div>
</div>
</section>

  </main>
<?php get_footer(); ?>