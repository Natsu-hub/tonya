<?php 
/**
* Template Name: ご注文のしかた
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
<!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">How to order</span>
          <span class="c-below-mv__main-title">ご注文のしかた</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/below-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/below-mv.png" alt="ご注文のしかた" width="1440" height="400">
        </picture>
        <div class="c-below-mv__deco"><span></span>
      </div>
      </div>
    </section>

<!-- p-order -->
  <div class="p-order">
    <div class="p-order__inner l-inner--small">
      <ul class="p-order__lists">
        <li class="p-order__list">
          <div class="p-order__number">
          <picture class="p-order__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-order__character">1</span>
            </div>
          <div class="p-order__box">
            <h2 class="p-order__head">お電話でお届け先等をお教えください</h2>
            <div class="p-order__text">お電話でご注文いただけます。<br>はじめにお届け希望日、お届け時間帯、お名前、お届け先のご住所、お電話番号をお伺いします。</div>
          </div>
        </li>
        <li class="p-order__list">
          <div class="p-order__number">
            <picture class="p-order__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-order__character">2</span>
            </div>
          <div class="p-order__box">
            <h2 class="p-order__head">お弁当の商品名と内容をお伝えください</h2>
            <div class="p-order__text">ホームページにあるお弁当のお名前をお伝えいただき、「ごはんあり(白米)」「ごはんなし(おかずのみ)」などの選択肢があるものはご希望に合わせてお選びください。</div>
          </div>
        </li>
        <li class="p-order__list">
          <div class="p-order__number">
            <picture class="p-order__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-order__character">3</span>
            </div>
          <div class="p-order__box">
            <h2 class="p-order__head">安否確認を希望される場合は必ずお伝えください</h2>
            <div class="p-order__text">お弁当を配達の際にもしもの場合は、緊急連絡先（ご家族様やご担当ケアマネージャー様など）へご連絡させていただきますので、お気軽にご連絡ください。</div>
          </div>
        </li>
        <li class="p-order__list">
          <div class="p-order__number">
            <picture class="p-order__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/use_deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-order__character">4</span>
            </div>
          <div class="p-order__box">
            <h2 class="p-order__head">お届けしますのでご自宅でお待ちください</h2>
            <div class="p-order__text">決まった時刻にお届けしますが、天候や交通事情によりお届け時間に変動が生じる場合がありますので予めご了承ください。</div>
          </div>
        </li>
      </ul>
    </div>
  </div>

  </main>
<?php get_footer(); ?>