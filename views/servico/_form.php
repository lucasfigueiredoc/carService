<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\servico $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="servico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'veiculo_id')->textInput() ?>

    <?= $form->field($model, 'funcionario_id')->textInput() ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Pronto' => 'Pronto', 'Em Trabalho' => 'Em Trabalho', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
