<?php
/* @var $this AgendaProteseController */
/* @var $model AgendaProtese */

$this->breadcrumbs=array(
	'Agenda Proteses'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir AgendaProtese', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('agenda-protese-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Agenda Proteses</h1>

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
	'id'=>'agenda-protese-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'data',
		'agenda_tipo',
		'form_tipo_r',
		'paciente_r',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
