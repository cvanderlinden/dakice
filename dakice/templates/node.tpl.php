<?php ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="content-header">
    <h1>
      <?php print $title; ?>
    </h1>
    <div class="btn-group">
      <a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
      <a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
      <a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
      <a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
    </div>
  </div>
  <div id="breadcrumb">
    <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <?php print theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb())); ?>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12 center" style="text-align: center;">		
        <?php print $user_picture; ?>

        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
          <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php if ($display_submitted): ?>
          <span class="submitted"><?php print $submitted ?></span>
        <?php endif; ?>

        <div class="content clearfix"<?php print $content_attributes; ?>>
          <?php
          // We hide the comments and links now so that we can render them later.
          hide($content['comments']);
          hide($content['links']);
          print render($content);
          ?>
        </div>

        <div class="clearfix">
          <?php if (!empty($content['links'])): ?>
            <div class="links"><?php print render($content['links']); ?></div>
          <?php endif; ?>

          <?php print render($content['comments']); ?>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div id="footer" class="span12">
        2010 - <?php echo date("Y"); ?> &copy; Dakice.
      </div>
    </div>
  </div>
</div>
