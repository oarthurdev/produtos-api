<?php

namespace app\controllers;

class CategoryController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Category';   
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
