<?php get_header(); ?>

<main>
        <section class="sub-hero section-wave">
            <?php get_template_part('template-parts/breadcrumb', null, [
                'items' => [
                    ['label' => 'TOP', 'url' => home_url('/')],
                    ['label' => 'お役立ち資料一覧'],
                ],
            ]); ?>

            <div class="inner inner--content sub-hero__inner">
                <h1 class="sub-hero__title">お役立ち資料一覧</h1>
                <p class="sub-hero__lead">
                    Weegentのノウハウをぜひご覧ください。
                </p>
            </div>
        </section>

        <section class="sub-document section-space" aria-labelledby="document-download-heading">
            <div class="inner inner--content sub-document__inner">

                <ul class="document-download-list">
                    <li class="document-download-list__item">
                        <article class="document-download-card">
                            <div class="document-download-card__body">
                                <div class="resource-card__preview resource-card__preview--stacked document-download-card__preview"
                                    aria-hidden="true">
                                    <p>もし可能であれば、<br>資料のキャプチャを入れたいです。</p>
                                </div>
                                <p class="document-download-card__title">〇〇がわかる、<br class="sp">お役立ち資料3点セット</p>
                            </div>
                            <a class="c-button c-button--brown document-download-card__button" href="<?php echo esc_url(home_url('/document-download/')); ?>">
                                <span>資料をダウンロードする</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
                            </a>
                        </article>
                    </li>

                    <li class="document-download-list__item">
                        <article class="document-download-card">
                            <div class="document-download-card__body">
                                <div class="resource-card__preview resource-card__preview--stacked document-download-card__preview"
                                    aria-hidden="true">
                                    <p>もし可能であれば、<br>全資料のキャプチャを入れたいです。</p>
                                </div>
                                <p class="document-download-card__title">すべての資料を<br class="sp">ダウンロード</p>
                            </div>
                            <a class="c-button c-button--brown document-download-card__button" href="<?php echo esc_url(weegent_resource_download_url()); ?>">
                                <span>資料をダウンロードする</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
                            </a>
                        </article>
                    </li>

                    <li class="document-download-list__item document-download-list__item--wide">
                        <article class="document-download-card document-download-card--case">
                            <div class="document-download-card__body">
                                <p class="document-download-card__title">〇〇の事例集</p>
                            </div>
                            <a class="c-button c-button--brown document-download-card__button" href="<?php echo esc_url(home_url('/case-download/')); ?>">
                                <span>事例集を一括でダウンロードする<small>無料</small></span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
                            </a>
                        </article>
                    </li>
                </ul>
            </div>
        </section>

        <section class="document-archive section-space" aria-label="お役立ち資料一覧">
            <div class="inner inner--content">

                <?php if (have_posts()) : ?>
                    <ul class="document-list document-list--archive">
                        <?php while (have_posts()) : the_post(); ?>
                            <li class="document-list__item">
                                <?php get_template_part('template-parts/document-card', null, ['title_tag' => 'p']); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <p class="document-archive__empty">現在公開中の資料はありません。</p>
                <?php endif; ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
