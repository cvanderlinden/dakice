<?php if ($content): ?>
  <div class="<?php print $classes; ?>">

    <?php if (isset($page['contenttop'])) : ?>
      <?php print render($page['contenttop']); ?>
    <?php endif; ?>

    <?php print $content; ?>

    <?php if (isset($page['contentbottom'])) : ?>
      <?php print render($page['contentbottom']); ?>
    <?php endif; ?>

  </div>
<?php endif; ?>