<?php
/* @var $this ProteseValidacaoController */
/* @var $model ProteseValidacao */

$this->breadcrumbs=array(
	'Validação de Prótese'=>array('index'),
	'Inserir',
);
?>

<h1>Cadastrar dados de Validação de Prótese</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>