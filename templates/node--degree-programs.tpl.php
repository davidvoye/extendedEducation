<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
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

  <div class="page-intro">
    <h1 class="page-intro__title">
      <?php print $title; ?>
    </h1>
    <div class="page-intro__description">
      <?php print render($content['body']); ?>
    </div>
  </div>

  <div class="sticky-nav__wrapper sticky-nav__wrapper--negative-bottom">
    <nav class="sticky-nav">
      <ul>
        <li><a href="#about" class="is-active">About</a></li>
      <?php if (isset($content['field_dp_profession'])) : ?>
        <li><a href="#profession">The Profession</a></li>
      <?php endif; ?>
      <?php if (isset($content['field_dp_outcome'])) : ?>
        <li><a href="#outcomes">Outcomes</a></li>
      <?php endif; ?>
      <?php if (isset($content['field_dp_curriculum'])) : ?>
        <li><a href="#curriculum">Curriculum</a></li>
      <?php endif; ?>
        <li><a href="#admissions">Admissions</a></li>
        <li><a href="#info">Request Information</a></li>
      </ul>
    </nav>
  </div>

  <div class="full-width">
    <div id="about" class="full-width__inside sticky-nav-section">
      <div class="program-intro wwu-ee-75-percent-left-column">
        <?php print render($content['field_image']); ?>
        <h2>About our Program</h2>
        <?php print render($content['field_dp_about']); ?>
      </div>
      <div class="wwu-ee-25-percent-right-column program-info">
        <h3 class="program-info__title"><?php print t('At a Glance'); ?></h3>
        <?php if (isset($content['field_area_of_study'])): ?>
          <div class="program-info__item">
            <h4 class="program-info__item-title"><?php print t('Area of Study'); ?></h4>
            <p><?php print render($content['field_area_of_study']); ?></p>
          </div>
        <?php endif; ?>
        <?php if (isset($content['field_tr_audience'])): ?>
          <div class="program-info__item">
            <h4 class="program-info__item-title"><?php print t('Who It\'s For'); ?></h4>
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
        <?php if (isset($content['field_format'])): ?>
          <div class="program-info__item">
            <h4 class="program-info__item-title"><?php print t('Format'); ?></h4>
            <p><?php print render($content['field_format']); ?></p>
          </div>
        <?php endif; ?>
        <?php if (isset($content['field_number_of_courses'])): ?>
          <div class="program-info__item">
            <h4 class="program-info__item-title"><?php print t('Number of Credits'); ?></h4>
            <p><?php print render($content['field_number_of_courses']); ?></p>
          </div>
        <?php endif; ?>
        <?php if (isset($content['field_length'])): ?>
          <div class="program-info__item">
            <h4 class="program-info__item-title"><?php print t('Length'); ?></h4>
            <p><?php print render($content['field_length']); ?></p>
          </div>
        <?php endif; ?>
        <?php if (isset($content['field_tr_location'])): ?>
          <div class="program-info__item">
            <h4 class="program-info__item-title"><?php print t('Locations Offered'); ?></h4>
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

        <?php if ($content['field_is_online']['#items'][0]['value']==1): ?>
          <div class="program-list__online">
            <p>Online</p>
          </div>
        <?php endif; ?>


        <?php if (isset($content['field_tuition_cost'])) : ?>
        <div class="program-info__item">
          <h4 class="program-info__item-title"><?php print t('Tuition Cost'); ?></h4>
          <p><?php print render($content['field_tuition_cost']); ?></p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php if (isset($content['field_dp_profession'])) : ?>
  <div id="profession" class="degree-content sticky-nav-section">
    <h2 class="degree-content__title"><?php print t('The Profession'); ?></h2>
    <?php print render($content['field_dp_profession']); ?>
  </div>
<?php endif; ?>

<?php if (isset($content['field_dp_outcome'])) : ?>
  <div id="outcomes" class="degree-content sticky-nav-section">
    <h2 class="degree-content__title"><?php print t('Outcomes'); ?></h2>
    <?php print render($content['field_dp_outcome']); ?>
  </div>
<?php endif; ?>

  <?php // uses ds-1col--field-collection-item--field-testimonial.tpl.php ?>
  <?php print render($content['field_testimonial']); ?>

<?php if (isset($content['field_dp_curriculum'])) : ?>
  <div id="curriculum" class="degree-content sticky-nav-section">
    <h2 class="degree-content__title"><?php print t('Curriculum'); ?></h2>
    <?php print render($content['field_dp_curriculum']); ?>
  </div>
<?php endif; ?>

  <hr class="hr--ee" />

  <div id="admissions" class="sticky-nav-section">
    <h2 class="degree-content__title"><?php print t('Admissions'); ?></h2>
    <div class="split-block equal-height">
      <div class="split-block__left equal-height__item">
        <h3 class="split-block__title"><?php print t('Next Steps'); ?></h3>
        <?php print render($content['field_ready_to_enroll']); ?>
      </div>
      <div class="split-block__right split-block__right--center equal-height__item">
        <h3 class="split-block__title"><?php print t('Important Dates'); ?></h3>
        <div class="important-dates">
          <?php print render($content['field_dp_important_dates']); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="full-width full-width--narrow full-width--negative-top full-width--negative-bottom">
    <div id="info" class="full-width__inside sticky-nav-section">
      <h2 class="u-no-margin-top"><?php print t('Contact'); ?></h2>
        <?php print render($content['field_program_contact']); ?>
        <?php print render($content['field_dp_contact']); ?>
    </div>
  </div>

</article>
