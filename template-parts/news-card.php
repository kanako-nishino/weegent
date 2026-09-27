<?php
/**
 * お知らせ(post)1件分のカード。.news-list__item の中身。
 * template-parts/news-list.php から呼び出す共通パーツ。
 */
$categories = get_the_category();
$primary_category = ! empty($categories) ? $categories[0] : null;
?>
<li class="news-list__item">
  <article class="news-card">
    <a class="news-card__link" href="<?php the_permalink(); ?>">
      <div class="news-card__meta">
        <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y/m/d')); ?></time>
        <span class="news-card__weekday"><?php echo esc_html(get_the_date('D')); ?></span>
        <?php if ($primary_category) : ?>
          <span class="news-card__category"><?php echo esc_html($primary_category->name); ?></span>
        <?php endif; ?>
      </div>
      <p class="news-card__title"><?php the_title(); ?></p>
      <img class="news-card__icon" src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
    </a>
  </article>
</li>
