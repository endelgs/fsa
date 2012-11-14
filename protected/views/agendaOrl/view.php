<?php
/* @var $this AgendaOrlController */
/* @var $model AgendaOrl */

$this->breadcrumbs=array(
	'Agenda Orls'=>array('index'),
	$model->id,
);

?>

<h3>ORL Agendada com Sucesso para o Paciente: </h3><br/>
<h1><?php echo $model->pacienteR->nome; ?></h1>

<a href="<?php echo Yii::app()->createAbsoluteUrl('agendaOrl/create');?>">continuar agendando ORLs</a>
