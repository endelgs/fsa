<?php
/* @var $this AgendaMonitoramentoController */
/* @var $model AgendaMonitoramento */

$this->breadcrumbs=array(
	'Agenda Monitoramentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir AgendaMonitoramento', 'url'=>array('create')),
	array('label'=>'Visualizar AgendaMonitoramento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar AgendaMonitoramento', 'url'=>array('admin')),
);
?>

<h1>Editar AgendaMonitoramento <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>