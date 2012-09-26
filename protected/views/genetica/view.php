<?php
/* @var $this GeneticaController */
/* @var $model Genetica */

$this->breadcrumbs=array(
	'Geneticas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inserir Genética', 'url'=>array('create')),
	array('label'=>'Editar Genética', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover Genética', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que quer remover este? Genetica')),
	array('label'=>'Gerenciar Genética', 'url'=>array('admin')),
);
?>

<h1>Visualizar Genética #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'genetica',
		'hipotese_diagnostica',
		'conduta',
		'alteracoes_observadas',
		'homozigoto_normal',
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
		array('label'=>'Paciente', 'value'=>$model->pacienteR->nome),
	),
)); ?>