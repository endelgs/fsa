<?php
/* @var $this TriagemController */
/* @var $model Triagem */

$this->breadcrumbs=array(
	'Triagems'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inserir Triagem', 'url'=>array('create')),
	array('label'=>'Editar Triagem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover Triagem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que quer remover este? Triagem')),
	array('label'=>'Gerenciar Triagem', 'url'=>array('admin')),
);
?>

<h1>Visualizar Triagem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'peso',
		'apgar_1',
		'apgar_5',
		'apgar_10',
		'idade_semanas',
		'idade_dias',
		'metodo_avaliacao',
		'avaliacao_score',
		'termo',
		'crescimento',
		'tipo_exame',
		'resultado',
		'indicadores_risco',
		array('label'=>'Paciente', 'value'=>$model->pacienteR->nome),
	),
));?>