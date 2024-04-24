<?php 
/**
* Template Name: 作業受託企業様の募集
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
<!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">Works</span>
          <span class="c-below-mv__main-title">作業受託企業様の募集</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/works-mv-sp.webp" type="image/webp" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/works-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/works-mv.png" alt="就労継続支援事業" width="1440" height="400">
        </picture>
      </div>
    </section>
<!-- p-works-lead -->
<div class="p-works-lead">
    <div class="p-works-lead__inner l-inner">
      <h2 class="p-works-lead__title js-fade-in">丁寧・正確さが自慢のサポルトへ<br class="u-mobile">作業を依頼しませんか？</h2>
      <div class="p-works-lead__text js-fade-in">
        <p>サポルトが展開する就労継続支援A型/B型事業所「アドフューチャー」では、障がいを持つ方が自分の適性に合った作業訓練をしております。利用者それぞれの個性に適したさまざまな作業に対応でき、単発作業や少量の案件でもお受けしております。制作物は必ず事業所スタッフがチェックを行いますので、正確さ・丁寧さにもご納得いただけるものをご提供します。</p>
        <p>企業の皆様には私たちの事業所で対応可能なお仕事をご紹介いただくことで、企業におけるCSR活動の一環として、また、SDGs活動の一環として、障がい者の自立支援活動を行っていることをアピールしていただければ幸いです。</p></div>
<ul class="p-works-lead__lists js-card-wrapper">
  <li class="p-works-lead__list js-card">
  <div class="p-works-lead__img-box">
    <picture class="p-works-lead__img p-works-lead__img01">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/icon_works01.svg" alt="仕事内容のイメージアイコン" width="146" height="152" loading="lazy">
    </picture>
  </div>
  <div class="p-works-lead__box">
    <h3 class="p-works-lead__box-text">お試し期間で<br>
    仕上がりが確認できる</h3>
    <div class="p-works-lead__btn">
      <a class="c-btn-black c-btn-black--large" href="#works">
        <p class="c-btn-black__text">仕事内容へ</p>
        <picture class="c-btn-black__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/black_arrow02.svg" alt="仕事内容へ" width="202" height="10" loading="lazy">
        </picture>
      </a>
    </div>
  </div>
  </li>
  <li class="p-works-lead__list js-card">
  <div class="p-works-lead__img-box">
    <picture class="p-works-lead__img p-works-lead__img02">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/icon_works02.svg" alt="受託の流れのイメージアイコン" width="177" height="176" loading="lazy">
    </picture>
  </div>
  <div class="p-works-lead__box">
    <h3 class="p-works-lead__box-text">スタッフの製品チェックで<br>
正確・安心のクオリティ</h3>
    <div class="p-works-lead__btn">
      <a class="c-btn-black c-btn-black--large" href="#flow">
        <p class="c-btn-black__text">受託の流れへ</p>
        <picture class="c-btn-black__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/black_arrow02.svg" alt="受託の流れへ" width="202" height="10" loading="lazy">
        </picture>
      </a>
    </div>
  </div>
  </li>
  <li class="p-works-lead__list js-card">
  <div class="p-works-lead__img-box">
    <picture class="p-works-lead__img p-works-lead__img03">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/icon_works03.svg" alt="お問い合わせのイメージアイコン" width="198" height="152" loading="lazy">
    </picture>
  </div>
  <div class="p-works-lead__box">
    <h3 class="p-works-lead__box-text">依頼中の心配事は<br>
スタッフへ相談可能</h3>
    <div class="p-works-lead__btn">
      <a class="c-btn-black c-btn-black--large" href="#contact">
        <p class="c-btn-black__text">お問い合わせへ</p>
        <picture class="c-btn-black__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/black_arrow02.svg" alt="お問い合わせへ" width="202" height="10" loading="lazy">
        </picture>
      </a>
    </div>
  </div>
  </li>
</ul>
</div>
</div>

<!-- p-works-example -->
<section class="p-works-example l-section--small" id="works">
  <div class="p-works-example__inner l-inner">
    <div class="p-works-example__title-wrap">
      <h2 class="c-util-title js-fadeIn c-util-title--wrap">現在事業所で<br class="u-mobile">行われている作業例</h2>
      <h3 class="c-util-sub-title js-fadeIn">就労継続支援A型・B型それぞれで適正に合わせて作業します</h3>
    </div>
    <ul class="p-works-example__lists js-card-wrapper">
    <li class="p-works-example__item js-card">
              <div class="p-works-example__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/works_img01.jpg" alt="製造・飲食" width="420" height="240" loading="lazy">
              </div>
              <p class="p-works-example__item-category">製造・飲食</p>
              <div class="p-works-example__item-content">
                <p class="p-works-example__item-title">高齢者向け配食弁当の盛り付け・配達</p>
              </div>
          </li>
          <li class="p-works-example__item js-card">
              <div class="p-works-example__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/works_img02.jpg" alt="IT・サービス" width="420" height="240" loading="lazy">
              </div>
              <p class="p-works-example__item-category">IT・サービス</p>
              <div class="p-works-example__item-content">
                <p class="p-works-example__item-title">EC事業（ネット販売）</p>
              </div>
          </li>
          <li class="p-works-example__item js-card">
              <div class="p-works-example__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/works_img03.jpg" alt="IT・サービス" width="420" height="240" loading="lazy">
              </div>
              <p class="p-works-example__item-category">IT・サービス</p>
              <div class="p-works-example__item-content">
                <p class="p-works-example__item-title">PC業務（キーパンチャー）</p>
              </div>
          </li>
          <li class="p-works-example__item js-card">
              <div class="p-works-example__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/works_img04.jpg" alt="屋外軽作業" width="420" height="240" loading="lazy">
              </div>
              <p class="p-works-example__item-category">屋外軽作業</p>
              <div class="p-works-example__item-content">
                <p class="p-works-example__item-title">ビル管理・清掃</p>
              </div>
          </li>
          <li class="p-works-example__item js-card">
              <div class="p-works-example__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/works_img05.jpg" alt="屋外軽作業" width="420" height="240" loading="lazy">
              </div>
              <p class="p-works-example__item-category">屋外軽作業</p>
              <div class="p-works-example__item-content">
                <p class="p-works-example__item-title">農作業</p>
              </div>
          </li>
          <li class="p-works-example__item js-card">
              <div class="p-works-example__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/works_img06.jpg" alt="屋内軽作業" width="420" height="240" loading="lazy">
              </div>
              <p class="p-works-example__item-category">屋内軽作業</p>
              <div class="p-works-example__item-content">
                <p class="p-works-example__item-title">シール貼り・検品・封入等</p>
              </div>
          </li>
    </ul>
    <small class="p-works-example__text">※こちらは一例であり、他にもさまざまな仕事に対応しています</small>
  </div>
</section>

<!-- p-works-flow -->
<section class="p-works-flow l-section--small" id="flow">
  <div class="p-works-flow__inner l-inner--small">
    <div class="p-works-flow__title-wrap">
      <h2 class="c-util-title js-fadeIn">作業受託の流れ</h2>
      <h3 class="c-util-sub-title js-fadeIn">詳しくはお問合せ後の面談にてご説明いたします</h3>
    </div>
    <div class="p-works__body js-fadeIn">
      <div class="p-works__content">
        <dl class="p-works__list">
          <dt class="p-works__title">お問い合わせください</dt>
          <dd class="p-works__detail">電話またはお問い合わせフォームにて、お気軽にご連絡ください。<br>ご依頼内容を伺い、実際の作業確認を行う日程調整をいたします。</dd>
        </dl>
        <dl class="p-works__list">
          <dt class="p-works__title">作業内容の確認</dt>
          <dd class="p-works__detail">作業内容や数量、納期などの確認をさせていただきます。<br>場所は御社、あるいは弊社でも対応可能です。</dd>
        </dl>
        <dl class="p-works__list">
          <dt class="p-works__title">お試しor受託へ</dt>
          <dd class="p-works__detail">作業確認後、内容に応じて【お試し】あるいは【正式受託】となります。<br>※お試しとは：「正式契約の前に品質確認をしたい」等のご要望がある際のトライアル期間のことです。お見積は個数やお試し期間により異なりますが、ご予算に応じてお決めいただけます。</dd>
        </dl>
        <dl class="p-works__list">
          <dt class="p-works__title">当社による検品</dt>
          <dd class="p-works__detail">スタッフがサポートしながら丁寧・正確に作成したものを、最後にもう一度スタッフのほうでチェックを行います。</dd>
        </dl>
        <dl class="p-works__list">
          <dt class="p-works__title">お見積発行</dt>
          <dd class="p-works__detail">実際に作業させていただいた内容から最終見積を計算いたします。</dd>
        </dl>
        <dl class="p-works__list">
          <dt class="p-works__title">納品</dt>
          <dd class="p-works__detail">作業を通した成果物を納品いたします。お渡し方法は作業により異なりますが、原則郵送でも対応可能です。</dd>
        </dl>
      </div>
    </div>
  </div>
</section>

<!-- p-works-banner -->
<section class="p-works-banner js-mv">
      <div class="p-works-banner__inner">
          <picture class="p-works-banner__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/logo-white.svg" alt="アドフューチャー/ADD FUTURE" width="456" height="456">
          </picture>
          <div class="p-works-banner__btn js-fade-in"><a class="c-btn-white" href="<?php echo RECRUIT_URL; ?>">
        <p class="c-btn-white__text">事業所について知る</p>
        <picture class="c-btn-white__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/white04_arrow.svg" alt="問屋町食堂 ホームページへ" width="252" height="10" loading="lazy">
        </picture>
      </a>
    </div>
        <picture class="p-works-banner__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/works_bg02-sp.webp" type="image/webp" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/works_bg02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/works_bg02.png" alt="就労継続支援事業" width="1440" height="400">
        </picture>
      </div>
    </section>

<!-- p-below-contact -->
<div class="p-works-contact" id="contact">
  <?php get_template_part('template/below-contact'); ?>
</div>

  </main>
<?php get_footer(); ?>