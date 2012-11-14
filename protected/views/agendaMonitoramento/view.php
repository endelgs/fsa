<?php
/* @var $this AgendaMonitoramentoController */
/* @var $model AgendaMonitoramento */

$this->breadcrumbs=array(
	'Agenda Monitoramento'=>array('index'),
	$model->id,
);

?>

<h3>Monitoramento Agendado com Sucesso para o Paciente: </h3>
<h1><?php echo $model->pacienteR->nome; ?></h1>

<a href="<?php echo Yii::app()->createAbsoluteUrl('agendaMonitoramento/create');?>">continuar agendando monitoramento</a>