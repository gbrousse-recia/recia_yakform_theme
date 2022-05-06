<?php
function yaktheme_reciaform_preprocess_page(&$variables) {
    echo $_SERVER['SERVER_NAME'];
    $domainCss = '';
    switch($_SERVER['SERVER_NAME']){
        //test cases
        case 'test-lycee.giprecia.net':
            $domainCss = path_to-theme().'css/sub/ent.css';
            break;
        case 'test-clg18.giprecia.net':
            $domainCss = path_to-theme().'css/sub/recia.css';
            break;
        //prod cases
        case 'ent.recia.fr':
            $domainCss = path_to-theme().'css/sub/recia.css';
            break;
    }
    if($domainCss!=''){
        $options = array(
        'group' => CSS_THEME,
        'preprocess' => FALSE,
        );
        drupal_add_css($domainCss, $options);
        $variables['styles'] = drupal_get_css();
    }
}