<?php 
/**
* Template Name: お問い合わせ
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
<!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">Contact</span>
          <span class="c-below-mv__main-title">総合お問い合わせフォーム</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/contact-mv_sp.webp" type="image/webp" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/contact-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/contact-mv.png" alt="総合お問い合わせフォーム" width="1440" height="400">
        </picture>
      </div>
    </section>

 <!-- p-contact -->
 <section class="p-contact l-section--below" id="contact">
      <div class="p-contact__inner l-inner--small">
          <div class="p-contact__form">
  <?php echo do_shortcode('[contact-form-7 id="281" title="お問い合わせ"]'); ?>
  <div class="p-contact__grecaptcha">
              このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>と<a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">利用規約</a>が適用されます。
            </div>
          </div>
        <div class="p-contact__btn c-btn-below l-btn-below"><a class="c-btn-black" href="<?php echo HOME_URL; ?>">
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