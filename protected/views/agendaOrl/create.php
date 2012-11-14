<?php
/* @var $this AgendaOrlController */
/* @var $model AgendaOrl */

$this->breadcrumbs=array(
	'Agenda Orls'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar AgendaOrl', 'url'=>array('admin')),
);
?>

<h1>Agendar ORLs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>