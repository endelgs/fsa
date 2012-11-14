<?php
/* @var $this AgendaTriagemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agenda Triagems',
);

$this->menu=array(
	array('label'=>'Inserir AgendaTriagem', 'url'=>array('create')),
	array('label'=>'Gerenciar AgendaTriagem', 'url'=>array('admin')),
);
?>

<h1>Agenda Triagems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
