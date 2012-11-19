<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$model->nome_completo,
);

$this->menu=array(
	array('label'=>'Inserir Usuário', 'url'=>array('create')),
	array('label'=>'Editar Usuário', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover Usuário', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que quer remover este? User')),
	array('label'=>'Gerenciar Usuário', 'url'=>array('admin')),
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