<div<?php print $attributes; ?> id="pagetpl-wrapper">
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
  <div class="region region-content-header">
    <div id="content-header">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

      <div class="btn-group">
        <a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
        <a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
        <a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
        <a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
      </div>

      <?php if ($messages): ?>
        <div id="messages">
          <div class="section clearfix">
            <?php print $messages; ?>
          </div>
        </div>
      <?php endif; ?>

    </div>
    
      <?php if ($breadcrumb) { print $breadcrumb; } ?>
    
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    
  </div>

<?php if (isset($page['content'])) : ?>
  <?php print render($page['content']); ?>
<?php endif; ?>

<?php if (isset($page['footer'])) : ?>
  <?php print render($page['footer']); ?>
<?php endif; ?>
</div>
