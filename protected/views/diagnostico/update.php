<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir Diagnostico', 'url'=>array('create')),
	array('label'=>'Visualizar Diagnostico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Diagnostico', 'url'=>array('admin')),
);
?>

<h1>Editar Diagnostico <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>