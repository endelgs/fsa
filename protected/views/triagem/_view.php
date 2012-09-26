<?php
/* @var $this TriagemController */
/* @var $data Triagem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
	<?php echo CHtml::encode($data->peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apgar_1')); ?>:</b>
	<?php echo CHtml::encode($data->apgar_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apgar_5')); ?>:</b>
	<?php echo CHtml::encode($data->apgar_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apgar_10')); ?>:</b>
	<?php echo CHtml::encode($data->apgar_10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idade_semanas')); ?>:</b>
	<?php echo CHtml::encode($data->idade_semanas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idade_dias')); ?>:</b>
	<?php echo CHtml::encode($data->idade_dias); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('metodo_avaliacao')); ?>:</b>
	<?php echo CHtml::encode($data->metodo_avaliacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avaliacao_score')); ?>:</b>
	<?php echo CHtml::encode($data->avaliacao_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('termo')); ?>:</b>
	<?php echo CHtml::encode($data->termo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('crescimento')); ?>:</b>
	<?php echo CHtml::encode($data->crescimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_exame')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_exame); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultado')); ?>:</b>
	<?php echo CHtml::encode($data->resultado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indicadores_risco')); ?>:</b>
	<?php echo CHtml::encode($data->indicadores_risco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>