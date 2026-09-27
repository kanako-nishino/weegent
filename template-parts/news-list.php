<?php
/**
 * お知らせ一覧(カテゴリ絞り込みナビ + カード一覧 + ページネーション)。
 * home.php(全件)・category.php(カテゴリ別)の両方から呼び出す共通パーツ。
 * メインクエリ(WordPressが自動で絞り込み済みのもの)をそのまま使う。
 */
$categories = get_categories(['hide_empty' => false]);
?>
<div class="news-filter sp">
  <div class="news-filter__select-wrap">
    <select class="news-filter__select" id="news-category" name="news-category" onchange="if(this.value) location.href=this.value;">
      <option value="<?php echo esc_url(home_url('/')); ?>"<?php selected(! is_category()); ?>>すべて</option>
      <?php foreach ($categories as $category) : ?>
        <option value="<?php echo esc_url(get_category_link($category)); ?>"<?php selected(is_category($category->term_id)); ?>><?php echo esc_html($category->name); ?></option>
      <?php endforeach; ?>
    </select>
  </div>
</div>

<div class="news-archive__layout">
  <nav class="news-category-nav pc" aria-label="お知らせのカテゴリ">
    <ul class="news-category-nav__list">
      <?php foreach ($categories as $category) : ?>
        <li>
          <a class="news-category-nav__link<?php echo is_category($category->term_id) ? ' is-current' : ''; ?>" href="<?php echo esc_url(get_category_link($category)); ?>">
            <span><?php echo esc_html($category->name); ?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>

  <div class="news-archive__content">
    <?php if (have_posts()) : ?>
      <ul class="news-list">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/news-card'); ?>
        <?php endwhile; ?>
      </ul>

      <?php get_template_part('template-parts/pagination'); ?>
    <?php else : ?>
      <p>該当するお知らせはありません。</p>
    <?php endif; ?>
  </div>
</div>
