<?
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>

<?php

/*
 *
 * The default behavior of the instructor link is to display the
 * CAS username of the instructor that links to the staff profile page. This
 * code replaces the CAS username link text with the first and last name of the
 * instructor.
 *
 */

$userInfo = $content["og_group_ref"]["#object"]->field_instructor["und"][0]["entity"];

$CASName = $userInfo->name;
$firstName = $userInfo->field_preferred_name["und"][0]["value"];
$lastName = $userInfo->field_last_name["und"][0]["value"];
$fullName = $firstName . " " . $lastName;

$link = "<a href=" . base_path() . "users/" .  $CASName .  ">$fullName</a>";

?>




<?php

/*
* prints basic xenegrade page alert
*/

print views_embed_view('xenegrade_alert_view', 'embed_1');
?>



<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
  ?>

  <div class="program">
    <div class="wwu-ee-25-percent-left-column">
      <div class="menu-level-2">
        <?php print $sidebar_menu; ?>
      </div>
    </div>

    <div class="wwu-ee-75-percent-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <div class="clearfix">
        <a name="program-top"></a>
        <div class="wwu-ee-75-percent-left-column program-intro"<?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
          <?php if($content['field_image']): print render($content['field_image']); endif; ?>
          <h1><?php print $title; ?></h1>
          <?php if (array_key_exists('field_program_description',$content)): print render($content['field_program_description']); endif; ?>
          <?php if (array_key_exists('field_instructor', $content)): ?>
            <p class="instructor-field">
              <b>Instructor: </b><?php print $link; ?>
            </p>
          <?php endif; ?>
        </div>

        <div class="wwu-ee-75-percent-inset program-info" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
          <h3 class="program-info__title"><?php print t('At a Glance'); ?></h3>
          <?php foreach($program_info_fields as $field): ?>
            <?php if($content[$field]): ?>
              <div class="program-info__item program-info__item--<?php print str_replace('_', '-', str_replace('field_', '', $field)); ?>">
                <?php print render($content[$field]); ?>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="wwu-ee-100-percent-column program-body" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
        <?php foreach($program_body_fields as $field): ?>
          <?php if($content[$field]): ?>
            <div class="program-body--item program-body--item_<?php print strstr($field,'_'); ?>">
              <h2 class="program-body--title"><?php print $content[$field]['#title']; ?></h2>
              <?php print render($content[$field]); ?>
              <span class="program-body--toplink"><?php print l('Back to Top','', array('fragment' => 'program-top', 'external' => true, 'attributes' => array('class' => array('js-inner-link')))); ?></span>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
        <?php if (array_key_exists('field_program_registration_link',$content)): ?>
          <div class="program-body--item program-body--item__program_registration_link">
            <?php
              $link = $content['field_program_registration_link']['#items'][0];
              print l(t('Register For This Program'), $link['display_url'], $options = array('attributes' => $link['attributes']));
            ?>
          </div>
        <?php endif; ?>
    </div>
  </div>
</article>
