<?php
/* @var $this TriagemController */
/* @var $model Triagem */

$this->breadcrumbs=array(
	'Triagem'=>array('admin'),
	$model->pacienteR->nome=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir Triagem', 'url'=>array('create')),
	array('label'=>'Visualizar Triagem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Triagem', 'url'=>array('admin')),
);
?>

<h1>Editar dados de triagem de <?php echo $model->pacienteR->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>