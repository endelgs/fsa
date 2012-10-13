<?php
/* @var $this ProteseValidacaoController */
/* @var $model ProteseValidacao */

$this->breadcrumbs=array(
	'Protese Validacaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir ProteseValidacao', 'url'=>array('create')),
	array('label'=>'Visualizar ProteseValidacao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar ProteseValidacao', 'url'=>array('admin')),
);
?>

<h1>Editar ProteseValidacao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>