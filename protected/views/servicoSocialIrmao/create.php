<?php
/* @var $this ServicoSocialIrmaoController */
/* @var $model ServicoSocialIrmao */

$this->breadcrumbs=array(
	'Servico Social Irmaos'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar ServicoSocialIrmao', 'url'=>array('admin')),
);
?>

<h1>Inserir ServicoSocialIrmao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>