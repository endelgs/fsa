<?php
/* @var $this AgendaProteseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agenda Proteses',
);

$this->menu=array(
	array('label'=>'Inserir AgendaProtese', 'url'=>array('create')),
	array('label'=>'Gerenciar AgendaProtese', 'url'=>array('admin')),
);
?>

<h1>Agenda Proteses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
