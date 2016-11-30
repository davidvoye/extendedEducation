<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function wwuzen_dual_ee_ee_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  if ($form_state == NULL) {
    $form = array('');
  }

  $form['theme_settings']['department_name'] = array(
    '#type' => 'textfield',
    '#title' => t('Department Name'),
    '#description' => t("Extended Education"),
    '#default_value' => theme_get_setting('department_name'),
  );
  

  // Create the form using Forms API: http://api.drupal.org/api/7

  /* -- Delete this line if you want to use this setting
  $form['wwuzen_dual_ee_example'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('wwuzen_dual sample setting'),
    '#default_value' => theme_get_setting('wwuzen_dual_ee_example'),
    '#description'   => t("This option doesn't do anything; it's just an example."),
  );
  // */

  // Remove some of the base theme's settings.
  /* -- Delete this line if you want to turn off this setting.
  unset($form['themedev']['zen_wireframes']); // We don't need to toggle wireframes on this site.
  // */

  // We are editing the $form in place, so we don't need to return anything.
}
