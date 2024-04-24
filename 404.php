<?php get_header(); ?>
<main class="main js-fadeIn">
<div class="p-404 l-section">
		<div class="p-404__inner l-inner--small">
			<h1 class="p-404__title">404 NOT FOUND</h1>
			<p class="p-404__text">お探しのページはありませんでした。</p>
			<div class="p-404__btn"><a class="c-btn-white" href="<?php echo HOME_URL; ?>">
            <p class="c-btn-black__text c-btn-black__text--prev">TOPへ戻る</p>
            <picture class="c-btn-black__img c-btn-black__img--prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/white_arrow.svg" alt="TOPへ戻る" width="202" height="10" loading="lazy">
            </picture>
          </a>
        </div>
		</div>
	</div>
</main>
<?php get_footer(); ?>