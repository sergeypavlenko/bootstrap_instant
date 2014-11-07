<?php
/**
 * @file
 * theme-settings.php
 */

/**
 * Prameter definitions for Bootstrap Instant.
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

  $form['front_header'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header on home page'),
    '#group' => 'instant_vertical_tabs',
  );

  $form['front_header']['front_header_line1'] = array(
    '#type' => 'textfield',
    '#title' => t('First line'),
    '#default_value' => theme_get_setting('front_header_line1'),
  );

  $form['front_header']['front_header_line2'] = array(
    '#type' => 'textfield',
    '#title' => t('Second line'),
    '#default_value' => theme_get_setting('front_header_line2'),
  );

  $form['front_header']['front_header_line3'] = array(
    '#type' => 'textfield',
    '#title' => t('Third line'),
    '#default_value' => theme_get_setting('front_header_line3'),
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
