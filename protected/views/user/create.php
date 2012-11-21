<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuários'=>array('index'),
	'Inserir',
);

?>

<h1>Inserir Usuário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>