<?php
/* @var $this TaskController */
/* @var $model Task */

$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список задач', 'url'=>array('index')),
	array('label'=>'Добавить задачу', 'url'=>array('create')),
	array('label'=>'Изменить задачу', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить задачу', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
	array('label'=>'Управление задачами', 'url'=>array('admin')),
);
?>

<h1>Просмотр задачи №<?php echo $model->id; ?></h1>

<?php
$status = State::model()->findByAttributes(array('id'=>$model->sost));
$director = User::model()->findByAttributes(array('id'=>$model->director));
$contractor = User::model()->findByAttributes(array('id'=>$model->contractor)); 

$model->sost = $status->name;
$model->director = $director->username;
$model->contractor = $contractor->username;

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'director',
		'contractor',
		'sost',
	),
)); ?>
