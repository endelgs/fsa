<?php
/* @var $this OrlController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orls',
);

$this->menu=array(
	array('label'=>'Inserir ORL', 'url'=>array('create')),
	array('label'=>'Gerenciar ORL', 'url'=>array('admin')),
);
?>

<h1>Orls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
