<?php 
/**
* Template Name: お悩み解決
*/
get_header();
$page_slug = $post->post_name;
?>

<main class="l-main">
<!-- p-group-mv -->
<section class="p-group-mv js-mv">
      <div class="p-group-mv__inner l-inner">
        <h1 class="p-group-mv__title">
            <span class="p-group-mv__sub-title"><strong>高齢者施設でのお食事提供のお悩み</strong>を</span>
          <span class="p-group-mv__main-title">まるごと<br class="u-mobile"><strong>解決</strong>します！</span>
        </h1>
        <div class="p-group-mv__text">問屋町食堂の高齢者施設向け配食サービスでは、調理資格者がいなくても簡単に対応できる調理済み食材やお弁当を、管理栄養士監修の美味しい献立で毎日お届けいたします。</div>
        <ul class="p-group-mv__items">
          <li class="p-group-mv__item p-group-mv__item--blue">
            <span>簡単準備で</span>
            <p>大幅<small>な</small><br>時間短縮</p>
          </li>
          <li class="p-group-mv__item p-group-mv__item--brown">
            <span>栄養士監修</span>
            <p>日替わり<br>献立<small>を</small>毎日</p>
          </li>
          <li class="p-group-mv__item p-group-mv__item--red">
            <span>コスト削減</span>
            <p>人手不足<br>解消へ</p>
          </li>
        </ul>
        <picture class="p-group-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-mv-sp.webp" type="image/webp"  media="(max-width: 730px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-mv.png" alt="" width="1440" height="676">
        </picture>
      </div>
    </div>
    <div class="p-group-mv__deco"><span></span>
    </section>

<!-- p-group-service -->
  <section class="p-group-service">
    <div class="p-group-group-service__inner l-inner--small">
      <h2 class="p-group-service__head c-group-title">
        <span>問屋町食堂の</span>高齢者施設向け<br class="u-mobile">サービス
      </h2>
      <ul class="p-group-service__items">
        <li class="p-group-service__item">
        <picture class="p-group-service__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img01-sp.webp" type="image/webp"  media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img01.png" alt="調理済み食材を調理工場から施設へ直接お届けのイメージ画像" width="334" height="290">
        </picture>
        <p class="p-group-service__text">調理済み食材を<br>
調理工場から施設へ直接お届け</p>
        </li>
        <li class="p-group-service__item">
        <picture class="p-group-service__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img02-sp.webp" type="image/webp"  media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img02.png" alt="タッパーに入れてお届けのイメージ画像" width="334" height="290">
        </picture>
        <p class="p-group-service__text">調理済み食材を<br>
調理工場から施設へ直接お届け</p>
        </li>
        <li class="p-group-service__item">
        <picture class="p-group-service__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img03-sp.webp" type="image/webp"  media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img03.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img03.png" alt="配食サービスのイメージ画像" width="334" height="290">
        </picture>
        <p class="p-group-service__text">調理済み食材を<br>
調理工場から施設へ直接お届け</p>
        </li>
      </ul>
      <div class="p-group-service__content">問屋町食堂の高齢者施設向け配食サービスとは、調理済み食材を直接調理工場から施設にお届けするプランと、タッパーに食材を入れて納品するタイプ、お弁当としてお届けするプランがお選びいただけます。
いずれのプランも調理済みの献立としてお届けしますので、調理資格者がいなくても簡単に対応でき、管理栄養士監修の美味しいお食事を毎日お届けいたします。</div>
    </div>
  </section>

