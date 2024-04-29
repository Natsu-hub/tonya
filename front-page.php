<?php 
get_header(); ?>

<main class="l-main p-main">
  <!-- p-top-mv -->
    <section class="p-top-mv js-mv">
      <picture class="p-top-mv__img">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-img.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-img.png" alt="問屋町食堂の背景画像" width="1440" height="700">
      </picture>
      <h1 class="p-top-mv__logo">
        問屋町食堂
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="問屋町食堂" width="320" height="320">
        </picture>
      </h1>
      <div class="p-top-mv__deco"><span></span>
      </div>
    </section>

<!-- p-to-lineUp -->
<section class="p-to-lineUp">
  <div class="p-to-lineup__inner l-inner">
    <div class="p-to-lineUp__card">
      <h2 class="p-to-lineUp__head">からだに優しく、<br class="u-mobile">美味しいお弁当を<br>ご自宅へお届けします</h2>
      <div class="p-to-lineUp__text">真心たっぷりなお弁当を１食からお届けいたします。お客様の身体に合った日替わり食や医療対応食のほか、冷凍弁当・パンや飲み物セットも販売しております。また、高齢者施設向けサービスも展開中！お気軽にお問い合わせください。</div>
      <div class="p-to-lineUp__link">
      <a href="<?php echo MENU_URL; ?>" class="p-to-lineUp__btn">お弁当のラインナップを見る</a>
      </div>
      <div class="p-to-lineUp__preload">
      </div>
    </div>
  </div>
</section>

<!-- p-top-menu -->
<section class="p-top-menu">
  <div class="p-top-menu__inner l-inner">
    <div class="p-top-menu__body">
      <div class="p-top-menu__left">
        <picture class="p-top-menu__img">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img01.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img01.jpg" alt="栄養バランスや旬を考えた
毎月の献立" width="482" height="318" loading="lazy">
        </picture>
        <h2 class="p-top-menu__head">栄養バランスや旬を考えた<br>毎月の献立</h2>
        <div class="p-top-menu__text">皆様に飽きがこないよう、おかずの種類を数百種以上取りそろえています。その時期に食べるのが一番美味しい旬のものを取り入れ、季節に合わせて彩り豊かなメニューを用意しております。</div>
        <div class="p-top-menu__link">
          <a href="<?php echo MONTHLY_URL; ?>" class="c-btn c-btn--red">献立表はこちら</a>
        </div>
      </div>
      <div class="p-top-menu__right">
        <div class="p-top-menu__right-box">
          <div class="p-top-menu__right-content">
            <h3 class="p-top-menu__right-head">毎日手作業でダシをとり<br>あたたかな手作りの味</h3>
            <div class="p-top-menu__right-text">和食中心の献立で、国産のカツオと昆布で毎日ダシをとってお作りしています。<br>手作りを基本とした家庭的な味をお届けしています。</div>
          </div>
          <picture class="p-top-menu__right-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img02-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img02.jpg" alt="毎日手作業でダシをとりあたたかな手作りの味" width="203" height="320" loading="lazy">
          </picture>
        </div>
        <div class="p-top-menu__right-box p-top-menu__right-box--reverse">
          <div class="p-top-menu__right-content">
            <h3 class="p-top-menu__right-head">農家も喜ぶ全量買取<br>契約栽培</h3>
            <div class="p-top-menu__right-text">生鮮野菜は国産野菜を指定し納入。また、農家さんと直接契約・全量買取することでコストダウンが可能。生産者がわかるので安心してお食事いただけます。</div>
          </div>
          <picture class="p-top-menu__right-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img03-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-menu_img03.jpg" alt="農家も喜ぶ全量買取契約栽培" width="203" height="320" loading="lazy">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- p-bottom-service -->
  <?php get_template_part('template/bottom-service'); ?>

</main>
<?php get_footer(); ?>