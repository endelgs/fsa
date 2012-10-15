<?php
/* @var $this ProtesePrescricaoController */
/* @var $model ProtesePrescricao */

$this->breadcrumbs=array(
	'Prescrição de Prótese'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar ProtesePrescricao', 'url'=>array('admin')),
);
?>

<h1>Cadastrar dados de Prescrição de Prótese</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>