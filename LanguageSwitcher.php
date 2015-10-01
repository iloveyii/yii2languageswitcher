<?php
namespace app\extensions\widgets;
use Yii;
use yii\base\Widget;

class LanguageSwitcher extends Widget
{
    public function init(){
        LangAssets::register($this->view);
    }

    public function run()
    {
        $currentLang = Yii::$app->language;

        $allLanguages = Yii::$app->params['languages'];
        $url = urldecode(Yii::$app->request->absoluteUrl);
        
        echo $this->render('languageSwitcher', ['currentLang'=>$currentLang, 'languages'=>$allLanguages, 'url'=>$url]);
    }
}