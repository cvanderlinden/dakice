<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['search'])) : ?>
    <?php print render($page['search']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['usernav'])) : ?>
    <?php print render($page['usernav']); ?>
  <?php endif; ?>

  <?php if (isset($page['sidebar'])) : ?>
    <?php print render($page['sidebar']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>
