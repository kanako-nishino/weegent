<?php
/**
 * ページネーション。既存デザインの .pagination 系クラスを維持したまま、
 * 渡されたクエリ(またはグローバル $wp_query)のページ数から動的に生成する。
 * 2ページ以上ある場合のみ出力する。
 *
 * 呼び出し例:
 *   get_template_part('template-parts/pagination', null, ['query' => $work_query]);
 */
global $wp_query;
$query = $args['query'] ?? $wp_query;
$total = (int) $query->max_num_pages;

if ($total < 2) {
    return;
}

$current = max(1, (int) $query->get('paged'));
$dir = get_template_directory_uri();
?>
<nav class="pagination work-archive-pagination" aria-label="ページネーション">
  <ul class="pagination__list">
    <li class="pagination__item">
      <?php if ($current > 1) : ?>
        <a class="pagination__link pagination__link--prev" href="<?php echo esc_url(get_pagenum_link($current - 1)); ?>" aria-label="前のページへ">
          <img src="<?php echo $dir; ?>/img/common/pagenation-prev-arrow.svg" alt="">
        </a>
      <?php else : ?>
        <a class="pagination__link pagination__link--prev is-disabled" href="#" aria-label="前のページへ" aria-disabled="true">
          <img src="<?php echo $dir; ?>/img/common/pagenation-prev-arrow.svg" alt="">
        </a>
      <?php endif; ?>
    </li>

    <?php for ($i = 1; $i <= $total; $i++) : ?>
      <li class="pagination__item">
        <?php if ($i === $current) : ?>
          <a class="pagination__link is-current" href="<?php echo esc_url(get_pagenum_link($i)); ?>" aria-current="page"><?php echo esc_html($i); ?></a>
        <?php else : ?>
          <a class="pagination__link" href="<?php echo esc_url(get_pagenum_link($i)); ?>"><?php echo esc_html($i); ?></a>
        <?php endif; ?>
      </li>
    <?php endfor; ?>

    <li class="pagination__item">
      <?php if ($current < $total) : ?>
        <a class="pagination__link pagination__link--next" href="<?php echo esc_url(get_pagenum_link($current + 1)); ?>" aria-label="次のページへ">
          <img src="<?php echo $dir; ?>/img/common/pagenation-next-arrow.svg" alt="">
        </a>
      <?php else : ?>
        <a class="pagination__link pagination__link--next is-disabled" href="#" aria-label="次のページへ" aria-disabled="true">
          <img src="<?php echo $dir; ?>/img/common/pagenation-next-arrow.svg" alt="">
        </a>
      <?php endif; ?>
    </li>
  </ul>
</nav>
