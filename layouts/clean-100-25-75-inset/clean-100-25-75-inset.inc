<?php

// Plugin definition
$plugin = array(
  'title' => t('Clean 100/25/75 with Inset'),
  'category' => t('Western EE'),
  'icon' => 'clean-100-25-75-inset.png',
  'theme' => 'clean-100-25-75-inset',
  'css' => '../../css/panel-layouts/clean-100-25-75-inset.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('25% Left side'),
    'right' => t('75% Right side'),
    'inset' => t('Inset')
  ),
);