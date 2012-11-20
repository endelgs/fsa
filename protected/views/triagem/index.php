<?php
/* @var $this TriagemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Triagens',
);

$this->menu=array(
	array('label'=>'Inserir Triagem', 'url'=>array('create')),
	array('label'=>'Gerenciar Triagem', 'url'=>array('admin')),
);
?>

<h1>Triagens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
