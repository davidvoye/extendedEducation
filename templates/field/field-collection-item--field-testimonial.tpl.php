<?php

/**
 * @file
 * Uses field-collection-item.tpl.php as a base
 *
 * Fields available
 *  field_photo
 *  field_student_name
 *  field_student_title
 *  field_student_testimonial_quote
 *
 */
?>
<div class="quote-block <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="quote-block__inside content"<?php print $content_attributes; ?>>
    <figure class="quote-block__student">
      <?php print render($content['field_photo']);?>
      <figcaption>
        <strong><?php print render($content['field_student_name']);?></strong>
        <em><?php print render($content['field_student_title']);?></em>
      </figcaption>
    </figure>
    <?php print render($content['field_student_testimonial_quote']);?>
  </div>
</div>
