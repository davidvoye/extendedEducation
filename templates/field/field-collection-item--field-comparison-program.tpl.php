<?php

/**
 * @file
 * Default theme implementation for field collection items.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) field collection item label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<a class="content-block__link" href="<?php print $content['field_link']['#items'][0]['url']; ?>">
  <div class="program-comparison__item <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="content program-list"<?php print $content_attributes; ?>>
      <figure class="program-comparison__image">
        <?php print render($content['field_image']); ?>
      </figure>
      <div class="program-comparison__info">
        <h2 class="program-comparison__title"><?php print render($content['field_title'][0]['#markup']); ?></h2>
        <?php print render($content['field_content']); ?>
      </div>
      <?php if (isset($content['field_tr_audience'])) :?>
        <div class="program-comparison__section program-comparison__audience">
          <h3><?php print t('Audience') ?></h3>
          <ul>
            <?php
            $audiences = explode("/", $content['field_tr_audience'][0]['#markup']);
            foreach ($audiences as $audience) {
              print('<li>'.$audience.'</li>');
            }
            ?>
          </ul>
        </div>
      <?php endif; ?>
      <?php if (isset($content['field_requirements'])) :?>
        <div class="program-comparison__section program-comparison__requirements">
          <h3><?php print t('Requirements') ?></h3>
          <?php print render($content['field_requirements']) ?>
        </div>
      <?php endif; ?>
      <?php if (isset($content['field_tr_location'])) :?>
        <div class="program-comparison__section program-comparison__location">
          <h3><?php print t('Location') ?></h3>
          <ul>
            <?php
            $locations = explode("/", $content['field_tr_location'][0]['#markup']);
            foreach ($locations as $location) {
              print('<li>'.$location.'</li>');
            }
            ?>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </div>
</a>
