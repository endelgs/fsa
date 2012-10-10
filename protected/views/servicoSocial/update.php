<?php
/* @var $this ServicoSocialController */
/* @var $model ServicoSocial */

$this->breadcrumbs=array(
	'Servico Socials'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir ServicoSocial', 'url'=>array('create')),
	array('label'=>'Visualizar ServicoSocial', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar ServicoSocial', 'url'=>array('admin')),
);
?>

<h1>Editar ServicoSocial <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>