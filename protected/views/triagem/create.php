<?php
/* @var $this TriagemController */
/* @var $model Triagem */

$this->breadcrumbs=array(
	'Triagems'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar Triagem', 'url'=>array('admin')),
);
?>

<h1>Cadastrar nova triagem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>