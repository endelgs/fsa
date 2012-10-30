<?php
/* @var $this DiagnosticoController */
/* @var $data Diagnostico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consanguinidade')); ?>:</b>
	<?php echo CHtml::encode($data->consanguinidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perda_auditiva_familia')); ?>:</b>
	<?php echo CHtml::encode($data->perda_auditiva_familia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preocupacao_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->preocupacao_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alimentacao_neonato')); ?>:</b>
	<?php echo CHtml::encode($data->alimentacao_neonato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posicao_alimentacao')); ?>:</b>
	<?php echo CHtml::encode($data->posicao_alimentacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refluxo')); ?>:</b>
	<?php echo CHtml::encode($data->refluxo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dor_ouvido')); ?>:</b>
	<?php echo CHtml::encode($data->dor_ouvido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barulho_alto_acorda')); ?>:</b>
	<?php echo CHtml::encode($data->barulho_alto_acorda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chora_ruido_alto')); ?>:</b>
	<?php echo CHtml::encode($data->chora_ruido_alto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('procurar_som_fora_visao')); ?>:</b>
	<?php echo CHtml::encode($data->procurar_som_fora_visao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atento_voz_materna')); ?>:</b>
	<?php echo CHtml::encode($data->atento_voz_materna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reinternado')); ?>:</b>
	<?php echo CHtml::encode($data->reinternado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('susto_ruido_alto')); ?>:</b>
	<?php echo CHtml::encode($data->susto_ruido_alto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pesquisa_integridade')); ?>:</b>
	<?php echo CHtml::encode($data->pesquisa_integridade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_onda_1')); ?>:</b>
	<?php echo CHtml::encode($data->od_onda_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_onda_3')); ?>:</b>
	<?php echo CHtml::encode($data->od_onda_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_onda_5')); ?>:</b>
	<?php echo CHtml::encode($data->od_onda_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_onda_1')); ?>:</b>
	<?php echo CHtml::encode($data->oe_onda_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_onda_3')); ?>:</b>
	<?php echo CHtml::encode($data->oe_onda_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_onda_5')); ?>:</b>
	<?php echo CHtml::encode($data->oe_onda_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_interlatencia_1_3')); ?>:</b>
	<?php echo CHtml::encode($data->od_interlatencia_1_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_interlatencia_3_5')); ?>:</b>
	<?php echo CHtml::encode($data->od_interlatencia_3_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_interlatencia_1_5')); ?>:</b>
	<?php echo CHtml::encode($data->od_interlatencia_1_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_interlatencia_1_3')); ?>:</b>
	<?php echo CHtml::encode($data->oe_interlatencia_1_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_interlatencia_3_5')); ?>:</b>
	<?php echo CHtml::encode($data->oe_interlatencia_3_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_interlatencia_1_5')); ?>:</b>
	<?php echo CHtml::encode($data->oe_interlatencia_1_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_100')); ?>:</b>
	<?php echo CHtml::encode($data->od_100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_90')); ?>:</b>
	<?php echo CHtml::encode($data->od_90); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_80')); ?>:</b>
	<?php echo CHtml::encode($data->od_80); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_70')); ?>:</b>
	<?php echo CHtml::encode($data->od_70); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_60')); ?>:</b>
	<?php echo CHtml::encode($data->od_60); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_50')); ?>:</b>
	<?php echo CHtml::encode($data->od_50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_40')); ?>:</b>
	<?php echo CHtml::encode($data->od_40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_30')); ?>:</b>
	<?php echo CHtml::encode($data->od_30); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_20')); ?>:</b>
	<?php echo CHtml::encode($data->od_20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_100')); ?>:</b>
	<?php echo CHtml::encode($data->oe_100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_90')); ?>:</b>
	<?php echo CHtml::encode($data->oe_90); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_80')); ?>:</b>
	<?php echo CHtml::encode($data->oe_80); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_70')); ?>:</b>
	<?php echo CHtml::encode($data->oe_70); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_60')); ?>:</b>
	<?php echo CHtml::encode($data->oe_60); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_50')); ?>:</b>
	<?php echo CHtml::encode($data->oe_50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_40')); ?>:</b>
	<?php echo CHtml::encode($data->oe_40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_30')); ?>:</b>
	<?php echo CHtml::encode($data->oe_30); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_20')); ?>:</b>
	<?php echo CHtml::encode($data->oe_20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conclusao_limiar_eletrofisiologico')); ?>:</b>
	<?php echo CHtml::encode($data->conclusao_limiar_eletrofisiologico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interpico')); ?>:</b>
	<?php echo CHtml::encode($data->interpico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latencia')); ?>:</b>
	<?php echo CHtml::encode($data->latencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('limiar_eletrofisiologico')); ?>:</b>
	<?php echo CHtml::encode($data->limiar_eletrofisiologico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_1')); ?>:</b>
	<?php echo CHtml::encode($data->od_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_1_4')); ?>:</b>
	<?php echo CHtml::encode($data->od_1_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_2_0')); ?>:</b>
	<?php echo CHtml::encode($data->od_2_0); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_2_8')); ?>:</b>
	<?php echo CHtml::encode($data->od_2_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_4')); ?>:</b>
	<?php echo CHtml::encode($data->od_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_1')); ?>:</b>
	<?php echo CHtml::encode($data->oe_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_1_4')); ?>:</b>
	<?php echo CHtml::encode($data->oe_1_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_2_0')); ?>:</b>
	<?php echo CHtml::encode($data->oe_2_0); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_2_8')); ?>:</b>
	<?php echo CHtml::encode($data->oe_2_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_4')); ?>:</b>
	<?php echo CHtml::encode($data->oe_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_repro')); ?>:</b>
	<?php echo CHtml::encode($data->od_repro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_estab')); ?>:</b>
	<?php echo CHtml::encode($data->od_estab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_repro')); ?>:</b>
	<?php echo CHtml::encode($data->oe_repro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_estab')); ?>:</b>
	<?php echo CHtml::encode($data->oe_estab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conclusao_transiente')); ?>:</b>
	<?php echo CHtml::encode($data->conclusao_transiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_distorcao_1')); ?>:</b>
	<?php echo CHtml::encode($data->od_distorcao_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_distorcao_1_4')); ?>:</b>
	<?php echo CHtml::encode($data->od_distorcao_1_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_distorcao_2_0')); ?>:</b>
	<?php echo CHtml::encode($data->od_distorcao_2_0); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_distorcao_2_8')); ?>:</b>
	<?php echo CHtml::encode($data->od_distorcao_2_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_distorcao_4')); ?>:</b>
	<?php echo CHtml::encode($data->od_distorcao_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_distorcao_1')); ?>:</b>
	<?php echo CHtml::encode($data->oe_distorcao_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_distorcao_1_4')); ?>:</b>
	<?php echo CHtml::encode($data->oe_distorcao_1_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_distorcao_2_0')); ?>:</b>
	<?php echo CHtml::encode($data->oe_distorcao_2_0); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_distorcao_2_8')); ?>:</b>
	<?php echo CHtml::encode($data->oe_distorcao_2_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_distorcao_4')); ?>:</b>
	<?php echo CHtml::encode($data->oe_distorcao_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_distorcao_repro')); ?>:</b>
	<?php echo CHtml::encode($data->od_distorcao_repro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_distorcao_estab')); ?>:</b>
	<?php echo CHtml::encode($data->od_distorcao_estab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_distorcao_repro')); ?>:</b>
	<?php echo CHtml::encode($data->oe_distorcao_repro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_distorcao_estab')); ?>:</b>
	<?php echo CHtml::encode($data->oe_distorcao_estab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distorcao_conclusao_1')); ?>:</b>
	<?php echo CHtml::encode($data->distorcao_conclusao_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distorcao_conclusao_1_4')); ?>:</b>
	<?php echo CHtml::encode($data->distorcao_conclusao_1_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distorcao_conclusao_2_0')); ?>:</b>
	<?php echo CHtml::encode($data->distorcao_conclusao_2_0); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distorcao_conclusao_2_8')); ?>:</b>
	<?php echo CHtml::encode($data->distorcao_conclusao_2_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distorcao_conclusao_4')); ?>:</b>
	<?php echo CHtml::encode($data->distorcao_conclusao_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_pressao')); ?>:</b>
	<?php echo CHtml::encode($data->od_pressao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_complacencia')); ?>:</b>
	<?php echo CHtml::encode($data->od_complacencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_tipo_curva')); ?>:</b>
	<?php echo CHtml::encode($data->od_tipo_curva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_pressao')); ?>:</b>
	<?php echo CHtml::encode($data->oe_pressao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_complacencia')); ?>:</b>
	<?php echo CHtml::encode($data->oe_complacencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_tipo_curva')); ?>:</b>
	<?php echo CHtml::encode($data->oe_tipo_curva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_reflexo_500')); ?>:</b>
	<?php echo CHtml::encode($data->od_reflexo_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_reflexo_1000')); ?>:</b>
	<?php echo CHtml::encode($data->od_reflexo_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_reflexo_2000')); ?>:</b>
	<?php echo CHtml::encode($data->od_reflexo_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_reflexo_4000')); ?>:</b>
	<?php echo CHtml::encode($data->od_reflexo_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_reflexo_500')); ?>:</b>
	<?php echo CHtml::encode($data->oe_reflexo_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_reflexo_1000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_reflexo_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_reflexo_2000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_reflexo_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_reflexo_4000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_reflexo_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guizo_lateral')); ?>:</b>
	<?php echo CHtml::encode($data->guizo_lateral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guizo__cima')); ?>:</b>
	<?php echo CHtml::encode($data->guizo__cima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guizo_baixo')); ?>:</b>
	<?php echo CHtml::encode($data->guizo_baixo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sino_lateral')); ?>:</b>
	<?php echo CHtml::encode($data->sino_lateral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sino_cima')); ?>:</b>
	<?php echo CHtml::encode($data->sino_cima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sino_baixo')); ?>:</b>
	<?php echo CHtml::encode($data->sino_baixo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reflexo_cocleo_palpebral')); ?>:</b>
	<?php echo CHtml::encode($data->reflexo_cocleo_palpebral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_nmr_500')); ?>:</b>
	<?php echo CHtml::encode($data->od_nmr_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_nmr_1000')); ?>:</b>
	<?php echo CHtml::encode($data->od_nmr_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_nmr_2000')); ?>:</b>
	<?php echo CHtml::encode($data->od_nmr_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_nmr_3000')); ?>:</b>
	<?php echo CHtml::encode($data->od_nmr_3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_nmr_4000')); ?>:</b>
	<?php echo CHtml::encode($data->od_nmr_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_nmr_500')); ?>:</b>
	<?php echo CHtml::encode($data->oe_nmr_500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_nmr_1000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_nmr_1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_nmr_2000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_nmr_2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_nmr_3000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_nmr_3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oe_nmr_4000')); ?>:</b>
	<?php echo CHtml::encode($data->oe_nmr_4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conclusao_reflexo')); ?>:</b>
	<?php echo CHtml::encode($data->conclusao_reflexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conduta_reflexo')); ?>:</b>
	<?php echo CHtml::encode($data->conduta_reflexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laste_update')); ?>:</b>
	<?php echo CHtml::encode($data->laste_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>