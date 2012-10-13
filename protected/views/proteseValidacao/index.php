<?php
/* @var $this ProteseValidacaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Protese Validacaos',
);

$this->menu=array(
	array('label'=>'Inserir ProteseValidacao', 'url'=>array('create')),
	array('label'=>'Gerenciar ProteseValidacao', 'url'=>array('admin')),
);
?>

<h1>Protese Validacaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
