<?php
/* @var $this AgendaOrlController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agenda Orls',
);

$this->menu=array(
	array('label'=>'Inserir AgendaOrl', 'url'=>array('create')),
	array('label'=>'Gerenciar AgendaOrl', 'url'=>array('admin')),
);
?>

<h1>Agenda Orls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
