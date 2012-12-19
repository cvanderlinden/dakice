<div id="content" <?php print $attributes; ?>>
  
  <?php if (isset($page['content-header'])) : ?>
    <?php print render($page['content-header']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['breadcrumb'])) : ?>
    <?php print render($page['breadcrumb']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['content-top'])) : ?>
    <?php print render($page['content-top']); ?>
  <?php endif; ?>
  
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
  
  <?php if (isset($page['content-bottom'])) : ?>
    <?php print render($page['content-bottom']); ?>
  <?php endif; ?>
  
</div>