<!-- 
<footer class="p-footer">
    <div class="p-footer__inner">
      <div class="p-footer__items">
        <div class="p-footer__info">
          <div class="p-footer__company-info">
          <?php if ( is_front_page() ) : ?>
                <div class="p-footer__company">
                <a href="#body">一般社団法人 サポルト
                </a>
            </div>
            <?php else : ?>
                <div class="p-footer__company">
                    <a href="<?php echo HOME_URL; ?>">一般社団法人 サポルト
                    </a>
                </div>
            <?php endif; ?>
            <div class="p-footer__company-text">
              <address class="p-footer__address">〒370-0006 群馬県高崎市問屋町４－７－１</address>
              <p class="p-footer__tel">
                <a href="tel:+027-388-0811">tel: 027-388-0811</a>/
                <a href="tel:+027-388-0812">fax: 027-388-0812</a>
              </p>
              <p class="p-footer__mail">
                <a href="mailto:mail: info@saporuto.com">mail: info@saporuto.com</a>
              </p>
            </div>
          </div>
          <div class="p-footer__links">
            <div class="p-footer__sns">
              <a href="http://" target="_blank" rel="noopener noreferrer">
                <picture class="p-footer__sns-img">
                  <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_instagram.webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_instagram.png" alt="インスタグラム" width="29" height="29" loading="lazy">
                </picture>
              </a>
              <a href="http://" target="_blank" rel="noopener noreferrer">
              <picture class="p-footer__sns-img">
                  <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_x.webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_x.png" alt="エックス" width="29" height="29" loading="lazy">
                </picture>
              </a>
              <a href="http://" target="_blank" rel="noopener noreferrer">
              <picture class="p-footer__sns-img">
                  <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_facebook.webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_facebook.png" alt="フェイスブック" width="29" height="29" loading="lazy">
                </picture>
              </a>
            </div>
            <div class="p-footer__page-links">
              <a href="<?php echo RECRUIT_URL; ?>">採用情報</a>
              <a href="<?php echo PRIVACY_URL; ?>">プライバシーポリシー</a>
            </div>
          </div>
        </div>
          <nav class="p-footer__nav">
            <ul class="p-footer__nav-items">
              <li class="p-footer__nav-item">
                <a href="<?php echo BLOG_URL; ?>">Blog</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="<?php echo HOME_URL; ?>#service">Service</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="<?php echo HOME_URL; ?>#company">Company</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="<?php echo WORKS_URL; ?>">Order</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="<?php echo CONTACT_URL; ?>">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="p-footer__btns">
            <a class="p-footer__btn" href="https://addfuture.saporuto.com" target="_blank" rel="noopener noreferrer"><p class="p-footer__btn-text">
              <span>就労継続支援事業所</span>アドフューチャー</p>
            </a>
            <a class="p-footer__btn" href="https://tonyashokudo.saporuto.com" target="_blank" rel="noopener noreferrer"><p class="p-footer__btn-text">問屋町食堂</p></a>
            <a class="p-footer__btn" href="<?php echo WORKS_URL; ?>"><p class="p-footer__btn-text">作業受託企業様の募集</p></a>
          </div>
      </div>
    </div>
    <small class="p-footer__copy-right">&copy; <?php echo date('Y'); ?>. saporuto</small>
  </footer> -->
  <?php wp_footer()?>
</body>
</html>