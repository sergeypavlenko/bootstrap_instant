<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_preprocess_html().
 */
function bootstrap_instant_preprocess_html(&$variables) {
  $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1',
    ),
  );

  drupal_add_html_head($viewport, 'viewport');
}

/**
 * Implements hook_preprocess_page().
 */
function bootstrap_instant_preprocess_page(&$variables) {
  $variables['header_box'] = '';

  if (isset($variables['node'])) {
    $node = $variables['node'];

    if (isset($node->field_header_image['und'][0]['uri'])) {
      $header_image = $node->field_header_image['und'][0]['uri'];
      $image_url = file_create_url($header_image);
      drupal_add_css('#headerwrap { background: url(' . $image_url . ') no-repeat center top; -webkit-background-size: 100%; -moz-background-size: 100%; -o-background-size: 100%; background-size: 100%; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; }', array(
        'type' => 'inline',
        'weight' => 0,
        'group' => CSS_THEME,
      ));
    }

    if ($node->type == 'article') {
      $title = $node->title;

      if (isset($node->field_project_role['und'][0]['safe_value'])) {
        $role = $node->field_project_role['und'][0]['safe_value'];
      }

      if (isset($node->field_project_type['und'][0]['safe_value'])) {
        $type = $node->field_project_type['und'][0]['safe_value'];
      }
    }
  }

  if (!isset($title) && drupal_is_front_page()) {
    $type = theme_get_setting('front_header_line1');
    $title = theme_get_setting('front_header_line2');
    $role = theme_get_setting('front_header_line3');
  }

  if (isset($title)) {
    $header = '<h4>' . (isset($type) ? $type : '') . '</h4>
      <h1>' . $title . '</h1>
      <h4>' . (isset($role) ? $role : '') . '</h4>';

    $variables['header_box'] = $header;
  }

  $social_name = array(
    'dribbble',
    'facebook',
    'twitter',
    'linkedin',
    'instagram',
    'tumblr',
  );

  $social_url = array();

  foreach ($social_name as $name) {
    $url = url(theme_get_setting('social_' . $name));

    $social_url[$name] = $url;
  }

  $variables['social_button'] = $social_url;
}
