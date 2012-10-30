<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar Diagnostico', 'url'=>array('admin')),
);
?>

<h1>Inserir Diagnostico</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>