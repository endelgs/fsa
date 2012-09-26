<?php
/* @var $this PacienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pacientes',
);

$this->menu=array(
	array('label'=>'Inserir Paciente', 'url'=>array('create')),
	array('label'=>'Gerenciar Paciente', 'url'=>array('admin')),
);
?>

<h1>Pacientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
