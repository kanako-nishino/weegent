<?php
/**
 * フォームページ・サンクスページ用のヘッダー。
 * ナビゲーションを持たないページで get_header('plain') として読み込む。
 */
get_template_part('template-parts/head');
?>

<body <?php body_class(); ?>>
  <?php get_template_part('template-parts/gatag/parts-body-gatag'); ?>
  <?php wp_body_open(); ?>
