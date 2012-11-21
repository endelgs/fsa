<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$model->nome_completo,
);
?>

<h1>Visualizar Usuário #<?php echo $model->nome_completo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome_completo',
		'username',
		'password',
		'email',
		'roles',
	),
)); ?>