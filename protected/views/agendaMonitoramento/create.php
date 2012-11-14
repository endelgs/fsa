<?php
/* @var $this AgendaMonitoramentoController */
/* @var $model AgendaMonitoramento */

$this->breadcrumbs=array(
	'Agenda Monitoramentos'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar AgendaMonitoramento', 'url'=>array('admin')),
);
?>

<h1>Agendar Monitoramentos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>