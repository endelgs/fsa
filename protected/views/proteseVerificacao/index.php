<?php
/* @var $this ProteseVerificacaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Protese Verificacaos',
);

$this->menu=array(
	array('label'=>'Inserir ProteseVerificacao', 'url'=>array('create')),
	array('label'=>'Gerenciar ProteseVerificacao', 'url'=>array('admin')),
);
?>

<h1>Protese Verificacaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
