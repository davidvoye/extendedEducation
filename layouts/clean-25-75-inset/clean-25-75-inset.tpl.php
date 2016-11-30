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

<?php if($content['left']): ?>
  <div class="wwu-ee-25-percent-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  	<?php print $content['left']; ?>
  </div>
<?php endif; ?>

<?php $className = ($content['left']) ? "wwu-ee-75-percent-right-column": "wwu-ee-100-percent-column"; ?>
<div class="<?php print $className ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if($content['inset']): ?>
    <div class="wwu-ee-75-percent-inset" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['inset']; ?>
    </div>
  <?php endif; ?>
  <?php print $content['right']; ?>
</div>
