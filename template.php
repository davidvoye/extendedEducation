<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * A QUICK OVERVIEW OF DRUPAL THEMING
 *
 *   The default HTML for all of Drupal's markup is specified by its modules.
 *   For example, the comment.module provides the default HTML markup and CSS
 *   styling that is wrapped around each comment. Fortunately, each piece of
 *   markup can optionally be overridden by the theme.
 *
 *   Drupal deals with each chunk of content using a "theme hook". The raw
 *   content is placed in PHP variables and passed through the theme hook, which
 *   can either be a template file (which you should already be familiary with)
 *   or a theme function. For example, the "comment" theme hook is implemented
 *   with a comment.tpl.php template file, but the "breadcrumb" theme hooks is
 *   implemented with a theme_breadcrumb() theme function. Regardless if the
 *   theme hook uses a template file or theme function, the template or function
 *   does the same kind of work; it takes the PHP variables passed to it and
 *   wraps the raw content with the desired HTML markup.
 *
 *   Most theme hooks are implemented with template files. Theme hooks that use
 *   theme functions do so for performance reasons - theme_field() is faster
 *   than a field.tpl.php - or for legacy reasons - theme_breadcrumb() has "been
 *   that way forever."
 *
 *   The variables used by theme functions or template files come from a handful
 *   of sources:
 *   - the contents of other theme hooks that have already been rendered into
 *     HTML. For example, the HTML from theme_breadcrumb() is put into the
 *     $breadcrumb variable of the page.tpl.php template file.
 *   - raw data provided directly by a module (often pulled from a database)
 *   - a "render element" provided directly by a module. A render element is a
 *     nested PHP array which contains both content and meta data with hints on
 *     how the content should be rendered. If a variable in a template file is a
 *     render element, it needs to be rendered with the render() function and
 *     then printed using:
 *       <?php print render($variable); ?>
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. With this file you can do three things:
 *   - Modify any theme hooks variables or add your own variables, using
 *     preprocess or process functions.
 *   - Override any theme function. That is, replace a module's default theme
 *     function with one you write.
 *   - Call hook_*_alter() functions which allow you to alter various parts of
 *     Drupal's internals, including the render elements in forms. The most
 *     useful of which include hook_form_alter(), hook_form_FORM_ID_alter(),
 *     and hook_page_alter(). See api.drupal.org for more information about
 *     _alter functions.
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   If a theme hook uses a theme function, Drupal will use the default theme
 *   function unless your theme overrides it. To override a theme function, you
 *   have to first find the theme function that generates the output. (The
 *   api.drupal.org website is a good place to find which file contains which
 *   function.) Then you can copy the original function in its entirety and
 *   paste it in this template.php file, changing the prefix from theme_ to
 *   wwuzen_. For example:
 *
 *     original, found in modules/field/field.module: theme_field()
 *     theme override, found in template.php: wwuzen_field()
 *
 *   where wwuzen is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_field() function.
 *
 *   Note that base themes can also override theme functions. And those
 *   overrides will be used by sub-themes unless the sub-theme chooses to
 *   override again.
 *
 *   Zen core only overrides one theme function. If you wish to override it, you
 *   should first look at how Zen core implements this function:
 *     theme_breadcrumbs()      in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called theme hook suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node--forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and theme hook suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440 and http://drupal.org/node/1089656
 */

function wwuzen_dual_ee_form_alter(&$form, &$form_state, $form_id) {
  if ($form['#id'] == 'views-exposed-form-program-finder-panel-pane-1') {
    if (isset($form['online'])) {
      $form['online']['#options'][1] = 'Online';
    }
    if (isset($form['credit_course'])) {
      $form['credit_course']['#options'][1] = 'Credit Course';
    }
    if (isset($form['face_to_face'])) {
      $form['face_to_face']['#options'][1] = 'Face-to-Face';
    }
    if (isset($form['hybrid'])) {
      $form['hybrid']['#options'][1] = 'Hybrid';
    }
    if (isset($form['title'])) {
      $form['title']['#attributes'] = array('placeholder' => array(t('Search Programs')));
    }
  }
}

