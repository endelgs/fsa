<?php
/* @var $this ProteseVerificacaoController */
/* @var $model ProteseVerificacao */

$this->breadcrumbs=array(
	'Protese Verificacaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir ProteseVerificacao', 'url'=>array('create')),
	array('label'=>'Visualizar ProteseVerificacao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar ProteseVerificacao', 'url'=>array('admin')),
);
?>

<h1>Editar ProteseVerificacao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>