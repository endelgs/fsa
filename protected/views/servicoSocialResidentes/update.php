<?php
/* @var $this ServicoSocialResidentesController */
/* @var $model ServicoSocialResidentes */

$this->breadcrumbs=array(
	'Servico Social Residentes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocialResidentes', 'url'=>array('create')),
	array('label'=>'Visualizar ServicoSocialResidentes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar ServicoSocialResidentes', 'url'=>array('admin')),
);
?>

<h1>Editar ServicoSocialResidentes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>