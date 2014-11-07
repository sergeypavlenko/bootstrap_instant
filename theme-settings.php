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
}
