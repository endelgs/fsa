<?php
/* @var $this GeneticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Geneticas',
);

$this->menu=array(
	array('label'=>'Inserir Genética', 'url'=>array('create')),
	array('label'=>'Gerenciar Genética', 'url'=>array('admin')),
);
?>

<h1>Genéticas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
