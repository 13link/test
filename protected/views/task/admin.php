<?php
/* @var $this TaskController */
/* @var $model Task */

$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список задач', 'url'=>array('index')),
	array('label'=>'Добавить задачу', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#task-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление задачами</h1>

<p>
Вы можете вводить операторы сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) в начале каждого поискового запроса, чтобы определить, как будет производиться сравнение.
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'task-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'director',
		'contractor',
		'sost',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
