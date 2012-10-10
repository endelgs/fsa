<?php
/* @var $this ServicoSocialController */
/* @var $model ServicoSocial */

$this->breadcrumbs=array(
	'Servico Socials'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocial', 'url'=>array('create')),
	array('label'=>'Editar ServicoSocial', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover ServicoSocial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que quer remover este? Servico Social')),
	array('label'=>'Gerenciar ServicoSocial', 'url'=>array('admin')),
);
?>

<h1>Visualizar ServicoSocial #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome_mae',
		'data_nascimento_mae',
		'escolaridade_mae',
		'profissao_mae',
		'local_trabalho_mae',
		'telefone_trabalho_mae',
		'nome_pai',
		'data_nascimento_pai',
		'escolaridade_pai',
		'profissao_pai',
		'local_trabalho_pai',
		'telefone_trabalho_pai',
		'responsavel_crianca',
		'familia',
		'uniao_consensual',
		'uniao_legal',
		'unicao_outro',
		'residentes_familia',
		'renda_total',
		'quem_contribui',
		'n_pessoas_casa',
		'renda_per_capita',
		'beneficio_social',
		'outros_situacao_economica',
		'casa_propria',
		'casa_alugada',
		'casa_cedida',
		'casa_outros',
		'tipo_construcao',
		'n_comodos',
		'transporte_utilizado',
		'convenio_medico',
		'centro_saude',
		'sintese_atendimento',
		'last_update',
		'paciente_r',
	),
)); ?>