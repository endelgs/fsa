<?php
/* @var $this GeneticaController */
/* @var $model Genetica */

$this->breadcrumbs=array(
	'Geneticas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir Genética', 'url'=>array('create')),
	array('label'=>'Visualizar Genética', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Genética', 'url'=>array('admin')),
);
?>

<h1>Editar Genética <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>