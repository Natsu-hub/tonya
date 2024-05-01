<?php 
/**
* Template Name: よくあるご質問
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
<!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">Question and Answer</span>
          <span class="c-below-mv__main-title">よくあるご質問</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/below-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/below-mv.png" alt="よくあるご質問" width="1440" height="400">
        </picture>
        <div class="c-below-mv__deco"><span></span>
      </div>
      </div>
    </section>

<!-- p-faq -->
<section class="p-faq">
  <div class="p-faq__inner l-inner--small">
    <div class="p-faq__body">
      <ul class="p-faq__lists">
        <li class="p-faq__list">
          <div class="p-faq__head">
            <div class="p-faq__head-character">Q.</div>
            <h2 class="p-faq__head-text">配達エリアはどこですか？</h2>
          </div>
          <div class="p-faq__answer">
            <div class="p-faq__number">
            <picture class="p-faq__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-faq__character">A.</span>
            </div>
            <div class="p-faq__answer-text">配達エリアは高崎市の新高尾、塚沢、東部、浜尻、中川、六郷、大類、京ヶ島、中居、城東の小学校地域となりますが、これ以外の地域でも対象となるケースもありますので、その場合は直接お問い合わせください。</div>
          </div>
        </li>
        <li class="p-faq__list">
          <div class="p-faq__head">
            <div class="p-faq__head-character">Q.</div>
            <h2 class="p-faq__head-text">どんなこだわりがありますか？</h2>
          </div>
          <div class="p-faq__answer">
            <div class="p-faq__number">
            <picture class="p-faq__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-faq__character">A.</span>
            </div>
            <div class="p-faq__answer-text">・骨抜きの魚の使用等、やわらかさ・食べやすさ・大きさに配慮<br>・自然な食感と家庭的な味を毎食日替りで提供することで、食材の偏りがなく栄養バランスも良くなります。<br>・持病をお持ちの方向けのメニューは朝食もご用意しております</div>
          </div>
        </li>
        <li class="p-faq__list">
          <div class="p-faq__head">
            <div class="p-faq__head-character">Q.</div>
            <h2 class="p-faq__head-text">定期の申込みは可能ですか？</h2>
          </div>
          <div class="p-faq__answer">
            <div class="p-faq__number">
            <picture class="p-faq__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-faq__character">A.</span>
            </div>
            <h2 class="p-faq__answer-text">はい。当日分だけのご注文も可能ですが、ほとんどの方は定期的な申込み（１か月、３か月、６ヵ月、１年）です。電話番号へおかけいただくか、<a href="https://saporuto.com/contact/" target="_blank" rel="noopener noreferrer">こちらのフォーム</a>へお気軽にご連絡ください。</h2>
          </div>
        </li>
        <li class="p-faq__list">
          <div class="p-faq__head">
            <div class="p-faq__head-character">Q.</div>
            <h2 class="p-faq__head-text">安否確認を兼ねて注文したいのですが。</h2>
          </div>
          <div class="p-faq__answer">
            <div class="p-faq__number">
            <picture class="p-faq__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-faq__character">A.</span>
            </div>
            <div class="p-faq__answer-text">お弁当を配達の際にもしもの場合は、緊急連絡先（ご家族様
やご担当ケアマネージャー様など）へご連絡させていただきますので、お気軽にご相談ください。</div>
          </div>
        </li>
        <li class="p-faq__list">
          <div class="p-faq__head">
            <div class="p-faq__head-character">Q.</div>
            <h2 class="p-faq__head-text">製品に対する質問があり、メールでも申込みはできますか？</h2>
          </div>
          <div class="p-faq__answer">
            <div class="p-faq__number">
            <picture class="p-faq__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-faq__character">A.</span>
            </div>
            <div class="p-faq__answer-text">誠に申し訳ございませんが、お弁当のご注文は電話でのみ承っております。ご注文はメールで受け付けておりませんが、ご意見・ご要望やお問合せは<a href="https://saporuto.com/contact/" target="_blank" rel="noopener noreferrer">こちらのフォーム</a>へお願いいたします。</div>
          </div>
        </li>
        <li class="p-faq__list">
          <div class="p-faq__head">
            <div class="p-faq__head-character">Q.</div>
            <h2 class="p-faq__head-text">支払い方法は何がありますか？</h2>
          </div>
          <div class="p-faq__answer">
            <div class="p-faq__number">
            <picture class="p-faq__bg-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco-sp.webp" type="image/webp" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/faq-deco.png" alt="" width="133" height="133" loading="lazy">
            </picture>
            <span class="p-faq__character">A.</span>
            </div>
            <div class="p-faq__answer-text">月末締めで現金か銀行振り込み、口座振替での支払いとなります。</div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

  </main>
<?php get_footer(); ?>