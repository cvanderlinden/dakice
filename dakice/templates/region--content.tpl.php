<div id="content" <?php print $attributes; ?>>
    
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