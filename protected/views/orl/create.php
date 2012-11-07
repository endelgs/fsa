<?php
/* @var $this OrlController */
/* @var $model Orl */

$this->breadcrumbs=array(
	'Orls'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar ORL', 'url'=>array('admin')),
);
?>

<h1>Inserir ORL</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>