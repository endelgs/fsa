<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->nome=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir Paciente', 'url'=>array('create')),
	array('label'=>'Visualizar Paciente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Paciente', 'url'=>array('admin')),
);
?>

<h1>Editar Paciente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>