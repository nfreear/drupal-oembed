<div class="oembed">
  <?php if (!empty($title)): ?>
    <?php print l($title, $original_url, array('absolute' => TRUE, 'attributes' => array('class' => 'oembed-title'))); ?>
  <?php endif; ?>
  <span class="oembed-content oembed-rich"><?php print $embed->html; ?></span>
</div>