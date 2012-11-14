<?php
/* @var $this AgendaTriagemController */
/* @var $model AgendaTriagem */

$this->breadcrumbs=array(
	'Agenda Triagems'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar AgendaTriagem', 'url'=>array('admin')),
);
?>

<h1>Agendar Triagens</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>