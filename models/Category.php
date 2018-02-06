<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.01.18
 * Time: 16:24
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['parent' => 'id']);
    }


}