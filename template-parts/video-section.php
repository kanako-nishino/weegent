<?php
/**
 * 「動画で見る、Weegentの品質」セクション。
 * 表示する動画は管理画面「動画 > ページごとの表示設定」で、'page' 引数のページごとに選ぶ。
 * 未選択の場合は新着の video 投稿3件を自動表示する(weegent_get_featured_posts() 参照)。
 * カードはYouTubeの動画ページへ別タブで遷移する。動画が1件もない場合はセクションごと出力しない。
 *
 * 呼び出し例:
 *   get_template_part('template-parts/video-section', null, ['page' => 'inbound', 'modifier' => 'inbound']);
 */
$modifier = ! empty($args['modifier']) ? ' video-section--' . $args['modifier'] : '';
$dir = get_template_directory_uri();
$videos = weegent_get_featured_posts('video', $args['page'] ?? 'top', 3);
if (! $videos) {
    return;
}
$channel_url = weegent_youtube_channel_url();
?>
<section class="video-section<?php echo esc_attr($modifier); ?> section-space section-wave" id="video">
  <div class="inner inner--content">
    <div class="section-layout">
      <div class="section-head section-layout__head">
        <h2 class="section-head__title">動画で見る、<br>Weegentの品質</h2>
        <p class="section-head__description">
          私たちの考え方・営業現場のリアル・支援の進め方を、<br class="pc">
          動画でご覧いただけます。
        </p>
      </div>

      <ul class="section-layout__body video-list">
        <?php foreach ($videos as $video) :
            $card = weegent_get_video_card($video);
            if (! $card['url']) {
                continue;
            }
            ?>
          <li class="video-list__item">
            <article class="video-card">
              <a class="video-card__link" href="<?php echo esc_url($card['url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr($card['title']); ?>をYouTubeで再生する">
                <div class="video-card__thumbnail">
                  <div class="video-card__thumbnail-inner">
                    <?php if ($card['thumbnail_id']) : ?>
                      <?php echo wp_get_attachment_image($card['thumbnail_id'], 'large', false, [
                          'alt' => $card['title'] . 'のサムネイル',
                          'sizes' => '(min-width: 768px) 33vw, 100vw',
                      ]); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url($card['thumbnail_url']); ?>" alt="<?php echo esc_attr($card['title']); ?>のサムネイル" loading="lazy" decoding="async">
                    <?php endif; ?>
                  </div>
                  <span class="video-card__play" aria-hidden="true"></span>
                </div>
                <h3 class="video-card__title"><?php echo esc_html($card['title']); ?></h3>
                <?php if ($card['channel']) : ?>
                  <p class="video-card__channel"><?php echo esc_html($card['channel']); ?></p>
                <?php endif; ?>
              </a>
            </article>
          </li>
        <?php endforeach; ?>
      </ul>

      <a class="section-layout__button c-button video-section__button" href="<?php echo esc_url($channel_url ?: '#'); ?>"<?php echo $channel_url ? ' target="_blank" rel="noopener noreferrer"' : ''; ?>>
        <span class="c-button__content">
          <img src="<?php echo $dir; ?>/img/common/icon-youtube.svg" alt="">
          <span>YouTubeチャンネルを見る</span>
        </span>
        <img src="<?php echo $dir; ?>/img/common/button-icon-navy.svg" alt="">
      </a>
    </div>
  </div>
</section>
