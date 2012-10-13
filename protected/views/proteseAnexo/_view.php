<?php
/* @var $this ProteseAnexoController */
/* @var $data ProteseAnexo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comportamento_vocal')); ?>:</b>
	<?php echo CHtml::encode($data->comportamento_vocal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primeiras_vocalizacoes')); ?>:</b>
	<?php echo CHtml::encode($data->primeiras_vocalizacoes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esqueceu_dispositivo')); ?>:</b>
	<?php echo CHtml::encode($data->esqueceu_dispositivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primeiro_teste_dispositivo')); ?>:</b>
	<?php echo CHtml::encode($data->primeiro_teste_dispositivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('silabas_articuladas')); ?>:</b>
	<?php echo CHtml::encode($data->silabas_articuladas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('crianca_conversa')); ?>:</b>
	<?php echo CHtml::encode($data->crianca_conversa); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipos_sons_brincadeira')); ?>:</b>
	<?php echo CHtml::encode($data->tipos_sons_brincadeira); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emite_sons_exemplo')); ?>:</b>
	<?php echo CHtml::encode($data->emite_sons_exemplo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emite_sons')); ?>:</b>
	<?php echo CHtml::encode($data->emite_sons); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_primeira_chamada')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_primeira_chamada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_espontanea')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_espontanea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_chamada_ruido')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_chamada_ruido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resposta_espontanea_ruido')); ?>:</b>
	<?php echo CHtml::encode($data->resposta_espontanea_ruido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sons_ambientais')); ?>:</b>
	<?php echo CHtml::encode($data->sons_ambientais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atencao_espontanea_sons_ambiente')); ?>:</b>
	<?php echo CHtml::encode($data->atencao_espontanea_sons_ambiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curiosidade_novos_sons')); ?>:</b>
	<?php echo CHtml::encode($data->curiosidade_novos_sons); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atencao_espontanea_sinais_auditivos')); ?>:</b>
	<?php echo CHtml::encode($data->atencao_espontanea_sinais_auditivos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reconhece_sinais_auditivos')); ?>:</b>
	<?php echo CHtml::encode($data->reconhece_sinais_auditivos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atencao_espontanea_sinais_auditivos_diariamente')); ?>:</b>
	<?php echo CHtml::encode($data->atencao_espontanea_sinais_auditivos_diariamente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diferenciar_vozes')); ?>:</b>
	<?php echo CHtml::encode($data->diferenciar_vozes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('habilidade_discriminar_dois_falantes')); ?>:</b>
	<?php echo CHtml::encode($data->habilidade_discriminar_dois_falantes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reconhece_fala_sons_nao_verbais')); ?>:</b>
	<?php echo CHtml::encode($data->reconhece_fala_sons_nao_verbais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reconhece_estimulos_fala_audicao')); ?>:</b>
	<?php echo CHtml::encode($data->reconhece_estimulos_fala_audicao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emocao_voz_pessoa')); ?>:</b>
	<?php echo CHtml::encode($data->emocao_voz_pessoa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('associa_entonacao')); ?>:</b>
	<?php echo CHtml::encode($data->associa_entonacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>