<?php 

namespace backend\assets;
namespace backend\controllers;
namespace backend\controller\MiddleController;

use yii\web\AssetBundle;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\Widgets\ActiveForm;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="button-wrapper">
<button type="submit"<?= Html::a('INPUT', ['/middle/input'], ['class'=>'btn btn-primary'])?> </button>
</div>

<div class="button-wrapper-2">
<button type="submit" <?= Html::a('OUTPUT', ['/middle/input'], ['class'=>'btn btn-primary'])?> </button>
</div>
</body>
</html>