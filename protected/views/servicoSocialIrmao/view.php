<?php
/* @var $this ServicoSocialIrmaoController */
/* @var $model ServicoSocialIrmao */

$this->breadcrumbs=array(
	'Servico Social Irmaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocialIrmao', 'url'=>array('create')),
	array('label'=>'Editar ServicoSocialIrmao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover ServicoSocialIrmao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que quer remover este? Servico Social Irmao')),
	array('label'=>'Gerenciar ServicoSocialIrmao', 'url'=>array('admin')),
);
?>

<h1>Visualizar ServicoSocialIrmao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'escolaridade',
		'profissao',
		'salario',
		'servico_social_r',
	),
)); ?>