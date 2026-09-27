<?php get_header(); ?>

<main>
        <section class="sub-hero section-wave">
          <?php while (have_posts()) : the_post(); ?>
            <?php
            $dir = get_template_directory_uri();
            $terms = get_the_terms(get_the_ID(), 'work_category');
            $staff = weegent_get_staff_profile(function_exists('get_field') ? get_field('work_staff') : 0);

            $prev_post = get_previous_post(false, '', 'work_category');
            $next_post = get_next_post(false, '', 'work_category');

            $related_works = weegent_get_related_works(get_the_ID(), 5);
            ?>

            <?php get_template_part('template-parts/breadcrumb', null, [
                'items' => [
                    ['label' => 'TOP', 'url' => home_url('/')],
                    ['label' => 'ご支援実績', 'url' => weegent_work_archive_link()],
                    ['label' => get_the_title()],
                ],
                'current_class' => 'single-work-breadcrumb__current',
            ]); ?>

            <div class="inner inner--content sub-hero__inner">
                <div class="work-layout">
                    <div class="work-layout__content">
                        <div class="work-layout__title">
                            <h1 class="sub-hero__title single-work-title"><?php the_title(); ?></h1>
                            <?php if (! empty($terms) && ! is_wp_error($terms)) : ?>
                                <ul class="single-work-tags">
                                    <?php foreach ($terms as $term) : ?>
                                        <li class="single-work-tags__item"><?php echo esc_html($term->name); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                        <div class="work-layout__main">
                            <figure class="work-eyecatch">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php // 元画像から画面幅・解像度に合ったサイズをブラウザに選ばせる(PCの表示幅は最大800px) ?>
                                    <?php the_post_thumbnail('full', [
                                        'alt' => the_title_attribute(['echo' => false]),
                                        'sizes' => '(min-width: 768px) 800px, 100vw',
                                    ]); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url($dir . '/img/work-detail/eyecatch.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </figure>
                            <?php if ($staff) : ?>
                                <p class="work-eyecatch__staff"><span>担当者</span><?php echo esc_html($staff['name']); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="work-layout__article">
                            <article class="work-article">
                                <?php the_content(); ?>
                            </article>
                        </div>

                        <div class="work-layout__cta">
                            <div class="work-cta">
                                <a class="c-button c-button--white work-cta__button" href="<?php echo esc_url(home_url('/document-download/')); ?>">
                                    <span>事例集をダウンロードする <small>無料</small></span>
                                    <img src="<?php echo $dir; ?>/img/common/button-icon-navy.svg" alt="">
                                </a>
                                <a class="c-button c-button--brown work-cta__button" href="<?php echo esc_url(home_url('/contact/')); ?>">
                                    <span>ご相談・お問い合わせ <small>無料</small></span>
                                    <img src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt="">
                                </a>
                            </div>
                        </div>

                        <?php if ($staff) : ?>
                            <div class="work-layout__staff">
                                <div class="work-staff">
                                    <p class="work-staff__title">担当者情報</p>
                                    <div class="work-staff__card">
                                        <div class="work-staff__avatar">
                                            <img src="<?php echo esc_url($staff['avatar']); ?>" alt="">
                                        </div>
                                        <div class="work-staff__identity">
                                            <?php if ($staff['role']) : ?>
                                                <p class="work-staff__role"><?php echo esc_html($staff['role']); ?></p>
                                            <?php endif; ?>
                                            <p class="work-staff__name"><?php echo esc_html($staff['name']); ?></p>
                                        </div>
                                        <?php if ($staff['bio']) : ?>
                                            <p class="work-staff__bio"><?php echo nl2br(esc_html($staff['bio'])); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="work-layout__share">
                            <div class="work-share">
                                <p class="work-share__label">SHARE</p>
                                <ul class="work-share__list">
                                    <li><a class="js-share" data-share="x" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                                            target="_blank" rel="noopener noreferrer" aria-label="Xでシェア"><img
                                                src="<?php echo $dir; ?>/img/common/icon-x.svg" alt=""></a></li>
                                    <li><a class="js-share" data-share="facebook"
                                            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank"
                                            rel="noopener noreferrer" aria-label="Facebookでシェア"><img
                                                src="<?php echo $dir; ?>/img/common/icon-facebook.svg" alt=""></a></li>
                                    <li><a class="js-share" data-share="hatena" href="https://b.hatena.ne.jp/entry/panel/?url=<?php echo urlencode(get_permalink()); ?>"
                                            target="_blank" rel="noopener noreferrer" aria-label="はてなブックマークに追加"><img
                                                src="<?php echo $dir; ?>/img/common/icon-hatena.svg" alt=""></a></li>
                                    <li><a class="js-share" data-share="line"
                                            href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank"
                                            rel="noopener noreferrer" aria-label="LINEでシェア"><img
                                                src="<?php echo $dir; ?>/img/common/icon-line.svg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="work-layout__carousel">
                            <nav class="work-carousel" aria-label="前後の事例">
                                <ul class="work-carousel__list">
                                    <li class="work-carousel__item work-carousel__item--prev">
                                        <?php if ($prev_post) : ?>
                                            <a href="<?php echo esc_url(get_permalink($prev_post)); ?>">
                                                <span><?php echo esc_html(get_the_title($prev_post)); ?></span>
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                    <li class="work-carousel__item work-carousel__item--next">
                                        <?php if ($next_post) : ?>
                                            <a href="<?php echo esc_url(get_permalink($next_post)); ?>">
                                                <span><?php echo esc_html(get_the_title($next_post)); ?></span>
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                                <a class="work-carousel__more" href="<?php echo esc_url(weegent_work_archive_link()); ?>">
                                    <span>記事一覧へ</span>
                                    <img src="<?php echo $dir; ?>/img/common/button-icon-navy.svg" alt="">
                                </a>
                            </nav>
                        </div>
                    </div>

                    <aside class="work-layout__aside">
                        <?php if (! empty($related_works)) : ?>
                            <div class="work-related">
                                <p class="work-related__title">ご支援実績</p>
                                <ul class="work-related__list">
                                    <?php foreach ($related_works as $related) :
                                        $related_thumb = get_the_post_thumbnail_url($related, 'thumbnail') ?: $dir . '/img/case/case-01.jpg';
                                        ?>
                                        <li class="work-related__item">
                                            <a href="<?php echo esc_url(get_permalink($related)); ?>">
                                                <span class="work-related__thumb"><img src="<?php echo esc_url($related_thumb); ?>"
                                                        alt=""></span>
                                                <span class="work-related__text"><?php echo esc_html(get_the_title($related)); ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <a class="work-related__button" href="<?php echo esc_url(weegent_work_archive_link()); ?>">
                                    <span>ご支援実績の記事一覧を見る</span>
                                    <img src="<?php echo $dir; ?>/img/common/button-icon-navy.svg" alt="">
                                </a>
                            </div>
                        <?php endif; ?>

                        <nav class="work-quicklinks" aria-label="サイト内ショートカット">
                            <ul class="work-quicklinks__list">
                                <li class="work-quicklinks__item"><a href="<?php echo esc_url(home_url('/company/')); ?>">会社情報<img
                                            src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt=""></a></li>
                                <li class="work-quicklinks__item"><a href="<?php echo esc_url(weegent_work_archive_link()); ?>">ご支援実績<img
                                            src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt=""></a></li>
                                <li class="work-quicklinks__item"><a href="<?php echo esc_url(weegent_document_archive_link()); ?>">お役立ち資料<img
                                            src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt=""></a></li>
                                <li class="work-quicklinks__item"><a href="<?php echo esc_url(weegent_news_archive_link()); ?>">お知らせ<img
                                            src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt=""></a></li>
                                <li class="work-quicklinks__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ<img
                                            src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt=""></a></li>
                            </ul>
                        </nav>
                    </aside>
                </div>
            </div>
          <?php endwhile; ?>
        </section>
    </main>

<?php get_footer(); ?>
