<?php

/**
 * Plugin Name: Advanced Hooks Remover
 * Plugin URI: https://github.com/YordanSoares/advanced-hooks-remover
 * Description: Feature plugin that extends the `remove_filter()` and `remove action()` functions to allow for the removal of hooks within classes.
 * Version: 1.0
 * Author: Yordan Soares
 * Author URI: https://yordansoar.es/
 * Text Domain: advanced-hooks-remover
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 5.0
 * Tested up to: 5.5
 */

// Die if accessed directly
defined('ABSPATH') or die(__('You can not access this file directly!', 'advanced-hooks-remover'));

function desactivar_accion_desde_clase($tag, $class = '', $method, $priority = null): bool {
  global $wp_filter;

  if (isset($wp_filter[$tag])) {
    $len = strlen($method);

    foreach ($wp_filter[$tag] as $_priority => $actions) {

      if ($actions) {
        foreach ($actions as $function_key => $data) {

          if ($data) {
            if (substr($function_key, -$len) == $method) {

              if ($class !== '') {
                $_class = '';
                if (is_string($data['function'][0])) {
                  $_class = $data['function'][0];
                } elseif (is_object($data['function'][0])) {
                  $_class = get_class($data['function'][0]);
                } else {
                  return false;
                }

                if ($_class !== '' && $_class == $class) {
                  if (is_numeric($priority)) {
                    if ($_priority == $priority) {
                      //if (isset( $wp_filter->callbacks[$_priority][$function_key])) {}
                      return $wp_filter[$tag]->remove_filter($tag, $function_key, $_priority);
                    }
                  } else {
                    return $wp_filter[$tag]->remove_filter($tag, $function_key, $_priority);
                  }
                }
              } else {
                if (is_numeric($priority)) {
                  if ($_priority == $priority) {
                    return $wp_filter[$tag]->remove_filter($tag, $function_key, $_priority);
                  }
                } else {
                  return $wp_filter[$tag]->remove_filter($tag, $function_key, $_priority);
                }
              }
            }
          }
        }
      }
    }
  }
  return false;
}
