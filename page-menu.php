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
        <?php $fieldMenus = CFS()->get('bento_menu'); ?>
<?php if (is_array($fieldMenus)): ?>
    <!-- 繰り返し -->
    <?php foreach ($fieldMenus as $fieldMenu): ?>
        <div class="p-menu__box">
            <h2 class="p-menu__title c-common-title">
                <span><?php echo $fieldMenu['bento_category']; ?></span>
            </h2>
            <div class="p-menu__items">
                <?php $fieldTypes = $fieldMenu['bento_type']; ?>
                <?php if (is_array($fieldTypes)): ?>
                  <!-- 繰り返し -->
                  <?php foreach ($fieldTypes as $fieldType): ?>
                    <div class="p-menu__item">
                            <div class="p-menu__img">
                                <img src="<?php echo $fieldType['bento_image']; ?>" alt="<?php echo $fieldType['bento_name']; ?>" width="400" height="442" loading="lazy">
                            </div>
                            <div class="p-menu__body">
                                <h3 class="p-menu__head"><?php echo $fieldType['bento_name']; ?></h3>
                                <div class="p-menu__content"><?php echo $fieldType['bento_description']; ?></div>
                                <div class="p-menu__price">
                                    <?php $priceRows = $fieldType['price_row']; ?>
                                    <?php if (is_array($priceRows)): ?>
                                      <!-- 繰り返し -->
                                      <?php foreach ($priceRows as $priceRow): ?>
                                        <dl class="p-menu__price-item">
                                                <dt class="p-menu__price-rice"><?php echo $priceRow['rice_bread']; ?></dt>
                                                <dd class="p-menu__price-info">
                                                    <small class="p-menu__price-yen">¥</small>
                                                    <p class="p-menu__price-number"><?php echo $priceRow['bento_price']; ?></p>
                                                    <small class="p-menu__price-tax">税込</small>
                                                    <?php if( !empty($priceRow['bento_price_kara']) ): ?>
                                                        <!-- チェックがある場合の内容 -->
                                                        <p class="p-menu__price-number">~</p>
                                                    <?php endif; ?>
                                                </dd>
                                              </dl>
                                              <?php endforeach; ?>
                                              <!-- / 繰り返し -->
                                    <?php endif; ?>
                                </div>
                                <small class="p-menu__text">※画像は内容の一例であり日によって異なります</small>
                            </div>
                          </div>
                          <?php endforeach; ?>
                          <!-- / 繰り返し -->
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- / 繰り返し -->
<?php endif; ?>

        </div>
      </div>
    </div>

<!-- p-bottom-service -->
<?php get_template_part('template/bottom-service'); ?>

  </main>
<?php get_footer(); ?>