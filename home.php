<?php 
get_header(); ?>

<main class="l-main">
  <!-- p-top-mv -->
      <section class="p-top-mv js-mv">
        <div class="p-top-mv__img">
          <div class="p-top-mv__inner">
            <div class="p-top-mv__text">SUPPORT + PORT<br>
= SAPORUTO</div>
            <div class="p-top-mv__logo">
                <picture class="p-top-mv__logo-img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="一般社団法人 サポルト" width="106" height="106" loading="lazy">
                </picture>
              <div class="p-top-mv__logo-text">
                <p class="p-top-mv__logo-text-en">SUPPORT + PORT </p>
                <p class="p-top-mv__logo-text-ja">サポート【支援】 +  ポート【港】</p>
                <h2 class="p-top-mv__logo-text-name">SAPORUTO
                  <span>サポルト</span>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- p-mv-lead -->
          <div class="p-mv-lead">
            <div class="p-mv-lead__content">
              <h2 class="p-mv-lead__title js-text-effect js-splitText">「誰もが自信をもって旅立ち、</h2>
              <h2 class="p-mv-lead__title02 js-text-effect js-splitText">安心して戻って来られる港を作りたい」</h2>
              <div class="p-mv-lead__text">
                <p class="js-fade-in">この思いが私たち、SAPORUTOの原点です。</p>
                <p class="js-fade-in">いま、様々な原因で「働きたい」という想いを実現できない方が増えています。【働くことの意義】は人によって異なりますが共通項として、生活基盤の確保・維持、社会や仲間との連帯・社会参加、自己実現の手段などが挙げられます。</p>
                <p class="js-fade-in">働かないという選択肢もありますが、「働きたい」という意欲がある方が働くための意義を実感でき、自立やキャリアアップのために次のステージに進んだり、うまくいかなければ安心して戻ってきて再チャレンジできる場所を提供したいと考えました。</p>
                <p class="js-fade-in">私たちは児童福祉で培った支援や福祉の精神を基盤としつつも、「稼ぐ」という新たな就労継続支援の価値観をこの場で作っていきます。</p>
              </div>
            </div>
          </div>

<!-- p-top-blog -->
<div class="p-top-blog l-section">
  <div class="p-top-blog__inner l-inner--small">
    <div class="p-top-blog__box">
      <div class="p-top-blog__left">
        <h2 class="p-top-blog__head c-common-title c-common-title--black js-text-effect js-splitText">Blog</h2>
        <div class="p-top-blog__btn js-fade-in"><a class="c-btn-black" href="<?php echo BLOG_URL; ?>">
            <p class="c-btn-black__text">記事一覧へ</p>
            <picture class="c-btn-black__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/black_arrow02.svg" alt="記事一覧へ" width="202" height="10" loading="lazy">
            </picture>
          </a>
        </div>
      </div>
     <div class="p-top-blog__right js-fadeInSlow">
        <?php
          if (wp_is_mobile()) {
            $num = 2; // スマホの表示数(全件は-1)
          } else {
            $num = 2; // PCの表示数(全件は-1)
          }
          $args = [
            'post_type' => 'blog',
            // 投稿タイプのスラッグ(通常投稿は'post')
            'posts_per_page' => $num, // 表示件数
          ];
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()):
            while ($the_query->have_posts()):
              $the_query->the_post();
              ?>
              <a class="p-top-blog__content" href="<?php the_permalink(); ?>">
              <div class="p-top-blog__time">
                <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.'); ?></time>
                <time datetime="<?php the_time('c'); ?>"><?php the_time('n.j'); ?></time>
              </div>
                <p class="p-top-blog__content-title">
                  <?php the_title(); ?>
                </p>
              </a>
            <?php endwhile; else: ?>
            <p>まだ記事がありません</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          <!-- 記事のループ処理終了 -->
      </div>

    </div>
  </div>
