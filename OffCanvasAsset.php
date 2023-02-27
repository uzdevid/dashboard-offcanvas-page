<?php

namespace dashboard\offcanvaspage;

use yii\web\AssetBundle;

class OffCanvasAsset extends AssetBundle {
    public $sourcePath = '@vendor/dashboard/offcanvas-page/assets';
    public $css = [];
    public $js = [
        'js/script.js',
    ];
    public $depends = [
        'yii\bootstrap5\BootstrapAsset',
    ];
}