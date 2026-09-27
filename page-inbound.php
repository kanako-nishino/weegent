<?php get_header(); ?>

<main>
    <section class="fv fv--inbound">
      <div class="fv__background" aria-hidden="true"></div>

      <div class="fv__inner inner">
        <div class="fv__content">
          <h1 class="fv__title">無駄にしていい<br class="sp">リードは、ない</h1>
          <p class="fv__lead">
            問い合わせ・資料請求・ウェビナー参加。<br>
            せっかく獲得したリードを、対応の遅れや優先順位の判断ミスで取りこぼしていませんか。<br>
            Weegentが貴社のSDRチームとなり、全リードに最速で・最適な対応をします。
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

    <?php get_template_part('template-parts/client-logos', null, ['modifier' => 'inbound']); ?>

    <section class="problem-section problem-section--inbound section-space section-wave">
      <div class="inner inner--content">
        <h2 class="problem-section__title section-head__title">
          インバウンドリードの対応で、<br>
          こんな課題は<br class="sp">ありませんか？
        </h2>

        <ul class="problem-list">
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-inbound/problem-response-speed.png" alt="リードの対応スピードと商談化率の課題を表す図">
              </div>
              <h3 class="problem-card__title">
                リードは来ているが、<br>
                対応が遅れて<br class="sp">商談化率が低い
              </h3>
            </article>
          </li>
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-inbound/problem-dual-role.png" alt="営業がフィールドセールスと兼務でリード対応が後回しになる課題を表す図">
              </div>
              <h3 class="problem-card__title">
                営業がフィールドセールスと兼務で、<br>リード対応が後回しになる
              </h3>
            </article>
          </li>
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-inbound/problem-sdr-setup.png" alt="SDR組織の構築における採用とオペレーション構築の課題を表す図">
              </div>
              <h3 class="problem-card__title">
                SDR組織を構築したいが、<br>
                採用もオペレーション構築も<br>追いつかない
              </h3>
            </article>
          </li>
        </ul>
      </div>
    </section>

    <section class="support-section support-section--inbound resource-background section-space" id="service">
      <div class="inner inner--content">
        <div class="support-section__introduction">
          <h2 class="support-section__title">
            <span class="support-section__eyebrow">Weegentは</span>
            貴社のリードを<br class="sp">「商談」に変えます
          </h2>
          <p class="support-section__description">
            リードは発生しているのに、対応が後回しになって鮮度が落ちる。<br>
            対応しても温度感の見極めが甘く、FSに渡したアポが案件化しない。<br>
            Weegentはリードソースごとに対応の優先順位とヒアリング基準を設計し、FSが商談しやすいアポだけを作ります。
          </p>
        </div>

    <?php get_template_part('template-parts/cta-resources'); ?>
      </div>
    </section>

    <section class="strength-section strength-section--inbound section-space section-wave" id="strength">
      <div class="inner">
        <h2 class="strength-section__title section-head__title">
          <span>Weegentの</span>
          SDRの強み
        </h2>

        <ol class="strength-list">
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-inbound/strength-quick-response.jpg" alt="電話をしながら対応する営業担当者">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 01</p>
                <h3 class="strength-card__title">問い合わせが来たら、すぐ動く。</h3>
                <p class="strength-card__description">
                  問い合わせ直後の温度感が高いうちに連絡します。後回しにして機会を逃さないよう、初動の速さを徹底します。担当者には、短時間で相手の状況を確認し、次のアクションを決められる人を置きます。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-inbound/strength-hearing.jpg" alt="デスクで打ち合わせを行う営業担当者">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 02</p>
                <h3 class="strength-card__title">問い合わせの背景まで聞く。</h3>
                <p class="strength-card__description">
                  日程を取って営業へ渡すだけで終わらせません。何を見て問い合わせたのか、何に困っているのか、いつ頃検討しているのかまで確認します。営業担当が商談に入った時点で、相手の状況が分かる状態にして渡します。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-inbound/strength-data-tracking.jpg" alt="資料を指しながらコールデータを確認する様子">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 03</p>
                <h3 class="strength-card__title">商談になった後も、数字を見る。</h3>
                <p class="strength-card__description">
                  問い合わせ件数やアポ数だけでは判断しません。どの問い合わせが商談になり、その後どうなったのかまで確認します。結果が悪ければコール内容を見直し、マーケティング側にも顧客の反応を返します。
                </p>
              </div>
            </article>
          </li>
        </ol>
      </div>
    </section>

    <section class="resource-section resource-section--inbound resource-background resource-background--secondary" aria-label="資料請求・お問い合わせ">
      <div class="inner inner--content">
    <?php get_template_part('template-parts/cta-resources', null, ['standalone' => true]); ?>
      </div>
    </section>

    <?php get_template_part('template-parts/case-list', null, ['page' => 'inbound', 'modifier' => 'inbound']); ?>

    <?php get_template_part('template-parts/video-section', null, ['page' => 'inbound', 'modifier' => 'inbound']); ?>

    <?php get_template_part('template-parts/document-slider', null, ['page' => 'inbound', 'modifier' => 'inbound']); ?>

    <section class="member-section member-section--inbound section-space section-wave" id="company">
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

    <section class="flow-section flow-section--inbound section-space section-wave" id="flow">
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
                現在のリード対応の状況や課題をお聞かせいただければ、ご提案の準備に入ります。
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
                貴社のリードソース・対応フロー・商談化率・FS体制を詳しくお伺いします。<br>
                CRM（Salesforce・HubSpot等）の活用状況も確認し、最適なSDR体制を設計します。
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
                ヒアリング内容をもとに、リード対応のオペレーション設計・体制・スケジュール・費用をご提案します。<br>
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
                最短1週間でSDRチームの稼働を開始できます。
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
                SABCランクで管理されたメンバーが、貴社のリードに5分以内で対応開始。<br>
                リードソース別の商談化率を可視化し、定例ミーティングで改善し続けます。
              </p>
            </article>
          </li>
        </ol>
      </div>
    </section>

    <section class="faq-section faq-section--inbound section-space section-wave" id="faq">
      <div class="inner inner--content faq-section__inner">
        <div class="faq-section__heading">
          <h2 class="section-head__title">よくある質問</h2>
        </div>

        <ul class="faq-list">
          <li class="faq-list__item faq-item is-open">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="true" aria-controls="faq-answer-01">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>リードの対応ルールは柔軟に設計できますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-01">
              <p><span class="faq-item__initial">A.</span>はい。問い合わせ・資料請求・ウェビナー参加・イベントリードなど、リードソース別に対応の優先順位・トークスクリプト・ヒアリング項目を設計します。貴社のFSチームが求める商談の基準に合わせてカスタマイズ可能です。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-02">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>自社のFSチームとの連携はどうなりますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-02" hidden>
              <p><span class="faq-item__initial">A.</span>商談前に、ヒアリング内容や顧客の反応を整理して共有します。商談後のフィードバックも受け取り、次のコールや追客にすぐ反映します。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-03">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>アポは取れるが案件化しない、という課題にも対応できますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-03" hidden>
              <p><span class="faq-item__initial">A.</span>対応できます。アポ数だけを追わず、決裁者・課題・導入時期まで確認し、案件化につなげます。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-04">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>既存リードの掘り起こしにも使えますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-04" hidden>
              <p><span class="faq-item__initial">A.</span>使えます。過去接点や失注理由を見ながら、今なら動く可能性がある企業を拾います。つながらなければ別部署や別担当者まで探して追います。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-05">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>リードの優先順位はどう判断していますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-05" hidden>
              <p><span class="faq-item__initial">A.</span>企業属性だけではなく、過去接点・反応・検討時期・決裁者との距離まで見て優先順位をつけます。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
