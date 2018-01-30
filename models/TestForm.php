<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.01.18
 * Time: 18:09
 */

namespace app\models;


use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Cat Name',
            'email' => 'Cat Email',
            'text' => 'Cat Text'

        ];
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required', 'message' => 'cat field can`t be empty'],
            ['email', 'email'],
//            ['name', 'string', 'min' => 5, 'tooShort' => 'too short'],
//            ['name', 'string', 'max' => 7, 'tooLong' => 'too chmo'],
            ['name', 'validateName'],
            ['text', 'trim']
        ];
    }

    public function validateName($attr){
        if (!in_array($this->$attr, ['cat', 'raccoon'])) {
            $this->addError($attr, 'Wrong name cat');
        }
    }
}