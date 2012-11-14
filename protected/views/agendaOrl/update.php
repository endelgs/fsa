<?php
/* @var $this AgendaOrlController */
/* @var $model AgendaOrl */

$this->breadcrumbs=array(
	'Agenda Orls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir AgendaOrl', 'url'=>array('create')),
	array('label'=>'Visualizar AgendaOrl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar AgendaOrl', 'url'=>array('admin')),
);
?>

<h1>Editar AgendaOrl <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>