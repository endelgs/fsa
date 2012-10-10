<?php
/* @var $this ServicoSocialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Servico Socials',
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocial', 'url'=>array('create')),
	array('label'=>'Gerenciar ServicoSocial', 'url'=>array('admin')),
);
?>

<h1>Servico Socials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
