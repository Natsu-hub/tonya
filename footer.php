<footer class="p-footer">
    <div class="p-footer__inner">
        <div class="p-footer__container">
            <div class="p-footer__btn-labels">
                <div class="p-footer__btn-label">
                    <a class="p-footer__btn-link p-footer__btn-link--order" href="<?php echo USE_URL; ?>">
                        <div class="p-footer__btn-text">
                            <span>how to order</span>
                            <p>ご注文のしかた</p>
                        </div>
                    </a>
                </div>
                <div class="p-footer__btn-label">
                    <a class="p-footer__btn-link p-footer__btn-link--qa" href="<?php echo FAQ_URL; ?>">
                        <div class="p-footer__btn-text">
                            <span>Question and Answer</span>
                            <p>よくあるご質問</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="p-footer__items">
                <div class="p-footer__items-box">
                    <div class="p-footer__info">
                        <div class="p-footer__company-info">
                            <?php if ( is_front_page() ) : ?>
                            <picture class="p-footer__logo-img">
                                <a href="#body">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-white.png" alt="問屋町食堂" width="103" height="90" data-alt-src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-logo-black.png">
                                </a>
                            </picture>
                            <?php else : ?>
                            <picture class="p-footer__logo-img">
                                <a href="<?php echo HOME_URL; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-white.png" alt="問屋町食堂" width="103" height="90" data-alt-src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-logo-black.png">
                                </a>
                            </picture>
                            <?php endif; ?>
                            <div class="p-footer__company-text">
                                <address class="p-footer__address">〒370-0006 群馬県高崎市問屋町4-7-1</address>
                                <p class="p-footer__tel">
                                    <a href="tel:027-388-0811">tel: 027-388-0811</a>/
                                    <a href="tel:027-388-0812">fax: 027-388-0812</a>
                                </p>
                            </div>
                        </div>
                        <div class="p-footer__links">
                            <div class="p-footer__sns">
                                <a href="https://www.instagram.com/saporuto1101?igsh=Nno1MmI0bHBld252&utm_source=qr" target="_blank" rel="noopener noreferrer">
                                    <picture class="p-footer__sns-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_instagram.svg" alt="インスタグラム" width="29" height="29" loading="lazy">
                                    </picture>
                                </a>
                                <a href="https://twitter.com/saporuto2023" target="_blank" rel="noopener noreferrer">
                                    <picture class="p-footer__sns-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_x.svg" alt="エックス" width="29" height="29" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                            <div class="p-footer__page-links">
                                <a href="https://saporuto.com" target="_blank" rel="noopener noreferrer">運営会社</a>
                                <a href="https://saporuto.com/privacy-policy/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>
                            </div>
                        </div>
                    </div>
                    <nav class="p-footer__nav">
                        <ul class="p-footer__nav-items">
                            <li class="p-footer__nav-item">
                                <a href="<?php echo MENU_URL; ?>">お弁当メニュー</a>
                            </li>
                            <li class="p-footer__nav-item">
                                <a href="<?php echo MONTHLY_URL; ?>">今月の献立</a>
                            </li>
                            <li class="p-footer__nav-item">
                                <a href="<?php echo USE_URL; ?>">ご注文のしかた</a>
                            </li>
                            <li class="p-footer__nav-item">
                                <a href="<?php echo FAQ_URL; ?>">よくあるご質問</a>
                            </li>
                            <li class="p-footer__nav-item">
                                <a href="<?php echo GROUP_URL; ?>">高齢者施設向けサービス</a>
                            </li>
                            <li class="p-footer__nav-item">
                                <a href="https://saporuto.com/contact/" target="_blank" rel="noopener noreferrer">お問い合わせ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="p-footer__contact-info">
                    <p class="p-footer__contact-head">ご注文・お問合せ用電話ダイヤルはこちら</p>
                    <div class="p-footer__contact-btn">
                        <a class="p-footer__contact-link" href="tel:027-388-0811">
                            <p class="p-footer__contact-tel">027-388-0811</p>
                            <p class="p-footer__contact-time">対応時間9:00-17:00 <br class="u-desktop">
                                定休日：土日祝日/年末年始</p>
                        </a>
                    </div>
                    <div class="p-footer__contact-text">
                        食材発注の関係上、ご利用開始までに2週間のお時間を頂いております。<br>
                        年末年始、ゴールデンウィーク、お盆休みの期間は注文の締め切りが早まる場合があります。
                    </div>
                </div>
            </div>
        </div>
    </div>
    <small class="p-footer__copy-right">&copy; <?php echo date('Y'); ?>. saporuto</small>
</footer>
<?php wp_footer()?>
</body>

</html>