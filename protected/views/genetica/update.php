<?php
/* @var $this GeneticaController */
/* @var $model Genetica */

$this->breadcrumbs=array(
	'Genética'=>array('admin'),
	$model->pacienteR->nome=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir Genética', 'url'=>array('create')),
	array('label'=>'Visualizar Genética', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Genética', 'url'=>array('admin')),
);
?>

<h1>Editar dados de Genética de <?php echo $model->pacienteR->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>