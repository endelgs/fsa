<?php
/* @var $this AgendaOrlController */
/* @var $model AgendaOrl */

$this->breadcrumbs=array(
	'Agenda Prótese'=>array('index'),
	$model->id,
);

?>

<h3>Prótese Agendada com Sucesso para o Paciente: </h3><br/>
<h1><?php echo $model->pacienteR->nome; ?></h1>

<a href="<?php echo Yii::app()->createAbsoluteUrl('agendaProtese/create');?>">continuar agendando próteses</a>
