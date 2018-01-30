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
$form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]);
echo $form->field($model, 'name')->label('Cat Name')->textInput(['placeholder' => 'Cat Name']);
echo $form->field($model, 'email')->label('Cat Email')->input('email');
echo $form->field($model, 'text')->textarea(['placeholder' => 'Cat Text', 'rows' => 4]);
echo Html::submitButton('Send', ['class' => ' btn btn-success']);
ActiveForm::end();