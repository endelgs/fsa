<?php
/* @var $this OrlController */
/* @var $model Orl */

$this->breadcrumbs=array(
	'Orls'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir ORL', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('orl-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Orls</h1>

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
	'id'=>'orl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'diagnostico',
		'qp',
		'hpma',
		'interrogatorio_complementar',
		'antecedentes_pessoais',
		/*
		'exame_orl',
		'hd',
		'exames_complementares_hd',
		'conduta',
		'last_update',
		'paciente_r',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
