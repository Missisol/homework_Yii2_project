<?php
/**
 * Created by PhpStorm.
 * User: MARINA
 * Date: 10.01.2019
 * Time: 23:50
 */

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
    $model->category = 'hardware';
    $model->price = '500';

    $product = [
      'id' => 123,
      'name' => 'second_product',
      'category' => 'software',
      'price' => 1000,
    ];

      return $this->render('index', [
        'product' => $product,
        'model' => $model,
      ]);
  }
}