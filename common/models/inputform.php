<?php

namespace common\models;

use Yii;
use yii\base\Model;



class InputForm extends Model{
    public $productname;
    public $buyprice;
    public $sellprice;
    public $description;


    public function attributeLabels()
   {  return[
        'productname' => 'Productname',
        'buyprice' => 'Buyprice',
        'sellprice' => 'Sellprice',
        'description' => 'Description',
        'date' => 'Date'
       ];    
    }
}