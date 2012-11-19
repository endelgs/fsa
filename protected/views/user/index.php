<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuários',
);

$this->menu=array(
	array('label'=>'Inserir Usuário', 'url'=>array('create')),
	array('label'=>'Gerenciar Usuário', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
