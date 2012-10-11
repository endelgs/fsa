<?php
/* @var $this ServicoSocialResidentesController */
/* @var $model ServicoSocialResidentes */

$this->breadcrumbs=array(
	'Servico Social Residentes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocialResidentes', 'url'=>array('create')),
	array('label'=>'Editar ServicoSocialResidentes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover ServicoSocialResidentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que quer remover este? Servico Social Residentes')),
	array('label'=>'Gerenciar ServicoSocialResidentes', 'url'=>array('admin')),
);
?>

<h1>Visualizar ServicoSocialResidentes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'idade',
		'parentesco',
		'profissao',
		'salario',
		'servico_social_r',
	),
)); ?>