<div id="content" <?php print $attributes; ?>>
  
  <?php if (isset($page['contentheader'])) : ?>
    <?php print render($page['contentheader']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['breadcrumb'])) : ?>
    <?php print render($page['breadcrumb']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['contenttop'])) : ?>
    <?php print render($page['contenttop']); ?>
  <?php endif; ?>
  
  <div<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
  
  <?php if (isset($page['contentbottom'])) : ?>
    <?php print render($page['contentbottom']); ?>
  <?php endif; ?>
  
</div>