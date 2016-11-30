<?php
/**
 * @file
 * Template for a layout with a 25% column on the left and a 25% column on the left.
 *
 * This template provides a two column panel display layout with minimal markup.
 * Edited by Nigel Packer February 2014
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="wwu-75-percent-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['left']; ?>
</div>

<div class="wwu-25-percent-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['right']; ?>
</div>
