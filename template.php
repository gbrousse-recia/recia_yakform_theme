<?php
function template_preprocess_page(&$variables) {
    switch($_SERVER['SERVER_NAME']){
        //test cases
        case 'test-lycee.giprecia.net':
            drupal_add_css('css/sub/ent.css');
            break;
        case 'test-clg18.giprecia.net':
            drupal_add_css('css/sub/recia.css');
            break;
        //prod cases
        case 'ent.recia.fr':
            drupal_add_css('css/sub/recia.css');
            break;

    }
    $variables['styles'] = drupal_get_css();
}