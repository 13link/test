<?php
/* @var $this TaskController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Задачи',
);

$this->menu=array(
	array('label'=>'Добавить задачу', 'url'=>array('create')),
	array('label'=>'Управление задачами', 'url'=>array('admin')),
);
?>

<h1>Невыполненные задачи</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
