<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	'Cadastrar novo paciente',
);

$this->menu=array(
	array('label'=>'Gerenciar Paciente', 'url'=>array('admin')),
);
?>

<h1>Cadastrar novo paciente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>