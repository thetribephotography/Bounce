<?php

namespace backend\controllers;
namespace common\models\Allcars;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\controller;
use yii\web\Response;
use common\models\LoginForm;
use common\models\InputForm;
use yii\data\Pagination;
use common\models\Allcars;
use yii\db\ActiveRecord;
use yii\base\Model;
 


class MiddleController extends controller
{     

    public function actionReg(){
        return $this->render('reg');

    }
       public function actionChoose()
       {
             $model=new LoginForm();
          return $this->render('index', compact('model'));
       }

    //   public function actionInput(){
    //         $modelinput = new inputform();
    //         return $this->render('input',['model' => $modelinput]); 
    //         if ($modelinput->load(Yii::$app->request->post())) {
    //             $modelinput-> productname = $request->post('productname');
    //             $modelinput-> buyprice = $request->post('buyprice');
    //             $modelinput-> sellprice = $request->post('sellprice');
    //             $modelinput-> description = $request->post('description');
    //             $modelinput-> date = $request->post('date');

    //             $modelinput->save();
    
    //         } 
            
        // function actionInputView(){
        //     $query = $allcars::find();  

        //     $pagination = new Pagination([
        //         'defaultPageSize' => 5,
        //         'totalCount' => $query->count(),
        //     ]);
    
        //     $allcars = $query->orderBy('name')
        //         ->offset($pagination->offset)
        //         ->limit($pagination->limit)
        //         ->all();
    
        //     return $this->render('inputview', [
        //         'allcars' => $allcars,
        //         'pagination' => $pagination,
        //     ]);
        // }


      } 
?>
