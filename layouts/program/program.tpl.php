<?php
/**
 * @file
 * Template for a layout with a 25% column on the left and a 25% column on the left, with a 100% column below.
 *
 * This template provides a two column panel display layout for Programs with minimal markup.
 * Created by Colin Calnan
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom column.
 */
?>
<div class="program">
  <div class="wwu-ee-25-percent-left-column">
    <?php print $content['left']; ?>
  </div>

  <div class="wwu-ee-75-percent-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <div class="clearfix">
      <div class="wwu-ee-75-percent-left-column program__intro" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
        <?php print $content['header-left']; ?>
      </div>
      <div class="wwu-ee-25-percent-right-column program--info" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
        <h2 class="program--info__title"><?php print t('At a Glance'); ?></h2>
        <?php print $content['header-right']; ?>
      </div>
    </div>
    <div class="wwu-ee-100-percent-column program--body" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom']; ?>
    </div>
  </div>
</div>
