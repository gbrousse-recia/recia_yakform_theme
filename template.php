<?php
function yaktheme_reciaform_preprocess_page(&$variables) {
    echo $_SERVER['SERVER_NAME'];
    switch($_SERVER['SERVER_NAME']){
        //test cases
        case 'test-lycee.giprecia.net':
            drupal_add_css(drupal_get_path('theme', 'yaktheme_recia') .'css/sub/ent.css');
            break;
        case 'test-clg18.giprecia.net':
            drupal_add_css(drupal_get_path('theme', 'yaktheme_recia') .'css/sub/recia.css');
            break;
        //prod cases
        case 'ent.recia.fr':
            drupal_add_css(drupal_get_path('theme', 'yaktheme_recia') .'css/sub/recia.css');
            break;
    }
    $variables['styles'] = drupal_get_css();
    print_r($variables['styles']);
}