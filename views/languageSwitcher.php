<?php
   use yii\helpers\Html;
  ?>

<?php 

    $str = '<ul class="navbar-nav nav" style="float:right;">';
    $lastElement = end($languages);
    $scriptUrl = urldecode(Yii::$app->request->scriptUrl);
    // remove index.php
    $scriptUrl = str_replace('index.php', '', $scriptUrl);
    foreach($languages as $key=>$lang) {
        if($key != $currentLang) {
            $str .= '<li class="lang-switcher">'.Html::a("<i class='{$lang}'></i>", str_replace($scriptUrl, $scriptUrl."$lang/", $url)).'</li>';
        } else {
            $str .= '<li class="lang-switcher">'.Html::a("<i class='{$lang}'></i>", str_replace($scriptUrl, $scriptUrl."$lang/", $url)).'</li>';
        }
    }
    
    $str .= '</ul>';
    echo $str;
 ?>
    