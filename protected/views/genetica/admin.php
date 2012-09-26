<?php
/* @var $this GeneticaController */
/* @var $model Genetica */

$this->breadcrumbs=array(
	'Geneticas'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir Genética', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('genetica-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Genéticas</h1>

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
	'id'=>'genetica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'genetica',
		'hipotese_diagnostica',
		'conduta',
		'alteracoes_observadas',
		'homozigoto_normal',
		/*
		'homozigoto_mutante',
		'heterozigoto',
		'del_gjb6_d13s1830',
		'del_gjb6_d13s1854',
		'del_3',
		'del_4',
		'del_5',
		'a1555g',
		'c1494t',
		'a827g',
		'a7445g',
		'a7444g',
		'a3243g',
		'gjb2',
		'gjb2_genotipo',
		'gjb6',
		'gjb6_genotipo',
		'gjb3',
		'gjb3_genotipo',
		'slc26a4',
		'slc26a4_genotipo',
		'otof',
		'otof_genotipo',
		'mtrnr1',
		'mtrnr1_genotipo',
		'outros_genes',
		'outros_genes_genotipo',
		'paciente_r',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
