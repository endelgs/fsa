<?php
/* @var $this GeneticaController */
/* @var $model Genetica */

$this->breadcrumbs=array(
	'Genética'=>array('index'),
	'Cadastrar dados de genética',
);

$this->menu=array(
	array('label'=>'Gerenciar Genética', 'url'=>array('admin')),
);
?>

<h1>Cadastrar dados de genética</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>