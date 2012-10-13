<?php
/* @var $this ProteseAnexoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Protese Anexos',
);

$this->menu=array(
	array('label'=>'Inserir ProteseAnexo', 'url'=>array('create')),
	array('label'=>'Gerenciar ProteseAnexo', 'url'=>array('admin')),
);
?>

<h1>Protese Anexos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
