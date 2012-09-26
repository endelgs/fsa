<?php
/* @var $this GeneticaController */
/* @var $model Genetica */

$this->breadcrumbs=array(
	'Genética'=>array('admin'),
	$model->pacienteR->nome,
);

?>

<h1>Visualizando Genética de <?php echo $model->pacienteR->nome; ?></h1>

<?php 
    $model->homozigoto_normal=($model->homozigoto_normal == 'true')?'Sim':'Não';
    $model->homozigoto_mutante=($model->homozigoto_mutante == 'true')?'Sim':'Não';
    $model->heterozigoto=($model->heterozigoto == 'true')?'Sim':'Não';
    
    $model->del_gjb6_d13s1830 = ($model->del_gjb6_d13s1830 == 'true')?'Sim':'Não';
    $model->del_gjb6_d13s1854 = ($model->del_gjb6_d13s1854 == 'true')?'Sim':'Não';
    $model->del_3 = ($model->del_3 == 'true')?'Sim':'Não';
    $model->del_4 = ($model->del_4 == 'true')?'Sim':'Não';
    $model->del_5 = ($model->del_5 == 'true')?'Sim':'Não';
    
    $model->a1555g = ($model->a1555g == 'true')?'Sim':'Não';
	$model->c1494t = ($model->c1494t == 'true')?'Sim':'Não';
	$model->a827g = ($model->a827g == 'true')?'Sim':'Não';	
    $model->a7445g = ($model->a7445g == 'true')?'Sim':'Não';
    $model->a7444g = ($model->a7444g == 'true')?'Sim':'Não';
    $model->a3243g = ($model->a3243g == 'true')?'Sim':'Não';
		
    $model->gjb2 = ($model->gjb2 == 'true')?'Sim':'Não';
    $model->gjb3 = ($model->gjb3 == 'true')?'Sim':'Não';
    $model->gjb6 = ($model->gjb6 == 'true')?'Sim':'Não';
    $model->slc26a4 = ($model->slc26a4 == 'true')?'Sim':'Não';
    $model->otof = ($model->otof == 'true')?'Sim':'Não';
    $model->mtrnr1 = ($model->mtrnr1 == 'true')?'Sim':'Não';
    $model->outros_genes = ($model->outros_genes == 'true')?'Sim':'Não';
    
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
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
		
	),
)); ?>