<?php
/* @var $this MonitoramentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Monitoramentos',
);

$this->menu=array(
	array('label'=>'Inserir Monitoramento', 'url'=>array('create')),
	array('label'=>'Gerenciar Monitoramento', 'url'=>array('admin')),
);
?>

<h1>Monitoramentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
