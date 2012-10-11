<?php
/* @var $this ServicoSocialResidentesController */
/* @var $model ServicoSocialResidentes */

$this->breadcrumbs=array(
	'Servico Social Residentes'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar ServicoSocialResidentes', 'url'=>array('admin')),
);
?>

<h1>Inserir ServicoSocialResidentes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>