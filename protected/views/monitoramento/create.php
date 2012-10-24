<?php
/* @var $this MonitoramentoController */
/* @var $model Monitoramento */

$this->breadcrumbs=array(
	'Monitoramentos'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar Monitoramento', 'url'=>array('admin')),
);
?>

<h1>Inserir Monitoramento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>