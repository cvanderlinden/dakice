<?php
/**
 * @file
 */

function p_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    str_replace("»", "", $breadcrumb);
    return $breadcrumb;
  }
}
?>