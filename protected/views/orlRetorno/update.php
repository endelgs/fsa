<?php
/* @var $this OrlRetornoController */
/* @var $model OrlRetorno */

$this->breadcrumbs=array(
	'Orl Retornos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir OrlRetorno', 'url'=>array('create')),
	array('label'=>'Visualizar OrlRetorno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar OrlRetorno', 'url'=>array('admin')),
);
?>

<h1>Editar OrlRetorno <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>