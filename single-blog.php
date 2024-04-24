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


<!-- p-single-blog -->
<section class="p-single-blog l-section--below">
<div class="p-single-blog__inner l-inner--small">
    <article class="p-single-blog__box">
			<?php if (have_posts()): ?>
			<?php while (have_posts()): ?>
				<?php the_post(); ?>
				<div class="p-single-blog__card">
					<div class="p-single-blog__item">
					<time class="p-single-blog__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d.'); ?></time>
					<p class="p-single-blog__text">
						<?php the_title(); ?>
					</p>
					</div>
					<figure class="p-single-blog__img-wrapper">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail();
						} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-img.webp" alt="blog1">
						<?php } ?>
					</figure>
				</div>
				<div class="p-single-blog__body-wrapper">
					<div class="p-single-blog__body">
						<div class="p-single-blog__content c-entry-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
  </article>
  <div class="p-single-blog__btns l-btn-below">
  		<div class="p-contact__btn c-btn-below"><a class="c-btn-black" href="<?php echo HOME_URL; ?>">
            <p class="c-btn-black__text c-btn-black__text--prev">TOPへ戻る</p>
            <picture class="c-btn-black__img c-btn-black__img--prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/black_arrow.svg" alt="TOPへ戻る" width="202" height="10" loading="lazy">
            </picture>
          </a>
        </div>
  		<div class="p-contact__btn"><a class="c-btn-black" href="<?php echo $_SERVER['HTTP_REFERER'] ?? $works; ?>">
            <p class="c-btn-black__text">ブログ一覧へ</p>
            <picture class="c-btn-black__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/black_arrow.svg" alt="ブログ一覧へ" width="202" height="10" loading="lazy">
            </picture>
          </a>
        </div>
  </div>
</div>
</section>

  </main>
<?php get_footer(); ?>