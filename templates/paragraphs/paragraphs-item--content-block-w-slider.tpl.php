<?php

/**
  * Uses paragraphs-item.tpl.php
  * Fields in $content:
  *  pp_title
  *  pp_body
  *  field_slide
 */
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <div class="slider-block">
      <div class="slider-block__content">
        <h2 class="slider-block__title"><?php print render($content['pp_title']); ?></h2>
        <?php print render($content['pp_body']); ?>
      </div>
      <?php print render($content['field_slide']); ?>
    </div>
  </div>
</div>
