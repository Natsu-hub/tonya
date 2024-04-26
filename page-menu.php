<?php 
/**
* Template Name: お弁当メニュー
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
<!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">Menu</span>
          <span class="c-below-mv__main-title">お弁当メニュー</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/below-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/below-mv.png" alt="お弁当メニュー" width="1440" height="400">
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
    <span>普通食のお弁当</span>
  </h2>
  <div class="p-menu__items">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
          $menu_items = SCF::get('menu-category'); // 繰り返しフィールドの値を取得する
          if (!empty($menu_items)) { // 繰り返しフィールドに値がある場合に処理を行う
            foreach ($menu_items as $item) { // 繰り返し構文で各値を順次取り出す
              $menu_type = esc_html($item['menu-type']); // menu_typeをエスケープ処理して変数に代入する
              $menu_description = esc_html($item['menu-description']); // menu_descriptionをエスケープ処理して変数に代入する
              $rice_price = esc_html($item['rice-price']); // rice_priceをエスケープ処理して変数に代入する
              $norice_price = esc_html($item['norice-price']); // norice_priceをエスケープ処理して変数に代入する
              $menu_image = wp_get_attachment_image_src($item['menu-img'], 'full'); // menu_imageを取得して変数に代入する
            $menu_image_url = $menu_image ? esc_url($menu_image[0]) : get_template_directory_uri() . '/assets/images/common/no-img.png'; // menu_imageのURLをエスケープ処理して変数に代入する、存在しない場合はデフォルト画像
            ?>
              <div class="p-menu__item">
                <div class="p-menu__img">
                  <img src="<?php echo $menu_image_url; ?>" alt="<?php echo $menu_type; ?>" width="400" height="442" loading="lazy">
                </div>
                <div class="p-menu__body">
                  <h3 class="p-menu__head"><?php echo $menu_type; ?></h3>
                  <div class="p-menu__content"><?php echo $menu_description; ?></div>
                  <div class="p-menu__price">
                  <?php if (!empty($rice_price)) : ?>
                    <dl class="p-menu__price-item">
                      <dt class="p-menu__price-rice">ごはんあり</dt>
                      <dd class="p-menu__price-info">
                        <small class="p-menu__price-yen">¥</small>
                        <p class="p-menu__price-number"><?php echo $rice_price; ?></p>
                        <small class="p-menu__price-tax">税込</small>
                      </dd>
                    </dl>
                  <?php endif; ?>
                  <?php if (!empty($norice_price)) : ?>
                    <dl class="p-menu__price-item">
                      <dt class="p-menu__price-rice">ごはんなし</dt>
                      <dd class="p-menu__price-info">
                        <small class="p-menu__price-yen">¥</small>
                        <p class="p-menu__price-number"><?php echo $norice_price; ?></p>
                        <small class="p-menu__price-tax">税込</small>
                      </dd>
                    </dl>
                  <?php endif; ?>
                  </div>
                  <small class="p-menu__text">※画像は内容の一例であり日によって異なります</small>
                </div>
              </div>
              <?php
            }
          }
        ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<div class="p-menu__box">
  <h2 class="p-menu__title c-common-title">
    <span>医療食のお弁当</span>
  </h2>
  <div class="p-menu__items">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
          $menu_items02 = SCF::get('menu-category02'); // 繰り返しフィールドの値を取得する
          if (!empty($menu_items02)) { // 繰り返しフィールドに値がある場合に処理を行う
            foreach ($menu_items02 as $item02) { // 繰り返し構文で各値を順次取り出す
              $menu_type02 = esc_html($item02['menu-type02']); // menu_typeをエスケープ処理して変数に代入する
              $menu_description02 = esc_html($item02['menu-description02']); // menu_descriptionをエスケープ処理して変数に代入する
              $rice_price02 = esc_html($item02['rice-price02']); // rice_priceをエスケープ処理して変数に代入する
              $norice_price02 = esc_html($item02['norice-price02']); // norice_priceをエスケープ処理して変数に代入する
              $menu_image02 = wp_get_attachment_image_src($item02['menu-img02'], 'full'); // menu_imageを取得して変数に代入する
            $menu_image_url02 = $menu_image02 ? esc_url($menu_image02[0]) : get_template_directory_uri() . '/assets/images/common/no-img.png'; // menu_imageのURLをエスケープ処理して変数に代入する、存在しない場合はデフォルト画像
            ?>
              <div class="p-menu__item">
                <div class="p-menu__img">
                  <img src="<?php echo $menu_image_url02; ?>" alt="<?php echo $menu_type02; ?>" width="400" height="442" loading="lazy">
                </div>
                <div class="p-menu__body">
                  <h3 class="p-menu__head"><?php echo $menu_type02; ?></h3>
                  <div class="p-menu__content"><?php echo $menu_description02; ?></div>
                  <div class="p-menu__price">
                  <?php if (!empty($rice_price02)) : ?>
                    <dl class="p-menu__price-item">
                      <dt class="p-menu__price-rice">ごはんあり</dt>
                      <dd class="p-menu__price-info">
                        <small class="p-menu__price-yen">¥</small>
                        <p class="p-menu__price-number"><?php echo $rice_price02; ?></p>
                        <small class="p-menu__price-tax">税込</small>
                      </dd>
                    </dl>
                  <?php endif; ?>
                  <?php if (!empty($norice_price02)) : ?>
                    <dl class="p-menu__price-item">
                      <dt class="p-menu__price-rice">ごはんなし</dt>
                      <dd class="p-menu__price-info">
                        <small class="p-menu__price-yen">¥</small>
                        <p class="p-menu__price-number"><?php echo $norice_price02; ?></p>
                        <small class="p-menu__price-tax">税込</small>
                      </dd>
                    </dl>
                  <?php endif; ?>
                  </div>
                  <small class="p-menu__text">※画像は内容の一例であり日によって異なります</small>
                </div>
              </div>
              <?php
            }
          }
        ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<div class="p-menu__box">
  <h2 class="p-menu__title c-common-title">
    <span>その他メニュー</span>
  </h2>
  <div class="p-menu__items">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
          $menu_items03 = SCF::get('menu-category03'); // 繰り返しフィールドの値を取得する
          if (!empty($menu_items03)) { // 繰り返しフィールドに値がある場合に処理を行う
            foreach ($menu_items03 as $item03) { // 繰り返し構文で各値を順次取り出す
              $menu_type03 = esc_html($item03['menu-type03']); // menu_typeをエスケープ処理して変数に代入する
              $menu_description03 = esc_html($item03['menu-description03']); // menu_descriptionをエスケープ処理して変数に代入する
              $rice_price03 = esc_html($item03['rice-price03']); // rice_priceをエスケープ処理して変数に代入する
              $norice_price03 = esc_html($item03['norice-price03']); // norice_priceをエスケープ処理して変数に代入する
              $bread_price03 = esc_html($item03['bread-price03']); // bread_priceをエスケープ処理して変数に代入する
              $menu_image03 = wp_get_attachment_image_src($item03['menu-img03'], 'full'); // menu_imageを取得して変数に代入する
            $menu_image_url03 = $menu_image03 ? esc_url($menu_image03[0]) : get_template_directory_uri() . '/assets/images/common/no-img.png'; // menu_imageのURLをエスケープ処理して変数に代入する、存在しない場合はデフォルト画像
            ?>
              <div class="p-menu__item">
                <div class="p-menu__img">
                  <img src="<?php echo $menu_image_url03; ?>" alt="<?php echo $menu_type03; ?>" width="400" height="442" loading="lazy">
                </div>
                <div class="p-menu__body">
                  <h3 class="p-menu__head"><?php echo $menu_type03; ?></h3>
                  <div class="p-menu__content"><?php echo $menu_description03; ?></div>
                  <div class="p-menu__price">
                  <?php if (!empty($rice_price03)) : ?>
                      <dl class="p-menu__price-item">
                        <dt class="p-menu__price-rice">ごはんあり</dt>
                        <dd class="p-menu__price-info">
                          <small class="p-menu__price-yen">¥</small>
                          <p class="p-menu__price-number"><?php echo $rice_price03; ?></p>
                          <small class="p-menu__price-tax">税込</small>
                          <p class="p-menu__price-number">~</p>
                        </dd>
                      </dl>
                    <?php endif; ?>

                    <?php if (!empty($norice_price03)) : ?>
                      <dl class="p-menu__price-item">
                        <dt class="p-menu__price-rice">ごはんなし</dt>
                        <dd class="p-menu__price-info">
                          <small class="p-menu__price-yen">¥</small>
                          <p class="p-menu__price-number"><?php echo $norice_price03; ?></p>
                          <small class="p-menu__price-tax">税込</small>
                          <p class="p-menu__price-number">~</p>
                        </dd>
                      </dl>
                    <?php endif; ?>

                    <?php if (!empty($bread_price03)) : ?>
                      <dl class="p-menu__price-item">
                        <dt class="p-menu__price-rice">パン単品</dt>
                        <dd class="p-menu__price-info">
                          <small class="p-menu__price-yen">¥</small>
                          <p class="p-menu__price-number"><?php echo $bread_price03; ?></p>
                          <small class="p-menu__price-tax">税込</small>
                        </dd>
                      </dl>
                    <?php endif; ?>
                  </div>
                  <small class="p-menu__text">※画像は内容の一例であり日によって異なります</small>
                </div>
              </div>
              <?php
            }
          }
        ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
        </div>
      </div>
    </div>

<!-- p-bottom-service -->
<?php get_template_part('template/bottom-service'); ?>

  </main>
<?php get_footer(); ?>