<?php
/**
 * @file
 * Template for a layout with a 25% column on the left and a 75% column on the right
 *
 * This template provides a two column panel display layout with minimal markup.
 *
 * If there is no content in the left column, the right column will take 100% of the width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>

<?php if($content['left']): ?>
  <div class="wwu-ee-25-percent-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['left']; ?>
  </div>
<?php endif; ?>

<?php $className = ($content['left']) ? "wwu-ee-75-percent-right-column": "wwu-ee-100-percent-column"; ?>
<div class="<?php print $className ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['right']; ?>
</div>
