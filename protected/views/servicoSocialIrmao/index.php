<?php
/* @var $this ServicoSocialIrmaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Servico Social Irmaos',
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocialIrmao', 'url'=>array('create')),
	array('label'=>'Gerenciar ServicoSocialIrmao', 'url'=>array('admin')),
);
?>

<h1>Servico Social Irmaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
