<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.02.18
 * Time: 16:50
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function getCategories()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }
}