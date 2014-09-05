<?php
/* @var $this TaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
$online_user = User::model()->findByAttributes(array('username'=>Yii::app()->user->name));

$users = User::model()->findAll(array(
			'condition'=>'',
			'params'=>array(),
			'order'=>'username',
		));
$users_list = array();
foreach($users as $user)
{
	$users_list[$user->id] = $user->username;
}

$statuses=State::model()->findAll(array(
			'condition'=>'',
			'params'=>array(),
			'order'=>'id',
		));
$statuses_list = array();
foreach($statuses as $status)
{
	$statuses_list[$status->id] = $status->name;
}

$form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля, помеченные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Название'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128,'readonly'=>$model->isNewRecord ? false:true)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Описание'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255,'readonly'=>$model->isNewRecord ? false:true)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div style="display:none">
		<?php echo $form->labelEx($model,'Постановщик'); ?>
		<?php echo $form->textField($model,'director',array('value'=>$model->isNewRecord ? $online_user->id:$model->director)); ?>
		<?php echo $form->error($model,'director'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Исполнитель'); ?>
		<?php echo $form->dropDownList($model,'contractor',$users_list,array('disabled'=>$model->isNewRecord ? false:true)); ?>
		<?php echo $form->error($model,'contractor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Состояние'); ?>
		<?php echo $form->dropDownList($model,'sost',$statuses_list); ?>
		<?php echo $form->error($model,'sost'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->