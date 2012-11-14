<?php
/* @var $this AgendaDiagnosticoController */
/* @var $model AgendaDiagnostico */

$this->breadcrumbs=array(
	'Agenda Diagnosticos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir AgendaDiagnostico', 'url'=>array('create')),
	array('label'=>'Visualizar AgendaDiagnostico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar AgendaDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Editar AgendaDiagnostico <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>