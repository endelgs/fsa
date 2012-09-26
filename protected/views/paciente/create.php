<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar Paciente', 'url'=>array('admin')),
);
?>

<h1>Inserir Paciente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>