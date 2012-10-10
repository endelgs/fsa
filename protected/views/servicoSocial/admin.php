<?php
/* @var $this ServicoSocialController */
/* @var $model ServicoSocial */

$this->breadcrumbs=array(
	'Servico Socials'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('servico-social-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Servico Socials</h1>

<p>
Você pode usar operadores de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no começo de cada valor de busca para especificar como a comparação deve ser feita. Ex: >= 100.
</p>

<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'servico-social-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'nome_mae',
		'data_nascimento_mae',
		'escolaridade_mae',
		'profissao_mae',
		'local_trabalho_mae',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
