<?php
/* @var $this AgendaProteseController */
/* @var $data AgendaProtese */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agenda_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->agenda_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_tipo_r')); ?>:</b>
	<?php echo CHtml::encode($data->form_tipo_r); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />


</div>