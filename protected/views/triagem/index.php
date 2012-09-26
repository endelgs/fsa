<?php
/* @var $this TriagemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Triagems',
);

$this->menu=array(
	array('label'=>'Inserir Triagem', 'url'=>array('create')),
	array('label'=>'Gerenciar Triagem', 'url'=>array('admin')),
);
?>

<h1>Triagems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
