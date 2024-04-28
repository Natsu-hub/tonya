
<footer class="p-footer">
    <div class="p-footer__inner">
    <div class="p-footer__container">
      <div class="p-footer__btn-labels">
        <div class="p-footer__btn-label">
          <a class="p-footer__btn-link p-footer__btn-link--order" href="">
            <div class="p-footer__btn-text">
              <span>how to order</span>
              <p>ご注文のしかた</p>
            </div>
          </a>
        </div>
        <div class="p-footer__btn-label">
          <a class="p-footer__btn-link p-footer__btn-link--qa" href="">
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
              <address class="p-footer__address">〒370-0006 群馬県高崎市問屋町４－７－１</address>
              <p class="p-footer__tel">
                <a href="tel:+027-388-0811">tel: 027-388-0811</a>/
                <a href="tel:+027-388-0812">fax: 027-388-0812</a>
              </p>
            </div>
          </div>
          <div class="p-footer__links">
            <div class="p-footer__sns">
              <a href="http://" target="_blank" rel="noopener noreferrer">
                <picture class="p-footer__sns-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_instagram.svg" alt="インスタグラム" width="29" height="29" loading="lazy">
                </picture>
              </a>
            </div>
            <div class="p-footer__page-links">
              <a href="">運営会社</a>
              <a href="">プライバシーポリシー</a>
            </div>
          </div>
        </div>
          <nav class="p-footer__nav">
            <ul class="p-footer__nav-items">
              <li class="p-footer__nav-item">
                <a href="<?php echo BLOG_URL; ?>">お弁当メニュー</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="<?php echo BLOG_URL; ?>">今月の献立</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="<?php echo HOME_URL; ?>">ご注文のしかた</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="<?php echo HOME_URL; ?>">よくあるご質問</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="<?php echo WORKS_URL; ?>">高齢者施設向けサービス</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="<?php echo CONTACT_URL; ?>">お問い合わせ</a>
              </li>
            </ul>
          </nav>
        </div>
          <div class="p-footer__contact-info">
            <p class="p-footer__contact-head">ご注文・お問合せ用電話ダイヤルはこちら</p>
            <div class="p-footer__contact-btn">
              <a class="p-footer__contact-link"  href="tel:+027-388-0811">
                <p class="p-footer__contact-tel">027-388-0811</p>
                <p class="p-footer__contact-time">対応時間9:00-17:00  <br class="u-desktop">
定休日：土日祝日/年末年始<br>
当日朝10時まで受付</p>
              </a>
            </div>
            <div class="p-footer__contact-text">ご好評いただいた場合は、当日の締め切り時間前に完売することもございます。<br>締め切り時間前はお電話が混み合いますので、前日以前、またはお早目の時間にご注文をいただきますようお願いいたします。</div>
          </div>
      </div>
    </div>
    </div>
    <small class="p-footer__copy-right">&copy; <?php echo date('Y'); ?>. saporuto</small>
  </footer>
  <?php wp_footer()?>
</body>
</html>