<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Добро пожаловать в приложение <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?
if(Yii::app()->user->isGuest)
{
?>
	<p>Чтобы работать с задачами, вам необходимо войти!</p>
<?
}
else
{
?>
	<p>Спасибо что вошли! Теперь вы можете приступать к работе!</p>
<?}?>
