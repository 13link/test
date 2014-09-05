<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список пользователей', 'url'=>array('index')),
	array('label'=>'Добавить пользователя', 'url'=>array('create')),
	array('label'=>'Просмотр пользователя', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление пользователями', 'url'=>array('admin')),
);
?>

<h1>Изменить пользователя <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>