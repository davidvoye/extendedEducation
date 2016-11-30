<?php

/**
 * @file
 * Uses field-collection-item.tpl.php as a base
 *
 * Fields available
 *  field_title
 *  field_date_s_
 *
 */
?>
<div class="important-dates__item">
  <div class="important-dates__title">
    <?php print render($content['field_title']); ?>
  </div>
  <div class="important-dates__date">
    <?php print render($content['field_date_s_']); ?>
  </div>
</div>
