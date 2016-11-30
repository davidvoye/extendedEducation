Western Washington College Theme
For Drupal built from the Zen Drupal Theme
wwuzen is the theme name
----------------------

You'll want to add:
  - theme-settings.php:
    After line 25:
    $form['theme_settings']['department_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Department Name'),
      '#description' => t("Enter the name of the department to which this Dual theme is assigned."),
      '#default_value' => theme_get_setting('department_name'),
    );
  - page.tpl.php:
    After line 120:
    <?php if ($department_name): ?>
    <p><span><?php print $department_name; ?></span></p>
    <?php endif; ?>
  - template.php:
    After line 155:
    $variables['department_name'] = theme_get_setting('department_name');

  
