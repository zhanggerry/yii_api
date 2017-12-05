<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' =>
	['class' => 'form-horizontal'],
]) ?>
    
	<div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
			标题：<?= Html::textInput('title','',['style' => 'width:200px;margin-bottom:10px;']) ?>
        </div>
    </div>

	<div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
			<?= Html::fileInput('file','',['style' => '']) ?>
        </div>
    </div>
   
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('save', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>


