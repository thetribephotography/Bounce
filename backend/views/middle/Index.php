<?php 

namespace backend\assets;

// use yii\web\AssetBundle;
use yii\bootstrap4\Html;
use yii\Widgets\ActiveForm;
use yii\helpers\Url;

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- <?=$this->render('../layouts/_header');?> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <div class="main-content inloginp">
 <?php $form = ActiveForm::begin([
     'id' => 'login-form',
      'options' => [
        
     ],
 ]); ?>
 
 <div class="form-group">
   <label for="">Your Username</label>
     <?php echo $form->field($model, 'username')->textInput([
         'class'=>'my-form-control', 
         'placeholder' => 'Enter Your Username'
     ])->label(false)?>
 </div>
 
 <div class="form-group">
     <label for="">Password</label>                  
    <?php echo $form ->field($model, 'password')->passwordInput([
         'class'=>'my-form-control',
         'placeholder' => 'Enter Your Password'
     ])->label(false) ?>

 </div>
 
 <p class="f-pass">
   Forgot your password? <a href="<?= Url::toRoute('site/request-password-reset');?>">click to recover password</a>
 </p>

 <div class="button-wrapper">

 <button type="submit"<?= Html::a('SIGN IN', ['/middle/reg'], ['class'=>'btn btn-primary']) ?></button>
 </div>
 <div class="or">
   <p>OR</p>
 </div>
 <div class="or-content">
   <!-- <p>Sign up with your email</p> -->
   <!-- <a href="#" class="or-btn"><img src="assets/images/google.png" alt=""> Sign Up with Google</a> -->
   <p class="or-signup">
     Don't have an account? <a href="<?php echo Url::toRoute(['site/']) ?>">
       Sign up here
     </a>
   </p>
 </div>
<?php ActiveForm::end(); ?>


</body>
</html>