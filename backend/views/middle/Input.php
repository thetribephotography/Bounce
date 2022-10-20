<?php 

namespace backend\assets;

// use yii\web\AssetBundle;
use yii\bootstrap4\Html;
use yii\Widgets\ActiveForm;
use yii\helpers\Url;

?>
 <!-- <?// 'bouncedb'-> require(__DIR__ . '/main-local.php')?> -->
<DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <!-- <? $this->render('../layouts/_header');?> -->
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
   
</head>
<body>
 <div class ="card"> 
 <div class="parameter">
      <?php $form = ActiveForm::begin(['id' => 'Input-form']);?> 
    <?= $form->field($model, 'productname')->textInput ([
        'class' => 'pname',
        'placeholder'=> 'Enter Your Product Name'
        
    ])?>

    <div class='parameter'>
    <?= $form->field($model, 'buyprice')->textInput ([
      'class' =>'pname',
      'placeholder' => 'Enter Buying Price'

    ])?>

    <div class="parameter">
    <?= $form->field($model, 'sellprice')->textInput ([
        'class'=> 'pname',
        'placeholder' => 'Enter Selling Price'
    ]) ?>
     
     <div class='parameter'>
     <?= $form->field($model, 'description' )->textInput ([
         'class'=>'pname',
         'placeholder' => 'Enter Product Description'
     ]) ?>

      <div class='parameter'>
     <?= $form->field($model, 'date' )->textInput ([
         'class'=>'pname',
         'placeholder' => 'Enter Date '
     ]) ?>


      <div class='button-wrapper'>
      <button type='submit' <?= Html::a('SUMBIT', ['/middle/inputview'])?> </button>
      </div>
 
 
 
 
 
 
 
 
 </div>
 <?php ActiveForm::end(); ?>
</body>
</html>