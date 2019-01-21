<?php

namespace app\controllers;

use app\models\Product;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\web\Controller;

class TestController extends Controller
{
  public function actionIndex()
  {
    $model = new Product(
      ['id' => 555, 'name' => ' <a> first</a> ', 'price' => 1000, 'created_at' => 142356]
    );

    $model->setScenario(Product::SCENARIO_DEFAULT);

    $model->validate();
//    return VarDumper::dumpAsString($model->activeAttributes(), 5, true); // 'name', 'id', 'price'
    return VarDumper::dumpAsString($model->safeAttributes(), 5, true); // 'id', 'price'



//    $data = \Yii::$app->test->run();

      return $this->render('index', [
        'model' => $model,
//        'data' => $data,
      ]);
  }
}