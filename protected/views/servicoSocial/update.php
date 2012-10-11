<?php
/* @var $this ServicoSocialController */
/* @var $model ServicoSocial */

$this->breadcrumbs=array(
	'Serviço Social'=>array('index'),
	$model->pacienteR->nome=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Inserir Serviço Social', 'url'=>array('create')),
	array('label'=>'Visualizar Serviço Social', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Serviço Social', 'url'=>array('admin')),
);
?>

<style>
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.esquerda{float:left;}
</style>


<div>
	<div class='alinhamento'><h1>Editar dados de Serviço Social de <?php echo $model->pacienteR->nome; ?></h1></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div><br/><br/><br/>

<?php echo $this->renderPartial('_form', array(
		'model'=>$model,
		'modelServicoSocialIrmao'=>$modelServicoSocialIrmao,'validatedIrmaos'=>$validatedIrmaos,
		'modelServicoSocialResidentes'=>$modelServicoSocialResidentes,'validatedIrmaos'=>$validatedResidentes
		)
	); ?>