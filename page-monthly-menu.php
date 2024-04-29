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
  <li class="p-monthly-menu__item p-monthly-menu__item--top">
    <?php
    if (get_post_meta($post->ID, 'monthly_menu', true)) {
      $up_files_menus = get_post_meta($post->ID, 'monthly_menu', false);
      foreach ($up_files_menus as $up_file) {
        $up_file01 = wp_get_attachment_url($up_file);
      }
    }
    ?>
    <a href="<?php echo $up_file01; ?>" target="_blank" rel="noopener"> <!-- 新しいタブでPDFを開く -->
      <div class="p-monthly-menu__head">
        <strong>今月の献立</strong>
        <small>は</small><br class="u-mobile">
        <span>こちら</span>
      </div>
      <div class="p-monthly-menu__label-item">
        <span class="p-monthly-menu__label"><?php echo CFS()->get('this_month'); ?></span>
        <small>※画像は過去の一例であり<br class="u-mobile">月によって異なります</small>
      </div>
    </a>
  </li>
  <li class="p-monthly-menu__item p-monthly-menu__item--bottom">
    <?php
    if (get_post_meta($post->ID, 'monthly_table', true)) {
      $up_files_tables = get_post_meta($post->ID, 'monthly_table', false);
      foreach ($up_files_tables as $up_file) {
        $up_file02 = wp_get_attachment_url($up_file);
      }
    }
    ?>
    <a href="<?php echo $up_file02; ?>" target="_blank" rel="noopener">
      <div class="p-monthly-menu__head">
        <strong>今月の栄養価表</strong>
        <small>は</small><br class="u-mobile">
        <span>こちら</span>
      </div>
      <div class="p-monthly-menu__label-item">
        <span class="p-monthly-menu__label"><?php echo CFS()->get('this_month'); ?></span>
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
  <?php
  // 過去の発行内容を取得
  $back_issues = CFS()->get('back_number');
  // 各過去の発行内容について処理を行う
  foreach ($back_issues as $issue) :
  ?>
    <li class="p-monthly-menu__list">
      <div class="p-monthly-menu__date"><?php echo $issue['back_month']; ?></div>
      <div class="p-monthly-menu__links">
        <?php if (!empty($issue['back_menu'])) : ?>
          <a href="<?php echo $issue['back_menu']; ?>" target="_blank" rel="noopener" class="p-monthly-menu__link p-monthly-menu__link--red">献立表</a>
        <?php endif; ?>
        <?php if (!empty($issue['back_table'])) : ?>
          <a href="<?php echo $issue['back_table']; ?>" target="_blank" rel="noopener" class="p-monthly-menu__link p-monthly-menu__link--blue">栄養価表</a>
        <?php endif; ?>
      </div>
    </li>
  <?php endforeach; ?>
</ul>

    </div>
  </div>


        </div>
      </div>
    </div>

  </main>
<?php get_footer(); ?>