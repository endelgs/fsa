<?php
/* @var $this TriagemController */
/* @var $model Triagem */

$this->breadcrumbs=array(
	'Triagem'=>array('admin'),
	'Cadastrar triagem para um paciente',
);

?>

<h1>Cadastrar triagem para um paciente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>