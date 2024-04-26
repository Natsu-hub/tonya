<?php 
/**
* Template Name: 今月の献立
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
<!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">Monthly Menu</span>
          <span class="c-below-mv__main-title">今月の献立</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/below-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/below-mv.png" alt="今月の献立" width="1440" height="400">
        </picture>
        <div class="c-below-mv__deco"><span></span>
      </div>
      </div>
    </section>

    <div class="c-big-bg l-section">
      <div class="p-menu">
        <div class="p-menu__inner l-inner--small">
  <div class="p-menu__box">
    <h2 class="p-menu__title c-common-title">
      <span>今月の献立</span>
    </h2>
    <div class="p-menu__monthly p-menu-monthly">
    <ul class="p-monthly-menu__items">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
          $thisMonth_items = SCF::get('this-month'); // 繰り返しフィールドの値を取得する
          if (!empty($thisMonth_items)) { // 繰り返しフィールドに値がある場合に処理を行う
            foreach ($thisMonth_items as $item) { // 繰り返し構文で各値を順次取り出す
              $thisMonth_menuDate = esc_html($item['this-month-menu-date']); // menu_descriptionをエスケープ処理して変数に代入する
              $thisMonth_pdf_url = esc_url($item['this-month-menu']); // PDFのURLをエスケープして取得する
        ?>
        <li class="p-monthly-menu__item p-monthly-menu__item--top">
          <a href="<?php echo $thisMonth_pdf_url; ?>" target="_blank" rel="noopener"> <!-- 新しいタブでPDFを開く -->
            <div class="p-monthly-menu__head">
              <strong>今月の献立</strong>
              <small>は</small><br class="u-mobile">
              <span>こちら</span>
            </div>
            <div class="p-monthly-menu__label-item">
              <span class="p-monthly-menu__label"><?php echo $thisMonth_menuDate; ?></span>
              <small>※画像は過去の一例であり<br class="u-mobile">月によって異なります</small>
            </div>
          </a>
        </li>
        <?php
            }
          }
        ?>
    <?php endwhile; ?>
<?php endif; ?>
        <li class="p-monthly-menu__item p-monthly-menu__item--bottom">
          <a href="">
            <div class="p-monthly-menu__head">
              <strong>今月の栄養価表</strong>
              <small>は</small><br class="u-mobile">
              <span>こちら</span>
            </div>
            <div class="p-monthly-menu__label-item">
              <span class="p-monthly-menu__label">2024年6月</span>
              <small>※画像は過去の一例であり<br class="u-mobile">月によって異なります</small>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="p-menu__box">
    <h2 class="p-menu__title c-common-title">
      <span>バックナンバー</span>
    </h2>
    <div class="p-menu__monthly p-menu-monthly">
      <ul class="p-monthly-menu__lists">
        <li class="p-monthly-menu__list">
          <div class="p-monthly-menu__date">2023年12月</div>
          <div class="p-monthly-menu__links">
            <a href="" class="p-monthly-menu__link p-monthly-menu__link--red">献立表</a>
            <a href="" class="p-monthly-menu__link p-monthly-menu__link--blue">栄養価表</a>
          </div>
        </li>
        <li class="p-monthly-menu__list">
          <div class="p-monthly-menu__date">2023年12月</div>
          <div class="p-monthly-menu__links">
            <a href="" class="p-monthly-menu__link p-monthly-menu__link--red">献立表</a>
            <a href="" class="p-monthly-menu__link p-monthly-menu__link--blue">栄養価表</a>
          </div>
        </li>
        <li class="p-monthly-menu__list">
          <div class="p-monthly-menu__date">2023年12月</div>
          <div class="p-monthly-menu__links">
            <a href="" class="p-monthly-menu__link p-monthly-menu__link--red">献立表</a>
            <a href="" class="p-monthly-menu__link p-monthly-menu__link--blue">栄養価表</a>
          </div>
        </li>
        <li class="p-monthly-menu__list">
          <div class="p-monthly-menu__date">2023年12月</div>
          <div class="p-monthly-menu__links">
            <a href="" class="p-monthly-menu__link p-monthly-menu__link--red">献立表</a>
            <a href="" class="p-monthly-menu__link p-monthly-menu__link--blue">栄養価表</a>
          </div>
        </li>
      </ul>
    </div>
  </div>


        </div>
      </div>
    </div>

  </main>
<?php get_footer(); ?>