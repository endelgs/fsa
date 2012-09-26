<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inserir Paciente', 'url'=>array('create')),
	array('label'=>'Editar Paciente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover Paciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que quer remover este? Paciente')),
	array('label'=>'Gerenciar Paciente', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'hc',
		'nome_mae',
		'hc_mae',
		'data_nascimento',
		'sexo',
		'endereco',
		'cidade',
		'telefone_fixo',
		'telefone_movel',
		'telefone_trabalho',
	),
)); ?>

<?php
$modelTriagem = Triagem::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
$modelGenetica = Genetica::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));

$aTabs=array();
if($modelTriagem->id)$aTabs['Triagem']=$this->renderPartial('../triagem/view', array('model'=>$modelTriagem),true);
if($modelGenetica->id)$aTabs['Genética']=$this->renderPartial('../genetica/view', array('model'=>$modelGenetica),true);

$this->widget('zii.widgets.jui.CJuiTabs', array(
	'tabs' => $aTabs
)); ?>
