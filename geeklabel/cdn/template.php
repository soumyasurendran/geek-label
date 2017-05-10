<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

  drupal_add_js('sites/all/themes/geeklabel/cdn/js/owl.carousel.min.js');
  drupal_add_js('http://maps.google.com/maps/api/js?sensor=true', 'external');
  drupal_add_js('https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js', 'external');
  drupal_add_js('sites/all/themes/geeklabel/cdn/js/gmaps.js', array('type' => 'file', 'scope' => 'footer')); 
  drupal_add_js('sites/all/themes/geeklabel/cdn/js/script.js', array('type' => 'file', 'scope' => 'footer')); 


  function geeklabel_form_alter(&$form, &$form_state, $form_id) {
  if (!empty($form['actions']) && $form['actions']['submit']) {
    $form['actions']['submit']['#attributes'] = array('class' => array('btn', 'btn-default', 'btn-pink'));
  }
}

  ?>
