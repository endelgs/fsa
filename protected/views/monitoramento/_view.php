<?php
/* @var $this MonitoramentoController */
/* @var $data Monitoramento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guizo')); ?>:</b>
	<?php echo CHtml::encode($data->guizo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sino')); ?>:</b>
	<?php echo CHtml::encode($data->sino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agogo')); ?>:</b>
	<?php echo CHtml::encode($data->agogo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reacao_voz')); ?>:</b>
	<?php echo CHtml::encode($data->reacao_voz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_500')); ?>:</b>
	<?php echo CHtml::encode($data->od_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_1000')); ?>:</b>
	<?php echo CHtml::encode($data->od_1000); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('od_2000')); ?>:</b>
	<?php echo CHtml::encode($data->od_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_4000')); ?>:</b>
	<?php echo CHtml::encode($data->od_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_1000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_2000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_3000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_4000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_complacencia')); ?>:</b>
	<?php echo CHtml::encode($data->od_complacencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_pressao')); ?>:</b>
	<?php echo CHtml::encode($data->od_pressao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_volume')); ?>:</b>
	<?php echo CHtml::encode($data->od_volume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_gradiente')); ?>:</b>
	<?php echo CHtml::encode($data->od_gradiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_curva_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->od_curva_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_complacencia')); ?>:</b>
	<?php echo CHtml::encode($data->oe_complacencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_pressao')); ?>:</b>
	<?php echo CHtml::encode($data->oe_pressao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_volume')); ?>:</b>
	<?php echo CHtml::encode($data->oe_volume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_gradiente')); ?>:</b>
	<?php echo CHtml::encode($data->oe_gradiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_curva_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->oe_curva_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('da_tchau')); ?>:</b>
	<?php echo CHtml::encode($data->da_tchau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joga_beijo')); ?>:</b>
	<?php echo CHtml::encode($data->joga_beijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bate_palma')); ?>:</b>
	<?php echo CHtml::encode($data->bate_palma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cade_chupeta')); ?>:</b>
	<?php echo CHtml::encode($data->cade_chupeta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cade_mamae')); ?>:</b>
	<?php echo CHtml::encode($data->cade_mamae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cade_sapato')); ?>:</b>
	<?php echo CHtml::encode($data->cade_sapato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cade_cabelo')); ?>:</b>
	<?php echo CHtml::encode($data->cade_cabelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cade_mao')); ?>:</b>
	<?php echo CHtml::encode($data->cade_mao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cade_pe')); ?>:</b>
	<?php echo CHtml::encode($data->cade_pe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reipsi_500_od')); ?>:</b>
	<?php echo CHtml::encode($data->reipsi_500_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reipsi_1k_od')); ?>:</b>
	<?php echo CHtml::encode($data->reipsi_1k_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reipsi_2k_od')); ?>:</b>
	<?php echo CHtml::encode($data->reipsi_2k_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reipsi_4k_od')); ?>:</b>
	<?php echo CHtml::encode($data->reipsi_4k_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reipsi_500_oe')); ?>:</b>
	<?php echo CHtml::encode($data->reipsi_500_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reipsi_1k_oe')); ?>:</b>
	<?php echo CHtml::encode($data->reipsi_1k_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reipsi_2k_oe')); ?>:</b>
	<?php echo CHtml::encode($data->reipsi_2k_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reipsi_4k_oe')); ?>:</b>
	<?php echo CHtml::encode($data->reipsi_4k_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desenvolvimento_motor')); ?>:</b>
	<?php echo CHtml::encode($data->desenvolvimento_motor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desenvolvimento_auditivo')); ?>:</b>
	<?php echo CHtml::encode($data->desenvolvimento_auditivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desenvolvimento_linguagem')); ?>:</b>
	<?php echo CHtml::encode($data->desenvolvimento_linguagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>