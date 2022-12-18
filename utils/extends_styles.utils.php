<?php function extends_styles($styles = []) { ?>
  <?php foreach ($styles as $key => $value): ?>
    <link
      rel="stylesheet"
      href="<?php echo assets( 'css', "{$value}.css" ); ?>"
    />
  <?php endforeach ?>
<?php } ?>