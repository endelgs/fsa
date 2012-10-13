<?php
/* @var $this ProteseAnexoController */
/* @var $model ProteseAnexo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comportamento_vocal'); ?>
		<?php echo $form->textArea($model,'comportamento_vocal',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primeiras_vocalizacoes'); ?>
		<?php echo $form->textArea($model,'primeiras_vocalizacoes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esqueceu_dispositivo'); ?>
		<?php echo $form->textArea($model,'esqueceu_dispositivo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primeiro_teste_dispositivo'); ?>
		<?php echo $form->textField($model,'primeiro_teste_dispositivo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'silabas_articuladas'); ?>
		<?php echo $form->textArea($model,'silabas_articuladas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'crianca_conversa'); ?>
		<?php echo $form->textArea($model,'crianca_conversa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipos_sons_brincadeira'); ?>
		<?php echo $form->textArea($model,'tipos_sons_brincadeira',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emite_sons_exemplo'); ?>
		<?php echo $form->textArea($model,'emite_sons_exemplo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emite_sons'); ?>
		<?php echo $form->textField($model,'emite_sons',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta_primeira_chamada'); ?>
		<?php echo $form->textArea($model,'resposta_primeira_chamada',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta_espontanea'); ?>
		<?php echo $form->textField($model,'resposta_espontanea',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta_chamada_ruido'); ?>
		<?php echo $form->textArea($model,'resposta_chamada_ruido',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resposta_espontanea_ruido'); ?>
		<?php echo $form->textField($model,'resposta_espontanea_ruido',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sons_ambientais'); ?>
		<?php echo $form->textArea($model,'sons_ambientais',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'atencao_espontanea_sons_ambiente'); ?>
		<?php echo $form->textField($model,'atencao_espontanea_sons_ambiente',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curiosidade_novos_sons'); ?>
		<?php echo $form->textArea($model,'curiosidade_novos_sons',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'atencao_espontanea_sinais_auditivos'); ?>
		<?php echo $form->textField($model,'atencao_espontanea_sinais_auditivos',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reconhece_sinais_auditivos'); ?>
		<?php echo $form->textArea($model,'reconhece_sinais_auditivos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'atencao_espontanea_sinais_auditivos_diariamente'); ?>
		<?php echo $form->textField($model,'atencao_espontanea_sinais_auditivos_diariamente',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diferenciar_vozes'); ?>
		<?php echo $form->textArea($model,'diferenciar_vozes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'habilidade_discriminar_dois_falantes'); ?>
		<?php echo $form->textField($model,'habilidade_discriminar_dois_falantes',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reconhece_fala_sons_nao_verbais'); ?>
		<?php echo $form->textArea($model,'reconhece_fala_sons_nao_verbais',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reconhece_estimulos_fala_audicao'); ?>
		<?php echo $form->textField($model,'reconhece_estimulos_fala_audicao',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emocao_voz_pessoa'); ?>
		<?php echo $form->textArea($model,'emocao_voz_pessoa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'associa_entonacao'); ?>
		<?php echo $form->textField($model,'associa_entonacao',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paciente_r'); ?>
		<?php echo $form->textField($model,'paciente_r'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Procurar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->