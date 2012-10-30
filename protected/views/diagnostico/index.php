<?php
/* @var $this DiagnosticoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Diagnosticos',
);

$this->menu=array(
	array('label'=>'Inserir Diagnostico', 'url'=>array('create')),
	array('label'=>'Gerenciar Diagnostico', 'url'=>array('admin')),
);
?>

<h1>Diagnosticos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
