<?php
/* @var $this ServicoSocialIrmaoController */
/* @var $model ServicoSocialIrmao */

$this->breadcrumbs=array(
	'Servico Social Irmaos'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocialIrmao', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('servico-social-irmao-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Servico Social Irmaos</h1>

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
	'id'=>'servico-social-irmao-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
  'emptyText' => 'Não há registros a serem exibidos.',
  'summaryText' => 'Mostrando {start}-{end} de {count} registro(s).',
	'columns'=>array(
		'id',
		'nome',
		'escolaridade',
		'profissao',
		'salario',
		'servico_social_r',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
