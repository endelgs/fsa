<?php
/* @var $this ProteseAvaliacaoController */
/* @var $model ProteseAvaliacao */

$this->breadcrumbs=array(
	'Protese Avaliacaos'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir ProteseAvaliacao', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('protese-avaliacao-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Protese Avaliacaos</h1>

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
	'id'=>'protese-avaliacao-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'nna_clique_od',
		'nna_500_od',
		'nna_1000_od',
		'nna_cliquer_oe',
		'nna_500_oe',
		/*
		'nna_1000_oe',
		'imitanciometria',
		'otoscopia',
		'pressao_od',
		'complacencia_od',
		'tipo_curva_od',
		'pressao_oe',
		'complacencia_oe',
		'tipo_curva_oe',
		'reipsi_500_od',
		'reipsi_1k_od',
		'reipsi_2k_od',
		'reipsi_4k_od',
		'reipsi_500_oe',
		'reipsi_1k_oe',
		'reipsi_2k_oe',
		'reipsi_4k_oe',
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
		'recd_250_od',
		'recd_500_od',
		'recd_1000_od',
		'recd_2000_od',
		'recd_3000_od',
		'recd_4000_od',
		'recd_6000_od',
		'recd_8000_od',
		'recd_250_oe',
		'recd_500_oe',
		'recd_1000_oe',
		'recd_2000_oe',
		'recd_3000_oe',
		'recd_4000_oe',
		'recd_6000_oe',
		'recd_8000_oe',
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
