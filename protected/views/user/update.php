<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	$model->nome_completo=>array('view','id'=>$model->id),
	'Editar',
);
?>

<h1>Editar Usuário <?php echo $model->nome_completo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>