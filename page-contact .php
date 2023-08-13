<?php
/*
Template Name: Contact Page
*/
?>


<?php get_header(); ?>

    <!-- 下層ページのメインビュー -->

    <div class="p-sub-mv">
      <div class="p-sub-mv__title">
        <div class="c-section-header c-section-header--white">
          <h1 class="c-section-header__engtitle">contact</h1>
          <div class="c-section-header__jatitle c-section-header--white">お問い合わせ</div>
        </div>
      </div>
    </div>

    <!-- パンクず -->
    <div class="c-breadcrumb">
      <div class="l-inner">
        <div>HOME>CONTACT</div>
      </div>
    </div>

    <div class="l-page-contact p-page-contact">
      <div class="p-page-contact__inner l-inner">
        <div class="p-page-contact__content p-form">
          <div class="p-contact__contents">
            <div class="p-contact__text-block">
              <p class="p-contact__text">
                Webサイトの制作のご依頼やお見積りなど、<br class="u-mobile">お気軽にご相談ください。
              </p>
            <div class="p-page__content p-form">
              <form action="" method="post" id="">
                <dl class="p-form__item">
                    <dt>お問い合わせ種別<span><sup>*</sup>必須</span>
                    </dt>
                    <dd class="p-form__radio">
                      <label><input type="radio" name="target" value="ラジオボタン" required/><span>お仕事の相談</span></label>
                      <label><input type="radio" name="target" value="ラジオボタン2" /><span>お見積りの相談</span></label>
                      <label><input type="radio" name="target" value="ラジオボタン2" /><span>採用について</span></label>
                      <label><input type="radio" name="target" value="ラジオボタン2" /><span>その他</span></label>
                    </dd>
                  <dl>
                    <dt>
                      お名前<span><sup>*</sup>必須</span>
                    </dt>
                    <dd>
                      <input type="text" name="company" value="" />
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                     会社名
                    </dt>
                    <dd>
                      <input type="text" name="company" value="" />
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      メールアドレス<span><sup>*</sup>必須</span>
                    </dt>
                    <dd>
                      <input type="email" name="mail_address" value="" class="validate[]" required/>
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      電話番号<span class="p-form__tel-info">（半角数字ハイフンなし）</span>
                    </dt>
                    <dd>
                      <input type="tel" name="mail_address" value="" class="validate[]" required/>
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      お問合せ内容<span><sup>*</sup>必須</span>
                    </dt>
                    <dd>
                      <textarea name="contents"></textarea>
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      CodeUpsを何でお知りになりましたか？<span><sup>*</sup>必須</span>
                    </dt>
                    <dd>
                      <select name="hoge">
                        <option value="">選択してください</option>
                        <option value="option_1">Twitter</option>
                        <option value="option_2">口コミ</option>
                      </select>
                    </dd>
                  </dl>
                </dl>
              <div class="p-form__button">
                <input type="button" class="" value="送信する" />
              </div>
            </form>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>


<?php get_footer(); ?>