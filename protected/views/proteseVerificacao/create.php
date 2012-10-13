<?php
/* @var $this ProteseVerificacaoController */
/* @var $model ProteseVerificacao */

$this->breadcrumbs=array(
	'Verificação de Prótese'=>array('index'),
	'Inserir',
);

?>

<h1>Cadastrar dados de Verificação de Prótese</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>