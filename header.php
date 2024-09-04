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
            <?php if ( is_front_page() ) : ?>
            <h1 class="p-header__logo">
                <a href="#body">
                    <picture class="p-header__logo-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-logo.svg" alt="問屋町食堂" width="160" height="25">
                    </picture>
                </a>
            </h1>
            <?php else : ?>
            <div class="p-header__logo">
                <a href="<?php echo HOME_URL; ?>">
                    <picture class="p-header__logo-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-logo.svg" alt="問屋町食堂" width="160" height="25">
                    </picture>
                </a>
            </div>
            <?php endif; ?>
            <div class="p-header__nav-lists">
                <nav class="p-header__nav">
                    <ul class="p-header__nav-items">
                        <li class="p-header__nav-item">
                            <a href="<?php echo MENU_URL; ?>">お弁当メニュー</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a href="<?php echo MONTHLY_URL; ?>">今月の献立</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a href="<?php echo USE_URL; ?>">ご注文のしかた</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a href="<?php echo FAQ_URL; ?>">よくあるご質問</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a href="https://saporuto.com/contact/" target="_blank" rel="noopener noreferrer">お問い合わせ</a>
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
                        <a class="p-header__drawer-link" href="<?php echo HOME_URL; ?>">サイトトップ</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo MENU_URL; ?>">お弁当メニュー</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo MONTHLY_URL; ?>">今月の献立</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo USE_URL; ?>">ご注文のしかた</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="<?php echo FAQ_URL; ?>">よくあるご質問</a>
                    </li>
                    <li class="p-header__drawer-item">
                        <a class="p-header__drawer-link" href="https://saporuto.com/contact/" target="_blank" rel="noopener noreferrer">お問い合わせ</a>
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
                <a href="tel:027-388-0811">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fixed-tel-img.svg" alt="電話をかける" width="48" height="645">
                    <span class="u-mobile">027-388-0811</span>
                </a>
            </div>
        </div>
        <div class="p-fixed-tel__info u-mobile">対応時間9:00-17:00 ｜ 定休日：土日祝日/年末年始
        </div>
    </div>