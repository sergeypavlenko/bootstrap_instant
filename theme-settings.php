<?php
/**
 * @file
 * theme-settings.php
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function bootstrap_instant_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  $form['instant_vertical_tabs'] = array(
    '#type' => 'vertical_tabs',
    '#prefix' => '<h2><small>' . t('Instant settings') . '</small></h2>',
  );

  $form['header'] = array(
    '#type' => 'fieldset',
    '#title' => t('Site header'),
    '#group' => 'instant_vertical_tabs',
  );

  $fields = field_info_instances('node', 'article');

  array_walk($fields, function(&$field) {
    $field = $field['field_name'];
  });

  $form['header']['header_image'] = array(
    '#type' => 'select',
    '#title' => t('Header image'),
    '#options' => $fields,
    '#description' => t('The field must be created for all types of material.'),
    '#default_value' => theme_get_setting('header_image'),
  );

  $form['header']['front_header_line1'] = array(
    '#type' => 'textfield',
    '#title' => t('First line'),
    '#default_value' => theme_get_setting('front_header_line1'),
  );

  $form['header']['header_line1'] = array(
    '#type' => 'select',
    '#title' => t('Field for first line'),
    '#options' => $fields,
    '#default_value' => theme_get_setting('header_line1'),
  );

  $form['header']['front_header_line2'] = array(
    '#type' => 'textfield',
    '#title' => t('Second line'),
    '#default_value' => theme_get_setting('front_header_line2'),
    '#description' => t('Field for second line is title.'),
  );

  $form['header']['front_header_line3'] = array(
    '#type' => 'textfield',
    '#title' => t('Third line'),
    '#default_value' => theme_get_setting('front_header_line3'),
  );

  $form['header']['header_line3'] = array(
    '#type' => 'select',
    '#title' => t('Field for third line'),
    '#options' => $fields,
    '#default_value' => theme_get_setting('header_line3'),
  );

  $form['social_buttons'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social buttons'),
    '#group' => 'instant_vertical_tabs',
  );

  $form['social_buttons']['social_dribbble'] = array(
    '#type' => 'textfield',
    '#title' => t('Dribbble'),
    '#default_value' => theme_get_setting('social_dribbble'),
  );

  $form['social_buttons']['social_facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#default_value' => theme_get_setting('social_facebook'),
  );

  $form['social_buttons']['social_twitter'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter'),
    '#default_value' => theme_get_setting('social_twitter'),
  );

  $form['social_buttons']['social_linkedin'] = array(
    '#type' => 'textfield',
    '#title' => t('Linkedin'),
    '#default_value' => theme_get_setting('social_linkedin'),
  );

  $form['social_buttons']['social_instagram'] = array(
    '#type' => 'textfield',
    '#title' => t('Instagram'),
    '#default_value' => theme_get_setting('social_instagram'),
  );

  $form['social_buttons']['social_tumblr'] = array(
    '#type' => 'textfield',
    '#title' => t('Tumblr'),
    '#default_value' => theme_get_setting('social_tumblr'),
  );
}
