<?php
/* @var $this AgendaProteseController */
/* @var $model AgendaProtese */

$this->breadcrumbs=array(
	'Agenda Proteses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir AgendaProtese', 'url'=>array('create')),
	array('label'=>'Visualizar AgendaProtese', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar AgendaProtese', 'url'=>array('admin')),
);
?>

<h1>Editar AgendaProtese <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>