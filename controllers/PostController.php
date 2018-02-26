<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.11.17
 * Time: 2:01
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
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
        if ($model->load(Yii::$app->request->post())) {
//            debug($model);
            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'The data is received');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Something is went wrong. this is ERROR');
            }
        }

        $this->view->title = 'Posts';
        return $this->render('test', ['model' => $model]);
    }

    public function actionShow()
    {
        $this->view->title = 'Post';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'key words']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'description words']);

//        $cats = Category::find()->orderBy(['id' => SORT_DESC])->all();
//        $cats = Category::find()->asArray(['id' => SORT_DESC])->where(['parent'=> 691])->all();
//        $cats = Category::find()->asArray(['id' => SORT_DESC])->where(['like', 'title', 'pp'])->all();
//        $cats = Category::find()->asArray()->where(['<=','id', 695])->all();
//        $cats = Category::find()->asArray(['id' => SORT_DESC])->where(['parent'=> 691])->limit(2)->all();
//        $cats = Category::find()->asArray(['id' => SORT_DESC])->where(['parent'=> 691])->limit(1)->one();
//        $cats = Category::find()->asArray()->count();
//        $cats = Category::findOne(['parent' => 691]);
        if (Yii::$app->request->isAjax) {
//            debug(Yii::$app->request->post());
            return 'test';
        }
        $cats = Category::findOne(694);

        return $this->render('show', ['cats' => $cats]);
    }
}

