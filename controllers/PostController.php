<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.11.17
 * Time: 2:01
 */

namespace app\controllers;

use Yii;
use yii\web\BadRequestHttpException;
use app\models\TestForm;

class PostController extends AppController
{
    public $layout = 'basic';

    public function beforeAction($action)
    {
        if ($action->id == 'show') {
//            $this->debug($action);
            $this->enableCsrfValidation = false;
        }
        try {
            return parent::beforeAction($action);

        } catch (BadRequestHttpException $e) {
            return $e->getMessage();
        }
    }


    public function actionIndex()
    {
        $model = new TestForm();
        $this->view->title = 'Posts';
        return $this->render('test',['model' => $model]);
    }

    public function actionShow()
    {
        $this->view->title = 'Post';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'key words']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'description words']);
        if (Yii::$app->request->isAjax) {
            debug(Yii::$app->request->post());
            return 'test';
        }
        return $this->render('show');
    }
}

