<?php

namespace app\controllers;

use app\models\Product;
use yii\web\Controller;

class TestController extends Controller
{
  public function actionIndex()
  {
    $model = new Product();
    $model->id = 555;
    $model->name = 'first_product';
//    $model->category = 'hardware';
    $model->price = '500';

    $data = \Yii::$app->test->run();



      return $this->render('index', [
        'model' => $model,
        'data' => $data,
      ]);
  }
}