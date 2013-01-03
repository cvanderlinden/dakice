<?php
/**
 * @file
 */

function dakice_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' ', $breadcrumb) . '</div>';
    return $output;
  }
}

/* Set the size of the exposed filter for find a team to 3
 * 
 */

function dakice_form_alter(&$form, $form_state, $form_id)  {
    if ($form_id == 'views_exposed_form') {
      $form['field_hockey_type_tid']['#size'] = '3';
    }
  }
?>