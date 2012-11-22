<?php
/* @var $this OrlController */
/* @var $model Orl */

$this->breadcrumbs=array(
	'Orls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir ORL', 'url'=>array('create')),
	array('label'=>'Visualizar ORL', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar ORL', 'url'=>array('admin')),
);
?>

<h1>Editar ORL <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array(
		'model'=>$model,
		'modelOrlRetorno'=>$modelOrlRetorno,
		'validatedRetorno'=>$validatedRetorno,
		)
	); ?>