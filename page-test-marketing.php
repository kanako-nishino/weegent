<?php get_header(); ?>

<main>
    <section class="fv fv--test-marketing">
      <div class="fv__background" aria-hidden="true"></div>

      <div class="fv__inner inner">
        <div class="fv__content">
          <h1 class="fv__title">売れない<br class="sp">新規事業は、ない</h1>
          <p class="fv__lead">
            プロダクトはできた。でも売り方が分からない。<br>
            Weegentは貴社の新規事業の「勝ちパターン」を、<br class="pc">
            営業の現場から見つけます。
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

    <?php get_template_part('template-parts/client-logos', null, ['modifier' => 'test-marketing']); ?>

    <section class="problem-section problem-section--test-marketing section-space section-wave">
      <div class="inner inner--content">
        <h2 class="problem-section__title section-head__title">
          新規事業の営業で、<br>
          こんな課題は<br class="sp">ありませんか？
        </h2>

        <ul class="problem-list">
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-test-marketing/problem-target-unknown.png" alt="プロダクトを誰にどう売ればいいか分からない課題を表す図">
              </div>
              <h3 class="problem-card__title">
                プロダクトはできたが、<br>
                誰にどう売ればいいか分からない。<br>
                営業の勝ちパターンがまだない
              </h3>
            </article>
          </li>
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-test-marketing/problem-resource-shortage.png" alt="社内リソースが既存事業に張り付き新規事業に回せる人がいない課題を表す図">
              </div>
              <h3 class="problem-card__title">
                社内リソースは<br>
                既存事業に張り付いていて、<br>
                新規事業に回せる人がいない
              </h3>
            </article>
          </li>
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-test-marketing/problem-agency-mismatch.png" alt="商材を理解していない架電で商談獲得の見込みがなかった課題を表す図">
              </div>
              <h3 class="problem-card__title">
                テレアポ会社に頼んだが、<br>
                商材を理解していない架電で<br>
                商談獲得の見込みがなかった
              </h3>
            </article>
          </li>
        </ul>
      </div>
    </section>

    <section class="support-section support-section--test-marketing resource-background section-space" id="service">
      <div class="inner inner--content">
        <div class="support-section__introduction">
          <h2 class="support-section__title">
            <span class="support-section__eyebrow">Weegentは</span>
            新規事業の「売り方」を<br class="sp">一緒に見つけます
          </h2>
          <p class="support-section__description">
            新規事業の営業に正解はありません。だからこそ、架電データを開示し、<br class="pc">
            「どのセグメントに・どの切り口で・どう当たれば刺さるか」を一緒に検証します。<br>
            Weegentはリスト消化型のテレアポではなく、貴社の新規事業の勝ちパターンを見つけるためのPoCパートナーです。
          </p>
        </div>

    <?php get_template_part('template-parts/cta-resources'); ?>
      </div>
    </section>

    <section class="strength-section strength-section--test-marketing section-space section-wave" id="strength">
      <div class="inner">
        <h2 class="strength-section__title section-head__title">
          <span>Weegentの</span>
          強み
        </h2>

        <ol class="strength-list">
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-test-marketing/strength-quality-over-volume.jpg" alt="資料とタブレットを見ながらノートパソコンを操作する担当者">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 01</p>
                <h3 class="strength-card__title">アポ数だけで、良し悪しを決めない。</h3>
                <p class="strength-card__description">
                  どんな企業が反応したのか。どんな言葉に興味を持ったのか。なぜ断られたのか。コールで得た情報を残しながら、市場の反応を見ます。アポが取れなかった場合も、その理由まで確認します。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-test-marketing/strength-quick-adjust.jpg" alt="ダッシュボードを見ながら議論するチームの会議の様子">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 02</p>
                <h3 class="strength-card__title">反応を見ながら、すぐに変える。</h3>
                <p class="strength-card__description">
                  最初に決めたターゲットやトークを、そのまま最後まで使い続けることはしません。コール結果を見て、狙う企業や伝え方を変えます。毎週の定例でも、結果の報告だけで終わらず、課題と次に試すことまで話します。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-test-marketing/strength-transparent-reporting.jpg" alt="データを示しながらお客様と向き合って話す担当者">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 03</p>
                <h3 class="strength-card__title">良くない結果も、そのまま伝える。</h3>
                <p class="strength-card__description">
                  想定していた市場から反応がなければ、それも結果です。都合のいい数字だけをまとめず、全件のコール内容や顧客の反応を共有します。「このターゲットは違う」「この訴求では響いていない」といった話も、そのまま伝えます。
                </p>
              </div>
            </article>
          </li>
        </ol>
      </div>
    </section>

    <section class="resource-section resource-section--test-marketing resource-background resource-background--secondary" aria-label="資料請求・お問い合わせ">
      <div class="inner inner--content">
    <?php get_template_part('template-parts/cta-resources', null, ['standalone' => true]); ?>
      </div>
    </section>

    <?php get_template_part('template-parts/case-list', null, ['page' => 'test-marketing', 'modifier' => 'test-marketing']); ?>

    <?php get_template_part('template-parts/video-section', null, ['page' => 'test-marketing', 'modifier' => 'test-marketing']); ?>

    <?php get_template_part('template-parts/document-slider', null, ['page' => 'test-marketing', 'modifier' => 'test-marketing']); ?>

    <section class="member-section member-section--test-marketing section-space section-wave" id="company">
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

    <section class="flow-section flow-section--test-marketing section-space section-wave" id="flow">
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
                新規事業の内容やフェーズをお聞かせいただければ、ご提案の準備に入ります。
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
                貴社のプロダクト・想定ターゲット・現時点の仮説を詳しくお伺いします。PMF前でも構いません。<br>
                「まだ売り方が分からない」状態からでも設計します。
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
                ヒアリング内容をもとに、検証すべきセグメント・アプローチ仮説・体制・スケジュール・費用をご提案します。
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
                最短1週間で検証を開始できます。
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
                SABCランクで管理されたメンバーが架電開始。<br>
                コール全件データを開示し、定例ミーティングで「何が刺さったか・何が刺さらなかったか」を毎回共有。勝ちパターンが見つかるまで一緒に回します。
              </p>
            </article>
          </li>
        </ol>
      </div>
    </section>

    <section class="faq-section faq-section--test-marketing section-space section-wave" id="faq">
      <div class="inner inner--content faq-section__inner">
        <div class="faq-section__heading">
          <h2 class="section-head__title">よくある質問</h2>
        </div>

        <ul class="faq-list">
          <li class="faq-list__item faq-item is-open">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="true" aria-controls="faq-answer-01">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>まだPMFしていない段階でも依頼できますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-01">
              <p><span class="faq-item__initial">A.</span>はい。むしろPMF前の検証にこそWeegentの強みが活きます。「誰に・どう売れば刺さるか」を架電データから一緒に見つけるのがPoCの目的です。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-02">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>プロダクトの説明が複雑で、外部に任せられるか不安です。</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-02" hidden>
              <p><span class="faq-item__initial">A.</span>商談資料や既存顧客の情報を中心に、商材・顧客理解から入ります。難しい商材ほど、誰に何が刺さるのかまで整理してから架電します。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-03">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>途中でターゲットや訴求を変えられますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-03" hidden>
              <p><span class="faq-item__initial">A.</span>可能です。反応が悪ければ、その場で業界・リスト・トークを見直します。テスト中でも固定せず、分かったことを次のコールから反映します。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-04">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>テストコールの結果をプロダクト改善に活かせますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-04" hidden>
              <p><span class="faq-item__initial">A.</span>活かせます。刺さった言葉や断られた理由まで回収し、営業資料や訴求、ターゲットの見直しに使える形でお返しします。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-05">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>新規事業専任のメンバーをアサインしてもらえますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-05" hidden>
              <p><span class="faq-item__initial">A.</span>可能です。商材理解と仮説検証ができるメンバーだけでなく、マネージャーも入ります。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
