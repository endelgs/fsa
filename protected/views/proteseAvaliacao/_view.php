<?php
/* @var $this ProteseAvaliacaoController */
/* @var $data ProteseAvaliacao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nna_clique_od')); ?>:</b>
	<?php echo CHtml::encode($data->nna_clique_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nna_500_od')); ?>:</b>
	<?php echo CHtml::encode($data->nna_500_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nna_1000_od')); ?>:</b>
	<?php echo CHtml::encode($data->nna_1000_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nna_cliquer_oe')); ?>:</b>
	<?php echo CHtml::encode($data->nna_cliquer_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nna_500_oe')); ?>:</b>
	<?php echo CHtml::encode($data->nna_500_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nna_1000_oe')); ?>:</b>
	<?php echo CHtml::encode($data->nna_1000_oe); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('imitanciometria')); ?>:</b>
	<?php echo CHtml::encode($data->imitanciometria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otoscopia')); ?>:</b>
	<?php echo CHtml::encode($data->otoscopia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pressao_od')); ?>:</b>
	<?php echo CHtml::encode($data->pressao_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complacencia_od')); ?>:</b>
	<?php echo CHtml::encode($data->complacencia_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_curva_od')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_curva_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pressao_oe')); ?>:</b>
	<?php echo CHtml::encode($data->pressao_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complacencia_oe')); ?>:</b>
	<?php echo CHtml::encode($data->complacencia_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_curva_oe')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_curva_oe); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_250_od')); ?>:</b>
	<?php echo CHtml::encode($data->recd_250_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_500_od')); ?>:</b>
	<?php echo CHtml::encode($data->recd_500_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_1000_od')); ?>:</b>
	<?php echo CHtml::encode($data->recd_1000_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_2000_od')); ?>:</b>
	<?php echo CHtml::encode($data->recd_2000_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_3000_od')); ?>:</b>
	<?php echo CHtml::encode($data->recd_3000_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_4000_od')); ?>:</b>
	<?php echo CHtml::encode($data->recd_4000_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_6000_od')); ?>:</b>
	<?php echo CHtml::encode($data->recd_6000_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_8000_od')); ?>:</b>
	<?php echo CHtml::encode($data->recd_8000_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_250_oe')); ?>:</b>
	<?php echo CHtml::encode($data->recd_250_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_500_oe')); ?>:</b>
	<?php echo CHtml::encode($data->recd_500_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_1000_oe')); ?>:</b>
	<?php echo CHtml::encode($data->recd_1000_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_2000_oe')); ?>:</b>
	<?php echo CHtml::encode($data->recd_2000_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_3000_oe')); ?>:</b>
	<?php echo CHtml::encode($data->recd_3000_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_4000_oe')); ?>:</b>
	<?php echo CHtml::encode($data->recd_4000_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_6000_oe')); ?>:</b>
	<?php echo CHtml::encode($data->recd_6000_oe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recd_8000_oe')); ?>:</b>
	<?php echo CHtml::encode($data->recd_8000_oe); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('laudo_audiologico')); ?>:</b>
	<?php echo CHtml::encode($data->laudo_audiologico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>