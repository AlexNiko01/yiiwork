<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--        --><? //= Html::csrfMetaTags() ?>
        <title><?= $this->title ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <?php echo Html::a('Main', '/', ['class' => 'nav-link active']); ?>

                </li>
                <li class="nav-item">
                    <?php echo Html::a('Posts', ['post/index/'], ['class' => 'nav-link active']); ?>
                </li>
                <li class="nav-item">
                    <?php echo Html::a('Post', ['post/show/'], ['class' => 'nav-link active']); ?>
                </li>

            </ul>

            <?php if (isset($this->blocks['block1'])): ; ?>
                <?php echo $this->blocks['block1']; ?>
            <?php endif; ?>
            <?php echo $content; ?>
        </div>
    </div>
    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage() ?>