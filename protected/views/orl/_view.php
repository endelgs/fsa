<?php
/* @var $this OrlController */
/* @var $data Orl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnostico')); ?>:</b>
	<?php echo CHtml::encode($data->diagnostico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qp')); ?>:</b>
	<?php echo CHtml::encode($data->qp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hpma')); ?>:</b>
	<?php echo CHtml::encode($data->hpma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interrogatorio_complementar')); ?>:</b>
	<?php echo CHtml::encode($data->interrogatorio_complementar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antecedentes_pessoais')); ?>:</b>
	<?php echo CHtml::encode($data->antecedentes_pessoais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exame_orl')); ?>:</b>
	<?php echo CHtml::encode($data->exame_orl); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hd')); ?>:</b>
	<?php echo CHtml::encode($data->hd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exames_complementares_hd')); ?>:</b>
	<?php echo CHtml::encode($data->exames_complementares_hd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conduta')); ?>:</b>
	<?php echo CHtml::encode($data->conduta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>