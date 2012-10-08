<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	$model->nome=>array('view','id'=>$model->id),
	'Editar Paciente',
);

?>
<style>
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.esquerda{float:left;}
</style>


<div>
	<div class='alinhamento'><h1>Editar Paciente <?php echo $model->id; ?></h1></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>