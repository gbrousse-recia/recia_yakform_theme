<?php
function yaktheme_reciaform_preprocess_page(&$variables) {
    echo $_SERVER['SERVER_NAME'].PHP_EOL;
    $domainCss = '';
    switch($_SERVER['SERVER_NAME']){
        //test cases
        case 'test-lycee.giprecia.net':
            echo 'case test-lycee.giprecia.net'.PHP_EOL;
            $domainCss = path_to_theme().'sub/ent.css';
            break;
        case 'test-clg18.giprecia.net':
            echo 'case test-clg18.giprecia.net'.PHP_EOL;
            $domainCss = path_to_theme().'sub/recia.css';
            break;
        //prod cases
        case 'ent.recia.fr':
            echo 'case ent.recia.fr'.PHP_EOL;
            $domainCss = path_to_theme().'sub/recia.css';
            break;
    }
    if($domainCss!=''){
        echo 'domain css defined : '.$domainCss.PHP_EOL;
        $options = array(
        'group' => CSS_THEME,
        'preprocess' => FALSE,
        );
        drupal_add_css($domainCss, $options);
        $variables['styles'] = drupal_get_css();
    }
}