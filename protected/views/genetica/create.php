<?php
/* @var $this GeneticaController */
/* @var $model Genetica */

$this->breadcrumbs=array(
	'Geneticas'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar Genética', 'url'=>array('admin')),
);
?>

<h1>Inserir Genética</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>