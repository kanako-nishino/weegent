<?php get_header(); ?>

<main>
    <section class="fv">
      <div class="fv__background" aria-hidden="true"></div>

      <div class="fv__inner inner">
        <div class="fv__content">
          <h1 class="fv__title">開拓できない<br class="sp">企業は、ない</h1>
          <p class="fv__lead">
            組織 × 人 × データで、<br class="sp">
            貴社の営業成果にコミットする。<br>
            インサイドセールス・営業代行のWeegentです。
          </p>

          <?php get_template_part('template-parts/achievement-badge'); ?>

          <div class="fv__actions">
            <div class="fv__action" id="document">
              <p class="fv__action-label">支援内容や導入事例が分かる</p>
              <a class="c-button c-button--white" href="<?php echo esc_url(home_url('/document-download/')); ?>">
                <span>資料3点セットを見る <small>無料</small></span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
              </a>
            </div>
            <div class="fv__action" id="trial">
              <p class="fv__action-label">まずは300コール〜</p>
              <a class="c-button c-button--brown" href="<?php echo esc_url(home_url('/contact/')); ?>">
                <span>テストコールを依頼してみる</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/client-logos'); ?>

    <?php get_template_part('template-parts/case-list', null, ['page' => 'top']); ?>

    <?php get_template_part('template-parts/video-section', null, ['page' => 'top']); ?>

    <section class="outbound-section section-space section-wave" id="service">
      <div class="inner inner--content">
        <div class="outbound-overview">
          <h2 class="outbound-overview__title section-head__title">
            私たち自身も、<br>
            <span>アウトバウンドで</span><br>
            顧客を開拓してきました。
          </h2>

          <ul class="outbound-overview__achievements achievement-list" aria-label="アウトバウンド営業の支援実績">
            <li class="achievement-list__item">
              <img class="achievement-list__icon" src="<?php echo get_template_directory_uri(); ?>/img/outbound/icon-companies.svg" alt="">
              <div class="achievement-list__content">
                <p class="achievement-list__value"><strong>100</strong>社以上</p>
                <p class="achievement-list__label">アウトバウンド営業の支援実績</p>
              </div>
            </li>
            <li class="achievement-list__item">
              <img class="achievement-list__icon" src="<?php echo get_template_directory_uri(); ?>/img/outbound/icon-listed-company.svg" alt="">
              <div class="achievement-list__content">
                <p class="achievement-list__value"><strong>48</strong>%</p>
                <p class="achievement-list__label">支援企業に占める上場企業の割合</p>
              </div>
            </li>
            <li class="achievement-list__item">
              <img class="achievement-list__icon" src="<?php echo get_template_directory_uri(); ?>/img/outbound/icon-contract.svg" alt="">
              <div class="achievement-list__content">
                <p class="achievement-list__value"><strong>97.4</strong>%</p>
                <p class="achievement-list__label">支援企業の契約継続率</p>
              </div>
            </li>
          </ul>

          <div class="outbound-overview__description">
            <p>
              Weegentは創業から3年、アウトバウンド営業のみで100社以上を支援してきました。<br>
              支援先はスタートアップから大手上場企業、外資系企業までさまざまです。
            </p>
            <p>
              自社の営業でもアウトバウンドを続けてきたからこそ、<br class="pc">
              現場で何が起きるのか、数字が悪いときにどこを変えるのかを知っています。
            </p>
          </div>

          <a class="outbound-overview__button c-button c-button--brown" href="#market-test">
            <span>同じ実行力を、貴社の営業に</span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
          </a>
        </div>

        <div class="market-test" id="market-test">
          <div class="market-test__information">
            <h3 class="market-test__title">
              いきなり本契約ではなく、<br class="pc">まずは<span class="market-test__emphasis"><span class="market-test__emphasis-character">3</span><span class="market-test__emphasis-character">0</span><span class="market-test__emphasis-character">0</span><span class="market-test__emphasis-character">コ</span><span class="market-test__emphasis-character">ー</span><span class="market-test__emphasis-character">ル</span></span>で市場反応を確認。
            </h3>
            <p class="market-test__description">
              新しい商材も、新しいターゲットも、実際に当ててみるまで反応は読めません。<br>
              本格的にリソースを投じる前に、ターゲット・訴求・商談可能性の手応えを掴む。<br>
              Weegentのテストコールは、そのためのテストセールス施策です。
            </p>
            <p class="market-test__note">※ 格安テレアポではありません。次の打ち手を決める「市場の手応えと改善材料」をお返しします。</p>
          </div>

          <div class="market-test__plan test-call-plan">
            <h3 class="test-call-plan__title"><strong>300</strong>コール</h3>
            <p class="test-call-plan__subtitle">市場検証プラン</p>
            <a class="test-call-plan__button c-button c-button--brown" href="<?php echo esc_url(home_url('/contact/')); ?>">
              <span>テストコール300に<br class="sp">ついて相談する</span>
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
            </a>
            <p class="test-call-plan__note">本契約は必須ではありません。検証結果を見て判断できます。</p>
          </div>
        </div>
      </div>
    </section>

    <section class="support-section resource-background section-space">
      <div class="inner inner--content">
        <div class="support-section__introduction">
          <h2 class="support-section__title">
            <span class="support-section__eyebrow">Weegentは</span>
            「売れる営業組織」を<br>
            貴社内に作り上げます
          </h2>
          <p class="support-section__description">
            営業代行の成果が安定しないのは、個人の力量に依存しているからです。<br>
            Weegentは証券会社出身の代表が設計した「組織 × 人 × データ」の仕組みで、<br class="pc">
            属人化しない営業体制を貴社の隣に作ります。
          </p>
        </div>

        <?php get_template_part('template-parts/cta-resources'); ?>
      </div>
    </section>

    <section class="problem-section section-space section-wave">
      <div class="inner inner--content">
        <h2 class="problem-section__title section-head__title">
          営業の新規開拓で、<br>
          こんな課題は<br class="sp">ありませんか？
        </h2>

        <ul class="problem-list">
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/problem/problem-appointment.png" alt="アポイント獲得と案件化の課題を表す図">
              </div>
              <h3 class="problem-card__title">
                アポは取れるが案件化しない。<br>
                品質の悪いアポイントにこりごり。
              </h3>
            </article>
          </li>
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/problem/problem-recruitment.png" alt="営業組織の採用と内製化の課題を表す図">
              </div>
              <h3 class="problem-card__title">
                営業組織を内製化したいが、<br>
                採用もノウハウも追いつかない。
              </h3>
            </article>
          </li>
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/problem/problem-quality.png" alt="営業代行会社の担当者品質の課題を表す図">
              </div>
              <h3 class="problem-card__title">
                代行会社を使ったが、<br>
                担当者の質にバラつきがあり<br>
                成果が安定しない。
              </h3>
            </article>
          </li>
        </ul>
      </div>
    </section>

    <section class="service-section section-wave" id="support-service">
      <div class="service-panel">
        <header class="service-heading">
          <p class="service-heading__eyebrow">Weegentの</p>
          <h2 class="service-heading__title section-head__title">主な支援内容</h2>
        </header>

        <ul class="primary-service-list">
          <li class="primary-service-list__item">
            <a class="primary-service-card" href="<?php echo esc_url(home_url('/inbound/')); ?>">
              <span class="primary-service-card__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-inbound.svg" alt="">
              </span>
              <div class="primary-service-card__body">
                <p class="primary-service-card__label">セールスの流儀</p>
                <h3 class="primary-service-card__title">インバウンド対応</h3>
              </div>
              <img class="primary-service-card__arrow" src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
            </a>
          </li>
          <li class="primary-service-list__item">
            <a class="primary-service-card" href="<?php echo esc_url(home_url('/outbound-enterprise/')); ?>">
              <span class="primary-service-card__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-enterprise.svg" alt="">
              </span>
              <div class="primary-service-card__body">
                <p class="primary-service-card__label">セールスの流儀</p>
                <h3 class="primary-service-card__title">エンタープライズ開拓</h3>
              </div>
              <img class="primary-service-card__arrow" src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
            </a>
          </li>
          <li class="primary-service-list__item">
            <a class="primary-service-card" href="<?php echo esc_url(home_url('/test-marketing/')); ?>">
              <span class="primary-service-card__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-test-marketing.svg" alt="">
              </span>
              <div class="primary-service-card__body">
                <p class="primary-service-card__label">セールスの流儀</p>
                <h3 class="primary-service-card__title">テストマーケティング</h3>
              </div>
              <img class="primary-service-card__arrow" src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
            </a>
          </li>
          <li class="primary-service-list__item">
            <a class="primary-service-card" href="<?php echo esc_url(home_url('/outbound-smb/')); ?>">
              <span class="primary-service-card__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-strategy.png" alt="">
              </span>
              <div class="primary-service-card__body">
                <p class="primary-service-card__label">セールスの流儀</p>
                <h3 class="primary-service-card__title">営業戦略／<br class="sp">組織立ち上げプラン</h3>
              </div>
              <img class="primary-service-card__arrow" src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
            </a>
          </li>
        </ul>

        <h3 class="available-service-title">その他、対応可能サービス</h3>
        <ul class="available-service-list">
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-inbound-lead.svg" alt=""></span>
              <span class="available-service-card__title">インバウンド<br>リード対応</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">マーケティング施策を通じて得たリードに対して適切にフォローアップします。 主にWebサイトからの問い合わせや資料請求、外部媒体、ブログ、SNS、メールキャンペーンなどのオンラインチャネルを通じて発生したリードへの対応を行います。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">Weegentのインバウンドリード対応の特徴</h4>
                <ul class="service-modal__list">
                  <li>リード発生時に即時対応（5分以内コール）</li>
                  <li>BANT条件に沿ったヒアリングシート作成により、有効商談率を担保</li>
                  <li>SFAへ詳細なデータ入力をし、属人性を排除</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>リード獲得はできているがスムーズに商談化を図れない</li>
                  <li>インバウンドリードの有効商談率が低い</li>
                  <li>一時的にリソースが不足している</li>
                </ul>
              </section>
            </template>
          </li>
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-jump-in-sales.svg" alt=""></span>
              <span class="available-service-card__title">飛び込み営業</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">法人、個人経営、個人宅、医療・福祉・介護施設などに飛び込みで営業を行います。<br>多くの営業代行会社が敬遠する施策ですが、弊社では得意領域です。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">Weegentの飛び込み営業の特徴</h4>
                <ul class="service-modal__list">
                  <li>金融機関で飛び込み営業経験3年以上かつトップセールスのメンバーが責任者を担当</li>
                  <li>全国（北海道〜沖縄まで）で飛び込みができるメンバーが在籍</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>実店舗型ビジネスにおける販路拡大に課題がある</li>
                  <li>エリアを拡張して飛び込み営業を行いたい</li>
                </ul>
              </section>
            </template>
          </li>
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-email-marketing.svg" alt=""></span>
              <span class="available-service-card__title">メール<br>マーケティング</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">潜在層の顧客に対して、プロダクト・サービスの情報、特典、ニュースレター、プロモーションキャンペーンなどを送信します。<br>ユーザー心理を理解して温度感を高めていくことが重要です。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">Weegentのメールマーケティングの特徴</h4>
                <ul class="service-modal__list">
                  <li>GAFA出身者がメールマーケのノウハウを活かして対応</li>
                  <li>貴社独自の内容にカスタマイズして本文作成〜効果検証まで一貫して実施</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>ABテストの効果検証ができていない</li>
                  <li>開封率/クリック率/反応率の数値が向上しない</li>
                  <li>どの時間帯に送るのがいいのか分からない</li>
                </ul>
              </section>
            </template>
          </li>
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-contact-form.svg" alt=""></span>
              <span class="available-service-card__title">問い合わせフォーム<br class="br-sp">営業</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">企業の「問い合わせ」ページやフォームからセールス文を送ります（1000件から承ります）。<br>
                他施策と比べて低コストかつ短時間で多くの対象企業にアプローチし、効率的な営業成果を追求します。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">Weegentの問い合わせフォーム営業の特徴</h4>
                <ul class="service-modal__list">
                  <li>反応率の高い時間帯、曜日、顧客属性を集計・分析し、データに基づきアプローチ精度を向上</li>
                  <li>ABテストを繰り返し、最適な文章を作成</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>どんな文章構成でフォーム営業をしたらよいか分からない</li>
                  <li>どの時間帯、曜日で行うのが相応しいかノウハウがない</li>
                </ul>
              </section>
            </template>
          </li>
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-sales-material.svg" alt=""></span>
              <span class="available-service-card__title">営業資料作成</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">提案書、プレゼンテーション資料、製品カタログなど、営業活動の効率化や成約率の向上に寄与する資料を作成します。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">Weegentの営業資料作成の特徴</h4>
                <ul class="service-modal__list">
                  <li>元外資系企業やリクルート、金融機関などのメンバーが「売上」に直結する資料をゼロベースから作成</li>
                  <li>構成は「営業のプロ」が、デザインは「プロのデザイナー」が担当し、論理・視覚の両面で最適な資料を作成</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>一番刺さりやすいキーワードが特定できておらず、訴求ポイントが掴めてない</li>
                  <li>無駄な情報が入ってしまい、結果として分かりにくい資料を使っている</li>
                </ul>
              </section>
            </template>
          </li>
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-sales-support.svg" alt=""></span>
              <span class="available-service-card__title">商談同行・代行</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">貴社の営業担当者として実際に商談を行います。<br>
                商談に同席し、進行に対するフィードバックを行うことも可能です。<br>
                リソース面の課題解消にも、商談品質向上にも活用いただけます。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">Weegentの商談同行・代行の特徴</h4>
                <ul class="service-modal__list">
                  <li>いずれも1商談から対応可能</li>
                  <li>社内教育に活用いただきやすいよう、商談録画を提供</li>
                  <li>他業種や他商材の営業を通して得た知見を貴社商材に還元</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>リード獲得は出来ているが、成約率が低い、もしくはリードタイムが長い</li>
                  <li>想定している単価より、低い単価で成約してしまっている</li>
                  <li>商談対応できるメンバーが少ない</li>
                </ul>
              </section>
            </template>
          </li>
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-consulting.svg" alt=""></span>
              <span class="available-service-card__title">営業コンサルティング</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">現状の貴社営業体制をベースに、課題に応じたソリューションを提供します。<br>
                営業戦略の立案や営業プロセスの見直し、営業チームのトレーニングなど幅広いケイパビリティを揃えています。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">Weegentの営業コンサルティングの特徴</h4>
                <ul class="service-modal__list">
                  <li>弊社の役員が直接訪問</li>
                  <li>営業上の課題を整理し、課題に応じて最適な打ち手で支援</li>
                  <li>仕組み化まで実施し、継続的に売上が伸びる体制を構築</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>なにが課題かも分かっていない</li>
                  <li>社内に営業経験者がいない</li>
                  <li>抜本的な営業改革をコストを抑えて行いたい</li>
                </ul>
              </section>
            </template>
          </li>
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-customer-success.svg" alt=""></span>
              <span class="available-service-card__title">CS代行<br>（カスタマーサクセス）</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">顧客満足度の向上や解約防止を目指します。<br>
                顧客との関係構築や利用促進、課題解決、継続利用の促進などを行います。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">WeegentのCS代行の特徴</h4>
                <ul class="service-modal__list">
                  <li>様々なバックグラウンドを持ったメンバーが貴社のコアメンバーとして実務を担当</li>
                  <li>各種ツールを活用してコストを抑えてご支援</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>解約率が高い</li>
                  <li>アップセル提案ができていない</li>
                </ul>
              </section>
            </template>
          </li>
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-sfa.svg" alt=""></span>
              <span class="available-service-card__title">SFAの導入支援・<br>活用支援</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">企業の営業プロセスを分析して必要な要件を定義し、適切なSFAを選定・カスタマイズします。<br>
                営業チームや管理者向けのトレーニングを行い、SFAを効果的に活用できる体制構築も支援します。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">WeegentのSFA導入・活用支援の特徴</h4>
                <ul class="service-modal__list">
                  <li>セールスフォースをはじめとした、各サービスのパートナーライセンスを取得</li>
                  <li>証券会社や外資系企業での活用事例をもとに「現場の声を反映した仕組み」を取り入れ</li>
                  <li>既存の顧客データや営業情報のシステム移行までサポート</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>導入しているが社員が入力してくれない</li>
                  <li>どの支援ツールを導入すれば良いか分からない</li>
                  <li>導入したものの機能が多すぎて使いこなせない</li>
                </ul>
              </section>
            </template>
          </li>
          <li class="available-service-list__item">
            <button class="available-service-card js-service-modal-open" type="button" aria-haspopup="dialog">
              <span class="available-service-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/service/service-outbound-call.svg" alt=""></span>
              <span class="available-service-card__title">アウトバウンドコール</span>
              <img class="available-service-card__plus" src="<?php echo get_template_directory_uri(); ?>/img/common/plus-navy.svg" alt="">
            </button>
            <template class="js-service-modal-source">
              <p class="service-modal__description">見込み客や既存顧客に加え、全く接点のない企業に対しても積極的に電話をかけ、ビジネスチャンスを創出する営業手法です。新規顧客の開拓はもちろん、既存顧客へのフォローアップや契約更新の提案、さらにクロスセルやアップセルの機会を提供します。ダイレクトにコミュニケーションを図り、顧客のニーズや課題を的確に把握して最適な提案を行います。</p>
              <section class="service-modal__section">
                <h4 class="service-modal__section-title">Weegentのアウトバウンドコールの特徴</h4>
                <ul class="service-modal__list">
                  <li>ターゲット選定〜実働支援（トークスクリプトなどの納品物有り）までを行います。また、PMFとして潜在顧客の要望、ニーズをまとめてプロダクトやサービスの改善にも活かせるセールスデータを提供いたします。</li>
                </ul>
              </section>
              <section class="service-modal__recommend">
                <h4 class="service-modal__section-title">このようなお悩みにオススメ</h4>
                <ul class="service-modal__list">
                  <li>無駄なコールが増えていると感じる</li>
                  <li>リストがすぐに枯渇してしまう</li>
                  <li>トークスクリプトの抜本的改善を図りたい</li>
                  <li>切り返しが少なく取りこぼしが多い</li>
                </ul>
              </section>
            </template>
          </li>
        </ul>

      </div>
    </section>

    <section class="strength-section section-space section-wave" id="strength">
      <div class="inner">
        <h2 class="strength-section__title section-head__title">
          <span>Weegentの</span>
          強み
        </h2>

        <ol class="strength-list">
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/strength-people.jpg" alt="ノートパソコンを見ながら業務を行う営業担当者">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 01</p>
                <h3 class="strength-card__title">人を選び、鍛え、入れ替える。</h3>
                <p class="strength-card__description">
                  毎月SABCランクで全メンバーを評価し、パフォーマンスが基準に満たない場合は入れ替えます。残ったメンバーには、証券会社時代のノウハウをベースにした独自の教育を実施。入れ替えても品質が落ちない体制を維持しています。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/strength-organization.jpg" alt="営業成果について会議を行うチーム">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 02</p>
                <h3 class="strength-card__title">組織で結果にコミットする。</h3>
                <p class="strength-card__description">
                  結果が出ない時、担当者任せにはしません。IS経験を持つマネージャーが自ら電話し、リカバリーします。さらに週1回、役員を含む全社ミーティングで改善策を議論。一人の担当者に依存しない、組織としての営業力で成果を出します。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/strength-data.jpg" alt="営業データを確認しながら改善策を検討する様子">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 03</p>
                <h3 class="strength-card__title">データで向き合い、本音で踏み込む。</h3>
                <p class="strength-card__description">
                  コールデータをお客様に開示し、ファネル分析に基づいた改善策を毎回の定例でご提案します。成果が出ない時に市場環境のせいにはしません。関係性にリスクがあっても、課題の本質をお伝えします。だから継続率90％以上。
                </p>
              </div>
            </article>
          </li>
        </ol>
      </div>
    </section>

    <?php get_template_part('template-parts/document-slider', null, ['page' => 'top']); ?>

    <section class="member-section section-space section-wave" id="company">
      <div class="inner inner--content">
        <h2 class="member-section__title section-head__title">メンバー</h2>

        <ul class="member-list">
          <li class="member-list__item">
            <article class="member-card">
              <div class="member-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/member/yuta-matsushita.jpg" alt="代表取締役 松下雄太">
              </div>
              <div class="member-card__content">
                <header class="member-card__identity">
                  <h3 class="member-card__name">松下 雄太</h3>
                  <p class="member-card__name-en" lang="en">YUTA Matsushita</p>
                </header>
                <p class="member-card__profile">
                  新卒で証券会社に入社。法人顧客の新規開拓、エンプラ向けウェルスコンサルティング業務に従事し、全社1位など数々の表彰を受賞。最年少でプライベートバンキング部門の立ち上げに参画。<br>
                  その後アマゾンジャパンへ転職しマーケティングを経験。主に大手ベンダーのECコンサルティング業務に従事。<br>
                  2023年に株式会社Weegentを創業し、代表取締役に就任。
                </p>
              </div>
            </article>
          </li>
          <li class="member-list__item">
            <article class="member-card">
              <div class="member-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/member/naoto-oyama.jpg" alt="大山尚人">
              </div>
              <div class="member-card__content">
                <header class="member-card__identity">
                  <h3 class="member-card__name">大山 尚人</h3>
                  <p class="member-card__name-en" lang="en">NAOTO Oyama</p>
                </header>
                <p class="member-card__profile">
                  新卒で証券会社に入社。個人・法人顧客の新規開拓、証券コンサルティング業務に従事し、史上最年少で昇級。数々の社内表彰を受賞。2023年に代表の松下と共に株式会社Weegentの立ち上げに参画。<br>
                  IT/SaaS・システム・医療業界の営業組織の立上げに携わり、営業戦略立案やKPI設計から実働支援までを得意とする。
                </p>
              </div>
            </article>
          </li>
        </ul>
      </div>
    </section>

    <section class="comparison-section section-space section-wave">
      <div class="inner inner--content">
        <h2 class="section-head__title">競合との違い</h2>

        <div class="comparison-table-scroll" tabindex="0" aria-label="競合比較表。横方向にスクロールできます">
          <table class="comparison-table">
            <caption>Weegentと内製・大手代行会社・格安代行会社の比較</caption>
            <colgroup>
              <col class="comparison-table__heading-column">
              <col class="comparison-table__service-column comparison-table__service-column--featured">
              <col class="comparison-table__service-column">
              <col class="comparison-table__service-column">
              <col class="comparison-table__service-column">
            </colgroup>
            <thead>
              <tr>
                <th aria-hidden="true"></th>
                <th class="comparison-table__featured" scope="col"><img class="comparison-table__logo" src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="Weegent"></th>
                <th scope="col">内製</th>
                <th scope="col">大手代行会社</th>
                <th scope="col">格安代行会社</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">立ち上げ速度</th>
                <td class="comparison-table__featured">
                  <span class="comparison-table__mark" aria-label="非常に優れている">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/circle-camel.svg" alt="">
                  </span>
                  <p>最短1週間でテストコール開始。オンボーディングの仕組みが整っており、初週から成果を出す体制。</p>
                </td>
                <td>
                  <span class="comparison-table__mark" aria-label="課題がある">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/triangle-beige.svg" alt="">
                  </span>
                  <p>採用・教育〜立ち上げまで3〜6か月。採用自体が難航するケースも多い。</p>
                </td>
                <td>
                  <span class="comparison-table__mark" aria-label="優れている">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/circle-beige.svg" alt="">
                  </span>
                  <p>体制は整っているが社内調整・契約に2〜4週間。最低2名〜3か月等の条件あり。</p>
                </td>
                <td>
                  <span class="comparison-table__mark" aria-label="非常に優れている">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/circle-beige.svg" alt="">
                  </span>
                  <p>即日〜1週間で稼働可能。ただし品質の担保がない状態でのスタート。</p>
                </td>
              </tr>
              <tr>
                <th scope="row">品質管理</th>
                <td class="comparison-table__featured">
                  <span class="comparison-table__mark" aria-label="非常に優れている">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/circle-camel.svg" alt="">
                  </span>
                  <p>毎月SABCランクで全メンバーを評価・入替。IS経験者だけがマネージャーに。結果が出ない時はマネージャーが自ら電話してリカバリー。</p>
                </td>
                <td>
                  <span class="comparison-table__mark" aria-label="課題がある">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/triangle-beige.svg" alt="">
                  </span>
                  <p>評価制度があっても営業代行の文脈では機能しにくい。辞められたら採用し直し。</p>
                </td>
                <td>
                  <span class="comparison-table__mark" aria-label="優れている">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/circle-beige.svg" alt="">
                  </span>
                  <p>評価制度はあるがPDCAが遅い。入替にも社内調整が必要。役員が入って改善を議論する文化はない。</p>
                </td>
                <td>
                  <span class="comparison-table__mark" aria-label="適していない">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/x-beige.svg" alt="">
                  </span>
                  <p>品質評価・入替の仕組みがない。担当者がダメでも放置。成果が出なければ契約終了。</p>
                </td>
              </tr>
              <tr>
                <th scope="row">支援幅</th>
                <td class="comparison-table__featured">
                  <span class="comparison-table__mark" aria-label="非常に優れている">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/circle-camel.svg" alt="">
                  </span>
                  <p>テレアポ・フォーム営業・手紙・飛び込み・セミナー支援・データに基づいて最適な施策を提案。エンプラ開拓にも対応。</p>
                </td>
                <td>
                  <span class="comparison-table__mark" aria-label="優れている">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/circle-beige.svg" alt="">
                  </span>
                  <p>自社で手を広げられるが、各施策のノウハウ習得に時間がかかる。</p>
                </td>
                <td>
                  <span class="comparison-table__mark" aria-label="課題がある">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/triangle-beige.svg" alt="">
                  </span>
                  <p>インサイドセールスに特化している会社が多い。飛び込み・手紙等に対応できないケースあり。</p>
                </td>
                <td>
                  <span class="comparison-table__mark" aria-label="適していない">
                    <img class="comparison-table__mark-image" src="<?php echo get_template_directory_uri(); ?>/img/common/x-beige.svg" alt="">
                  </span>
                  <p>架電のみに特化。他の施策は対応範囲外であることがほとんど。</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="resource-section resource-background resource-background--secondary" aria-label="資料請求・お問い合わせ">
      <div class="inner inner--content">
        <?php get_template_part('template-parts/cta-resources', null, ['standalone' => true]); ?>
      </div>
    </section>

    <section class="flow-section section-space section-wave" id="flow">
      <div class="inner">
        <h2 class="section-head__title">ご利用の流れ</h2>

        <ol class="flow-list">
          <li class="flow-list__item">
            <article class="flow-card">
              <header class="flow-card__header">
                <span class="flow-card__number">01</span>
                <h3 class="flow-card__title">お問い合わせ</h3>
              </header>
              <p class="flow-card__description">
                フォームまたはお電話でお気軽にご相談ください。<br>
                開拓したい先やお悩みをお聞かせいただければ、ご提案の準備に入ります。
              </p>
            </article>
          </li>
          <li class="flow-list__item">
            <article class="flow-card">
              <header class="flow-card__header">
                <span class="flow-card__number">02</span>
                <h3 class="flow-card__title">ヒアリング</h3>
              </header>
              <p class="flow-card__description">
                貴社の事業内容・ターゲット・営業課題を詳しくお伺いします。<br>
                過去の営業実績やリスト状況も確認し、最適な体制を設計します。
              </p>
            </article>
          </li>
          <li class="flow-list__item">
            <article class="flow-card">
              <header class="flow-card__header">
                <span class="flow-card__number">03</span>
                <h3 class="flow-card__title">ご提案</h3>
              </header>
              <p class="flow-card__description">
                ヒアリング内容をもとに、アプローチ戦略・体制・スケジュール・費用をご提案します。<br>
                テストコール300件からのスモールスタートも可能です。
              </p>
            </article>
          </li>
          <li class="flow-list__item">
            <article class="flow-card">
              <header class="flow-card__header">
                <span class="flow-card__number">04</span>
                <h3 class="flow-card__title">ご契約</h3>
              </header>
              <p class="flow-card__description">
                ご提案内容に合意いただけましたら契約締結。<br>
                最短1週間で稼働を開始できます。
              </p>
            </article>
          </li>
          <li class="flow-list__item">
            <article class="flow-card">
              <header class="flow-card__header">
                <span class="flow-card__number">05</span>
                <h3 class="flow-card__title">サービス提供</h3>
              </header>
              <p class="flow-card__description">
                SABCランクで管理されたメンバーが稼働開始。<br>
                コールデータの開示と定例ミーティングで、成果に向き合い続けます。
              </p>
            </article>
          </li>
        </ol>
      </div>
    </section>

    <section class="faq-section section-space section-wave" id="faq">
      <div class="inner inner--content faq-section__inner">
        <div class="faq-section__heading">
          <h2 class="section-head__title">よくある質問</h2>
        </div>

        <ul class="faq-list">
          <li class="faq-list__item faq-item is-open">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="true" aria-controls="faq-answer-01">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>最低契約期間はありますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-01">
              <p><span class="faq-item__initial">A.</span>テストコール300件からのスモールスタートが可能です。まず成果を見ていただき、継続をご判断いただけます。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-02">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>どのような業界に対応していますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-02" hidden>
              <p><span class="faq-item__initial">A.</span>IT・SaaS・製造・建設・人材など幅広く対応しています。商材理解から入り、業界ごとに刺さる部署・役職・訴求を丁寧に設計したうえで、支援を開始します。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-03">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>担当者の質にバラつきはありませんか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-03" hidden>
              <p><span class="faq-item__initial">A.</span>毎月SABCランクで評価し、基準に満たなければ入れ替えます。数字が悪い場合は責任者も現場に入り、品質を改善します。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-04">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>成果が出なかった場合はどうなりますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-04" hidden>
              <p><span class="faq-item__initial">A.</span>次の定例まで待ちません。数字が悪ければその日のうちに、リスト・トーク・担当者を見直し、必要に応じて行動量も増やします。また、成果保証プランを選択いただくことも可能です。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-05">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>営業活動の内容は共有してもらえますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-05" hidden>
              <p><span class="faq-item__initial">A.</span>コール内容や顧客の反応まで共有します。アポにならなかった理由も掘り下げ、次に何を変えるかまで定例でお伝えします。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
