<?php 
get_header(); ?>

<main class="l-main p-main">
  <!-- p-top-mv -->
    <section class="p-top-mv js-mv">
      <picture class="p-top-mv__img">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-img.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-img.png" alt="問屋町食堂の背景画像" width="1440" height="700">
      </picture>
      <picture class="p-top-mv__logo">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="問屋町食堂" width="320" height="320">
      </picture>
      <picture class="p-top-mv__deco">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-deco.svg" alt="">
      </picture>
    </section>

<!-- p-fixed-tel -->
<!-- <div class="p-fixed-tel-wrapper">
  <div class="p-fixed-tel">
    <picture class="p-fixed-tel__icon">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-tel.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-tel.png" alt="電話のアイコン" width="30" height="30">
      </picture>
      <div class="p-fixed-tel__text-tel">
        <p>ご注文<br class="u-mobile">ダイヤル</p>
        <a href="tel:+027-388-0811">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fixed-tel-img.svg" alt="電話をかける" width="48" height="645">
         <span class="u-mobile">027-388-0811</span>
        </a>
    </div>
    <button class="p-fixed-tel__to-top" id="js-scrollTop" title="トップへ戻る">
      <span class="p-fixed-tel__arrow"></span>
    </button>
  </div>
  <div class="p-fixed-tel__info u-mobile">対応時間9:00-17:00  ｜  定休日：土日祝日/年末年始   |   当日朝10時まで受付
  </div>
</div> -->

<!-- p-to-lineUp -->
<div class="p-to-lineUp">
  <div class="p-to-lineup__inner l-inner">
    <div class="p-to-lineUp__card">
      <div class="p-to-lineUp__head">からだに優しく、<br class="u-mobile">美味しいお弁当を<br>ご自宅へお届けします</div>
      <div class="p-to-lineUp__text">真心たっぷりなお弁当を１食からお届けいたします。お客様の身体に合った日替わり食や医療対応食のほか、冷凍弁当・パンや飲み物セットも販売しております。また、高齢者施設向けサービスも展開中！お気軽にお問い合わせください。</div>
      <div class="p-to-lineUp__link">
      <a href="" class="p-to-lineUp__btn">お弁当のラインナップを見る</a>
      </div>
    </div>
  </div>
</div>

<!-- p-top-menu -->
<div class="p-top-menu">
  <div class="p-top-menu__inner l-inner">
    <div class="p-top-menu__body">
      <div class="p-top-menu__left">
        <picture class="p-top-menu__img">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img01.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img01.jpg" alt="栄養バランスや旬を考えた
毎月の献立" width="482" height="318" loading="lazy">
        </picture>
        <div class="p-top-menu__head">栄養バランスや旬を考えた<br>毎月の献立</div>
        <div class="p-top-menu__text">皆様に飽きがこないよう、おかずの種類を数百種以上取りそろえています。その時期に食べるのが一番美味しい旬のものを取り入れ、季節に合わせて彩り豊かなメニューを用意しております。</div>
        <div class="p-top-menu__link">
          <a href="" class="p-top-menu__btn c-btn c-btn--red">献立表はこちら</a>
        </div>
      </div>
      <div class="p-top-menu__right">
        <div class="p-top-menu__right-box">
          <div class="p-top-menu__right-content">
            <div class="p-top-menu__right-head">毎日手作業でダシをとり<br>あたたかな手作りの味</div>
            <div class="p-top-menu__right-text"></div>
          </div>
          <picture class="p-top-menu__right-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img02.jpg" alt="毎日手作業でダシをとりあたたかな手作りの味" width="203" height="320" loading="lazy">
          </picture>
        </div>
        <div class="p-top-menu__right-box p-top-menu__right-box--reverse">
          <div class="p-top-menu__right-content">
            <div class="p-top-menu__right-head">農家も喜ぶ全量買取<br>契約栽培</div>
            <div class="p-top-menu__right-text"></div>
          </div>
          <picture class="p-top-menu__right-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img01.png" alt="農家も喜ぶ全量買取契約栽培" width="203" height="320" loading="lazy">
          </picture>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- p-top-service -->
<div class="p-top-service">
  <div class="p-top-service__inner l-inner">
    <div class="p-top-service__head">高齢者施設向けサービス</div>
    <div class="p-top-service__text">高齢者施設へのお食事のお届け、定期販売も賜ります。</div>
    <div class="p-top-service__link">
          <a href="" class="p-top-service__btn c-btn c-btn--blue">詳しくはこちら</a>
        </div>
  </div>
</div>

</main>
<?php get_footer(); ?>