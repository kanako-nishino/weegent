<?php
/**
 * パンくずリスト。
 * Breadcrumb NavXT(bcn_display)が有効な場合はプラグイン側の出力を使う。
 * 未導入時は $args['items'] を使って静的サイトと同じマークアップにフォールバックする
 * (.breadcrumb__list / .breadcrumb__item の構造でCSSデザインを維持するため)。
 *
 * $args['items']: [['label' => 'TOP', 'url' => home_url('/')], ..., ['label' => '現在のページ']]
 *                  最後の要素がURLを持っていても現在ページとしてリンクなし表示になる。
 * $args['current_class']: 最後の<li>に追加するクラス(長いタイトルの省略表示用など)
 *
 * 呼び出し例:
 *   get_template_part('template-parts/breadcrumb', null, [
 *       'items' => [
 *           ['label' => 'TOP', 'url' => home_url('/')],
 *           ['label' => '会社情報'],
 *       ],
 *   ]);
 */
$items = $args['items'] ?? [];
$current_class = $args['current_class'] ?? '';
?>
<div class="sub-hero__breadcrumb-area">
  <?php if (function_exists('bcn_display')) : ?>
    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
      <?php bcn_display(); ?>
    </div>
  <?php elseif (!empty($items)) : ?>
    <nav class="breadcrumb" aria-label="パンくずリスト">
      <ol class="breadcrumb__list">
        <?php
        $last_index = count($items) - 1;
        foreach ($items as $i => $item) :
            $is_last = ($i === $last_index);
            $li_class = 'breadcrumb__item' . ($is_last && $current_class ? ' ' . $current_class : '');
            ?>
          <li class="<?php echo esc_attr($li_class); ?>"<?php echo $is_last ? ' aria-current="page"' : ''; ?>>
            <?php if (!$is_last && !empty($item['url'])) : ?>
              <a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['label']); ?></a>
            <?php else : ?>
              <?php echo esc_html($item['label']); ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ol>
    </nav>
  <?php endif; ?>
</div>
