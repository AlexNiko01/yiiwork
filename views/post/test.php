<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

; ?>
    <h1>this is test page </h1>
    <button id="btn" class="btn btn-success">Click me</button>
<?php
$script = <<< JS
$('#btn').on('click', function() {
    $.ajax({
        url:'index.php?r=post/show',
        data:{test:'123'},
        type:'POST',
        success: function(res) {
            console.log(res);
        },
        error: function() {
            alert('Error!')
        }
        });
    });
JS;
$this->registerJs($script);

echo '<br/><br/>';
if (Yii::$app->session->hasFlash('success')) {
    echo '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert">&times;</a>'.Yii::$app->session->getFlash('success'). '</div>';
}
if (Yii::$app->session->hasFlash('error')) {
    echo '<div class="alert alert-danger alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert">&times;</a>'.Yii::$app->session->getFlash('error'). '</div>';
}
$form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]);
echo $form->field($model, 'name')->textInput(['placeholder' => 'Cat Name']);
echo $form->field($model, 'email')->input('email', ['placeholder' => 'Cat Email']);
echo $form->field($model, 'text')->textarea(['placeholder' => 'Cat Text', 'rows' => 4]);
echo Html::submitButton('Send', ['class' => ' btn btn-success']);
ActiveForm::end();