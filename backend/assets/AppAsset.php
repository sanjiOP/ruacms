<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web/themes';
    public $css = [
        'easyui/themes/default/easyui.css',
        'easyui/themes/icon.css',
        'rua/css/rua.css',
    ];
    public $js = [
        'easyui/jquery.min.js',
        'easyui/jquery.easyui.min.js',
    ];
    public $depends = [];

    //定义按需加载JS方法，注意加载顺序在最后
    public function addScript($view, $jsfile) {
        $view->registerJsFile($this->baseUrl . $jsfile, [AppAsset::className(), 'depends' => 'backend\assets\AppAsset']);
    }
    //定义按需加载css方法，注意加载顺序在最后
    public function addCss($view, $cssfile) {
        $view->registerCssFile($this->baseUrl . $cssfile, [AppAsset::className(), 'depends' => 'backend\assets\AppAsset']);
    }

}
