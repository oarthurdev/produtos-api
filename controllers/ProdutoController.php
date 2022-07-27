<?php

namespace app\controllers;

class ProdutoController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Produto';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
