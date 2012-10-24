<?php
/* @var $this MonitoramentoController */
/* @var $model Monitoramento */

$this->breadcrumbs=array(
	'Monitoramentos'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir Monitoramento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('monitoramento-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Monitoramentos</h1>

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
	'id'=>'monitoramento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'guizo',
		'sino',
		'agogo',
		'reacao_voz',
		'od_500',
		/*
		'od_1000',
		'od_2000',
		'od_4000',
		'oe_1000',
		'oe_2000',
		'oe_500',
		'oe_4000',
		'od_complacencia',
		'od_pressao',
		'od_volume',
		'od_gradiente',
		'od_curva_tipo',
		'oe_complacencia',
		'oe_pressao',
		'oe_volume',
		'oe_gradiente',
		'oe_curva_tipo',
		'da_tchau',
		'joga_beijo',
		'bate_palma',
		'cade_chupeta',
		'cade_mamae',
		'cade_sapato',
		'cade_cabelo',
		'cade_mao',
		'cade_pe',
		'reipsi_500_od',
		'reipsi_1k_od',
		'reipsi_2k_od',
		'reipsi_4k_od',
		'reipsi_500_oe',
		'reipsi_1k_oe',
		'reipsi_2k_oe',
		'reipsi_4k_oe',
		'desenvolvimento_motor',
		'desenvolvimento_auditivo',
		'desenvolvimento_linguagem',
		'last_update',
		'paciente_r',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
