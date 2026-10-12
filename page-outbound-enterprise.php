<?php get_header(); ?>

<main>
    <section class="fv fv--out-bound-enterprise">
      <div class="fv__background" aria-hidden="true"></div>

      <div class="fv__inner inner">
        <div class="fv__content">
          <h1 class="fv__title">開拓できない<br class="sp">大手企業は、ない</h1>
          <p class="fv__lead">
            IR・決算・事業構造を読み、仮説を持ってキーマンに当たる。<br>
            リスト消化型のABM/BDRとは違います。
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

    <?php get_template_part('template-parts/client-logos', null, ['modifier' => 'out-bound-enterprise']); ?>

    <section class="problem-section problem-section--out-bound-enterprise section-space section-wave">
      <div class="inner inner--content">
        <h2 class="problem-section__title section-head__title">
          大手企業開拓で、<br>
          こんな課題は<br class="sp">ありませんか？
        </h2>

        <ul class="problem-list">
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-enterprise/problem-keyperson.png" alt="キーマンにたどり着けず受付で止まってしまう課題を表す図">
              </div>
              <h3 class="problem-card__title">
                大手を攻めたいが、<br>
                キーマンにたどり着けない。<br>
                受付で止まり続けている
              </h3>
            </article>
          </li>
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-enterprise/problem-agency.png" alt="中小向けのテレアポと同じやり方で成果が出なかった課題を表す図">
              </div>
              <h3 class="problem-card__title">
                代行会社を使ったが、<br>
                中小向けのテレアポと<br>
                同じやり方で成果が出なかった
              </h3>
            </article>
          </li>
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-enterprise/problem-inhouse.png" alt="社内にエンプラ開拓の経験者がいない課題を表す図">
              </div>
              <h3 class="problem-card__title">
                社内にエンプラ開拓の<br>経験者がいない。<br>
                誰に・どう当たればいいか分からない
              </h3>
            </article>
          </li>
        </ul>
      </div>
    </section>

    <section class="support-section support-section--out-bound-enterprise resource-background section-space" id="service">
      <div class="inner inner--content">
        <div class="support-section__introduction">
          <h2 class="support-section__title">
            <span class="support-section__eyebrow">Weegentは</span>
            大手企業のキーマンとの商談を作ります
          </h2>
          <p class="support-section__description">
            大手企業の開拓は、リストを上から順にかけても成果は出ません。<br>
            Weegentは架電の前にIR・決算・事業構造を読み解き、<br class="pc">
            「この企業のこの部署が、今この課題を持っているはず」という仮説を立ててからアプローチします。<br>
            証券会社出身の代表が叩き込んだ企業分析力で、キーマンとの商談を作ります。
          </p>
        </div>

    <?php get_template_part('template-parts/cta-resources'); ?>
      </div>
    </section>

    <section class="strength-section strength-section--out-bound-enterprise section-space section-wave" id="strength">
      <div class="inner">
        <h2 class="strength-section__title section-head__title">
          <span>Weegentの</span>
          強み
        </h2>

        <ol class="strength-list">
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-enterprise/strength-research.jpg" alt="電話をしながらノートパソコンで企業情報を確認する営業担当者">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 01</p>
                <h3 class="strength-card__title">企業を調べてから、電話する。</h3>
                <p class="strength-card__description">
                  大手企業への営業では、数をかけるだけでは担当者までたどり着けません。IRや決算資料を読み、事業内容や今後力を入れる領域を確認したうえで、狙う部署や役職を決めます。証券会社出身のメンバーが多いWeegentだからこそ、企業を調べるところから営業を始めます。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-enterprise/strength-multiple-contacts.jpg" alt="複数人で営業戦略について会議を行うチーム">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 02</p>
                <h3 class="strength-card__title">担当者一人で終わらせない。</h3>
                <p class="strength-card__description">
                  大手企業は、担当者と話せただけでは案件が進まないことがあります。誰が決裁に関わるのか、他にどの部署が関係するのかを確認しながら、接点を広げます。一度断られた企業もそのままにせず、時期や相手を変えて追いかけます。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-enterprise/strength-manager-support.jpg" alt="オフィスのロビーで話すマネージャーとメンバー">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 03</p>
                <h3 class="strength-card__title">難しい案件ほど、担当者任せにしない。</h3>
                <p class="strength-card__description">
                  商談が取れない、狙った部署につながらない。そんな時は担当者だけで抱えません。マネージャーや他案件の責任者も入り、コール内容や数字を見ながら次の打ち手を考えます。必要なら責任者自身が電話します。
                </p>
              </div>
            </article>
          </li>
        </ol>
      </div>
    </section>

    <section class="resource-section resource-section--out-bound-enterprise resource-background resource-background--secondary" aria-label="資料請求・お問い合わせ">
      <div class="inner inner--content">
    <?php get_template_part('template-parts/cta-resources', null, ['standalone' => true]); ?>
      </div>
    </section>

    <?php get_template_part('template-parts/case-list', null, ['page' => 'outbound-enterprise', 'modifier' => 'out-bound-enterprise']); ?>

    <?php get_template_part('template-parts/video-section', null, ['page' => 'outbound-enterprise', 'modifier' => 'out-bound-enterprise']); ?>

    <?php get_template_part('template-parts/document-slider', null, ['page' => 'outbound-enterprise', 'modifier' => 'out-bound-enterprise']); ?>

    <section class="member-section member-section--out-bound-enterprise section-space section-wave" id="company">
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
                  <p class="member-card__name-en" lang="en">Yuta Matsushita</p>
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
                  <p class="member-card__name-en" lang="en">Naoto Oyama</p>
                </header>
                <p class="member-card__profile">
                  新卒で証券会社に入社。個人・法人顧客の新規開拓、証券コンサルティング業務に従事し、史上最年少で昇級。数々の社内表彰を受賞。2023年に代表の松下と共に株式会社Weegentの立ち上げに参画。<br>
                  IT/SaaS・システム・医療業界の営業組織の立上げに携わり、営業戦略立案やKPI設計から実働支援までを得意とする。
                </p>
              </div>
            </article>
          </li>
        </ul>
        <a class="member-section__more c-button" href="<?php echo esc_url(home_url('/company/#officer')); ?>">
          <span>全てのメンバーを見る</span>
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
        </a>
      </div>
    </section>

    <section class="flow-section flow-section--out-bound-enterprise section-space section-wave" id="flow">
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
                攻略したいターゲット企業や業界をお聞かせいただければ、ご提案の準備に入ります。
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
                貴社の商材・ターゲット企業群・過去のアプローチ状況を詳しくお伺いします。<br>
                既存のABMリストやCRM情報も確認し、攻略戦略を設計します。
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
                ヒアリング内容をもとに、ターゲット企業の優先順位・アプローチ戦略・体制・スケジュール・費用をご提案します。<br>
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
                最短1週間で架電を開始できます。
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
                SABCランクで管理されたメンバーがターゲット企業への架電を開始。<br>
                企業ごとのアプローチ履歴を蓄積しながら、定例ミーティングで攻略戦略を磨き続けます。
              </p>
            </article>
          </li>
        </ol>
      </div>
    </section>

    <section class="faq-section faq-section--out-bound-enterprise section-space section-wave" id="faq">
      <div class="inner inner--content faq-section__inner">
        <div class="faq-section__heading">
          <h2 class="section-head__title">よくある質問</h2>
        </div>

        <ul class="faq-list">
          <li class="faq-list__item faq-item is-open">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="true" aria-controls="faq-answer-01">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>キーマンの特定はどうやっていますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-01">
              <p><span class="faq-item__initial">A.</span>IR・組織図・ニュースリリース等から部署・役職を特定します。受付突破後のヒアリングでさらに組織構造を把握し、意思決定者に到達するルートを組み立てます。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-02">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>エンタープライズ開拓の実績はありますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-02" hidden>
              <p><span class="faq-item__initial">A.</span>ございます。上場企業や大手企業を対象とした新規開拓の実績があり、決裁者・複数部署へのアプローチや、長期追客を含むABM型の開拓にも対応しています。詳しくは事例集をダウンロードいただくか担当者までお問合せください。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-03">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>大手向けのトークは中小向けと変えていますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-03" hidden>
              <p><span class="faq-item__initial">A.</span>変えています。企業ごとの事業課題やIR、組織構造まで見たうえで、狙う部署・役職・訴求を設計します。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-04">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>途中でターゲット企業を変更・追加できますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-04" hidden>
              <p><span class="faq-item__initial">A.</span>可能です。反応が悪ければ次の定例まで待たず、業界・企業規模・部署・役職を見直します。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-05">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>手紙・フォーム営業など架電以外の手法も使えますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-05" hidden>
              <p><span class="faq-item__initial">A.</span>使えます。代表番号で届かない場合は、部署直通番号、問い合わせフォーム、手紙、メールなども組み合わせます。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
