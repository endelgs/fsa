<?php
/* @var $this ServicoSocialController */
/* @var $model ServicoSocial */

$this->breadcrumbs=array(
	'Serviço Social'=>array('index'),
	'Cadastrar dados de serviço social',
);

?>

<h1>Cadastrar dados de serviço social</h1>

<?php echo $this->renderPartial('_form', array(
		'model'=>$model,
		'modelServicoSocialIrmao'=>$modelServicoSocialIrmao,
		'validatedIrmaos'=>$validatedIrmaos,
		'modelServicoSocialResidentes'=>$modelServicoSocialResidentes,
		'validatedIrmaos'=>$validatedResidentes
	)
); ?>