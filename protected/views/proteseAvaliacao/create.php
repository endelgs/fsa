<?php
/* @var $this ProteseAvaliacaoController */
/* @var $model ProteseAvaliacao */

$this->breadcrumbs=array(
	'Avaliacão de Prótese'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar ProteseAvaliacao', 'url'=>array('admin')),
);
?>

<h1>Cadastrar dados de Avaliação de Prótese</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>