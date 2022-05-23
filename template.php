<?php

function yaktheme_reciaform_theme(){
    return [
        'recia_footer_gip' => [
            'template' => 'footer-gip',
            'path'=> path_to_theme().'/templates'
        ]
    ];
}

function yaktheme_reciaform_preprocess_page(&$variables) {
    $domainCss = '';
    $variables['recia_footer']=false;
    $variables['yakform_reciaform_path']=path_to_theme();
    switch($_SERVER['SERVER_NAME']){
        //test cases
        case 'test-lycee.giprecia.net':
        case 'test-clg18.giprecia.net':
            $domainCss = path_to_theme().'/css/sub/recia.css';
            $variables['recia_footer']=theme('recia_footer_gip');
            break;
        //prod cases
        case 'ent.recia.fr':
            $domainCss = path_to_theme().'/css/sub/recia.css';
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
    print_r($variables);
}