<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список пользователей', 'url'=>array('index')),
	array('label'=>'Добавить пользователя', 'url'=>array('create')),
	array('label'=>'Изменить пользователя', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить пользователя', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
	array('label'=>'Управление пользователями', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>
