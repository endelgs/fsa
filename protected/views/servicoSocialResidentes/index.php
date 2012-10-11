<?php
/* @var $this ServicoSocialResidentesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Servico Social Residentes',
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocialResidentes', 'url'=>array('create')),
	array('label'=>'Gerenciar ServicoSocialResidentes', 'url'=>array('admin')),
);
?>

<h1>Servico Social Residentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
