<?php
/* @var $this OrlRetornoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orl Retornos',
);

$this->menu=array(
	array('label'=>'Inserir OrlRetorno', 'url'=>array('create')),
	array('label'=>'Gerenciar OrlRetorno', 'url'=>array('admin')),
);
?>

<h1>Orl Retornos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
