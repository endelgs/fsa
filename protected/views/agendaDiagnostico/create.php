<?php
/* @var $this AgendaDiagnosticoController */
/* @var $model AgendaDiagnostico */

$this->breadcrumbs=array(
	'Agenda Diagnosticos'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar AgendaDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Agendar Diagnósticos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>