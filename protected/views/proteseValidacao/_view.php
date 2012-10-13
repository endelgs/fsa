<?php
/* @var $this ProteseValidacaoController */
/* @var $data ProteseValidacao */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr')); ?>:</b>
	<?php echo CHtml::encode($data->nmr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_500_od')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_500_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_1k_od')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_1k_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_2k_od')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_2k_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_4k_od')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_4k_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_intensiade_od')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_intensiade_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_500_oe')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_500_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_1k_oe')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_1k_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_2k_oe')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_2k_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_4k_oe')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_4k_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmr_intensiade_oe')); ?>:</b>
	<?php echo CHtml::encode($data->nmr_intensiade_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reacao_sons')); ?>:</b>
	<?php echo CHtml::encode($data->reacao_sons); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voz_amplificada')); ?>:</b>
	<?php echo CHtml::encode($data->voz_amplificada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sons_ling_s')); ?>:</b>
	<?php echo CHtml::encode($data->sons_ling_s); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sons_ling_ch')); ?>:</b>
	<?php echo CHtml::encode($data->sons_ling_ch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sons_ling_a')); ?>:</b>
	<?php echo CHtml::encode($data->sons_ling_a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sons_ling_i')); ?>:</b>
	<?php echo CHtml::encode($data->sons_ling_i); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sons_ling_u')); ?>:</b>
	<?php echo CHtml::encode($data->sons_ling_u); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sons_ling_m')); ?>:</b>
	<?php echo CHtml::encode($data->sons_ling_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lrf_od')); ?>:</b>
	<?php echo CHtml::encode($data->lrf_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ldv_od')); ?>:</b>
	<?php echo CHtml::encode($data->ldv_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lrf_oe')); ?>:</b>
	<?php echo CHtml::encode($data->lrf_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ldv_oe')); ?>:</b>
	<?php echo CHtml::encode($data->ldv_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guizo_1')); ?>:</b>
	<?php echo CHtml::encode($data->guizo_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guizo_2')); ?>:</b>
	<?php echo CHtml::encode($data->guizo_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reco_reco')); ?>:</b>
	<?php echo CHtml::encode($data->reco_reco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sino')); ?>:</b>
	<?php echo CHtml::encode($data->sino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ganza')); ?>:</b>
	<?php echo CHtml::encode($data->ganza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('black_black')); ?>:</b>
	<?php echo CHtml::encode($data->black_black); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agogo_pequeno')); ?>:</b>
	<?php echo CHtml::encode($data->agogo_pequeno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agogo_grande')); ?>:</b>
	<?php echo CHtml::encode($data->agogo_grande); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prato')); ?>:</b>
	<?php echo CHtml::encode($data->prato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latencia_resposta')); ?>:</b>
	<?php echo CHtml::encode($data->latencia_resposta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>