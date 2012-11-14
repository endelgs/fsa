<?php
/* @var $this AgendaMonitoramentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agenda Monitoramentos',
);

$this->menu=array(
	array('label'=>'Inserir AgendaMonitoramento', 'url'=>array('create')),
	array('label'=>'Gerenciar AgendaMonitoramento', 'url'=>array('admin')),
);
?>

<h1>Agenda Monitoramentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
