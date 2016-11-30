<?php

/**
  * Uses paragraphs-item.tpl.php
 */
?>
<div class=" equal-height <?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content); ?>
  </div>
</div>
