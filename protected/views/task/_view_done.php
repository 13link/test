<?php
/* @var $this TaskController */
/* @var $data Task */
$status = State::model()->findByAttributes(array('id'=>$data->sost));
$director = User::model()->findByAttributes(array('id'=>$data->director));
$contractor = User::model()->findByAttributes(array('id'=>$data->contractor));
if(($contractor->username == Yii::app()->user->name || Yii::app()->user->name == 'admin') && $data->sost == 4)
{
?>

	<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
		<?php echo CHtml::encode($data->id); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('director')); ?>:</b>
		<?php echo CHtml::encode($director->username); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('sost')); ?>:</b>
		<?php echo CHtml::encode($status->name); ?>
		<br />


	</div>
<?
}
?>