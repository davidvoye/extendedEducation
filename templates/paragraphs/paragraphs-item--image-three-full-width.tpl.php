<?php

/**
  * Uses paragraphs-item.tpl.php
  * Fields in $content
  *   field_image_1
  *   field_image_2
  *   field_image_3
 */
?>
<div class=" image-block image-block--3 <?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <div class="image-block__left">
      <figure>
        <?php print render($content['field_image_1']); ?>
      </figure>
    </div>
    <div class="image-block__right">
      <figure>
        <?php print render($content['field_image_2']); ?>
      </figure>
      <figure>
        <?php print render($content['field_image_3']); ?>
      </figure>
    </div>
  </div>
</div>
