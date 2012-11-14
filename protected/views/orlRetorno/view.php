<?php
/* @var $this OrlRetornoController */
/* @var $model OrlRetorno */

$this->breadcrumbs=array(
	'Orl Retornos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inserir OrlRetorno', 'url'=>array('create')),
	array('label'=>'Editar OrlRetorno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover OrlRetorno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que quer remover este? Orl Retorno')),
	array('label'=>'Gerenciar OrlRetorno', 'url'=>array('admin')),
);
?>

<h1>Visualizar OrlRetorno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hd',
		'evolucao',
		'orl_r',
	),
)); ?>