<?php 
/**
* Template Name: お問い合わせ（完了）
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
  <!-- c-below-mv -->
<section class="c-below-mv js-mv">
      <div class="c-below-mv__inner">
        <h1 class="c-below-mv__title">
            <span class="c-below-mv__sub-title">Contact</span>
          <span class="c-below-mv__main-title">総合お問い合わせフォーム</span>
        </h1>
        <picture class="c-below-mv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/contact-mv_sp.webp" type="image/webp" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/contact-mv.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/contact-mv.png" alt="総合お問い合わせフォーム" width="1440" height="400">
        </picture>
      </div>
    </section>


<!-- thanks -->
<div class="p-thanks l-section">
  <div class="p-thanks__inner l-inner--small">
    <div class="p-thanks__lead">
        <p>お問い合わせありがとうございました。<br>
お問い合わせいただいた内容につきましては、1週間以内に担当よりご連絡いたします。</p>
<p>※お名前が実名でない場合（匿名や仮名など）は、ご返信致しかねます。あらかじめご了承ください。<br>
※お問い合わせメールを送信後１週間経過しても返信がこない場合については、セキュリティの関係で迷惑メールとされてしまっている可能性や、お問い合わせメールのアドレス登録したアドレスに間違いがある可能性があるため、大変お手数ですが直接電話でご連絡いただきますようお願い申し上げます。</p> 
    </div>
    <div class="p-thanks__btn c-btn-below l-btn-below"><a class="c-btn-black" href="<?php echo HOME_URL; ?>">
            <p class="c-btn-black__text c-btn-black__text--prev">TOPへ戻る</p>
            <picture class="c-btn-black__img c-btn-black__img--prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/black_arrow.svg" alt="TOPへ戻る" width="202" height="10" loading="lazy">
            </picture>
          </a>
        </div>
  </div>
</div>
  </main>
<?php get_footer(); ?>