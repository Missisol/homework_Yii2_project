<?php
/**
 * Created by PhpStorm.
 * User: MARINA
 * Date: 11.01.2019
 * Time: 1:21
 */

namespace app\models;

use yii\base\Model;

class Product extends Model
{
  public $id;
  public $name;
  public $category;
  public $price;
}
