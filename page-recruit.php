<?php 
/**
* Template Name: 採用情報
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
<!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">採用情報</span>
          <span class="c-below-mv__main-title">Recruit</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/recruit-mv_sp.webp" type="image/webp" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/recruit-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/recruit-mv.png" alt="採用情報" width="1440" height="400">
        </picture>
      </div>
    </section>

<!-- p-recruit -->
<section class="p-recruit">
  <div class="p-recruit__inner l-inner--small">
    <div class="p-recruit__box js-fade-in">
      <h2 class="p-recruit__head">サポルトでは一緒に働く仲間を<br class="u-mobile">募集しています</h2>
      <div class="p-recruit__text">現在当法人運営の事業所にて、一緒に働いていただける方を募集しています。<br>
ご興味のある方は一度下記連絡先までお問い合わせください。</div>
    </div>
  </div>
</section>
<!-- p-below-contact -->
<?php get_template_part('template/below-contact'); ?>

  </main>
<?php get_footer(); ?>