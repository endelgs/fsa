<?php
/* @var $this GeneticaController */
/* @var $model Genetica */

$this->breadcrumbs=array(
	'Genética'=>array('admin'),
	'Cadastrar dados de genética',
);

?>

<h1>Cadastrar dados de genética</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>