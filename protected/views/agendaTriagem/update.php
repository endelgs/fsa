<?php
/* @var $this AgendaTriagemController */
/* @var $model AgendaTriagem */

$this->breadcrumbs=array(
	'Agenda Triagems'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir AgendaTriagem', 'url'=>array('create')),
	array('label'=>'Visualizar AgendaTriagem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar AgendaTriagem', 'url'=>array('admin')),
);
?>

<h1>Editar AgendaTriagem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>