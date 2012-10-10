<?php
/* @var $this ServicoSocialController */
/* @var $model ServicoSocial */

$this->breadcrumbs=array(
	'Servico Socials'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar ServicoSocial', 'url'=>array('admin')),
);
?>

<h1>Inserir ServicoSocial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>