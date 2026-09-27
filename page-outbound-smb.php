<?php get_header(); ?>

<main>
    <section class="fv fv--out-bound-smb">
      <div class="fv__background" aria-hidden="true"></div>

      <div class="fv__inner inner">
        <div class="fv__content">
          <h1 class="fv__title">開拓できない<br class="sp">中小企業は、ない</h1>
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

    <?php get_template_part('template-parts/client-logos', null, ['modifier' => 'out-bound-smb']); ?>

    <section class="problem-section problem-section--out-bound-smb section-space section-wave">
      <div class="inner inner--content">
        <h2 class="problem-section__title section-head__title">
          営業の新規開拓で、<br>
          こんな課題は<br class="sp">ありませんか？
        </h2>

        <ul class="problem-list">
          <li class="problem-list__item">
            <article class="problem-card">
              <div class="problem-card__illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-smb/problem-appointment-conversion.png" alt="アポイントは取れても案件化しない課題を表す図">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-smb/problem-inhouse-org.png" alt="営業組織の内製化に伴う採用・ノウハウ不足の課題を表す図">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-smb/problem-agency-quality.png" alt="代行会社の担当者品質にバラつきがある課題を表す図">
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

    <section class="support-section support-section--out-bound-smb resource-background section-space" id="service">
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

    <section class="strength-section strength-section--out-bound-smb section-space section-wave" id="strength">
      <div class="inner">
        <h2 class="strength-section__title section-head__title">
          <span>Weegentの</span>
          強み
        </h2>

        <ol class="strength-list">
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-smb/strength-call-first.jpg" alt="電話をしながら架電する営業担当者">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 01</p>
                <h3 class="strength-card__title">まず動く。でも、闇雲には動かない。</h3>
                <p class="strength-card__description">
                  一定のコール数を確保しながら、業種や企業規模、役職ごとの反応を見ます。どこにつながりやすいか、どのトークなら話を聞いてもらえるか。実際のコール結果を見ながら、狙う先と話し方を変えていきます。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-smb/strength-thinking.jpg" alt="ノートパソコンを片手に考える営業担当者">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 02</p>
                <h3 class="strength-card__title">成果が出る人を、きちんと現場に置く。</h3>
                <p class="strength-card__description">
                  メンバーは毎月SABCランクで評価します。基準に満たない場合は入れ替え、成果が出ているメンバーは評価する。マネージャーもISで結果を出した経験者を置きます。担当者が変わっても品質が大きく落ちないよう、人の選び方から管理しています。
                </p>
              </div>
            </article>
          </li>
          <li class="strength-list__item">
            <article class="strength-card">
              <div class="strength-card__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sub-out-bound-smb/strength-meeting.jpg" alt="資料を指差しながら打ち合わせを行うメンバー">
              </div>
              <div class="strength-card__content">
                <p class="strength-card__number">POINT 03</p>
                <h3 class="strength-card__title">数字が悪ければ、その週に直す。</h3>
                <p class="strength-card__description">
                  週1回、役員も参加するミーティングで各案件の数字を確認します。遅れている案件があれば、原因と改善策をその場で話します。トークを変えるのか、リストを変えるのか、担当者を変えるのか。数字を見ながら手を打ちます。
                </p>
              </div>
            </article>
          </li>
        </ol>
      </div>
    </section>

    <section class="resource-section resource-section--out-bound-smb resource-background resource-background--secondary" aria-label="資料請求・お問い合わせ">
      <div class="inner inner--content">
    <?php get_template_part('template-parts/cta-resources', null, ['standalone' => true]); ?>
      </div>
    </section>

    <?php get_template_part('template-parts/case-list', null, ['page' => 'outbound-smb', 'modifier' => 'out-bound-smb']); ?>

    <?php get_template_part('template-parts/video-section', null, ['page' => 'outbound-smb', 'modifier' => 'out-bound-smb']); ?>

    <?php get_template_part('template-parts/document-slider', null, ['page' => 'outbound-smb', 'modifier' => 'out-bound-smb']); ?>

    <section class="member-section member-section--out-bound-smb section-space section-wave" id="company">
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

    <section class="flow-section flow-section--out-bound-smb section-space section-wave" id="flow">
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

    <section class="faq-section faq-section--out-bound-smb section-space section-wave" id="faq">
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
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>アポの数だけでなく、商談の質も重視してもらえますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-02" hidden>
              <p><span class="faq-item__initial">A.</span>重視します。アポ数だけを追うのではなく、顧客の課題や関心、検討状況などを確認し、商談につながった背景まで整理して共有します。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-03">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>アポが取れない場合は、どのように改善しますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-03" hidden>
              <p><span class="faq-item__initial">A.</span>架電数を増やすだけではなく、接続率・担当者接触率・アポ率などを確認し、どこに課題があるかを特定します。そのうえで、リスト・トーク・訴求・担当者を見直します。</p>
            </div>
          </li>
          <li class="faq-list__item faq-item">
            <h3 class="faq-item__heading">
              <button class="faq-item__trigger js-faq-trigger" type="button" aria-expanded="false" aria-controls="faq-answer-04">
                <span class="faq-item__question"><span class="faq-item__initial">Q.</span>途中でターゲットや訴求を変更できますか？</span>
                <span class="faq-item__icon" aria-hidden="true"></span>
              </button>
            </h3>
            <div class="faq-item__answer js-faq-answer" id="faq-answer-04" hidden>
              <p><span class="faq-item__initial">A.</span>可能です。顧客の反応や断られた理由を見ながら、業界・企業規模・部署・役職・トークを見直します。分かったことを次のコールから反映し、改善を重ねます。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
