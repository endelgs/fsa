<?php
/* @var $this PacienteController */
/* @var $data Paciente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hc')); ?>:</b>
	<?php echo CHtml::encode($data->hc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_mae')); ?>:</b>
	<?php echo CHtml::encode($data->nome_mae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hc_mae')); ?>:</b>
	<?php echo CHtml::encode($data->hc_mae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_nascimento')); ?>:</b>
	<?php echo CHtml::encode($data->data_nascimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_fixo')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_fixo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_movel')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_movel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_trabalho')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_trabalho); ?>
	<br />

	*/ ?>

</div>