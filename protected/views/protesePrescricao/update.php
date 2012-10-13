<?php
/* @var $this ProtesePrescricaoController */
/* @var $model ProtesePrescricao */

$this->breadcrumbs=array(
	'Protese Prescricaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir ProtesePrescricao', 'url'=>array('create')),
	array('label'=>'Visualizar ProtesePrescricao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar ProtesePrescricao', 'url'=>array('admin')),
);
?>

<h1>Editar ProtesePrescricao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>