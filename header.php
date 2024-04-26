<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />

    <!-- icon -->
    <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/icon-192x192.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <?php wp_head(); ?>
</head>

<body class="js-fadeBodyIn" id="body" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- <body> -->
    <header class="p-header l-header js-header">
        <div class="p-header__inner">
            <div class="p-header__nav-lists">
                <nav class="p-header__nav">
                    <ul class="p-header__nav-items">
                        <li class="p-header__nav-item">
                            <a href="<?php echo BLOG_URL; ?>">お弁当メニュー</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a href="<?php echo HOME_URL; ?>">今日の献立</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a href="<?php echo WORKS_URL; ?>">ご注文のしかた</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a href="<?php echo BLOG_URL; ?>">よくあるご質問</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a href="<?php echo HOME_URL; ?>">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <button class="p-header__hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="p-header__drawer js-drawer">
            <nav class="p-header__drawer-nav">
                <ul class="p-header__drawer-items">
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo BLOG_URL; ?>">サイトトップ</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo BLOG_URL; ?>">お弁当メニュー</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo WORKS_URL; ?>">今日の献立</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo CONTACT_URL; ?>">ご注文のしかた</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo BLOG_URL; ?>">よくあるご質問</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo WORKS_URL; ?>">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- p-fixed-tel -->
<div class="p-fixed-tel-wrapper js-fixed-tel-wrapper">
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
</div>