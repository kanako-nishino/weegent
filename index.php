<?php get_header(); ?>

<main>
  <div class="inner inner--content section-space">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>コンテンツが見つかりませんでした。</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
