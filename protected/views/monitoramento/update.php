<?php
/* @var $this MonitoramentoController */
/* @var $model Monitoramento */

$this->breadcrumbs=array(
	'Monitoramentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir Monitoramento', 'url'=>array('create')),
	array('label'=>'Visualizar Monitoramento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Monitoramento', 'url'=>array('admin')),
);
?>

<h1>Editar Monitoramento <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>