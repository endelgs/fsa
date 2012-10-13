<?php
/* @var $this ProteseAvaliacaoController */
/* @var $model ProteseAvaliacao */

$this->breadcrumbs=array(
	'Protese Avaliacaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir ProteseAvaliacao', 'url'=>array('create')),
	array('label'=>'Visualizar ProteseAvaliacao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar ProteseAvaliacao', 'url'=>array('admin')),
);
?>

<h1>Editar ProteseAvaliacao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>