</div>
<!-- p-service -->
<section class="p-service l-section" id="service">
      <div class="p-service__inner l-inner--service">
      <h2 class="p-service__head c-common-title c-common-title--white js-text-effect js-splitText">Service</h2>
        <ul class="p-service__list p-service-list">
          <li class="p-service-list__item trigger-effect">
            <div class="p-service-list__img-item">
              <p class="p-service-list__img-text js-move-text">Job assistance</p>
              <picture class="p-service-list__img js-img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-service_img01-sp.webp" type="image/webp" media="(max-width: 768px)">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-service_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-service_img01.png" alt="就労継続支援事業" width="560" height="541" loading="lazy">
              </picture>
            </div>
            <div class="p-service-list__item-wrap">
                <h3 class="p-service-list__item-title js-fadeIn">就労継続支援事業</h3>
                <p class="p-service-list__item-text js-fadeIn">【アドフューチャー】は、就労継続支援A型事業所・就労継続支援B型事業所という障がいのある方に就労の機会を提供する事業です。「脱福祉作業所」をコンセプトに、明るく開放的な環境で、様々な仕事を通じて適正を見つけ、より高い収入を目指してキャリアアップできる仕組みにより、就労意欲の高い集団で稼げる事業所を目指します。</p>
              <div class="p-service-list__btn js-fadeIn"><a class="c-btn-white" href="https://addfuture.saporuto.com" target="_blank" rel="noopener noreferrer">
                  <p class="c-btn-white__text">アドフューチャー ホームページへ</p>
                  <picture class="c-btn-white__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/white_arrow.svg" alt="アドフューチャー ホームページへ" width="202" height="10" loading="lazy">
                  </picture>
                </a>
              </div>
            </div>
          </li>
          <li class="p-service-list__item trigger-effect">
            <div class="p-service-list__img-item">
              <p class="p-service-list__img-text js-move-text">Meals on Wheels</p>
              <picture class="p-service-list__img js-img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-service_img02-sp.webp" type="image/webp" media="(max-width: 768px)">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-service_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-service_img02.png" alt="配食型飲食事業" width="560" height="541" loading="lazy">
              </picture>
            </div>
            <div class="p-service-list__item-wrap">
              <h3 class="p-service-list__item-title js-fadeIn">配食型飲食事業</h3>
              <p class="p-service-list__item-text js-fadeIn">高齢者向け配食サービス【問屋町食堂】を運営しています。就労継続支援事業所で働く方々とともに、栄養バランスや味付けを尊重した「美味しい弁当」をご提供しています。ご利用者さま一人ひとりに満足してお召し上がりいただけるよう、いただいたご要望を取り入れながら季節に合わせた献立を作成します。</p>
              <div class="p-service-list__btn js-fadeIn"><a class="c-btn-white" href="https://tonyashokudo.saporuto.com" target="_blank" rel="noopener noreferrer">
                  <p class="c-btn-white__text">問屋町食堂 ホームページへ</p>
                  <picture class="c-btn-white__img">
                      <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/white_arrow.webp" type="image/webp"> -->
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/white_arrow.svg" alt="問屋町食堂 ホームページへ" width="375" height="44" loading="lazy">
                  </picture>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

<!-- p-company -->
<section class="p-company l-section" id="company">
      <div class="p-company__inner l-inner--small">
      <h2 class="p-company__head c-common-title c-common-title--black js-text-effect js-splitText">Company</h2>
      <div class="p-company__items">
         <!-- Google Mapの共有タグを埋め込む -->
          <div class="p-company__map js-fadeIn">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.5538853893318!2d139.0130976760973!3d36.34736049309467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601e8d135fc1f8fb%3A0x6120c6e32f34514b!2z44CSMzcwLTAwMDYg576k6aas55yM6auY5bSO5biC5ZWP5bGL55S677yU5LiB55uu77yX4oiS77yR!5e0!3m2!1sja!2sjp!4v1712622096596!5m2!1sja!2sjp" width="482" height="423" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="p-company__info js-fadeIn">
            <dl class="p-company__list">
              <dt class="p-company__title">会社名</dt>
              <dd class="p-company__detail">一般社団法人サポルト</dd>
            </dl>
            <dl class="p-company__list">
              <dt class="p-company__title">代表者</dt>
              <dd class="p-company__detail">井草　晃</dd>
            </dl>
            <dl class="p-company__list">
              <dt class="p-company__title">所在地</dt>
              <dd class="p-company__detail">〒370-0006 群馬県高崎市問屋町４－７－１</dd>
            </dl>
            <dl class="p-company__list">
              <dt class="p-company__title">設立</dt>
              <dd class="p-company__detail">2023年11月</dd>
            </dl>
            <dl class="p-company__list">
              <dt class="p-company__title">従業員数</dt>
              <dd class="p-company__detail">5名（2024年5月時点）</dd>
            </dl>
            <dl class="p-company__list">
              <dt class="p-company__title">事業内容</dt>
              <dd class="p-company__detail">就労継続支援A型事業所<br>
就労継続支援B型事業所<br>
配食型飲食事業</dd>
            </dl>
          </div>
      </div>
      </div>
    </section>

  <!-- p-order -->
    <section class="p-order">
      <div class="p-order__inner l-inner--small js-fade-in">
        <h2 class="p-order__head c-common-title c-common-title--white04 js-text-effect js-splitText">Order</h2>
        <p class="p-order__text js-fadeIn">お仕事をサポルトへご依頼いただける<br>
企業様を募集しています
        </p>
        <div class="p-order__btn js-fadeIn"><a class="c-btn-white" href="<?php echo RECRUIT_URL; ?>">
            <p class="c-btn-white__text">作業受託企業様の募集 ページへ</p>
            <picture class="c-btn-white__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/white04_arrow.svg" alt="問屋町食堂 ホームページへ" width="375" height="44" loading="lazy">
            </picture>
          </a>
        </div>
      </div>
    </section>

</main>
<?php get_footer(); ?>