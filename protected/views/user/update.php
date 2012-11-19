<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$model->nome_completo=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir Usuário', 'url'=>array('create')),
	array('label'=>'Visualizar Usuário', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Usuário', 'url'=>array('admin')),
);
?>

<h1>Editar Usuário <?php echo $model->nome_completo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>