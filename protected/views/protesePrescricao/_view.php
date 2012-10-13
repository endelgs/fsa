<?php
/* @var $this ProtesePrescricaoController */
/* @var $data ProtesePrescricao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_40_250')); ?>:</b>
	<?php echo CHtml::encode($data->od_40_250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_40_500')); ?>:</b>
	<?php echo CHtml::encode($data->od_40_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_40_1000')); ?>:</b>
	<?php echo CHtml::encode($data->od_40_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_40_2000')); ?>:</b>
	<?php echo CHtml::encode($data->od_40_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_40_3000')); ?>:</b>
	<?php echo CHtml::encode($data->od_40_3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_40_4000')); ?>:</b>
	<?php echo CHtml::encode($data->od_40_4000); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('od_40_6000')); ?>:</b>
	<?php echo CHtml::encode($data->od_40_6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_40_8000')); ?>:</b>
	<?php echo CHtml::encode($data->od_40_8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_60_250')); ?>:</b>
	<?php echo CHtml::encode($data->od_60_250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_60_500')); ?>:</b>
	<?php echo CHtml::encode($data->od_60_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_60_1000')); ?>:</b>
	<?php echo CHtml::encode($data->od_60_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_60_2000')); ?>:</b>
	<?php echo CHtml::encode($data->od_60_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_60_3000')); ?>:</b>
	<?php echo CHtml::encode($data->od_60_3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_60_4000')); ?>:</b>
	<?php echo CHtml::encode($data->od_60_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_60_6000')); ?>:</b>
	<?php echo CHtml::encode($data->od_60_6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_60_8000')); ?>:</b>
	<?php echo CHtml::encode($data->od_60_8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_80_250')); ?>:</b>
	<?php echo CHtml::encode($data->od_80_250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_80_500')); ?>:</b>
	<?php echo CHtml::encode($data->od_80_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_80_1000')); ?>:</b>
	<?php echo CHtml::encode($data->od_80_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_80_2000')); ?>:</b>
	<?php echo CHtml::encode($data->od_80_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_80_3000')); ?>:</b>
	<?php echo CHtml::encode($data->od_80_3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_80_4000')); ?>:</b>
	<?php echo CHtml::encode($data->od_80_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_80_6000')); ?>:</b>
	<?php echo CHtml::encode($data->od_80_6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_80_8000')); ?>:</b>
	<?php echo CHtml::encode($data->od_80_8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_40_250')); ?>:</b>
	<?php echo CHtml::encode($data->oe_40_250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_40_500')); ?>:</b>
	<?php echo CHtml::encode($data->oe_40_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_40_1000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_40_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_40_2000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_40_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_40_3000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_40_3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_40_4000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_40_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_40_6000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_40_6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_40_8000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_40_8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_60_250')); ?>:</b>
	<?php echo CHtml::encode($data->oe_60_250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_60_500')); ?>:</b>
	<?php echo CHtml::encode($data->oe_60_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_60_1000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_60_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_60_2000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_60_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_60_3000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_60_3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_60_4000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_60_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_60_6000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_60_6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_60_8000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_60_8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_80_250')); ?>:</b>
	<?php echo CHtml::encode($data->oe_80_250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_80_500')); ?>:</b>
	<?php echo CHtml::encode($data->oe_80_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_80_1000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_80_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_80_2000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_80_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_80_3000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_80_3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_80_4000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_80_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_80_6000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_80_6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_80_8000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_80_8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material')); ?>:</b>
	<?php echo CHtml::encode($data->material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificacao_acustica')); ?>:</b>
	<?php echo CHtml::encode($data->modificacao_acustica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->od_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_marca')); ?>:</b>
	<?php echo CHtml::encode($data->od_marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_cor')); ?>:</b>
	<?php echo CHtml::encode($data->od_cor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->oe_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_marca')); ?>:</b>
	<?php echo CHtml::encode($data->oe_marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_cor')); ?>:</b>
	<?php echo CHtml::encode($data->oe_cor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>