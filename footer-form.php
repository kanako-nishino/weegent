  <footer class="form-footer">
    <div class="form-footer__inner inner inner--content">
      <a class="form-footer__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Weegent トップページへ"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="Weegent"></a>
      <small>&copy; <time datetime="<?php echo esc_attr(date('Y')); ?>"><?php echo esc_html(date('Y')); ?></time> Weegent Inc.</small>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>
