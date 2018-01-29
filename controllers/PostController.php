<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.11.17
 * Time: 2:01
 */

namespace app\controllers;
use Yii;

class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex()
    {
        return $this->render('test');
    }

    public function actionShow()
    {
        if (Yii::$app->request->isAjax) {
            debug($_GET);
            return 'test';
        }
        return $this->render('show');
    }
}

