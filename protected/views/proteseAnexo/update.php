<?php
/* @var $this ProteseAnexoController */
/* @var $model ProteseAnexo */

$this->breadcrumbs=array(
	'Protese Anexos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir ProteseAnexo', 'url'=>array('create')),
	array('label'=>'Visualizar ProteseAnexo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar ProteseAnexo', 'url'=>array('admin')),
);
?>

<h1>Editar ProteseAnexo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>