<?php get_header(); ?>

<main>
        <section class="sub-hero section-wave">
            <?php get_template_part('template-parts/breadcrumb', null, [
                'items' => [
                    ['label' => 'TOP', 'url' => home_url('/')],
                    ['label' => '会社情報'],
                ],
            ]); ?>

            <div class="inner inner--content sub-hero__inner">
                <h1 class="sub-hero__title">会社情報</h1>

                <div class="sub-hero__actions">
                    <a class="c-button c-button--white sub-hero__action sub-hero__action--document" href="<?php echo esc_url(home_url('/document-download/')); ?>">
                        <span class="sub-hero__action-content">
                            <span class="sub-hero__action-text">
                                <span class="sub-hero__action-caption">支援内容や導入事例が分かる</span>
                                <span class="sub-hero__action-title">資料3点セットを見る</span>
                            </span>
                            <small>無料</small>
                        </span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
                    </a>
                    <a class="c-button c-button--brown sub-hero__action" href="<?php echo esc_url(home_url('/contact/')); ?>">
                        <span>ご相談・お問い合わせ <small>無料</small></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
                    </a>
                </div>

                <nav class="page-anchor-nav" aria-label="ページ内ナビゲーション">
                    <ul class="page-anchor-nav__list">
                        <li class="page-anchor-nav__item">
                            <a class="page-anchor-nav__link" href="#about">
                                <span>Weegentについて</span>
                                <span class="page-anchor-nav__icon" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="page-anchor-nav__item">
                            <a class="page-anchor-nav__link" href="#officer">
                                <span>役員紹介</span>
                                <span class="page-anchor-nav__icon" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="page-anchor-nav__item">
                            <a class="page-anchor-nav__link" href="#manager">
                                <span>マネージャー紹介</span>
                                <span class="page-anchor-nav__icon" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="page-anchor-nav__item">
                            <a class="page-anchor-nav__link" href="#overview">
                                <span>会社概要</span>
                                <span class="page-anchor-nav__icon" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <section class="company-about-section section-space" id="about">
            <div class="inner inner--content">
                <h2 class="company-about-section__title section-head__title">Weegentについて</h2>

                <div class="company-about__body">
                    <div class="company-about__text">
                        <h3 class="company-about__sub-title">
                            Weegentは、営業戦略の設計から実行、営業人材の採用・育成、マネジメントまで一貫して支援しています。
                        </h3>
                        <p>
                            単に商談を獲得する営業代行ではなく、支援を通じて得られたデータやノウハウを蓄積し、継続的に成果を生み出せる営業組織をお客様の社内に構築することを目指しています。<br>
                        </p>
                        <p>
                            これまで、業界・企業規模を問わずさまざまな企業の営業活動を支援し、KPI達成率96.8%、継続率97.4%、顧客満足度98.4%を実現しています。<br>
                        </p>
                        <p>
                            また、Salesforce Partner、HubSpot Solutions
                            Partnerとして、営業活動だけでなく、SFA・CRMを活用した営業プロセスの可視化やデータ活用まで支援しています。
                        </p>
                    </div>

                    <ul class="company-kpi-list" aria-label="Weegentの支援実績">
                        <li class="company-kpi-list__item">
                            <span class="company-kpi-list__label">KPI達成率</span>
                            <span class="company-kpi-list__value">96.8<small>%</small></span>
                        </li>
                        <li class="company-kpi-list__item">
                            <span class="company-kpi-list__label">継続率</span>
                            <span class="company-kpi-list__value">97.4<small>%</small></span>
                        </li>
                        <li class="company-kpi-list__item">
                            <span class="company-kpi-list__label">顧客満足度</span>
                            <span class="company-kpi-list__value">98.4<small>%</small></span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="member-section section-space section-wave" id="officer">
            <div class="inner inner--content">
                <h2 class="member-section__title section-head__title">役員紹介</h2>

                <ul class="member-list">
                    <li class="member-list__item">
                        <article class="member-card">
                            <div class="member-card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/member/yuta-matsushita.jpg" alt="代表取締役 松下雄太">
                            </div>
                            <div class="member-card__content">
                                <p class="member-card__role">代表取締役</p>
                                <header class="member-card__identity">
                                    <h3 class="member-card__name">松下 雄太</h3>
                                    <p class="member-card__name-en" lang="en">Yuta Matsushita</p>
                                </header>
                                <p class="member-card__profile">
                                    新卒で大手証券会社に入社。法人顧客の新規開拓、エンタープライズ向けウェルスコンサルティング業務に従事し、全社1位など数々の表彰を受賞。最年少でプライベートバンキング部門の立ち上げに参画。その後アマゾンジャパンへ転職し、大手ベンダーのECコンサルティング・マーケティング業務を経験。2023年に株式会社Weegentを創業。証券時代に培った「企業のIR・決算を読み、仮説を持って当たる」営業スタイルを組織の仕組みとして設計。
                                  </p>
                            </div>
                        </article>
                    </li>
                    <li class="member-list__item">
                        <article class="member-card">
                            <div class="member-card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/member/naoto-oyama.jpg" alt="取締役 大山尚人">
                            </div>
                            <div class="member-card__content">
                                <p class="member-card__role">取締役</p>
                                <header class="member-card__identity">
                                    <h3 class="member-card__name">大山 尚人</h3>
                                    <p class="member-card__name-en" lang="en">Naoto Oyama</p>
                                </header>
                                <p class="member-card__profile">
                                    新卒で大手証券会社に入社。リテール営業・法人営業を経験し、顧客基盤の構築と深耕営業に従事。松下と共にWeegentの創業に参画。SaaS・IT企業を中心としたインサイドセールス支援のプロジェクトマネジメントを担当し、クライアントから「丁寧な管理と踏み込んだ提案」で信頼を得る。SABCランク制度の運用やメンバー教育を統括し、Weegentの品質管理体制の中核を担う。
                                  </p>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </section>

        <section class="manager-section section-space section-wave" id="manager">
            <div class="inner inner--content">
                <h2 class="manager-section__title section-head__title">マネージャー紹介</h2>

                <ul class="manager-list">
                    <li class="manager-list__item">
                        <article class="manager-card">
                            <div class="manager-card__image manager-card__image--02">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/member/manager-02.jpg" alt="Sales Director 古田 竜也" loading="lazy" decoding="async">
                            </div>
                            <p class="manager-card__role">Sales Director</p>
                            <h3 class="manager-card__name">古田 竜也</h3>
                            <p class="manager-card__profile">
                                大手自動車部品メーカー・株式会社アイシンにて法人営業を経験後、Weegentに参画。<br>
                                参画後は、大手・上場企業やスタートアップの新規事業、BtoB SaaS、IT・DXサービスを中心に、営業戦略の設計から新規開拓、営業プロセス構築、実行・改善まで複数のプロジェクトを支援。特に、新規事業の立ち上げフェーズにおける市場検証・営業仮説検証や、エンタープライズABM、インサイドセールス組織の立ち上げに携わっている。<br>
                                人材、SaaS・IT、製造、ヘルスケア、施設運営など幅広い業界の営業支援を経験。事業フェーズや商材特性に応じて営業仮説を設計し、検証を重ねながら再現性のある営業プロセスへ落とし込むことを強みとする。
                            </p>
                        </article>
                    </li>
                    <li class="manager-list__item">
                        <article class="manager-card">
                            <div class="manager-card__image manager-card__image--01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/member/manager-01.jpg" alt="Sales Manager 松尾 拓海" loading="lazy" decoding="async">
                            </div>
                            <p class="manager-card__role">Sales Manager</p>
                            <h3 class="manager-card__name">松尾 拓海</h3>
                            <p class="manager-card__profile">
                                新卒で大手証券会社に入社し、個人・法人向け営業に従事。高い営業実績を残し、社長賞をはじめとする社内表彰を複数受賞。<br>
                                Weegent参画後は、大手企業の新規事業やスタートアップ・成長企業を中心に、BtoB営業支援に携わり、営業戦略の設計から新規開拓、営業プロセス構築、実行・改善まで複数のプロジェクトを支援。現在は大阪オフィスの責任者も務め、営業支援プロジェクトの推進に加え、拠点運営やメンバーマネジメントにも携わっている。<br>
                                医療機関やエンタープライズ企業への新規開拓など、複数業界における営業支援を経験。戦略設計にとどまらず、自ら営業現場に入り、実行管理・データ分析・改善施策の設計まで一貫して推進し、再現性のある営業プロセスを構築することを強みとする。
                            </p>
                        </article>
                    </li>
                    <li class="manager-list__item">
                        <article class="manager-card">
                            <div class="manager-card__image manager-card__image--03">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/member/manager-03.jpeg" alt="Consultant 松田 直人" loading="lazy" decoding="async">
                            </div>
                            <p class="manager-card__role">Consultant</p>
                            <h3 class="manager-card__name">松田 直人</h3>
                            <p class="manager-card__profile">
                                レイスグループにて人材領域の営業を経験後、コンサルティング会社などでエンタープライズ営業に従事。<br>
                                Weegent参画後は、大手成長企業を中心に、エンタープライズ向けの新規開拓やABM、BtoB営業支援に携わり、営業戦略の設計からターゲット選定、アプローチ設計、実行・改善まで複数のプロジェクトを支援。<br>
                                商材や市場特性に応じて営業戦略を個別に設計し、企業ごとの課題や意思決定構造を踏まえたアプローチを行うことを強みとする。プライム上場企業を含む大手企業との契約獲得にも携わり、事業の売上拡大に貢献。再生可能エネルギー、物流、教育関連サービスなど幅広い業界を経験し、業界を横断したエンタープライズ営業・新規開拓の知見を有する。
                            </p>
                        </article>
                    </li>
                    <li class="manager-list__item">
                        <article class="manager-card">
                            <div class="manager-card__image manager-card__image--04">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/member/manager-04.jpg" alt="Consultant 関口 湧人" loading="lazy" decoding="async">
                            </div>
                            <p class="manager-card__role">Consultant</p>
                            <h3 class="manager-card__name">関口 湧人</h3>
                            <p class="manager-card__profile">
                                大手電子機器メーカー、人材営業、ECコンサルティングにて法人営業を経験後、Weegentに参画。<br>
                                異なる業界・商材での営業経験を通じて、顧客ごとの課題や購買プロセスに応じた営業設計の知見を培う。<br>
                                参画後は、建築業向けSaaS、ヘルスケア、人材サービスなど幅広い領域を中心に、BtoB営業支援に携わり、新規開拓戦略の設計からインサイドセールス組織の立ち上げ、ターゲット選定、アプローチ設計、営業プロセスの構築・改善まで複数のプロジェクトを支援。<br>
                                特に、中小企業・SMB市場を対象としたインサイドセールス体制の構築を得意とする。単に商談数を最大化するのではなく、受注可能性や顧客ニーズを踏まえてリードの質を見極め、クライアントの売上につながる確度の高い商談機会を創出することを重視。現場で得られるデータや顧客の反応をもとに仮説検証と改善を重ね、再現性のある営業プロセスへ落とし込むことを強みとする。
                            </p>
                        </article>
                    </li>
                </ul>
            </div>
        </section>

        <section class="overview-section section-space section-wave" id="overview">
            <div class="inner inner--content">
                <h2 class="overview-section__title section-head__title">会社概要</h2>

                <dl class="overview-table">
                    <div class="overview-table__row">
                        <dt>商号</dt>
                        <dd>株式会社Weegent</dd>
                    </div>
                    <div class="overview-table__row">
                        <dt>代表</dt>
                        <dd>代表取締役　松下 雄太</dd>
                    </div>
                    <div class="overview-table__row">
                        <dt>事業内容</dt>
                        <dd>
                            インサイドセールス・営業代行事業、営業コンサルティング事業。<br>
                            組織 × 人 × データの仕組みで、120社以上の新規開拓・商談創出を支援。
                        </dd>
                    </div>
                    <div class="overview-table__row">
                        <dt>設立</dt>
                        <dd>2023年8月4日</dd>
                    </div>
                    <div class="overview-table__row">
                        <dt>所在地</dt>
                        <dd>
                            <ul class="overview-maps">
                                <li class="overview-maps__item">
                                    <div class="overview-maps__image">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6484.238660684759!2d139.70496739196034!3d35.6494315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b004ed2ce37%3A0xa27b84a249e02f77!2sSreed%20EBISU%2BL!5e0!3m2!1sja!2sus!4v1789276503115!5m2!1sja!2sus"
                                            title="本社周辺の地図" loading="lazy"
                                            referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    </div>
                                    <p class="overview-maps__office">本社</p>
                                    <p>〒150-0011<br>東京都渋谷区東3丁目24-13 Sreed EBISU+L 8階</p>
                                </li>
                                <li class="overview-maps__item">
                                    <div class="overview-maps__image">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.2495055912705!2d135.4964525!3d34.6988863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6f2a37a7b49%3A0x27d3544d67ba4654!2z5aSn6Ziq6aeF5YmN56ys77yR44OT44Or!5e0!3m2!1sja!2sjp!4v1789277512419!5m2!1sja!2sjp"
                                            title="大阪オフィス周辺の地図" loading="lazy"
                                            referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    </div>
                                    <p class="overview-maps__office">大阪オフィス</p>
                                    <p>〒530-0001<br>大阪府大阪市北区梅田1丁目3-1 大阪駅前第一ビル 6階</p>
                                </li>
                            </ul>
                        </dd>
                    </div>
                    <div class="overview-table__row">
                        <dt>アクセス</dt>
                        <dd>JR恵比寿駅 徒歩5分</dd>
                    </div>
                    <div class="overview-table__row">
                        <dt>資本金</dt>
                        <dd>1,000万円</dd>
                    </div>
                    <div class="overview-table__row">
                        <dt>TEL</dt>
                        <dd>03-6824-7902（代表）</dd>
                    </div>
                </dl>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
