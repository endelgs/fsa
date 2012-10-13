<?php
/* @var $this ProteseAnexoController */
/* @var $model ProteseAnexo */

$this->breadcrumbs=array(
	'Protese Anexos'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir ProteseAnexo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('protese-anexo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Protese Anexos</h1>

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
	'id'=>'protese-anexo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'comportamento_vocal',
		'primeiras_vocalizacoes',
		'esqueceu_dispositivo',
		'primeiro_teste_dispositivo',
		'silabas_articuladas',
		/*
		'crianca_conversa',
		'tipos_sons_brincadeira',
		'emite_sons_exemplo',
		'emite_sons',
		'resposta_primeira_chamada',
		'resposta_espontanea',
		'resposta_chamada_ruido',
		'resposta_espontanea_ruido',
		'sons_ambientais',
		'atencao_espontanea_sons_ambiente',
		'curiosidade_novos_sons',
		'atencao_espontanea_sinais_auditivos',
		'reconhece_sinais_auditivos',
		'atencao_espontanea_sinais_auditivos_diariamente',
		'diferenciar_vozes',
		'habilidade_discriminar_dois_falantes',
		'reconhece_fala_sons_nao_verbais',
		'reconhece_estimulos_fala_audicao',
		'emocao_voz_pessoa',
		'associa_entonacao',
		'last_update',
		'paciente_r',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
