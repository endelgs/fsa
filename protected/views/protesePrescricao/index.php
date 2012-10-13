<?php
/* @var $this ProtesePrescricaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Protese Prescricaos',
);

$this->menu=array(
	array('label'=>'Inserir ProtesePrescricao', 'url'=>array('create')),
	array('label'=>'Gerenciar ProtesePrescricao', 'url'=>array('admin')),
);
?>

<h1>Protese Prescricaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
