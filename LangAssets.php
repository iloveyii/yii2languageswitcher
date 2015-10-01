<?php

namespace app\extensions\widgets;

class LangAssets extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@app/extensions/widgets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/lang-switcher.css',
    ];
}

