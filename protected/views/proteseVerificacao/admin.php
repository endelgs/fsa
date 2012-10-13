<?php
/* @var $this ProteseVerificacaoController */
/* @var $model ProteseVerificacao */

$this->breadcrumbs=array(
	'Protese Verificacaos'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir ProteseVerificacao', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('protese-verificacao-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Protese Verificacaos</h1>

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
	'id'=>'protese-verificacao-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'od_40_250',
		'od_40_500',
		'od_40_1000',
		'od_40_2000',
		'od_40_3000',
		/*
		'od_40_4000',
		'od_40_6000',
		'od_40_8000',
		'od_60_250',
		'od_60_500',
		'od_60_1000',
		'od_60_2000',
		'od_60_3000',
		'od_60_4000',
		'od_60_6000',
		'od_60_8000',
		'od_80_250',
		'od_80_500',
		'od_80_1000',
		'od_80_2000',
		'od_80_3000',
		'od_80_4000',
		'od_80_6000',
		'od_80_8000',
		'oe_40_250',
		'oe_40_500',
		'oe_40_1000',
		'oe_40_2000',
		'oe_40_3000',
		'oe_40_4000',
		'oe_40_6000',
		'oe_40_8000',
		'oe_60_250',
		'oe_60_500',
		'oe_60_1000',
		'oe_60_2000',
		'oe_60_3000',
		'oe_60_4000',
		'oe_60_6000',
		'oe_60_8000',
		'oe_80_250',
		'oe_80_500',
		'oe_80_1000',
		'oe_80_2000',
		'oe_80_3000',
		'oe_80_4000',
		'oe_80_6000',
		'oe_80_8000',
		'nmr',
		'nmr_500_od',
		'nmr_1k_od',
		'nmr_2k_od',
		'nmr_4k_od',
		'nmr_intensiade_od',
		'nmr_500_oe',
		'nmr_1k_oe',
		'nmr_2k_oe',
		'nmr_4k_oe',
		'nmr_intensiade_oe',
		'reacao_sons',
		'voz_amplificada',
		'sons_ling_s',
		'sons_ling_ch',
		'sons_ling_a',
		'sons_ling_i',
		'sons_ling_u',
		'sons_ling_m',
		'lrf_od',
		'ldv_od',
		'lrf_oe',
		'ldv_oe',
		'guizo_1',
		'guizo_2',
		'reco_reco',
		'sino',
		'ganza',
		'black_black',
		'agogo_pequeno',
		'agogo_grande',
		'prato',
		'latencia_resposta',
		'laudo_audiologico',
		'last_update',
		'paciente_r',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
