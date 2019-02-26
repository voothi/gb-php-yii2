<?php
/**
 * @var $activity \app\models\Activity
 */
use yii\bootstrap\ActiveForm;

?>
<div class='row'>
    <div class="col-md-6">
        <h2>Создание новой ак тивности</h2>
        <?= Yii::getAlias('@my_alias'); ?>
        <?php $form=ActiveForm::begin([
            'action' => '',
            'method' => 'POST',
            'id' => 'activity',
            'options' => [
                'enctype' => ''
            ]
        ]); ?>
        <?= $form->field($activity, 'title'); ?>
        <?= $form->field($activity, 'description')->textarea(['class'=>'custom form-control']); ?>
        <?= $form->field($activity, 'is_blocked')->checkbox(); ?>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Отправить</button>
        </div>

        <?php $form=ActiveForm::end(); ?>
    </div>
</div>