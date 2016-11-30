<?php

/**
 * Uses paragraphs-item.tpl.php
 *
 * Fields in $content:
 *  field_image
 *  field_title
 *  field_summary
 *  field_link
 *
 */
?>
<div class="content-block equal-height__item <?php if (isset($content['field_image'])){ ?> has-image <?php } ?> <?php print $classes; ?>"<?php print $attributes; ?>>

<?php if ($content['field_link']): ?>
  <a 
    class="content-block__link" 
    href="<?php print render($content['field_link']); ?>"
    <?php 
    $attributes = $content['field_link']['#items'][0]['attributes'];
    if(count($attributes) > 0):
      foreach($attributes as $attribute => $value):
        print $attribute .'="'. $value .'" ';
      endforeach;
    endif;
    ?>
  >
<?php endif; ?>

  <?php if (isset($content['field_image'])): ?>
    <figure class="content-block__figure">
      <?php print render($content['field_image']); ?>
    </figure>
  <?php endif; ?>

  <h2 class="content-block__title"><?php print render($content['field_title'][0]['#markup']); ?></h2>

  <div class="content-block__summary">
    <?php print render($content['field_summary']); ?>
  </div>

<?php if ($content['field_link']): ?>
  </a>
<?php endif; ?>

</div>
