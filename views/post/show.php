<?php $this->beginBlock('block1'); ?>
    <h1>Block title</h1>
<?php $this->endBlock('block1'); ?>


    <h1>Show action</h1>

<?php
debug($cats);
//?>
<!--    <ul class="cat_list">-->
<!--        --><?php //foreach ($cats as $cat) {
//            echo '<li>' . $cat->title . '</li>';
//        }; ?>
<!--    </ul>-->
<?php //$this->registerJsFile('@web/js/scripts.js',['depends' => 'yii\web\YiiAsset']) ?>
<?php $this->registerJs("$('.container').append('<p>SHOW!!!!!!!</p>');");


