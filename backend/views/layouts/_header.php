<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helper\Url;

AppAsset::register($this);

NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,  
        'options' => [
            'class' => 'navbar navbar-expand-md fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Log-In', 'url' => ['/site/index']],
        
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(  ['/middle/reg'],
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>