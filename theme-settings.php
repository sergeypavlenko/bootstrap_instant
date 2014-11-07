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
}
