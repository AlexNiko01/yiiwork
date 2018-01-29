<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.11.17
 * Time: 3:40
 */
namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}