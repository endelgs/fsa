<?php
/* @var $this ProteseAnexoController */
/* @var $model ProteseAnexo */

$this->breadcrumbs=array(
	'Anexos de Prótese'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar ProteseAnexo', 'url'=>array('admin')),
);
?>

<h1>Cadastrar dados de Anexo de Prótese</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>