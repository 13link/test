<?php
/* @var $this TaskController */
/* @var $model Task */

$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Список задач', 'url'=>array('index')),
	array('label'=>'Управление задачами', 'url'=>array('admin')),
);
?>

<h1>Добавить задачу</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>