<!-- p-group-point -->
  <section class="p-group-point">
    <div class="p-group-group-point__inner l-inner--small">
      <h2 class="p-group-point__title c-group-title">
        <span class="p-group-point__sub-title">問屋町食堂</span><br class="u-mobile"><strong class="p-group-point__strong-title">6<span>つ</span></strong>のポイント
      </h2>
      <ul class="p-group-point__items">
        <li class="p-group-point__list">
          <div class="p-group-point__card">
            <div class="p-group-point__head">
              <div class="p-group-point__head-character">1</div>
              <h2 class="p-group-point__head-text">栄養バランスや旬を考えた毎月の献立</h2>
            </div>
              <div class="p-group-point__content-text">飽きがこないよう、おかずの種類を数百種以上取りそろえています。その時期に食べるのが一番美味しい旬のものを取り入れ、季節に合わせて彩り豊かなメニューを用意しております。</div>
          </div>
          <picture class="p-group-point__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img01-sp.webp" type="image/webp"  media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img01.png" alt="栄養バランスや旬を考えた毎月の献立のイメージ画像" width="470" height="328">
        </picture>
        </li>
        <li class="p-group-point__list">
          <div class="p-group-point__card">
            <div class="p-group-point__head">
              <div class="p-group-point__head-character">2</div>
              <h2 class="p-group-point__head-text">毎日手作業でダシをとりあたたかな手作りの味</h2>
            </div>
              <div class="p-group-point__content-text">和食中心の献立で、国産のカツオと昆布で毎日ダシをとってお作りしています。手作りを基本とした家庭的な味をお届けしています。</div>
          </div>
          <picture class="p-group-point__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img02-sp.webp" type="image/webp"  media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img02.png" alt="毎日手作業でダシをとるイメージ画像" width="470" height="328">
        </picture>
        </li>
        <li class="p-group-point__list">
          <div class="p-group-point__card">
            <div class="p-group-point__head">
              <div class="p-group-point__head-character">3</div>
              <h2 class="p-group-point__head-text">農家も喜ぶ全量買取契約栽培</h2>
            </div>
              <div class="p-group-point__content-text">生鮮野菜は国産野菜を指定し納入。また、農家さんと直接契約・全量買取することでコストダウンが可能。生産者がわかるので安心して提供できます。</div>
          </div>
          <picture class="p-group-point__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img03-sp.webp" type="image/webp"  media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img03.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img03.png" alt="農家も喜ぶ全量買取契約栽培のイメージ画像" width="470" height="328">
        </picture>
        </li>
        <li class="p-group-point__list">
          <div class="p-group-point__card">
            <div class="p-group-point__head">
              <div class="p-group-point__head-character">4</div>
              <h2 class="p-group-point__head-text">とにかく作業が簡単</h2>
            </div>
              <div class="p-group-point__content-text">工場直送方式の場合は完全調理品をチルドパックでお届け。タッパー方式は私たちが食材ごとにタッパーにまとめて配送するので現場では盛り付けるだけ。お弁当方式はそのまま提供できるのでさらに便利。デイサービス利用者の夕食分としてお弁当を提供していただくことも可能です。</div>
          </div>
          <picture class="p-group-point__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img04-sp.webp" type="image/webp"  media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img04.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img04.png" alt="イメージ画像" width="470" height="328">
        </picture>
        </li>
        <li class="p-group-point__list">
          <div class="p-group-point__card">
            <div class="p-group-point__head">
              <div class="p-group-point__head-character">5</div>
              <h2 class="p-group-point__head-text">バリエーション豊富なお食事の種類</h2>
            </div>
              <div class="p-group-point__content-text">刻み食・ミキサー食・ムース食・医療対応食など、ご利用者様が安心してお召し上がりいただけるようさまざまなバリエーションのお食事をご用意しております。<br>季節の行事食やセレクトメニューもございます。</div>
          </div>
          <picture class="p-group-point__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img05-sp.webp" type="image/webp"  media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img05.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img05.png" alt="バリエーション豊富なお食事のイメージ画像" width="470" height="328">
        </picture>
        </li>
        <li class="p-group-point__list">
          <div class="p-group-point__card">
            <div class="p-group-point__head">
              <div class="p-group-point__head-character">6</div>
              <h2 class="p-group-point__head-text">毎日お届けするため大きなスペースは不要</h2>
            </div>
              <div class="p-group-point__content-text">直送方式でのご注文の場合は喫食日の２日前を目安にお届けをいたします。また、タッパー方式及び弁当方式の場合は当日納品となりますので、広いパントリースペースは必要ありません。</div>
          </div>
          <picture class="p-group-point__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img06-sp.webp" type="image/webp"  media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img06.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/group-point_img06.png" alt="毎日お届けするイメージ画像" width="470" height="328">
        </picture>
        </li>
      </ul>
    </div>
  </section>

  </main>
<?php get_footer(); ?>