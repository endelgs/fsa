<?php
/* @var $this AgendaProteseController */
/* @var $model AgendaProtese */

$this->breadcrumbs=array(
	'Agenda Prótese'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar AgendaProtese', 'url'=>array('admin')),
);
?>

<h1>Agendar Prótese</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>