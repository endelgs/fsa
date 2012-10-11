<?php
/* @var $this ServicoSocialResidentesController */
/* @var $data ServicoSocialResidentes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idade')); ?>:</b>
	<?php echo CHtml::encode($data->idade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentesco')); ?>:</b>
	<?php echo CHtml::encode($data->parentesco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profissao')); ?>:</b>
	<?php echo CHtml::encode($data->profissao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salario')); ?>:</b>
	<?php echo CHtml::encode($data->salario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servico_social_r')); ?>:</b>
	<?php echo CHtml::encode($data->servico_social_r); ?>
	<br />


</div>