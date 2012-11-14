<?php
/* @var $this AgendaDiagnosticoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agenda Diagnosticos',
);

$this->menu=array(
	array('label'=>'Inserir AgendaDiagnostico', 'url'=>array('create')),
	array('label'=>'Gerenciar AgendaDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Agenda Diagnosticos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
