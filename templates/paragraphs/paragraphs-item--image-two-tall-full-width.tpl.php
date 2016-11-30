<?php

/**
  * Uses paragraphs-item.tpl.php
  * Fields in $content
  *   field_image_1
  *   field_image_2
 */
?>
<div class=" image-block image-block--2 <?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <figure class="image-block__left">
      <?php print render($content['field_image_1']); ?>
    </figure>
    <figure class="image-block__right">
      <?php print render($content['field_image_2']); ?>
    </figure>
  </div>
</div>
