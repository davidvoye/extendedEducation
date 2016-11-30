<?php

// Plugin definition
$plugin = array(
  'title' => t('Clean 25/75 with Inset'),
  'category' => t('Western EE'),
  'icon' => 'clean-25-75-inset.png',
  'theme' => 'clean-25-75-inset',
  // 'css' => '../../css/panel-layouts/clean-25-75-inset.css',
  'regions' => array(
    'left' => t('25% Left side'),
    'right' => t('75% Right side'),
    'inset' => t('Inset')
  ),
);
