<?php

namespace cmsadmin\assets;

class Main extends \yii\web\AssetBundle
{
    public $sourcePath = '@cmsadmin/resources';

    public $js = [
        'js/cmsadmin.js',
        'js/services.js',
        /*
        'js/directives.js',
        'js/layout.js',
        'js/update.js',
        'js/create.js',
        'js/factorys.js',
        */
    ];

    public $css = [
        'css/cmsadmin.css',
        'css/cmsadmin-tags.css',
    ];

    public $depends = [
        'admin\assets\Main',
    ];
}