/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function wwuzen_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  wwuzen_preprocess_html($variables, $hook);
  wwuzen_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
function wwuzen_dual_ee_preprocess_html(&$variables, $hook) {
  //Add the slide effect for our search box and wwumenu
  drupal_add_library('system','ui');

  //Add flexslider library
  libraries_load('flexslider');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */


/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */

function wwuzen_dual_ee_preprocess_page(&$variables, $hook) {
  //Render the search box variable so we can place it in the header.
  $search_box = drupal_get_form('google_appliance_block_form');
  $variables['search_box'] = drupal_render($search_box);
  $variables['department_name'] = theme_get_setting('department_name');
  $variables['inside_section'] = false;

  //Logic for the header content

  if (isset($variables['node'])) {

    $node = $variables['node'];
    $content_type = $node->type;
    $og_group_ref = field_get_items('node', $node, 'og_group_ref');

  }

  if ($variables['is_front']) {

    $variables['header_image'] = render_field('node', $node, 'field_image');

  } else if (isset($content_type) && $content_type == "program_section") {

    $variables['inside_section'] = true;
    $variables['header_title'] = $node->title;
    $variables['header_description'] = render_field('node', $node, 'field_subtitle');
    $variables['header_image'] = render_field('node', $node, 'field_image');

  } else if (isset($og_group_ref) && $og_group_ref) {

    $variables['inside_section'] = true;
    $og_node = node_load($og_group_ref[0]['target_id']);
    $variables['header_title'] = $og_node->title;
    $variables['header_description'] = render_field('node', $og_node, 'field_subtitle');
    $variables['header_image'] = render_field('node', $og_node, 'field_image');
    $variables['header_url'] = drupal_get_path_alias('node/' . $og_node->nid);

  } else {

    $variables['header_title'] = $variables['site_name'];
    $variables['header_description'] = $variables['site_slogan'];
    $variables['header_image'] = '<img src="'.$variables['logo'].'"alt="'.$variables['site_name'].'" />';
    $variables['header_url'] = base_path();

  }

}


function render_field ($entity_type , $entity , $field_name) {

    $field = field_get_items($entity_type, $entity, $field_name);
    $field_value = field_view_value($entity_type, $entity, $field_name, $field[0]);

    return drupal_render ($field_value);
}



/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function wwuzen_dual_ee_preprocess_node(&$variables, $hook) {
  // Optionally, run node-type-specific preprocess functions, like
  // wwuzen_preprocess_node_page() or wwuzen_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}

/**
 * Implements template_preprocess_node
 */
function wwuzen_dual_ee_preprocess_node_program(&$variables, $hook) {
  // Get Organic Groups from current node
  $context = og_context();
  // Get menus for that group
  $menus = og_menu_get_group_menus(
    array(
      $context['group_type'] => array($context['gid']),
    )
  );
  $menu = array_shift($menus);
  // Get the menu structure for those menus
  $tree = menu_tree_page_data($menu['menu_name'], $max_depth = 9, $only_active_trail = TRUE);
  // Make sure the second level gets spit out
  foreach($tree as $key => $m) {
    if ($m['link']['in_active_trail'] && $tree[$key]['below']) {
      $menu = menu_tree_output($tree[$key]['below']);
    }
  }
  $variables['sidebar_menu'] = drupal_render($menu);
  $variables['program_info_fields'] = array(
    'field_program_audience',
    'field_program_dates',
    'field_program_hours',
    'field_program_location',
    'field_program_tuition',
    'field_program_registration_link',
  );
  $variables['program_body_fields'] = array(
    'field_dp_curriculum',
    'field_program_schedule',
    'field_program_location_details',
    'field_program_parking',
    'field_program_cost_details',
    'field_prog_cancellation_policy',
    'field_program_scholarship',
    'field_program_testimonials2',
  );
}


/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function wwuzen_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function wwuzen_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function wwuzen_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */
