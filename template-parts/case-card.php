<?php
/**
 * 導入事例(work投稿)1件分のカード。.case-list__item の中身。
 * template-parts/case-list.php(トップ・サービスページの3件表示)と
 * archive-work.php(事例一覧ページ)の両方から呼び出す共通パーツ。
 *
 * 呼び出し例:
 *   get_template_part('template-parts/case-card', null, ['work' => $work_post]);
 */
$work = $args['work'] ?? null;
if (! $work) {
    return;
}

$dir = get_template_directory_uri();
$industry = get_field('work_industry', $work->ID);
$employee_count = get_field('work_employee_count', $work->ID);
$challenge = get_field('work_challenge', $work->ID);
$client_name = get_field('work_client_name', $work->ID);
$client_logo = get_field('work_client_logo', $work->ID);
$thumbnail = get_the_post_thumbnail_url($work, 'large') ?: $dir . '/img/case/case-01.jpg';
?>
<li class="case-list__item">
  <article class="case-card">
    <a class="case-card__link" href="<?php echo esc_url(get_permalink($work)); ?>">
      <div class="case-card__image">
        <img src="<?php echo esc_url($thumbnail); ?>" alt="導入企業の担当者様">
      </div>
      <h3 class="case-card__title"><?php echo esc_html(get_the_title($work)); ?></h3>
      <?php if ($industry || $employee_count || $challenge) : ?>
        <dl class="case-card__information">
          <?php if ($industry) : ?>
            <div class="case-card__information-row">
              <dt>業種</dt>
              <dd><?php echo esc_html($industry); ?></dd>
            </div>
          <?php endif; ?>
          <?php if ($employee_count) : ?>
            <div class="case-card__information-row">
              <dt>従業員数</dt>
              <dd><?php echo esc_html($employee_count); ?></dd>
            </div>
          <?php endif; ?>
          <?php if ($challenge) : ?>
            <div class="case-card__information-row">
              <dt>課題</dt>
              <dd><?php echo esc_html($challenge); ?></dd>
            </div>
          <?php endif; ?>
        </dl>
      <?php endif; ?>
      <?php if ($client_name || $client_logo) : ?>
        <div class="case-card__company">
          <?php if ($client_logo) : ?>
            <span class="case-card__company-logo">
              <img src="<?php echo esc_url($client_logo); ?>" alt="<?php echo esc_attr($client_name); ?>">
            </span>
          <?php endif; ?>
          <?php if ($client_name) : ?>
            <span class="case-card__company-name"><?php echo esc_html($client_name); ?></span>
          <?php endif; ?>
          <img class="case-card__icon" src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt="">
        </div>
      <?php endif; ?>
    </a>
  </article>
</li>
