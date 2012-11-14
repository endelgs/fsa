<?php
/* @var $this AgendaTriagemController */
/* @var $model AgendaTriagem */

$this->breadcrumbs=array(
	'Agenda Triagens'=>array('index'),
	$model->id,
);

?>

<h3>Triagem Agendada com Sucesso para o Paciente: </h3><br/>
<h1><?php echo $model->pacienteR->nome; ?></h1>

<a href="<?php echo Yii::app()->createAbsoluteUrl('agendaTriagem/create');?>">continuar agendando triagens</a>
