<?php
/* @var $this ServicoSocialIrmaoController */
/* @var $model ServicoSocialIrmao */

$this->breadcrumbs=array(
	'Servico Social Irmaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocialIrmao', 'url'=>array('create')),
	array('label'=>'Visualizar ServicoSocialIrmao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar ServicoSocialIrmao', 'url'=>array('admin')),
);
?>

<h1>Editar ServicoSocialIrmao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>