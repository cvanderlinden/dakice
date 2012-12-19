<div id="content-top" <?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <?php if ($title_hidden): ?><div class="element-invisible"><?php endif; ?>
      <h1 class="title"><?php print $title; ?></h1>
      <?php if ($title_hidden): ?></div><?php endif; ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print $content; ?>
  </div>
</div>