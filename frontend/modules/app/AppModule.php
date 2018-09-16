<?php

namespace frontend\modules\app;

/**
 * app module definition class
 */
class AppModule extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\app\controllers';

    public $layout = 'pages';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
