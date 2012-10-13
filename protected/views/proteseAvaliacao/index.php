<?php
/* @var $this ProteseAvaliacaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Protese Avaliacaos',
);

$this->menu=array(
	array('label'=>'Inserir ProteseAvaliacao', 'url'=>array('create')),
	array('label'=>'Gerenciar ProteseAvaliacao', 'url'=>array('admin')),
);
?>

<h1>Protese Avaliacaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
