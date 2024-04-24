<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initiascale=1.0" />
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
                            <a class="js-textHover" href="<?php echo BLOG_URL; ?>">お弁当メニュー</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a class="js-textHover" href="<?php echo HOME_URL; ?>">今日の献立</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a class="js-textHover" href="<?php echo WORKS_URL; ?>">ご注文のしかた</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a class="js-textHover" href="<?php echo BLOG_URL; ?>">よくあるご質問</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a class="js-textHover" href="<?php echo HOME_URL; ?>">お問い合わせ</a>
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
                    <li class="p-header__drawer-item js-nav-list">
                        <a class="p-header__drawer-link" href="<?php echo BLOG_URL; ?>">お弁当メニュー</a>
                    </li>
                    <li class="p-header__drawer-item js-nav-list">
                        <a class="p-header__drawer-link" href="<?php echo WORKS_URL; ?>">今日の献立</a>
                    </li>
                    <li class="p-header__drawer-item js-nav-list">
                        <a class="p-header__drawer-link" href="<?php echo CONTACT_URL; ?>">ご注文のしかた</a>
                    </li>
                    <li class="p-header__drawer-item js-nav-list">
                        <a class="p-header__drawer-link" href="<?php echo BLOG_URL; ?>">よくあるご質問</a>
                    </li>
                    <li class="p-header__drawer-item js-nav-list">
                        <a class="p-header__drawer-link" href="<?php echo WORKS_URL; ?>">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>