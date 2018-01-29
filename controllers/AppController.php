<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.11.17
 * Time: 1:43
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr)
    {
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}
