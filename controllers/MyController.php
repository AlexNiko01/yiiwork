<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.11.17
 * Time: 23:04
 */
namespace app\controllers;


class MyController extends AppController
{
    public function actionIndex($id = null)
    {
        $names = ['kot', 'enot'];
        $hi = 'hello chmo';
        return $this->render('index', compact('id', 'names', 'hi'));
    }
    public function actionBlogPost(){
        return 'Blog Post';
    }
}