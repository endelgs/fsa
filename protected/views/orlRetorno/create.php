<?php
/* @var $this OrlRetornoController */
/* @var $model OrlRetorno */

$this->breadcrumbs=array(
	'Orl Retornos'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar OrlRetorno', 'url'=>array('admin')),
);
?>

<h1>Inserir OrlRetorno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>