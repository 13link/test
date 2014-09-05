<?php
/* @var $this TaskController */
/* @var $model Task */

$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список задач', 'url'=>array('index')),
	array('label'=>'Добавить задачу', 'url'=>array('create')),
	array('label'=>'Просмотр задачи', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление задачами ', 'url'=>array('admin')),
);
?>

<h1>Изменить задачу <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>