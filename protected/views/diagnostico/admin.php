<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir Diagnostico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('diagnostico-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Diagnosticos</h1>

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
	'id'=>'diagnostico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'consanguinidade',
		'perda_auditiva_familia',
		'preocupacao_familiar',
		'alimentacao_neonato',
		'posicao_alimentacao',
		/*
		'refluxo',
		'dor_ouvido',
		'barulho_alto_acorda',
		'chora_ruido_alto',
		'procurar_som_fora_visao',
		'atento_voz_materna',
		'reinternado',
		'susto_ruido_alto',
		'motivo',
		'pesquisa_integridade',
		'od_onda_1',
		'od_onda_3',
		'od_onda_5',
		'oe_onda_1',
		'oe_onda_3',
		'oe_onda_5',
		'od_interlatencia_1_3',
		'od_interlatencia_3_5',
		'od_interlatencia_1_5',
		'oe_interlatencia_1_3',
		'oe_interlatencia_3_5',
		'oe_interlatencia_1_5',
		'od_100',
		'od_90',
		'od_80',
		'od_70',
		'od_60',
		'od_50',
		'od_40',
		'od_30',
		'od_20',
		'oe_100',
		'oe_90',
		'oe_80',
		'oe_70',
		'oe_60',
		'oe_50',
		'oe_40',
		'oe_30',
		'oe_20',
		'conclusao_limiar_eletrofisiologico',
		'interpico',
		'latencia',
		'limiar_eletrofisiologico',
		'od_1',
		'od_1_4',
		'od_2_0',
		'od_2_8',
		'od_4',
		'oe_1',
		'oe_1_4',
		'oe_2_0',
		'oe_2_8',
		'oe_4',
		'od_repro',
		'od_estab',
		'oe_repro',
		'oe_estab',
		'conclusao_transiente',
		'od_distorcao_1',
		'od_distorcao_1_4',
		'od_distorcao_2_0',
		'od_distorcao_2_8',
		'od_distorcao_4',
		'oe_distorcao_1',
		'oe_distorcao_1_4',
		'oe_distorcao_2_0',
		'oe_distorcao_2_8',
		'oe_distorcao_4',
		'od_distorcao_repro',
		'od_distorcao_estab',
		'oe_distorcao_repro',
		'oe_distorcao_estab',
		'distorcao_conclusao_1',
		'distorcao_conclusao_1_4',
		'distorcao_conclusao_2_0',
		'distorcao_conclusao_2_8',
		'distorcao_conclusao_4',
		'od_pressao',
		'od_complacencia',
		'od_tipo_curva',
		'oe_pressao',
		'oe_complacencia',
		'oe_tipo_curva',
		'od_reflexo_500',
		'od_reflexo_1000',
		'od_reflexo_2000',
		'od_reflexo_4000',
		'oe_reflexo_500',
		'oe_reflexo_1000',
		'oe_reflexo_2000',
		'oe_reflexo_4000',
		'guizo_lateral',
		'guizo__cima',
		'guizo_baixo',
		'sino_lateral',
		'sino_cima',
		'sino_baixo',
		'reflexo_cocleo_palpebral',
		'od_nmr_500',
		'od_nmr_1000',
		'od_nmr_2000',
		'od_nmr_3000',
		'od_nmr_4000',
		'oe_nmr_500',
		'oe_nmr_1000',
		'oe_nmr_2000',
		'oe_nmr_3000',
		'oe_nmr_4000',
		'conclusao_reflexo',
		'conduta_reflexo',
		'laste_update',
		'paciente_r',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
