<?php
/**
 * @file
 * Template for a layout with a 25% column on the left and a 75% column on the right as well as
 * an inset area on the right for a slideshow or other extra content.
 *
 * This template provides a two column panel display layout with minimal markup.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="panel-header clearfix">

  <div class="wwu-100-percent-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['top']; ?>
  </div>

</div>

<div class="wwu-25-percent-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['left']; ?>
</div>

<div class="wwu-75-percent-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  

  <div class="wwu-75-percent-inset" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['inset']; ?>
  </div>

  <?php print $content['right']; ?>

</div>