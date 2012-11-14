<?php
/* @var $this AgendaDiagnosticoController */
/* @var $model AgendaDiagnostico */

$this->breadcrumbs=array(
	'Agenda Diagnóstico'=>array('index'),
	$model->id,
);
?>

<h3>Diagnóstico Agendado com Sucesso para o Paciente: </h3>
<h1><?php echo $model->pacienteR->nome; ?></h1>

<a href="<?php echo Yii::app()->createAbsoluteUrl('agendaDiagnostico/create');?>">continuar agendando diagnósticos</a>