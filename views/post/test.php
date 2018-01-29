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
$this->registerJs($script);; ?>